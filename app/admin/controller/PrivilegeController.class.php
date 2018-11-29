<?php
/**
 * Created by PhpStorm.
 * User: LEARNMO
 * Date: 2018/9/14
 * Time: 上午 01:08
 */

namespace admin\controller;


use core\Controller;

class PrivilegeController extends Controller{

     #展示后台登录页
    public function loginShow(){
        $this->display('Privilege/login.html');
    }
    #获取验证码
    public function captcha(){
        $obj = M('CaptchaTool');
        $str = $obj->writeStr();
        @session_start();
        $_SESSION['captchaStr'] = $str;
        $obj->output();
    }
    #处理后台实现登录
    public function login()
    {
        //接收表单数据
        $acc = addslashes(trim($_POST['acc']));//帐号
        $pwd = trim($_POST['pwd']);//密码
        $captcha = trim($_POST['captcha']);//验证码
        $seven = isset($_POST['seven'])?$_POST['seven']:'no';
        //检查数据
        @session_start();
        if( $captcha!=$_SESSION['captchaStr'] ){//当验证码不正确的时候
            echo '验证码错误,请重试';
            $url = C('domain.main') . '/index.php?p=admin&m=privilege&a=loginShow';
            header('Refresh:3; url='.$url);
            exit;
        }
        $pwd = md5($pwd);//没有问题则将密码进行md5加密

        //登陆验证
        $sql = "select * from bg_user where acc='{$acc}' and pwd='{$pwd}' and type=1";
        $user = M('UserModel')->getRow($sql);

        //根据验证的结果进行判断处理
        if( $user && $user['pwd']=== $pwd ){//表示查到了数据，说明登陆成功
            //echo '欢迎光临本系统~~~~~';
            $_SESSION['admin'] = $user;
            if($seven == 'yes'){
                setcookie('user_id',$user['id'],time()+7*24*3600);
            }
            $this->display('index.html');//跳回后台用户管理系统添加页
        }else{//表示没查到数据，说明登陆失败
            echo '您填写的帐号密码有误,或您的权限不够～';
            $url = C('domain.main') . '/index.php?p=admin&m=privilege&a=loginShow';
            header('Refresh:3; url='.$url);
            exit;
        }
    }
    #退出系统
    public function logout(){
        @session_start();
        unset($_SESSION['admin']);
        setcookie('user_id','');
        $url = C('domain.main') . '/index.php?p=admin&m=privilege&a=loginShow';
        header('Refresh:3; url='.$url);
        exit;
    }
}
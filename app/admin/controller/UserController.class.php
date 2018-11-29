<?php
/**
 * Created by PhpStorm.
 * User: LEARNMO
 * Date: 2018/9/13
 * Time: 下午 02:40
 */

namespace admin\controller;


use core\Controller;

class UserController extends Controller{
    //渲染后台界面
    public function adminWhole(){
        //echo 'adminWhole';
        $this->display('index.html');
    }
    #用户添加页面的展示
    public function showUserAdd(){
        $this->display('User/userAdd.html');
    }
    #展示后台用户添加页
    public function userAddHandle(){
        //接收表单数据
        $acc = trim($_POST['acc']);   //账户
        $pwd = trim($_POST['pwd']);   //密码
        $sex = trim($_POST['sex']);   //性别
        $nickname = trim($_POST['nickname']);   //昵称
        $headimg = upFile($_FILES['headimg']);   //用户上传的头像
        $type = trim($_POST['type']);    //用户类型
        $regtime = time();

        if(empty($acc)){
            echo '您还未填写账户';
            $url = C('domain.main').'/index.php?p=admin&m=user&a=showUserAdd';
            header('Refresh:3;url='.$url);
            exit;
        }
        if(empty($pwd)){
            echo '您还未填写密码';
            $url = C('domain.main').'/index.php?p=admin&m=user&a=showUserAdd';
            header('Refresh:3;url='.$url);
            exit;
        }
        $pwd = md5($pwd);
        if(empty($nickname)){
            echo '您还未填写昵称';
            $url = C('domain.main').'/index.php?p=admin&m=user&a=showUserAdd';
            header('Refresh:3;url='.$url);
            exit;
        }
        if(empty($headimg)){
            echo '您还未上传头像';
            $url = C('domain.main').'/index.php?p=admin&m=user&a=showUserAdd';
            header('Refresh:3;url='.$url);
            exit;
        }
        //调用父类模型执行数据(新增)
        $sql = "insert into bg_user (acc,pwd,sex,nickname,headimg,type,regtime)values('{$acc}','{$pwd}','{$sex}','{$nickname}','{$headimg}','{$type}','{$regtime}')";
        $user = M('UserModel')->setData($sql);
        if($user){
            echo '添加用户成功';
        }else{
            echo 'Sorry...添加用户失败';
        }
        $url = C('domain.main').'/index.php?p=admin&m=user&a=showUserAdd';
        header('Refresh:3;url='.$url);
    }
   #展示用户的数据
    public function userList(){
        //计算分页所需的参数
        $nowPage = isset($_GET['page'])?$_GET['page']:1;
        //var_dump($nowPage);
        $numPerPage = 5; //每页的记录数量
        $sql = "select count(*)as num from bg_user where 1";
        $row = M('UserModel')->getRow($sql);
        //var_dump($row['num']);
        $totalPage = (int)ceil($row['num']/$numPerPage);
        //偏移量
        $x = ($nowPage-1)*$numPerPage;
        $sql = "select *from bg_user where 1 order by regtime desc limit {$x},{$numPerPage}";
        $users =  M('UserModel')->getRows($sql);
        $url = C('domain.main').'/index.php?p=admin&m=user&a=userList';
        //echo ((int)$nowPage-1);
        $url2 = $url.'&page='.((int)$nowPage-1);
        $url3 = $url.'&page='.((int)$nowPage+1);
        $pageHtml = pageHtml($totalPage,$url,$nowPage,$url2,$url3);
        //调用后台模型
        //$userModel = M('UserModel');
        //$sql = 'select id,acc,type,regtime from bg_user';
        $firstNum = ($nowPage-1)*$numPerPage+1;
        $this->assign('pageHtml',$pageHtml);

        $this->assign('users',$users);
        $this->assign('firstNum',$firstNum);

        //调用后台模型查询数据
      //  $sql = 'select *from bg_user where 1 order by regtime desc';
      //  $users = M('UserModel')->getRows($sql);
       // $this->assign('users',$users);
        $this->display('User/userList.html');
    }
    #展示用户修改页面
    public function userEdit(){
        $id = $_GET['id'];  //获取用户id
        //调用模型，根据id查找对应的数据
        $sql = "select *from bg_user where id={$id}";
        $user = M('UserModel')->getRow($sql);
        $this->assign('user',$user);
        $this->display('User/userEdit.html');
    }
    #用户修改信息处理方法
    public function userEditHandle(){

        $id = $_GET['id'];     //获取用户id
        $acc = trim($_POST['acc']);   //获取账户
        $sex = $_POST['sex'];   //获取性别
        $nickname = trim($_POST['nickname']);  //获取昵称
        $type = $_POST['type'];   //获取用户类型
        if(empty($acc)){
            echo '账户信息没填写';
            $url = C('domain.main').'/index.php?p=admin&m=user&a=userEdit&id='.$id;
            header('Refresh:3;url='.$url);
            exit;
        }
        if(empty($nickname)){
            echo '昵称信息还没有填写';
            $url = C('domain.main').'/index.php?p=admin&m=user&a=userEdit&id='.$id;
            header('Refresh:3;url='.$url);
            exit;
        }
        //调用模型 执行sql (修改)
        $sql = "update bg_user set acc='{$acc}',sex='{$sex}',nickname='{$nickname}',type='{$type}' where id={$id}";
        $user = M('UserModel')->setData($sql);
        if($user){
            echo '恭喜，修改数据成功';
            $url = C('domain.main').'/index.php?p=admin&m=user&a=userList';
            header('Refresh:3;url='.$url);
            exit;
        }else{
            echo 'Sorry，修改数据失败';
            $url = C('domain.main').'/index.php?p=admin&m=user&a=userEdit&id='.$id;
            header('Refresh:3;url='.$url);
            exit;
        }
    }
    #删除用户数据
    public function userDelete(){
        //获取用户id
        $id = $_GET['id'];
        //调用模型执行 delete sql语句
        $sql = "delete from bg_user where id={$id}";
        $user = M('UserModel')->setData($sql);
        if($user){
            echo '删除用户数据成功';
        }else{
            echo '删除数据失败';
        }
        $url = C('domain.main').'/index.php?p=admin&m=user&a=userList';
        header('Refresh:3;url='.$url);
    }
}
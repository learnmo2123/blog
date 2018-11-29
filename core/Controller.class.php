<?php

namespace core;//创建了一个  全局空间  下的  core空间

class Controller extends \Smarty{
    
    public function __construct(){ 

        parent::__construct();//解决父类构造方法重写
        
        //$this->_smarty = new \Smarty;//实例化Smarty类的对象

        $dir = APP . $GLOBALS['plat'] . '/view';
        $this->setTemplateDir($dir);//设置存放模板文件的目录
        $dir = APP . $GLOBALS['plat'] . '/view_c';
        $this->setCompileDir($dir);//设置存放模板文件的目录
        @session_start();
        if (!isset($_SESSION['admin']) && !($GLOBALS['plat'] == 'admin' && $GLOBALS['module'] == 'Privilege')&&$GLOBALS['plat'] != 'home' ) {//表示需要重新去登陆
            if(isset($_COOKIE['user_id'])){
                $sql = "select *from bg_user where id={$_COOKIE['user_id']}";
                $user = M('UserModel')->getRow($sql);
                $_SESSION['admin'] = $user;
            }else {
                echo '请先登录系统再访问哦';
                $url = C('domain.main') . '/index.php?p=admin&m=privilege&a=loginShow';
                header('Refresh:3; url=' . $url);
                exit;
            }
        }
    }
}
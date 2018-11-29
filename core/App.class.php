<?php

namespace core;//创建了一个  全局空间  下的  core空间

class App{

    private static $_obj=[];

    public static function single($className){ 
        
        //第一次      self::$_obj[\model\NewsModel]
        //第二次      self::$_obj[\model\UserModel]
        //第三次      self::$_obj[\model\NewsModel]
        if( !isset(self::$_obj[$className]) ){//
            //第一次    self::$_obj[\model\NewsModel]=new \model\NewsModel;
            //第二次    self::$_obj[\model\UserModel]=new \model\UserModel;
            self::$_obj[$className] = new $className;//创建一个对象保存给$_obj静态属性
        }

        //第一次   self::$_obj[\model\NewsModel]
        //第二次   self::$_obj[\model\UserModel]
        //第三次   self::$_obj[\model\NewsModel]
        return self::$_obj[$className];//返回保存的对象
    }

    #程序启动方法
    public static function run(){ 
        #接收一个GET参数，专门保存方法的方法名     动作参数
        //$action = isset($_GET['a']) ? $_GET['a'] : 'showList';
        //$action = isset($_GET['a']) ? $_GET['a'] : $config['pma']['a'];
        $GLOBALS['action'] = $action = isset($_GET['a']) ? $_GET['a'] : $GLOBALS['config']['pma']['a'];

        #接收一个GET参数，专门保存控制器类的类名         模块参数
        //$module = isset($_GET['m']) ? ucfirst($_GET['m']) : 'News';
        //$module = isset($_GET['m']) ? ucfirst($_GET['m']) : $config['pma']['m'];
        $GLOBALS['module'] = $module = isset($_GET['m']) ? ucfirst($_GET['m']) : $GLOBALS['config']['pma']['m'];

        #接收一个GET参数，专门保存平台（前台或后台）命名空间       平台参数
        //$plat = isset($_GET['p']) ? $_GET['p'] : 'admin';
        //$plat = isset($_GET['p']) ? $_GET['p'] : $config['pma']['p'];
        $GLOBALS['plat'] = $plat = isset($_GET['p']) ? $_GET['p'] : $GLOBALS['config']['pma']['p'];

        #实例化控制器类的对象
        //$controller = new \admin\controller\NewsController;
        $className = "\\{$plat}\controller\\{$module}Controller";

        //$controller = new \admin\controller\UserController;
        //$controller = new $className;
        //$controller = \core\App::single($className);
        $controller = M($className);

        #调用方法展示页面
        //$controller->showList();
        //$controller->showAd();
        //$controller->showUpd();

        $controller->$action();
    }

    #自动加载静态的方法
    public static function autoload($className){ 
        
        if( substr($className, -10)=='Controller' ){//针对控制器类做自动加载，截取类名最后10个字符，判断是否为Controller
            
            $str = str_replace('\\', '/', $className);//将携带命名空间的类名中的反斜杠替换成正斜杠（目录分隔符）
    //           mvc/app/ admin/controller/NewsController  .class.php
            $filePath = APP .  $str . '.class.php';//拼接控制器类文件的全路径文件名
            

        }elseif( substr($className, -5)=='Model' ){//针对模型类做自动加载，截取类名最后5个字符，判断是否是Model

            //$str = str_replace('\\', '/', $className);
            //$filePath = APP . $str . '.class.php';

            if( $className=='core\Model' ){//当是父类模型时，执行if处理
            
                $str = str_replace('\\', '/', $className);
                //              mvc/   core/Model    .class.php
                $filePath = MVC . $str . '.class.php';

            }else{//否则普通模型类使用else处理

                $str = str_replace('\\', '/', $className);
                $filePath = APP . $str . '.class.php';
            }

        }elseif( substr($className, -4)=='Tool' ){
        
            $str = str_replace('\\', '/', $className);
            $filePath = MVC . $str . '.class.php';
        }

        include $filePath;

    }
}
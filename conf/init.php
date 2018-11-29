<?php

#引入常量定义配置文件
include './conf/define.php';

#引入主（参数）配置文件
include CONF . 'config.php';

#引入函数文件
include CONF . 'func.php';

#引入SMARTY3.0核心类文件
include PLUGINS . 'smarty/Smarty.class.php';

#引入核心框架类
include CORE . 'App.class.php';
spl_autoload_register('\core\App::autoload');//注册自动加载静态方法

#引入父类控制器
include CORE . 'Controller.class.php';

#引入控制器类文件
//include './app/admin/controller/NewsController.class.php';

//include APP_ADMIN_CONTR . 'NewsController.class.php';

#引入父类模型类文件
//include CORE . 'Model.class.php';

#引入模型类文件
//include APP_MODEL . 'NewsModel.class.php';

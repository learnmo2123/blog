<?php

#定义路径常量
//define('MVC', dirname(__FILE__).'/');//根目录路径
define('MVC', dirname(dirname(__FILE__)).'/');

define('APP', MVC.'app/');//   mvc/app/
define('CONF', MVC.'conf/');//   mvc/conf/
define('CORE', MVC.'core/');//   mvc/core/
define('PLUGINS', MVC.'plugins/');//    mvc/plugins/
define('PUBLIC', MVC.'public/');//      mvc/public/

define('APP_ADMIN', APP.'admin/');//    mvc/app/admin/
define('APP_HOME', APP.'home/');//    mvc/app/home/
define('APP_MODEL', APP.'model/');//    mvc/app/model/

define('APP_ADMIN_CONTR', APP_ADMIN.'controller/');//    mvc/app/admin/controller/
define('APP_ADMIN_VIEW', APP_ADMIN.'view/');//    mvc/app/admin/view/
define('APP_HOME_CONTR', APP_HOME.'controller/');//    mvc/app/home/controller/
define('APP_HOME_VIEW', APP_HOME.'view/');//    mvc/app/home/view/


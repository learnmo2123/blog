<?php

$config = [
    
    #网站域名配置
    'domain' => [
        'main' => 'http://www.blog.com'//网站主域名
    ],

    #网站的默认访问页面
    'pma' => [
        'p' => 'home',//默认的平台参数
        'm' => 'index',//默认的控制器类名参数
        'a' => 'showIndex'//默认访问的方法名参数
    ],

    #PDO操作类参数
    'pdo' => [
        'type' => 'mysql',//连接数据库的类型
        'host' => 'localhost',//数据库的IP地址
        'port' => 3309,//端口号
        'char' => 'utf8',//默认设置的字符集
        'db' => 'blog',//默认选择的数据库名
        'acc' => 'root',//连接数据库的帐号
        'pwd' => 'root'//连接数据库的密码
    ]
];

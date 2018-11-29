<?php
/* Smarty version 3.1.29, created on 2018-09-17 08:33:11
  from "D:\blog\app\home\view\Common\head.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9ef64736e203_64916630',
  'file_dependency' => 
  array (
    '0c4187acda44bf9592c936910ecbb05c8a889594' => 
    array (
      0 => 'D:\\blog\\app\\home\\view\\Common\\head.html',
      1 => 1537144369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9ef64736e203_64916630 ($_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo C('domain.main');?>
/public/favicon.ico">
    <link href="<?php echo C('domain.main');?>
/public/home/css/base.css" rel="stylesheet">
    <link href="<?php echo C('domain.main');?>
/public/home/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo C('domain.main');?>
/public/admin/css/pagination.css">
    <link href="<?php echo C('domain.main');?>
/public/home/css/m.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/jquery.easyfader.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/scrollReveal.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/common.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/page.js"><?php echo '</script'; ?>
>
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/modernizr.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
<header>
    <!--menu begin-->
    <div class="menu" style="position:relative">
        <nav class="nav" id="topnav">
            <h1 class="logo"><a href="#">编程语言学习博客</a></h1>
            <li><a href="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=showIndex">网站首页</a> </li>
            <li><a href="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=showFabu">发布博文</a> </li>
            <li><a href="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=showYouzhi">优质博文</a>  </li>
            <li><a href="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=showLiuyan">留言</a> </li>
            <li><a href="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=showDevelop">系统开发流程</a> </li>
            <?php if (!isset($_SESSION['home'])) {?>
            <li><a href="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=showLogin">登录</a> </li>
            <li><a href="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=showRegister">注册</a> </li>
            <?php }?>
            <?php if (isset($_SESSION['home'])) {?>
            <li><a href="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=logout" onClick="return confirm('确定退出系统吗?：<?php echo $_SESSION['home']['nickname'];?>
');">退出</a> </li>
            <?php }?>
            <li><a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=privilege&a=loginShow">后台</a> </li>
            <!--search begin-->
            <?php if ($_smarty_tpl->tpl_vars['title2']->value == '编程语言学习博客') {?>
            <div id="search_bar" class="search_bar" style="width:200px;position:absolute;margin-left:1000px;">
                <form  id="searchform" action="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=showIndex" method="post" name="searchform">
                    <input placeholder="请输入博文标题" type="text" name="title1"  value="<?php echo $_smarty_tpl->tpl_vars['title1']->value;?>
" style="position:absolute;margin-top:15px;width:120px;height:29px;padding-left:3px;">
                    <input type="submit" value="搜索" style="border:0px;position:absolute;margin-left:123px;margin-top:15px;padding:5px 20px;height:33px;background:deepskyblue;color:white;">
                </form>
            </div>
            <?php }?>
            <!--头像-->
            <div style="position:absolute;margin-left:-75px;margin-top:15px;">
                <?php if (isset($_SESSION['home'])) {?>
                <img src="<?php echo $_SESSION['home']['headimg'];?>
" title="<?php echo $_SESSION['home']['nickname'];?>
已登录哦" style="width:50px;height:50px;border-radius:50%;">
                <?php } else { ?>
                <img src="<?php echo C('domain.main');?>
/public/home/images/headimg.jpg" title="您还未登录哦" style="width:50px;height:50px;border-radius:50%;">
                <?php }?>
            </div>
            <!--search end-->
        </nav>
    </div>
    <!--menu end-->
</header><?php }
}

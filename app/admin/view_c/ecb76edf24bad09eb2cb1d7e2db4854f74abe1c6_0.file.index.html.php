<?php
/* Smarty version 3.1.29, created on 2018-09-17 14:02:46
  from "D:\blog\app\admin\view\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f4386d16ce1_51690137',
  'file_dependency' => 
  array (
    'ecb76edf24bad09eb2cb1d7e2db4854f74abe1c6' => 
    array (
      0 => 'D:\\blog\\app\\admin\\view\\index.html',
      1 => 1537164161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f4386d16ce1_51690137 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo C('domain.main');?>
/public/favicon.ico">
    <link rel="stylesheet" href="<?php echo C('domain.main');?>
/public/admin/css/pintuer.css">
    <link rel="stylesheet" href="<?php echo C('domain.main');?>
/public/admin/css/admin.css">
    <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/admin/js/jquery.js"><?php echo '</script'; ?>
>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main" style="position: relative;">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="<?php echo $_SESSION['admin']['headimg'];?>
" style="width:50px;" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l">
      <a class="button button-little bg-green" href="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=showIndex" target="_blank"> 前台首页</a>&nbsp;&nbsp;<a class="button button-little bg-red" href="<?php echo C('domain.main');?>
/index.php?p=admin&m=privilege&a=logout" onClick="return confirm('确定推出系统吗?：<?php echo $_SESSION['admin']['nickname'];?>
');"> 退出登录</a> </div>
    <div style="position: absolute;margin-left:620px;margin-top:22px;"><span style="color:white;font-size:18px;">欢迎&nbsp;<span style="color:red;font-weight:bold;"><?php echo $_SESSION['admin']['nickname'];?>
</span>&nbsp;光临编程语言学习博客&nbsp;!</span></div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong>菜单列表</strong></div>
  <h2>用户管理</h2>
  <ul style="display:block">
    <li><a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=user&a=showUserAdd" target="right">添加用户</a></li>
    <li><a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=user&a=userList" target="right">用户列表</a></li>
  </ul>   
  <h2>博文管理</h2>
  <ul>
      <li><a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=article&a=articleShow" target="right">添加博文</a></li>
      <li><a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=article&a=articleList" target="right">博文列表</a></li>
  </ul>
  <h2>分类管理</h2>
  <ul>
      <li><a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=cat&a=showCatAdd" target="right">添加分类</a></li>
      <li><a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=cat&a=showCat" target="right">分类列表</a></li>
  </ul>
  <h2>评论管理</h2>
  <ul>
      <li><a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=comment&a=commentList" target="right">评论列表</a></li>
  </ul>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
<?php echo '</script'; ?>
>
<ul class="bread">
  <li><a href="#" target="right"> 首页</a></li>
  <li><a href="#" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin" style="margin-right:-15px;">
    <iframe rameborder="0" src="<?php echo C('domain.main');?>
/index.php?p=admin&m=user&a=showUserAdd" name="right" width="100%" height="100%"></iframe>
</div>
</body>
</html><?php }
}

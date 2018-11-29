<?php
/* Smarty version 3.1.29, created on 2018-09-17 11:57:48
  from "D:\blog\app\admin\view\User\userAdd.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f263c27f1a1_24398077',
  'file_dependency' => 
  array (
    'dba93697022c633cb3b3d87810b218c5dcffdfc8' => 
    array (
      0 => 'D:\\blog\\app\\admin\\view\\User\\userAdd.html',
      1 => 1537156662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f263c27f1a1_24398077 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>  
    <link rel="stylesheet" href="<?php echo C('domain.main');?>
/public/admin/css/pintuer.css">
    <link rel="stylesheet" href="<?php echo C('domain.main');?>
/public/admin/css/admin.css">
    <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/admin/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/admin/js/pintuer.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong> 添加用户</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo C('domain.main');?>
/index.php?p=admin&m=user&a=userAddHandle" enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>账户：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="acc" value="" data-validate="required:请输入账户"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input" name="pwd" value="" data-validate="required:请输入密码"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>性别：</label>
        </div>
        <div class="field" style="margin-top:8px">
            男 <input type="radio" name="sex" value="男" checked />
            女 <input type="radio" name="sex" value="女" />
            保密 <input type="radio" name="sex" value="保密" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>昵称：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="nickname" value="" data-validate="required:请输入昵称"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>头像：</label>
        </div>
        <div class="field" >
          <input type="file" class="input" name="headimg" value="" />
          <div class="tips"></div>
        </div>

      </div>
      <div class="form-group">
        <div class="label">
          <label>类型：</label>
        </div>
        <div class="field" style="margin-top:8px">
          <input type="radio" name="type" value="0" checked /> 普通用户
          <input type="radio" name="type" value="1" /> 管理员
        </div>
      </div>
      <div class="field">
          <button class="button bg-main" type="submit" style="margin-left: 80px;"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html><?php }
}

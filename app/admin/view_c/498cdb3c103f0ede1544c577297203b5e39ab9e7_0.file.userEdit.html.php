<?php
/* Smarty version 3.1.29, created on 2018-09-17 12:08:02
  from "D:\blog\app\admin\view\User\userEdit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f28a288b620_44634066',
  'file_dependency' => 
  array (
    '498cdb3c103f0ede1544c577297203b5e39ab9e7' => 
    array (
      0 => 'D:\\blog\\app\\admin\\view\\User\\userEdit.html',
      1 => 1537156723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f28a288b620_44634066 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
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
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 修改用户信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo C('domain.main');?>
/index.php?p=admin&m=user&a=userEditHandle&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
      <div class="form-group">
        <div class="label">
          <label>账户：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="acc" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['acc'];?>
" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>性别：</label>
        </div>
        <div class="field" style="margin-top:8px">
          男 <input type="radio" name="sex" value="男" <?php if ($_smarty_tpl->tpl_vars['user']->value['sex'] == '男') {?> checked <?php }?> />
          女 <input type="radio" name="sex" value="女" <?php if ($_smarty_tpl->tpl_vars['user']->value['sex'] == '女') {?> checked <?php }?>/>
          保密 <input type="radio" name="sex" value="保密"  <?php if ($_smarty_tpl->tpl_vars['user']->value['sex'] == '保密') {?> checked <?php }?>/>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>昵称：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="nickname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>类型：</label>
        </div>
        <div class="field" style="margin-top:8px">
          <input type="radio" name="type" value="0" <?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == '0') {?> checked <?php }?>/> 普通用户
          <input type="radio" name="type" value="1" <?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == '1') {?> checked <?php }?>/> 管理员
        </div>
      </div>
      <div class="form-group">
        <div class="field">
          <button class="button bg-main" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html><?php }
}

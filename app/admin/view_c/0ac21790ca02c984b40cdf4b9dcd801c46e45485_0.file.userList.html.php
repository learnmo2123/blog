<?php
/* Smarty version 3.1.29, created on 2018-09-17 12:07:58
  from "D:\blog\app\admin\view\User\userList.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f289e269fe6_43593880',
  'file_dependency' => 
  array (
    '0ac21790ca02c984b40cdf4b9dcd801c46e45485' => 
    array (
      0 => 'D:\\blog\\app\\admin\\view\\User\\userList.html',
      1 => 1537157228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f289e269fe6_43593880 ($_smarty_tpl) {
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
<link rel="stylesheet" href="<?php echo C('domain.main');?>
/public/admin/css/pagination.css">
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
  <div class="panel-head"><strong> 内容列表</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" > 所有的用户信息</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">序号</th>
      <th width="5%">ID</th>
      <th width="10%">账户</th>
      <th width="10%">性别</th>
      <th width="20%">添加时间</th>
      <th width="10%">用户类型</th>
      <th width="20%">操作</th>
    </tr>
   <?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_0_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$__foreach_user_0_saved_key = isset($_smarty_tpl->tpl_vars['users_key']) ? $_smarty_tpl->tpl_vars['users_key'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['users_key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['users_key']->value => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_0_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['firstNum']->value+$_smarty_tpl->tpl_vars['users_key']->value;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['acc'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['sex'];?>
</td>
      <td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['user']->value['regtime']);?>
</td>
      <td><?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == '0') {?>普通用户<?php } else { ?>管理员<?php }?></td>
      <td><div class="button-group">
      <a class="button border-main" href="<?php echo C('domain.main');?>
/index.php?p=admin&m=user&a=userEdit&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"> 修改</a>
      <a class="button border-red" href="<?php echo C('domain.main');?>
/index.php?p=admin&m=user&a=userDelete&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" onClick="return confirm('确定删除当前博文：<?php echo $_smarty_tpl->tpl_vars['user']->value['acc'];?>
?');"> 删除</a>
      </div></td>
    </tr>
  <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_local_item;
}
if ($__foreach_user_0_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_item;
}
if ($__foreach_user_0_saved_key) {
$_smarty_tpl->tpl_vars['users_key'] = $__foreach_user_0_saved_key;
}
?>
  </table>
</div>
<ul class="pagination">
  <li><?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>
</li>
</ul>
</body></html><?php }
}

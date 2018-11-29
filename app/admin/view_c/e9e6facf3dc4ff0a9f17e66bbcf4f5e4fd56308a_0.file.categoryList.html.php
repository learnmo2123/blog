<?php
/* Smarty version 3.1.29, created on 2018-09-17 12:09:50
  from "D:\blog\app\admin\view\Category\categoryList.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f290ed94a42_17475647',
  'file_dependency' => 
  array (
    'e9e6facf3dc4ff0a9f17e66bbcf4f5e4fd56308a' => 
    array (
      0 => 'D:\\blog\\app\\admin\\view\\Category\\categoryList.html',
      1 => 1537156849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f290ed94a42_17475647 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>分类管理</title>
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
  <div class="panel-head"><strong> 分类信息</strong></div>
  <div class="padding border-bottom">  
  <a class="button border-yellow" href=""> 分类列表</a>
  </div> 
  <table class="table table-hover text-center">
    <tr>
      <th width="25%">ID</th>
      <th align="left">分类名称</th>
      <th>父类id</th>
      <th width="250">操作</th>
    </tr>
   <?php
$_from = $_smarty_tpl->tpl_vars['cats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cat_0_saved_item = isset($_smarty_tpl->tpl_vars['cat']) ? $_smarty_tpl->tpl_vars['cat'] : false;
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$__foreach_cat_0_saved_local_item = $_smarty_tpl->tpl_vars['cat'];
?>
    <tr>
      <td align="left" style="padding-left:30px;"><?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
</td>
      <td align="left" style="padding-left:50px;"><?php echo str_repeat('---',$_smarty_tpl->tpl_vars['cat']->value['level']);
echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['cat']->value['parent_id'];?>
</td>
      <td>
      <div class="button-group">
      <a type="button" class="button border-main" href="<?php echo C('domain.main');?>
/index.php?p=admin&m=cat&a=editCatShow&id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
">修改</a>
       <a class="button border-red" href="<?php echo C('domain.main');?>
/index.php?p=admin&m=cat&a=deleteCat&id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
" onClick="return confirm('确定删除当前博文：<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
?');"> 删除</a>
      </div>
      </td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_0_saved_local_item;
}
if ($__foreach_cat_0_saved_item) {
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_0_saved_item;
}
?>
  </table>
</div>
</body></html><?php }
}

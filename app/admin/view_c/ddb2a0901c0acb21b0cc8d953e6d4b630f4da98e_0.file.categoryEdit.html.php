<?php
/* Smarty version 3.1.29, created on 2018-09-17 12:37:19
  from "D:\blog\app\admin\view\Category\categoryEdit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f2f7f9c9634_91932417',
  'file_dependency' => 
  array (
    'ddb2a0901c0acb21b0cc8d953e6d4b630f4da98e' => 
    array (
      0 => 'D:\\blog\\app\\admin\\view\\Category\\categoryEdit.html',
      1 => 1537158948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f2f7f9c9634_91932417 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title>修改信息</title>
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
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo C('domain.main');?>
/index.php?p=admin&m=cat&a=editCatHandle&id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
      <div class="form-group">
        <div class="label">
          <label>分类名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="name" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
" data-validate="required:请输入分类名称"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>所属分类：</label>
        </div>
        <div class="field">
          <select name="parent_id" style="height:40px;width:250px;padding-left:12px;border:1px solid #dddddd;">
            <option>---请选择分类---</option>
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
            <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
|<?php echo $_smarty_tpl->tpl_vars['cat']->value['parent_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['id'] == $_smarty_tpl->tpl_vars['category']->value['id']) {?> selected <?php }?> ><?php echo str_repeat('---',$_smarty_tpl->tpl_vars['cat']->value['level']);
echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_0_saved_local_item;
}
if ($__foreach_cat_0_saved_item) {
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_0_saved_item;
}
?>
          </select>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html><?php }
}

<?php
/* Smarty version 3.1.29, created on 2018-09-17 12:08:31
  from "D:\blog\app\admin\view\Article\articleShow.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f28bf2fbbe5_13826045',
  'file_dependency' => 
  array (
    'c99115de0c824b8b0a9ef89eb7116dcc06e90e15' => 
    array (
      0 => 'D:\\blog\\app\\admin\\view\\Article\\articleShow.html',
      1 => 1537156784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f28bf2fbbe5_13826045 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>添加博文</title>
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
    <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/admin/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong>文章添加页</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo C('domain.main');?>
/index.php?p=admin&m=article&a=articleAdd">
      <input type="hidden" name="id"  value="" />
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field" style="width:52%;">
          <input type="text" class="input" name="title" value="" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
            <div class="label">
                <label>简介：</label>
            </div>
            <div class="field">
                <textarea rows="5" cols="80" name="intro" data-validate="required:请输入简介"></textarea>
                <div class="tips"></div>
            </div>
        </div>
      <div class="form-group">
        <div class="label">
          <label>选择分类：</label>
        </div>
        <div class="field">
            <select name="category" style="height:40px;width:250px;padding-left:12px;border:1px solid #dddddd;" >
                <option values="0">---请选择分类---</option>
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
|<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
"><?php echo str_repeat('---',$_smarty_tpl->tpl_vars['cat']->value['level']);
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
                <label>文章内容：</label>
            </div>
        </div>
      <div class="form-group" style="margin-top:-20px;">
          <div class="body">
                <textarea class="st-forminput" rows="5" cols="47" style="width:80%;" name="content"></textarea>
                <?php echo '<script'; ?>
>CKEDITOR.replace('content');<?php echo '</script'; ?>
>
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
</body>
</html><?php }
}

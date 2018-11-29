<?php
/* Smarty version 3.1.29, created on 2018-09-17 12:09:12
  from "D:\blog\app\admin\view\Article\articleList.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f28e8727f86_82270035',
  'file_dependency' => 
  array (
    '3c61833f2ffc21ac69c9aa53bda1fa6e1e4d3369' => 
    array (
      0 => 'D:\\blog\\app\\admin\\view\\Article\\articleList.html',
      1 => 1537156985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f28e8727f86_82270035 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>博文信息</title>
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
  <div class="panel-head"><strong> 博文信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo C('domain.main');?>
/index.php?p=admin&m=article&a=articleList" enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" data-validate="required:请输入要搜索的标题"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>选择分类：</label>
        </div>
        <div class="field">
          <select name="cat_id" style="height:40px;width:250px;padding-left:12px;border:1px solid #dddddd;" >
            <option vlaues="0">---请选择分类---</option>
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
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['id'] == $_smarty_tpl->tpl_vars['cat_id']->value) {?> selected <?php }?> ><?php echo str_repeat('---',$_smarty_tpl->tpl_vars['cat']->value['level']);
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
      <div class="field">
          <button class="button bg-main" type="submit" style="margin-left: 100px;"> 搜索</button>
        </div>
      </div>
    </form>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">序号</th>
      <th width="5%">ID</th>
      <th width="14%">分类</th>
      <th width="11%">标题</th>
      <th width="15%">发布时间</th>
      <th width="8%">发布者</th>
      <th width="7%">评论数量</th>
      <th width="20%">操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['articles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_article_1_saved_item = isset($_smarty_tpl->tpl_vars['article']) ? $_smarty_tpl->tpl_vars['article'] : false;
$__foreach_article_1_saved_key = isset($_smarty_tpl->tpl_vars['articles_key']) ? $_smarty_tpl->tpl_vars['articles_key'] : false;
$_smarty_tpl->tpl_vars['article'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['articles_key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['article']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['articles_key']->value => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
$__foreach_article_1_saved_local_item = $_smarty_tpl->tpl_vars['article'];
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['firstNum']->value+$_smarty_tpl->tpl_vars['articles_key']->value;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['article']->value['cat_name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</td>
      <td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['article']->value['pubtime']);?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['article']->value['user_nickname'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['article']->value['comment_num'];?>
</td>
      <td><div class="button-group">
        <a class="button border-main" href="<?php echo C('domain.main');?>
/index.php?p=admin&m=article&a=editArticleShow&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"> 修改</a>
        <a class="button border-red" href="<?php echo C('domain.main');?>
/index.php?p=admin&m=article&a=deleteArticle&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" onClick="return confirm('确定删除当前博文：<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
?');"> 删除</a>
      </div></td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_1_saved_local_item;
}
if ($__foreach_article_1_saved_item) {
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_1_saved_item;
}
if ($__foreach_article_1_saved_key) {
$_smarty_tpl->tpl_vars['articles_key'] = $__foreach_article_1_saved_key;
}
?>
  </table>
  </div>
<ul class="pagination">
  <li><?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>
</li>
</ul>
</body>
</html><?php }
}

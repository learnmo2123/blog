<?php
/* Smarty version 3.1.29, created on 2018-09-17 14:03:16
  from "D:\blog\app\admin\view\Comment\commentList.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f43a4762832_45786662',
  'file_dependency' => 
  array (
    '4bbd43d2d8ad8460043b01a97273add8f73ca301' => 
    array (
      0 => 'D:\\blog\\app\\admin\\view\\Comment\\commentList.html',
      1 => 1537156904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f43a4762832_45786662 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title>评论管理</title>
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
  <div class="panel-head"><strong> 评论列表</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" > 评论信息</button>
  </div>
  <table class="table table-hover text-center" style="table-layout:fixed;">
    <tr>
      <th width="5%">序号</th>
      <th width="5%">ID</th>
      <th width="8%">用户昵称</th>
      <th width="8%">评论文章标题</th>
      <th width="35%">评论的内容</th>
      <th width="15%">评论时间</th>
      <th width="18%">操作</th>
    </tr>
   <?php
$_from = $_smarty_tpl->tpl_vars['comments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_comment_0_saved_item = isset($_smarty_tpl->tpl_vars['comment']) ? $_smarty_tpl->tpl_vars['comment'] : false;
$__foreach_comment_0_saved_key = isset($_smarty_tpl->tpl_vars['comments_key']) ? $_smarty_tpl->tpl_vars['comments_key'] : false;
$_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['comments_key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['comment']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comments_key']->value => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
$__foreach_comment_0_saved_local_item = $_smarty_tpl->tpl_vars['comment'];
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['firstNum']->value+$_smarty_tpl->tpl_vars['comments_key']->value;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['comment']->value['user_nickname'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['comment']->value['article_title'];?>
</td>
      <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</td>
      <td><?php echo date('Y-m-d H:i',$_smarty_tpl->tpl_vars['comment']->value['post_date']);?>
</td>
      <td><div class="button-group">
      <a class="button border-red" href="<?php echo C('domain.main');?>
/index.php?p=admin&m=comment&a=deleteComment&id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
" onClick="return confirm('确定删除当前评论吗?：<?php echo $_smarty_tpl->tpl_vars['comment']->value['user_nickname'];?>
');"> 删除</a>
      </div></td>
    </tr>
  <?php
$_smarty_tpl->tpl_vars['comment'] = $__foreach_comment_0_saved_local_item;
}
if ($__foreach_comment_0_saved_item) {
$_smarty_tpl->tpl_vars['comment'] = $__foreach_comment_0_saved_item;
}
if ($__foreach_comment_0_saved_key) {
$_smarty_tpl->tpl_vars['comments_key'] = $__foreach_comment_0_saved_key;
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

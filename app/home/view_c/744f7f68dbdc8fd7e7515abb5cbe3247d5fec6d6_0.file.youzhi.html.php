<?php
/* Smarty version 3.1.29, created on 2018-09-16 23:58:55
  from "D:\blog\app\home\view\youzhi.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9e7dbf1ff435_77981568',
  'file_dependency' => 
  array (
    '744f7f68dbdc8fd7e7515abb5cbe3247d5fec6d6' => 
    array (
      0 => 'D:\\blog\\app\\home\\view\\youzhi.html',
      1 => 1537113527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Common/head.html' => 1,
  ),
),false)) {
function content_5b9e7dbf1ff435_77981568 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a id="asd"></a>  <!--跳转到顶部-->
<div class="pagebg sh"></div>
<div class="container">
    <h1 class="t_nav"><span>好咖啡要和朋友一起品尝，品质“学习博文”也要和同样喜欢它的人一起分享。 </span><a href="#" class="n1">优质博文</a><a href="#" class="n2">感谢阅读</a>
    </h1>


    <div class="share">
        <ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['blogs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_blog_0_saved_item = isset($_smarty_tpl->tpl_vars['blog']) ? $_smarty_tpl->tpl_vars['blog'] : false;
$_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['blog']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
$__foreach_blog_0_saved_local_item = $_smarty_tpl->tpl_vars['blog'];
?>
            <li> <div class="shareli"> <i><img src="<?php echo $_smarty_tpl->tpl_vars['blog']->value['yz_pic'];?>
"></i>
                <h2><b><?php echo $_smarty_tpl->tpl_vars['blog']->value['yz_intro'];?>
</b></h2>
                <span><?php echo $_smarty_tpl->tpl_vars['blog']->value['yz_title'];?>
 | <a href="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=add&id=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
" style="color:white">❤<?php echo $_smarty_tpl->tpl_vars['blog']->value['enjoy'];?>
</a></span> </div> </li>
            <?php
$_smarty_tpl->tpl_vars['blog'] = $__foreach_blog_0_saved_local_item;
}
if ($__foreach_blog_0_saved_item) {
$_smarty_tpl->tpl_vars['blog'] = $__foreach_blog_0_saved_item;
}
?>
        </ul>
    </div>

    <!--分页书写-->
    <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
        <ul class="pagination">
            <li><?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>
</li>
        </ul>
    </div>

</div>
<footer>
    <p>Design by <a href="#">编程语言学习博客中心</a> <a href="">粤ICP备11002373号-1</a></p>
</footer>
<a href="#asd" class="cd-top">Top</a>
</body>
</html>
<?php }
}

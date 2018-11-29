<?php
/* Smarty version 3.1.29, created on 2018-09-17 11:20:33
  from "D:\blog\app\home\view\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f1d81140612_67197453',
  'file_dependency' => 
  array (
    '4cba679005a7a164cc639bb11a0b532d79ef379d' => 
    array (
      0 => 'D:\\blog\\app\\home\\view\\index.html',
      1 => 1537149497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Common/head.html' => 1,
  ),
),false)) {
function content_5b9f1d81140612_67197453 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<article>
  <a id="asd"></a>  <!--跳转到顶部-->
  <div class="blank"></div>
  <!--首页中间博文展示区开始-->
  <div class="blogsbox">
    <?php
$_from = $_smarty_tpl->tpl_vars['articles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_article_0_saved_item = isset($_smarty_tpl->tpl_vars['article']) ? $_smarty_tpl->tpl_vars['article'] : false;
$_smarty_tpl->tpl_vars['article'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['article']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
$__foreach_article_0_saved_local_item = $_smarty_tpl->tpl_vars['article'];
?>
    <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
      <h3 class="blogtitle"><a href="#" target="_blank"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
      <p class="blogtext"><?php echo $_smarty_tpl->tpl_vars['article']->value['intro'];?>
</p>
      <div class="bloginfo">
        <ul>
          <li class="author"><a href="#"><?php echo $_smarty_tpl->tpl_vars['article']->value['user_nickname'];?>
</a></li>
          <li class="lmname"><a href="#"><?php echo $_smarty_tpl->tpl_vars['article']->value['cat_name'];?>
</a></li>
          <li class="timer"><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['article']->value['pubtime']);?>
</li>
          <li class="like"><?php echo $_smarty_tpl->tpl_vars['article']->value['comment_num'];?>
 评论数</li>
          <li class="view"><a href="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=showReadMore&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">阅读更多</a></li>
        </ul>
      </div>
    </div>
    <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved_local_item;
}
if ($__foreach_article_0_saved_item) {
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved_item;
}
?>
    <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
      <ul class="pagination">
        <li><?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>
</li>
      </ul>
    </div>
  </div>
  <!--首页中间博文展示区结束-->
  <!-- 特别推荐开始  排版3个-->
  <div class="sidebar">
      <div class="zhuanti">
      <h2 class="hometitle">最新博文</h2>
      <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['zuixin']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_zuixin3_1_saved_item = isset($_smarty_tpl->tpl_vars['zuixin3']) ? $_smarty_tpl->tpl_vars['zuixin3'] : false;
$__foreach_zuixin3_1_saved_key = isset($_smarty_tpl->tpl_vars['zuixin_key']) ? $_smarty_tpl->tpl_vars['zuixin_key'] : false;
$_smarty_tpl->tpl_vars['zuixin3'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['zuixin_key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['zuixin3']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['zuixin_key']->value => $_smarty_tpl->tpl_vars['zuixin3']->value) {
$_smarty_tpl->tpl_vars['zuixin3']->_loop = true;
$__foreach_zuixin3_1_saved_local_item = $_smarty_tpl->tpl_vars['zuixin3'];
?>
        <li> <i><img src="<?php echo C('domain.main');?>
/public/home/images/banner0<?php echo $_smarty_tpl->tpl_vars['zuixin_key']->value+3;?>
.jpg"></i>
          <p><?php echo $_smarty_tpl->tpl_vars['zuixin3']->value['title'];?>
 <span><a href="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=showReadMore&id=<?php echo $_smarty_tpl->tpl_vars['zuixin3']->value['id'];?>
">阅读</a></span> </p>
        </li>
        <?php
$_smarty_tpl->tpl_vars['zuixin3'] = $__foreach_zuixin3_1_saved_local_item;
}
if ($__foreach_zuixin3_1_saved_item) {
$_smarty_tpl->tpl_vars['zuixin3'] = $__foreach_zuixin3_1_saved_item;
}
if ($__foreach_zuixin3_1_saved_key) {
$_smarty_tpl->tpl_vars['zuixin_key'] = $__foreach_zuixin3_1_saved_key;
}
?>
      </ul>
    </div>

    <!-- 特别推荐结束 -->
    <div class="cloud">
      <h2 class="hometitle">标签云</h2>
      <ul>
        <a href="#">PHP基础</a> <a href="#">PHP数组</a> <a href="#">HTML+CSS</a> <a href="/">smarty模板技术</a> <a href="/">SESSION+COOKIE</a> <a href="/">绝对定位</a> <a href="/">自动加载</a> <a href="/">MVC设计模式</a><a href="/">frame</a> <a href="/">iframe</a> <a href="/">表单</a> <a href="/">浮动</a>
      </ul>
    </div>
    <div class="links">
      <h2 class="hometitle">友情链接</h2>
      <ul>
        <li><a href="#">CSDN博客</a></li>
        <li><a href="#">GitHub</a></li>
        <li><a href="#">新浪微博</a></li>
      </ul>
    </div>
  </div>
</article>
<footer>
  <p>Design by <a href="#">编程语言学习博客中心</a> <a href="/">粤ICP备11002373号-1</a></p>
</footer>
<a href="#asd" class="cd-top">Top</a>
</body>
</html>

  <?php }
}

<?php
/* Smarty version 3.1.29, created on 2018-09-16 16:54:16
  from "D:\blog\app\home\view\liuyan.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9e1a38791311_64223200',
  'file_dependency' => 
  array (
    'f44e7fa5da36f39360a49ee0058702e811de568f' => 
    array (
      0 => 'D:\\blog\\app\\home\\view\\liuyan.html',
      1 => 1537088033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Common/head.html' => 1,
  ),
),false)) {
function content_5b9e1a38791311_64223200 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="pagebg ab"> </div>
<div class="container">
  <h1 class="t_nav"><span>你，我生命中一个重要的过客，我们之所以是过客，因为你未曾会为我停留。</span><a href="#" class="n1">网站反馈</a><a href="#" class="n2">留言列表</a></h1>
  <div class="news_infos">
    <form method="post" action="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=showLiuyan">
    <textarea rows="5" cols="90" style="border:1px solid deepskyblue;font-size:15px;padding-left:10px;padding-top:7px;" name="advice" placeholder="请留下您对本网站的足迹吧"></textarea>
    <?php if (!isset($_SESSION['home'])) {?>
    <span class="sply">您还未登录,不能留言....</span>
    <?php } else { ?>
    <input type="submit" value="发表留言" class="fabiao">
    <?php }?>
    </form>
  </div>
  <div class="sidebar">
    <div class="about">
      <p class="avatar"> <img src="<?php if (isset($_SESSION['home'])) {?> <?php echo $_SESSION['home']['headimg'];?>
 <?php } else { ?> <?php echo C('domain.main');?>
/public/home/images/avatar.jpg <?php }?> " alt="loading....."> </p>
      <p class="abname">LEARNMO | <?php if (isset($_SESSION['home'])) {?> <?php echo $_SESSION['home']['nickname'];?>
 <?php } else { ?> 青春 <?php }?></p>
      <p class="abposition"><b>系统架构</b></p>
      <p class="abtext"> 编程语言学习博客中心初衷，为了方便Developmental Engineer 总结开发经验和分享编程相关的知识，后期将不断完善本系统，谢谢大家的使用！</p>
    </div>
    <!--不可delete-->
    <div class="links">
      <h2 class="hometitle">友情链接</h2>
      <ul>
        <li><a href="#">CSDN博客</a></li>
        <li><a href="#">GitHub</a></li>
        <li><a href="#">新浪微博</a></li>
      </ul>
    </div>
  </div>
  <?php
$_from = $_smarty_tpl->tpl_vars['liuyan']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_liuyans_0_saved_item = isset($_smarty_tpl->tpl_vars['liuyans']) ? $_smarty_tpl->tpl_vars['liuyans'] : false;
$_smarty_tpl->tpl_vars['liuyans'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['liuyans']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['liuyans']->value) {
$_smarty_tpl->tpl_vars['liuyans']->_loop = true;
$__foreach_liuyans_0_saved_local_item = $_smarty_tpl->tpl_vars['liuyans'];
?>
  <div class="blogs" data-scroll-reveal="enter bottom over 1s" style="width:712px;">
    <div class="bloginfo">
      <ul>
        <li class="author"><a href="#"><?php echo $_smarty_tpl->tpl_vars['liuyans']->value['user_nickname'];?>
</a></li>
        <li class="timer">留言时间:<?php echo date('Y-m-d H:i',$_smarty_tpl->tpl_vars['liuyans']->value['liuyan_time']);?>
</li>
      </ul>
    </div>
    <span style="display:block;margin:13px 10px;text-indent:2em;"><?php echo $_smarty_tpl->tpl_vars['liuyans']->value['advice'];?>
</span>
  </div>
  <?php
$_smarty_tpl->tpl_vars['liuyans'] = $__foreach_liuyans_0_saved_local_item;
}
if ($__foreach_liuyans_0_saved_item) {
$_smarty_tpl->tpl_vars['liuyans'] = $__foreach_liuyans_0_saved_item;
}
?>
  <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
    <ul class="pagination">
      <li><?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>
</li>
    </ul>
  </div>
</div>

<footer>
  <p>Design by <a href="#">编程语言学习博客中心</a> <a href="/">粤ICP备11002373号-1</a></p>
</footer>
<a href="#asd" class="cd-top">Top</a>
</body>
</html>
<?php }
}

<?php
/* Smarty version 3.1.29, created on 2018-09-26 21:17:08
  from "D:\blog\app\home\view\develop.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bab86d467fb85_69891135',
  'file_dependency' => 
  array (
    'b6854add66f7b8f5ccfbc357f87f6c1fd4666e5c' => 
    array (
      0 => 'D:\\blog\\app\\home\\view\\develop.html',
      1 => 1537863618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Common/head.html' => 1,
  ),
),false)) {
function content_5bab86d467fb85_69891135 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="pagebg timer"> </div>
<div class="container">
  <h1 class="t_nav"><span>时光飞逝，机会就在我们眼前，何时找到了灵感，就要把握机遇，我们需要智慧和勇气去把握机会。</span><a href="#" class="n2">开发流程</a></h1>
  <div class="timebox">
    <ul id="list" style="display:none;">
      <li><span>2018-09-14 AM</span><a>确定前台、后台模板以及登录模板，选择集成IDE工具<font style="color:red">JetBrains PHPStorm2018.1</font>开发。</a></li>
      <li><span>2018-09-14 PM</span><a>整合模板，梳理多余模板以及制作需要的页面,建立blog数据库。</a></li>
      <li><span>2018-09-15 AM</span><a>着手后台的用户管理功能，分类管理等相关代码的编写.</a></li>
      <li><span>2018-09-15 PM</span><a>着手后台的博文管理功能，后台用户登录、退出、以及轻量级安全处理。</a></li>
      <li><span>2018-09-16 AM</span><a>大致完成后台的基础功能，评论管理最后做。</a></li>
      <li><span>2018-09-16 PM</span><a>整理前台的模板，去除不要的页面，制作系统需要的页面，修改页面的乱码问题，实现前台的登录，退出。</a></li>
      <li><span>2018-09-17 AP</span><a>实现首页展示、头像、评论、发布博文、优质博文展示、留言等功能。</a></li>
      <li><span>2018-09-18 AM</span><a>综合性测试系统，避免出现NOTICE、WARNING、FATAL等级别的错误。</a></li>
      <li><span>2018-09-18 PM</span><a>回顾总结，系统开发中出现的问题，以及后期对系统加入Ajax和其他功能。</a></li>
    </ul>
    <ul id="list2">
    </ul>
    <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/page2.js"><?php echo '</script'; ?>
>
  </div>
</div>
<footer>
  <p>Design by <a href="#">编程语言学习博客中心</a> <a href="/">粤ICP备11002373号-1</a></p>
</footer>
</body>
</html>
<?php }
}

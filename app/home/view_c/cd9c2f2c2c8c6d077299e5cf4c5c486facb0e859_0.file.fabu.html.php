<?php
/* Smarty version 3.1.29, created on 2018-09-16 22:51:25
  from "D:\blog\app\home\view\fabu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9e6deda0c4d5_28816103',
  'file_dependency' => 
  array (
    'cd9c2f2c2c8c6d077299e5cf4c5c486facb0e859' => 
    array (
      0 => 'D:\\blog\\app\\home\\view\\fabu.html',
      1 => 1537109403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Common/head.html' => 1,
  ),
),false)) {
function content_5b9e6deda0c4d5_28816103 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="pagebg ab"> </div>
<div class="container">
    <h1 class="t_nav"><span>不要轻易放弃。学习成长的路上，我们长路漫漫，只因学无止境。</span><a href="#" class="n1">发布博文</a><a href="#" class="n2">感谢分享</a></h1>
    <div class="news_infos">
        <form method="post" action="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=showFabuHandle" enctype="multipart/form-data">
            <p class="wenzi">博文标题: <input type="text" name="title3" class="bwbt"></p>
            <p class="wenzi">博文简介: <input type="text" name="intro" class="bwbt"></p>
            <p class="wenzi">博文类别: <select name="cat_yz_name" class="bwlb">
                <option>----请选择----</option>
                <?php
$_from = $_smarty_tpl->tpl_vars['yzcats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_yzcat_0_saved_item = isset($_smarty_tpl->tpl_vars['yzcat']) ? $_smarty_tpl->tpl_vars['yzcat'] : false;
$_smarty_tpl->tpl_vars['yzcat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['yzcat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['yzcat']->value) {
$_smarty_tpl->tpl_vars['yzcat']->_loop = true;
$__foreach_yzcat_0_saved_local_item = $_smarty_tpl->tpl_vars['yzcat'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['yzcat']->value['id'];?>
|<?php echo $_smarty_tpl->tpl_vars['yzcat']->value['yz_catname'];?>
">----<?php echo $_smarty_tpl->tpl_vars['yzcat']->value['yz_catname'];?>
----</option>
                <?php
$_smarty_tpl->tpl_vars['yzcat'] = $__foreach_yzcat_0_saved_local_item;
}
if ($__foreach_yzcat_0_saved_item) {
$_smarty_tpl->tpl_vars['yzcat'] = $__foreach_yzcat_0_saved_item;
}
?>
            </select>
            </p>
            <p class="wenzi">博文配图:<input type="file" name="yz_pic" class="bwpic"></p>
            <textarea rows="13" cols="90" style="border:1px solid deepskyblue;font-size:15px;padding-left:10px;padding-top:7px;" name="content" placeholder="请留下您的金玉良言吧" ></textarea>
            <?php if (!isset($_SESSION['home'])) {?>
            <span class="sply">您还未登录,不能发布博文....</span>
            <?php } else { ?>
            <input type="submit" value="发表博文" class="fabiao">
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
</div>

<footer>
    <p>Design by <a href="#">编程语言学习博客中心</a> <a href="/">粤ICP备11002373号-1</a></p>
</footer>
<a href="#asd" class="cd-top">Top</a>
</body>
</html>
<?php }
}

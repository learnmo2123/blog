<?php
/* Smarty version 3.1.29, created on 2018-09-16 15:03:50
  from "D:\blog\app\home\view\readMore.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9e005649f344_49790264',
  'file_dependency' => 
  array (
    'b8bb39b5ac134e910922f52d9e22560602708235' => 
    array (
      0 => 'D:\\blog\\app\\home\\view\\readMore.html',
      1 => 1537081424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Common/head.html' => 1,
  ),
),false)) {
function content_5b9e005649f344_49790264 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="pagebg ab"> </div>
<div class="container">
    <h1 class="t_nav"><span>学习他人之优点,方能补自身所不足,阅读让彼此快乐,分享让生活添彩</span><a href="#" class="n1">阅读更多</a><a href="#" class="n2">发表评论</a></h1>
    <div class="sidebar">
        <div class="about">
            <p class="avatar"> <img src="<?php if (isset($_SESSION['home'])) {?> <?php echo $_SESSION['home']['headimg'];?>
 <?php } else { ?> <?php echo C('domain.main');?>
/public/home/images/avatar.jpg <?php }?> " alt="loading....."> </p>
            <p class="abname">LEARNMO | <?php if (isset($_SESSION['home'])) {?> <?php echo $_SESSION['home']['nickname'];?>
 <?php } else { ?> 青春 <?php }?></p>
            <p class="abposition">系统架构</p>
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
    <!--阅读更多-->
    <div class="blogsbox">
        <!-- 单条数据不接受foreach  java中可以 这种错不太好查-->
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
                    <li class="timer">发布时间：<?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['article']->value['pubtime']);?>
</li>
                </ul>
            </div>
        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
           <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

        </div>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <div>此博文目前有: <?php echo $_smarty_tpl->tpl_vars['article']->value['comment_num'];?>
 条评论</div>
        </div>
        <?php
$_from = $_smarty_tpl->tpl_vars['comment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_comments_0_saved_item = isset($_smarty_tpl->tpl_vars['comments']) ? $_smarty_tpl->tpl_vars['comments'] : false;
$_smarty_tpl->tpl_vars['comments'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['comments']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comments']->value) {
$_smarty_tpl->tpl_vars['comments']->_loop = true;
$__foreach_comments_0_saved_local_item = $_smarty_tpl->tpl_vars['comments'];
?>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" style="width:712px;">
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="#"><?php echo $_smarty_tpl->tpl_vars['comments']->value['user_nickname'];?>
</a></li>
                    <li class="timer"><?php echo date('Y-m-d H:i',$_smarty_tpl->tpl_vars['comments']->value['post_date']);?>
</li>
                </ul>
            </div>
            <span style="display:block;margin:13px 10px;text-indent:2em;"><?php echo $_smarty_tpl->tpl_vars['comments']->value['content'];?>
</span>
        </div>
        <?php
$_smarty_tpl->tpl_vars['comments'] = $__foreach_comments_0_saved_local_item;
}
if ($__foreach_comments_0_saved_item) {
$_smarty_tpl->tpl_vars['comments'] = $__foreach_comments_0_saved_item;
}
?>
        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <ul class="pagination">
                <li><?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>
</li>
            </ul>
        </div>
    </div>

    <div class="news_infos">
        <form method="post" action="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=publish">
            <textarea rows="6" cols="90" style="border:1px solid deepskyblue;font-size:15px;padding-left:10px;padding-top:7px;" name="comment" placeholder="输入您的评论"></textarea>
            <input type="hidden" name="article_title" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
"/>
            <input type="hidden" name="article_id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"/>
            <?php if (isset($_SESSION['home'])) {?>
            <input type="submit" value="发表评论" class="fabiao">
            <?php } else { ?>
            尊敬的用户,您还未登录呢,无法进行评论......
            <?php }?>
        </form>
    </div>



</div>

<footer>
    <p>Design by <a href="#">编程语言学习博客中心</a> <a href="/">粤ICP备11002373号-1</a></p>
</footer>
<a href="#asd" class="cd-top">Top</a>
</body>
</html><?php }
}

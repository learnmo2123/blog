<?php
/* Smarty version 3.1.29, created on 2018-09-17 11:38:28
  from "D:\blog\app\admin\view\Privilege\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5b9f21b4c11246_66252802',
  'file_dependency' => 
  array (
    '306f98376579adbad50a47ea8e25c3d29ea9ba70' => 
    array (
      0 => 'D:\\blog\\app\\admin\\view\\Privilege\\login.html',
      1 => 1537155203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f21b4c11246_66252802 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台登录系统</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo C('domain.main');?>
/public/favicon.ico">
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
<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">           
            </div>         
            <form method="post" action="<?php echo C('domain.main');?>
/index.php?p=admin&m=privilege&a=login">
            <div class="panel loginbox">
                <div class="text-center margin-big padding-big-top"><h1>后台数据管理中心</h1></div>
                <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input input-big" name="acc" placeholder="登录账号" data-validate="required:请填写账号" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="pwd" placeholder="登录密码" data-validate="required:请填写密码" />

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                            <input type="text" class="input input-big" name="captcha" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" />
                           <img src="<?php echo C('domain.main');?>
/index.php?p=admin&m=privilege&a=captcha" alt="" width="100" height="32" class="passcode" style="height:43px;cursor:pointer;" id="captcha">
                        </div>
                        <div class="field" style="padding-top:30px;font-size:16px;">
                        <label class="log-lab"><input type="checkbox" name="seven" class="uniform" value="yes"> 7天内自动登录</label>
                        </div>
                    </div>
                <div style="padding:0px 30px;"><input type="submit" class="button button-block bg-main text-big input-big" value="登录"></div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    document.getElementById('captcha').onclick = function(){
        this.src = "<?php echo C('domain.main');?>
/index.php?p=admin&m=privilege&a=captcha&aa="+Math.random();
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}

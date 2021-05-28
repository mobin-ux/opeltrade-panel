<?php /* Smarty version 3.1.27, created on 2021-05-28 02:24:09
         compiled from "/home/ktlwzufz/public_html/tmpl/support.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:178853879760b05449bf54c0_96348272%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93bc637a0b6539820a5ad3d80badff172d4de3fe' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/support.tpl',
      1 => 1604515907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178853879760b05449bf54c0_96348272',
  'variables' => 
  array (
    'settings' => 0,
    'say' => 0,
    'errors' => 0,
    'userinfo' => 0,
    'frm' => 0,
    'ti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60b05449c6f523_65870811',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60b05449c6f523_65870811')) {
function content_60b05449c6f523_65870811 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/ktlwzufz/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '178853879760b05449bf54c0_96348272';
?>
<!DOCTYPE html>

<html lang="en">

<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

</style>

<head>
    <meta charset="utf-8">
    <title>Contact Us / <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</title>
    <link rel="shortcut icon" href="styles/assets/img/favicon/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="styles/assets/css/style.css">
    <?php echo '<script'; ?>
 src="styles/assets/libs/jquery/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="styles/assets/libs/modernizr/modernizr.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="styles/assets/js/common.js"><?php echo '</script'; ?>
>
</head>

<body>
    <div id="preloader" class="loader">
        <div class='sk-three-bounce'>
            <div class='sk-bounce-1 sk-child'></div>
            <div class='sk-bounce-2 sk-child'></div>
            <div class='sk-bounce-3 sk-child'></div>
        </div>
    </div>
	<div id="pjax-container">
		<div id="block-content" class="">
			<header class="header-clean" style="background-image:linear-gradient(to right, rgb(39 39 39 / 36%) 0%, rgb(49 49 49 / 37%) 100%), url(https://cryptohash.uk/support.jpeg);    background-size: cover;    background-position-y: center;    background-repeat: no-repeat;">
				<div class="header__decors">
                    
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12"><?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div>
                        <div class="col-lg-12">
                            <div class="header__content">
                                <h1 class="header__h1">
                                    Contact Us </h1>
                                <h2 class="header__h2">
                                    We offer the ideas that raise your investment above the expected income. </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section class="section section-contact textsite titlesite">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 section__title">
                            <h2 class="section__h2">
                                Support
                            </h2>
                            <h3 class="section__h3">
                                Our support team will answer any questions within 24 hours
                            </h3>
                        </div>
                        <div class="col-md-6">

                            <?php if ($_smarty_tpl->tpl_vars['say']->value == 'send') {?>
                            <div class="row">
                                <svg version="1.1" class="center" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 90px; height: auto;" xml:space="preserve">
                                    <ellipse style="fill:#facd8a;" cx="256" cy="256" rx="256" ry="255.832" />
                                    <polygon style="fill:#ffffff;" points="235.472,392.08 114.432,297.784 148.848,253.616 223.176,311.52 345.848,134.504 
	391.88,166.392 " />
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </div>
                            <br>
                            Message has been successfully sent. We will back to you in next 24 hours. Thank you.<br><br>
                            <?php } else { ?>

                            <?php echo '<script'; ?>
 language=javascript>
                                {
                                    if $userinfo.logged == 1
                                } {
                                    literal
                                }

                                function checkform() {
                                    if (document.mainform.message.value == '') {
                                        alert("Please type your message!");
                                        document.mainform.message.focus();
                                        return false;
                                    }
                                    return true;
                                } {
                                    /literal} {
                                    else
                                } {
                                    literal
                                }

                                function checkform() {
                                    if (document.mainform.name.value == '') {
                                        alert("Please type your full name!");
                                        document.mainform.name.focus();
                                        return false;
                                    }
                                    if (document.mainform.email.value == '') {
                                        alert("Please enter your e-mail address!");
                                        document.mainform.email.focus();
                                        return false;
                                    }
                                    if (document.mainform.message.value == '') {
                                        alert("Please type your message!");
                                        document.mainform.message.focus();
                                        return false;
                                    }
                                    return true;
                                } {
                                    /literal} { /
                                    if
                                }

                            <?php echo '</script'; ?>
>


                            <form method=post name=mainform onsubmit="return checkform()">
                                <input type=hidden name=a value=support>
                                <input type=hidden name=action value=send>


                                <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>

                                <?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image'] == 1) {?>
                                <div class="alertnoti alert-warning">Invalid turing image.</div>

                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_email'] == 1) {?>
                                <div class="alertnoti alert-warning">Invalid email address.</div>

                                <?php }?>

                                <?php }?>

                                <div class="form-group">
                                    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']) {?>
                                    <input type="text" class="form-control" placeholder="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['name']);?>
" readonly>
                                    <?php } else { ?>
                                    <input type="text" name="name" value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" class="form-control" placeholder="Your Name">
                                    <?php }?>

                                </div>
                                <div class="form-group">
                                    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']) {?>
                                    <input type="text" class="form-control" placeholder="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['email']);?>
" readonly>
                                    <?php } else { ?>
                                    <input type="text" name="email" value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" class="form-control" placeholder="Your Email">
                                    <?php }?>

                                </div>
                                <div class="form-group">
                                    <textarea name="message" rows="8" class="form-control" placeholder="Your message"><?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['message'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
</textarea>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['validation_enabled'] == 1) {?>
                                <div class="form-group">
                                    <label id="js-captcha-label">Enter captcha *</label>
                                    <div class="input-group">
                                        <input type="text" name="validation_number" class="form-control">
                                        <span class="input-group-addon" style="padding: 0;padding-left: 0px;border: none;background: none;padding-left: 10px;">
                                            <img src="<?php echo smarty_modifier_myescape(encurl(" ?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
">
                                        </span>
                                    </div>
                                </div>
                                <?php }?>

                                <div class="form-group text-right">
                                    <button class="btn btn-warning">Send</button>
                                </div>
                            </form>
                            <?php }?>
                        </div>
                        <div class="col-md-6">
                            <h4>
                                Main office:<br>
                                New York 1735 Bingamon Branch Road.
                            </h4>
                            <br>
                            <p class="section__text">Use contact form after creating support ticket in dashboard, ad messages send on our e-mail!</p>
                            <a href="mailto:<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['support_email']);?>
" class="contact section-contact__contact" target="_blank">
                                <img src="styles/assets/img/icons/mail.png" alt=""> <span style="color: #facd8a;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['support_email']);?>
</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section><?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
      
        <link rel="stylesheet" href="styles/assets/libs/bootstrap/fileinput.min.css">
        <?php echo '<script'; ?>
 src="styles/assets/libs/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="styles/assets/libs/bootstrap/fileinput.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            addClass(document.getElementById('js-menu-contact'), 'menu__link--active');

        <?php echo '</script'; ?>
>
    </div>
</body>

</html>
<?php }
}
?>
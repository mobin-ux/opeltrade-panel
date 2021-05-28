<?php /* Smarty version 3.1.27, created on 2021-05-25 23:56:34
         compiled from "/home/ktlwzufz/public_html/tmpl/after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:143476707760ad8eb2840d22_53788872%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c335ce0e7c32fc4509cb29838f0db3686bc49b6' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/after_registration.tpl',
      1 => 1604395146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143476707760ad8eb2840d22_53788872',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60ad8eb2860978_30268874',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60ad8eb2860978_30268874')) {
function content_60ad8eb2860978_30268874 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/ktlwzufz/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '143476707760ad8eb2840d22_53788872';
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
    <title>Registration / <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
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
        <div id="block-content">
            <section class="section section-auth bagblack textsite titlesite">
                <div class="container">
                    <div class="row mt-5 mb-5">
                        <div class="col-md-offset-3 col-md-6">
                            <div class="b--shadow b--auth">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="b--auth__left">
                                            <div class="text-center">
                                                <a href="/" class="logo" data-pjax="">
                                                    <img src="styles/assets/img/logo-img.svg" alt="Golden" style="width: 180px;">
                                                </a>
                                            </div>
                                            <div class="b--shadow__title-bordered">
                                                <div class="title-bordered__wrapper">
                                                    <div class="title-bordered">REGISTRATION COMPLETED</div>
                                                </div>
                                            </div>
                                            <a href="/" data-pjax="">
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
                                            </a>
                                            <br>

                                            Thank you for joining our program.<br>
                                            You are now an official member of this program. You can login to your account to start investing with us and use all the services that are available for our members.
                                            <br>
                                            <br>

                                            <b>Important:</b> Do not provide your login and password to anyone!

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
      
        <link rel="stylesheet" href="styles/assets/libs/bootstrap/fileinput.min.css">
        <?php echo '<script'; ?>
 src="styles/assets/libs/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="styles/assets/libs/bootstrap/fileinput.min.js"><?php echo '</script'; ?>
>
    </div>
</body>

</html>
<?php }
}
?>
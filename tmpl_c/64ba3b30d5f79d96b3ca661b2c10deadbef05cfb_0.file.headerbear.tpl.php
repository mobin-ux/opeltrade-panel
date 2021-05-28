<?php /* Smarty version 3.1.27, created on 2021-05-25 06:17:29
         compiled from "/home/ktlwzufz/public_html/tmpl/headerbear.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28226555760ac967946dea5_46499571%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64ba3b30d5f79d96b3ca661b2c10deadbef05cfb' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/headerbear.tpl',
      1 => 1604395146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28226555760ac967946dea5_46499571',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60ac9679476669_66209831',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60ac9679476669_66209831')) {
function content_60ac9679476669_66209831 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/ktlwzufz/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '28226555760ac967946dea5_46499571';
?>
<!DOCTYPE html>

<html lang="en">


<head>
	<meta charset="utf-8">
	<title><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 Building your future with digital assests</title>
	<link rel="shortcut icon" href="styles/assets/img/favicon/favicon.png" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="styles/assets/css/style.css">
	<link rel="stylesheet" href="styles/assets/css/helper.css">
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
		<div id="block-content" class="page--cabinet">
			<header class="header-bear header--cabinet">
				<div class="container">
					<div class="row">
						<div class="col-lg-12"><?php echo $_smarty_tpl->getSubTemplate ("menua.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div>
					</div>
				</div>
			</header><?php }
}
?>
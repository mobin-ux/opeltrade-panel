<?php /* Smarty version 3.1.27, created on 2021-05-28 04:44:11
         compiled from "/home/ktlwzufz/public_html/tmpl/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:53499926860b0751b328759_74547705%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f081a6f304ecd881ec42f02353675ddaed456e7' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/menu.tpl',
      1 => 1604395146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53499926860b0751b328759_74547705',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60b0751b3350a0_21131897',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60b0751b3350a0_21131897')) {
function content_60b0751b3350a0_21131897 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '53499926860b0751b328759_74547705';
?>
<div class="topline header__topline">
	<a href="/" class="logo topline__logo" width="100" data-pjax>
		<img width="40" height="40" src="styles/assets/img/logo-img.svg">
	</a>
	<nav class="menu topline__menu header__menu" id="js-menu"> <a href="/" class="menu__link" id="js-menu-home" data-pjax>
                                        Home
                                    </a>
		<a href="?a=cust&amp;page=about" class="menu__link" id="js-menu-about" data-pjax>
                                        About us
                                    </a>
		<a href="?a=cust&amp;page=investment" class="menu__link" id="js-menu-investment" data-pjax>
                                        Investment
                                    </a>
		<a href="?a=cust&amp;page=partners" class="menu__link" id="js-menu-partners" data-pjax>
                                        Partners
                                    </a>
		<a href="?a=support" class="menu__link" id="js-menu-contact" data-pjax>
                                        Contact us
                                    </a>
		<span class="dropdown menu__link">
                                            <span class="dropdown-toggle" data-toggle="dropdown">
                                                <img src="styles/assets/default/images/flags/en.svg" 
                                                     style="width: 20px;">
                                            </span>
		<ul class="dropdown-menu">
			<li>
				<a href="#" data-pjax>
					<img src="styles/assets/default/images/flags/en.svg" style="width: 20px;" class="mr-1">English</a>
			</li>
			<li>
				<a href="#" data-pjax>
					<img src="styles/assets/default/images/flags/ru.svg" style="width: 20px;" class="mr-1">Русский</a>
			</li>
		</ul>
		</span>
	
	</nav>
	<div class="topline__controls">
		<div class="header__login"><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?> <a href="?a=login" class="btn btn-warning" data-pjax>
                                             &nbsp; Login
                                        </a>
			<a href="?a=signup" class="btn btn-signup" data-pjax>
                                             &nbsp; Register
                                        </a>
			<?php } else { ?>
			<a href="?a=account" class="btn btn-warning" data-pjax>
				<img src="styles/assets/img/user.png">&nbsp; User's area</a><?php }?></div> <span class="burger header__burger" id="js-menu-burger">
                                        <i class="fa fa-bars"></i>
                                    </span>
	</div>
</div><?php }
}
?>
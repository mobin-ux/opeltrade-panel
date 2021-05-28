<?php /* Smarty version 3.1.27, created on 2021-05-28 06:15:48
         compiled from "/home/ktlwzufz/public_html/tmpl/menua.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:117077760160b08a948e7875_57341203%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e15bbff1ea8d149d1d6551078f845b4e4b6f0e8' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/menua.tpl',
      1 => 1604395146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117077760160b08a948e7875_57341203',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60b08a948f1d36_92655713',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60b08a948f1d36_92655713')) {
function content_60b08a948f1d36_92655713 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/ktlwzufz/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '117077760160b08a948e7875_57341203';
?>
<div class="topline header__topline">
	<div class="topline__logo">
		<a href="/" class="logo" data-pjax>
			<img width="40" height="40" src="styles/assets/img/logo-img.svg">
		</a>
	</div>
	<div class="topline__controls">
		<div class="dropdown topline__dropdown"> <a href="#" class="dropdown-toggle userdropdown topline__userdropdown" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
                                             <span class="caret userdropdown__caret"></span>
                                        </a>
			<ul class="dropdown-menu" aria-labelledby="userDropdown">
				<li> <a href="?a=account" data-pjax>
                                                    Dashboard
                                                </a>
				</li>
				<li> <a href="?a=support" data-pjax>
                                                    Support
                                                </a>
				</li>
				<li> <a href="?a=logout">
                                                    Log out
                                                </a>
				</li>
			</ul>
		</div> <span class="burger header__burger" id="js-menu-burger">
                                        <i class="fa fa-bars"></i>
                                    </span>
	</div>
</div>
<nav class="menu header__menu" id="js-menu"> <a href="?a=account" class="menu__link" id="js-sidebar-cabinet" data-pjax>
                                    Dashboard
                                </a>
	<a href="?a=deposit" class="menu__link" id="js-sidebar-invest" data-pjax>
                                    Add Deposit
                                </a>
	<a href="?a=withdraw" class="menu__link" id="js-sidebar-withdraw" data-pjax>
                                    Withdraw
                                </a>
	<a href="?a=deposit_list" class="menu__link" id="js-sidebar-deposits" data-pjax>
                                    Deposits
                                </a>
	<a href="?a=history" class="menu__link" id="js-sidebar-history" data-pjax>
                                    History
                                </a>
	<a href="?a=referals" class="menu__link" id="js-sidebar-partners" data-pjax>
                                    Partners
                                </a>
	<a href="?a=edit_account" class="menu__link" id="js-sidebar-settings" data-pjax>
                                    Settings
                                </a>
</nav><?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2021-05-25 06:14:38
         compiled from "/home/ktlwzufz/public_html/tmpl/custom/partners.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:39411939260ac95cec7ef19_98741764%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4761d86b2b90941c2e1891f5b6104fa16e71552a' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/custom/partners.tpl',
      1 => 1604515623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39411939260ac95cec7ef19_98741764',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60ac95ceca1829_78064634',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60ac95ceca1829_78064634')) {
function content_60ac95ceca1829_78064634 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/ktlwzufz/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '39411939260ac95cec7ef19_98741764';
?>
<!DOCTYPE html>

<html lang="en">


<head>
	<meta charset="utf-8">
	<title>Partners / <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
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
			<header class="header-clean" style="background-image:linear-gradient(to right, rgb(39 39 39 / 36%) 0%, rgb(49 49 49 / 37%) 100%), url(https://i.ibb.co/DKnvSGL/Whats-App-Image-2020-10-24-at-11-31-29-PM.jpg);    background-size: cover;    background-position-y: center;    background-repeat: no-repeat;">
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
                                    Partners                                </h1>
								<h2 class="header__h2">
                                    We offer the ideas that raise your investment above the expected income.                                </h2>
							</div>
						</div>
					</div>
				</div>
			</header>
			<section class="section textsite titlesite">
				<div class="container">
					<div class="row">
						<div class="col-md-12 section__title">
							<h2 class="section__h2">
                        Referral Comission
                    </h2>
							<h3 class="section__h3">
                        2 level affilate program
                    </h3>
						</div>
						<div class="col-md-6">
							<p class="section__text">At <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
, we believe that advertising about our services by our satisfied clients is the best way to grow business. Keeping this in mind, <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 founded an amazing lucrative reward in terms of two level affiliate program.</p>
							<p class="section__text"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 is paying for the popularization of its investment program and anyone can be rewarded. To benefit from this, you have to refer your friends, relatives and colleagues in your network through a referral link.
								<br>You can earn on our affiliate program and withdraw referral rewards regardless of the presence of a deposit in the project.
								<br>
								<br>You will receive <b>3%</b> of investments your referrals and <b>1%</b> of investments your 2 level referrals. Withdraw your money you can ar any time.</p>
						</div>
						<div class="col-md-6">
							<div class="affilates section-affilate__affilates">
								<div class="affilate affilates__affilate">
									<div class="affilate__label">1 level</div>
									<div class="affilate__value">3%</div>
								</div>
								<div class="affilate affilates__affilate">
									<div class="affilate__label">2 level</div>
									<div class="affilate__value">1%</div>
								</div>
							</div>
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
			addClass(document.getElementById('js-menu-partners'), 'menu__link--active');
		<?php echo '</script'; ?>
>
	</div>
</body>

</html><?php }
}
?>
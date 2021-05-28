<?php /* Smarty version 3.1.27, created on 2021-05-27 15:09:00
         compiled from "/home/ktlwzufz/public_html/tmpl/custom/about.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:184696866860afb60c2b2f64_10248995%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05d9ae8af8fe6e6197104da74f192e6f4ed3f993' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/custom/about.tpl',
      1 => 1604515455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184696866860afb60c2b2f64_10248995',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60afb60c2d2c77_30929056',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60afb60c2d2c77_30929056')) {
function content_60afb60c2d2c77_30929056 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/ktlwzufz/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '184696866860afb60c2b2f64_10248995';
?>
<!DOCTYPE html>

<html lang="en">


<head>
	<meta charset="utf-8">
	<title>About Us / <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
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
			<header class="header-clean" style="   background-image:linear-gradient(to right, rgb(39 39 39 / 36%) 0%, rgb(49 49 49 / 37%) 100%), url(http://cryptohash.uk/images/new/1.jpg);    background-size: cover;    background-position-y: center;    background-repeat: no-repeat;">
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
                                    About Us                                </h1>
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
                    About us
                </h2>
							<h3 class="section__h3">
                    Overview
                </h3>
						</div>
						<div class="col-md-6">
							<p class="section__text"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 is a phenomenal crypto currency exchange and investment company. Our team of professionals are enthusiastic about getting the world involved in the crypto ecosystem. <br><br>We give our clients the best value for their money by securing capital gains and unbeatable return on investments as incentive for doing business with us. <br><br>We are an evolving blockchain and crypto company with the vision of becoming an invory tower of excellence in all forms of crypto and blockchain services. Click Here to get simple guideline on how to join our community of intelligent investors!
</p>
							<br>
							<p class="section__text"></p>
						</div>
						<div class="col-md-6">
							<img src="styles/assets/img/about-overview.png" class="img-responsive section__img mt-5 mt-md-3 mt-lg-0" alt="About our company">
						</div>
					</div>
				</div>
			</section>
			<section class="section textsite titlesite">
				<div class="container">
					<div class="row">
						<div class="col-md-12 section__title">
							<h2 class="section__h2">
                    Join Us today
                </h2>
							<h3 class="section__h3">
                    
                </h3>
						</div>
						<div class="col-md-6">
							<img src="styles/assets/img/about-what-we-do.png" class="img-responsive section__img mt-3 mt-lg-0 mb-5 mb-md-0" alt="What we do">
						</div>
						<div class="col-md-6">
							<p class="section__text">Join our trading program today, with just little or no experience about Cryptocurrency, you can take advantage in one of the world's best trading programs. Niexon trades and develop portfolios for companies, individuals and organizations around the world.</p>
							<br>
							<p class="section__text"></p>
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
			addClass(document.getElementById('js-menu-about'), 'menu__link--active');
		<?php echo '</script'; ?>
>
	</div>
</body>

</html><?php }
}
?>
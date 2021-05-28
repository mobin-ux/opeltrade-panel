<?php /* Smarty version 3.1.27, created on 2021-05-28 06:21:08
         compiled from "/home/ktlwzufz/public_html/tmpl/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:197775317260b08bd4bcb0c5_20595309%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3190268da68fc807d01f849b3e1b633d02e84d58' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/home.tpl',
      1 => 1622180990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197775317260b08bd4bcb0c5_20595309',
  'variables' => 
  array (
    'settings' => 0,
    'userinfo' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60b08bd4c60da8_43123474',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60b08bd4c60da8_43123474')) {
function content_60b08bd4c60da8_43123474 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/ktlwzufz/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '197775317260b08bd4bcb0c5_20595309';
?>
<!DOCTYPE html>
<html lang="en">


<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<meta charset="utf-8">
	<title>Home / <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</title>
	<?php echo '<script'; ?>
 src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"><?php echo '</script'; ?>
>
	<coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd"
		background-color="#363030" locale="en" font-color="#facd8a"></coingecko-coin-price-marquee-widget>
	<link rel="shortcut icon" href="styles/assets/img/favicon/favicon.png" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="styles/assets/css/style.css">
	<link rel="stylesheet" href="styles/assets/css/extra.css">
	<link rel="stylesheet" href="styles/assets/css/themefisher-fonts.css">
	<?php echo '<script'; ?>
 src="styles/assets/libs/jquery/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="styles/assets/libs/modernizr/modernizr.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="styles/assets/js/common.js"><?php echo '</script'; ?>
>




	<link href="//vjs.zencdn.net/7.8.2/video-js.min.css" rel="stylesheet">
	<?php echo '<script'; ?>
 src="//vjs.zencdn.net/7.8.2/video.min.js"><?php echo '</script'; ?>
>
  
  
	<!-- unpkg : use the latest version of Video.js -->
  <link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
  <?php echo '<script'; ?>
 src="https://unpkg.com/video.js/dist/video.min.js"><?php echo '</script'; ?>
>
  
  <!-- unpkg : use a specific version of Video.js (change the version numbers as necessary) -->
  <link href="https://unpkg.com/video.js@7.8.2/dist/video-js.min.css" rel="stylesheet">
  <?php echo '<script'; ?>
 src="https://unpkg.com/video.js@7.8.2/dist/video.min.js"><?php echo '</script'; ?>
>
  
  <!-- cdnjs : use a specific version of Video.js (change the version numbers as necessary) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.8.1/video-js.min.css" rel="stylesheet">
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.8.1/video.min.js"><?php echo '</script'; ?>
>
	<style>
		html,
		body {
			position: relative;
			height: 100%;
		}



		.swiper-container {
			width: 100%;
			height: 100%;
		}

		.swiper-slide {
			text-align: center;
			font-size: 18px;
			background: #fff;

			/* Center slide text vertically */
			display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			-webkit-align-items: center;
			align-items: center;
		}

		.swiper-pagination-bullet {
			width: 20px;
			height: 20px;
			text-align: center;
			line-height: 20px;
			font-size: 12px;
			color: #000;
			opacity: 1;
			background: rgba(0, 0, 0, 0.2);
		}

		.swiper-pagination-bullet-active {
			color: #fff;
			background: #007aff;
		}

		/* @media screen and (max-width: 480px) {
			.swiper-pagination {
				bottom: 362px !important;
			}
		} */
		@media screen and (max-width: 480px) {
			.swiper-pagination-bullet {
				background: rgb(21 132 103 / 65%);
			}

			.swiper-pagination-bullet-active {
				color: #fff;
				background: #158467;
			}

			.swiper-container {
				padding: 0;
				margin: 108px 0 0 0;
				position: absolute;
				height: 50%;
				left: 0;
				max-width: 100%;
			}

			.swiper-wrapper {
				height: 102%;
				max-width: 100%;

			}

			.swiper-slide {
				max-width: 100%;
				height: 27%;
			}

			.img-slider {
				max-width: 100%;
			}

			.swiper-pagination {
				bottom: 380px !important;
			}


			.class-res-ma {
				margin: 257px 0 0 0 !important;
			}
		}

		@media screen and (max-width: 328px) {
			.swiper-slide {
				max-width: 100%;
				height: 22%;
			}

			.swiper-pagination {

				bottom: 470px !important;
			}
		}

		@media screen and (max-width: 320px) {
			.swiper-slide {
				height: 22%;
			}

			.swiper-pagination {
				bottom: 471px !important;
			}
		}


		@media screen and (max-width: 332px) {
			.swiper-slide {
				max-width: 100%;
				height: 23%;
			}

			.swiper-pagination {
				bottom: 451px !important;
			}
		}
	</style>
	<?php echo '<script'; ?>
 src="styles/assets/js/calculator.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="styles/assets/css/swiper-bundle.min.css">




	<style>
		html,
		body {
			position: relative;
			height: 100%;
		}



		.swiper-container {
			width: 100%;
			height: 100%;
		}

		.swiper-slide {
			text-align: center;
			font-size: 18px;
			background: #fff;

			/* Center slide text vertically */
			display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			-webkit-align-items: center;
			align-items: center;
		}

		.swiper-pagination-bullet {
			width: 20px;
			height: 20px;
			text-align: center;
			line-height: 20px;
			font-size: 12px;
			color: #000;
			opacity: 1;
			background: rgba(0, 0, 0, 0.2);
		}

		.swiper-pagination-bullet-active {
			color: #fff;
			background: #007aff;
		}

		/* @media screen and (max-width: 480px) {
			.swiper-pagination {
				bottom: 362px !important;
			}
		} */
		@media screen and (max-width: 480px) {
			.swiper-pagination-bullet {
				background: rgb(21 132 103 / 65%);
			}

			.swiper-pagination-bullet-active {
				color: #fff;
				background: #158467;
			}

			.swiper-container {
				padding: 0;
				margin: 108px 0 0 0;
				position: absolute;
				height: 50%;
				left: 0;
				max-width: 100%;
			}

			.swiper-wrapper {
				height: 102%;
				max-width: 100%;

			}

			.swiper-slide {
				max-width: 100%;
				height: 27%;
			}

			.img-slider {
				max-width: 100%;
			}

			.swiper-pagination {
				bottom: 380px !important;
			}


			.class-res-ma {
				margin: 257px 0 0 0 !important;
			}
		}

		@media screen and (max-width: 328px) {
			.swiper-slide {
				max-width: 100%;
				height: 22%;
			}

			.swiper-pagination {

				bottom: 470px !important;
			}
		}

		@media screen and (max-width: 320px) {
			.swiper-slide {
				height: 22%;
			}

			.swiper-pagination {
				bottom: 471px !important;
			}
		}


		@media screen and (max-width: 332px) {
			.swiper-slide {
				max-width: 100%;
				height: 23%;
			}

			.swiper-pagination {
				bottom: 451px !important;
			}
		}
	</style>

	<!-- <link rel="stylesheet" type="text/css" href="css/style.new.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<!-- <?php echo '<script'; ?>
 type="text/javascript" src="js/Version3/jquery.min.js"><?php echo '</script'; ?>
> -->
	<!-- <?php echo '<script'; ?>
 src="js/Version3/bootstrap.min.js"><?php echo '</script'; ?>
> -->
	<!-- <?php echo '<script'; ?>
 src="img/owl.carousel.min.js"><?php echo '</script'; ?>
> -->
	<!-- <?php echo '<script'; ?>
 type="text/javascript" src="js/js.min.js"><?php echo '</script'; ?>
>  -->
	<!-- <link href="css/video-js.css" rel="stylesheet">
	<?php echo '<script'; ?>
 src="js/videojs-ie8.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/video.js"><?php echo '</script'; ?>
> -->


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
			<header class="header header--home">
				<div class="header__mainimage"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="topline header__topline">
								<a href="/" class="logo topline__logo" width="100" data-pjax>
									<img width="40" height="40" src="styles/assets/img/logo-img.svg">
								</a>
								<nav class="menu topline__menu header__menu" id="js-menu"> <a href="/"
										class="menu__link" id="js-menu-home" data-pjax>
										Home
									</a>
									<a href="?a=cust&amp;page=about" class="menu__link" id="js-menu-about" data-pjax>
										About us
									</a>
									<a href="?a=cust&amp;page=investment" class="menu__link" id="js-menu-investment"
										data-pjax>
										Investment
									</a>
									<a href="?a=cust&amp;page=partners" class="menu__link" id="js-menu-partners"
										data-pjax>
										Partners
									</a>
									<a href="?a=support" class="menu__link" id="js-menu-contact" data-pjax>
										Contact us
									</a>
									<span class="dropdown menu__link">
										<span class="dropdown-toggle" data-toggle="dropdown">
											<img src="styles/assets/default/images/flags/en.svg" style="width: 20px;">
										</span>
										<ul class="dropdown-menu">
											<li>
												<a href="#" data-pjax>
													<img src="styles/assets/default/images/flags/en.svg"
														style="width: 20px;" class="mr-1">English</a>
											</li>
											
										</ul>
									</span>

								</nav>
								<div class="topline__controls">
									<div class="header__login"><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?> <a href="?a=login"
											class="btn btn-warning" data-pjax>
											&nbsp; Login
										</a>
										<a href="?a=signup" class="btn btn-signup" data-pjax>
											&nbsp; Register
										</a>
										<?php } else { ?>
										<a href="?a=account" class="btn btn-warning" data-pjax>
											<img src="styles/assets/img/user.png">&nbsp; User's area</a><?php }?></div>
									<span class="burger header__burger" id="js-menu-burger">
										<i class="fa fa-bars"></i>
									</span>
								</div>
							</div>
						</div>

						<!-- Swiper -->
						<div class="swiper-container" style="padding: 0;
															margin: 108px 0 0 0;
															position: absolute;
															height: 50%;
															left: 0;
															max-width: 100%;">
							<div class="swiper-wrapper">
							    <div class="swiper-slide"> <img width="5000" src="https://i.ibb.co/rF6JQkt/OPT3.jpg"
										class="img-slider"> </div>
								<div class="swiper-slide"> <img width="5000" src="https://i.ibb.co/QM353LK/OPT2.jpg"
										class="img-slider"> </div>
								<div class="swiper-slide"> <img width="5000" src="https://i.ibb.co/rF6JQkt/OPT3.jpg"
										class="img-slider"> </div>
							</div>
							<!-- Add Pagination -->
							<div class="swiper-pagination"></div>
						</div>

						<div class="col-md-8 col-lg-6 class-res-ma" style="margin: 500px 0 0 0;">
							<div class="header__content">
								<h1 class="header__h1">
									Start investing with as little as 200$ today
								</h1>
								<p class="header__text"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 is an innovative company engaged
									<br>in investments in Cryptocurrencies and provide the stable income of 15% weekly -
									50% weekly.
								</p><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?> <a href="?a=signup" class="btn btn-warning header__btn"
									data-pjax>
									Register
								</a>
								<?php } else { ?> <a href="?a=deposit" class="btn btn-warning header__btn" data-pjax>
									Investment
								</a>
								<?php }?>
							
							</div>
							</div><br><br>
						</div>
								<div class="container">
					<div class="row">
						<div class="col-md-12 section__title">
							<h2 class="section__h2">
							<br><br>	Our Testimonies
							</h2>
							<h3 class="section__h3">
								
							</h3>
						</div>
						</div>







			












						<div class="col-md-6 col-lg-5">
						</div>
					</div>
				</div>

			</header>
<div class="powr-video-slider" id="44fc993b_1603724717"></div><?php echo '<script'; ?>
 src="https://www.powr.io/powr.js?platform=html"><?php echo '</script'; ?>
>




			<section class="section section-home textsite titlesite">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-7">
							<div class="section-home__title">
								<h2 class="section__h2">
									About <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>

								</h2>
								<h3 class="section__h3">

								</h3>
							</div>
							<p class="section__text">
								<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 is a phenomenal crypto currency exchange and investment company. Our team
								of professionals are enthusiastic about getting the world involved in the crypto
								ecosystem. We give our clients the best value for their money by securing capital gains
								and unbeatable return on investments as incentive for doing business with us. We are an
								evolving blockchain and crypto company with the vision of becoming an ivory tower of
								excellence in all forms of crypto and blockchain services. Register with us to get
								simple guideline on how to join our community of intelligent investors!
								<br><br>
								Join our trading program today, with just little or no experience about Cryptocurrency,
								you can take advantage in one of the world's best trading programs. <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 mine,
								trades and develop portfolios for companies, individuals and organizations around the
								world.</p> <a href="?a=about" class="btn btn-outline-warning section-home__btn textsite"
								data-pjax>
								Learn more
							</a>
						</div>
						<div class="col-md-6 col-lg-5">
							<div class="presentation section-home__presentation">
								<video src="styles/assets/presenta.mp4" poster="styles/assets/img/presentation-soon.png"
									class="img-responsive section__img" controls />
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="services textsite titlesite">
				<div class="container">
					<div class="row">
						<div class="col-md-12 section__title">
							<h2 class="section__h2">
								Our Features
							</h2>
							<h3 class="section__h3">
								Accruals in all plans are carried out for life.
							</h3>
						</div>
						<div class="col-md-4">
							<div class="service-item text-center">
								<div class="services-icon"> <i class="tf-profile-male"></i>
								</div>
								<h4 class="service-title">TEAM</h4>
								<p class="service-description text-justify">We are a well-coordinated team that takes
									responsibility for fulfilling the contract. You could not find a better place.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="service-item text-center">
								<div class="services-icon"> <i class="tf-document3"></i>
								</div>
								<h4 class="service-title">WARRANTY</h4>
								<p class="service-description text-justify">The stability of our company and income
									guarantee that your deposit is safe throughout the entire investment plan.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="service-item text-center">
								<div class="services-icon"> <i class="tf-chat"></i>
								</div>
								<h4 class="service-title">24/7 SUPPORT</h4>
								<p class="service-description text-justify">Our support team is at your disposal 24
									hours a day, 7 days a week. If you have any questions, write to us.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item text-center">
							<div class="services-icon"> <i class="tf-wallet"></i>
							</div>
							<h4 class="service-title">INSTANT WITHDRAWALS</h4>
							<p class="service-description text-justify">You can withdraw money at any time if your
								balance allows it. Minimum withdrawal amount is only 2 USD</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item text-center">
							<div class="services-icon"> <i class="tf-desktop"></i>
							</div>
							<h4 class="service-title">DEDICATED SERVER</h4>
							<p class="service-description text-justify">Our site is located on a very secure and stable
								dedicated server.You do not have to worry about any breaks in its operation.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item text-center">
							<div class="services-icon"> <i class="tf-lock2"></i>
							</div>
							<h4 class="service-title">EV-SSL SAFETY</h4>
							<p class="service-description text-justify">Your data is secured with an EV-SSL certificate,
								guaranteeing the confidentiality of their transmission.</p>
						</div>
					</div>
				</div>
			</section>
			<section class="inv-plans bg-iv-plan textsite titlesite bagblack">
				<div class="container">
					<div class="col-md-12 section__title">
						<h2 class="section__h2">
							Choose a suitable investment plan
						</h2>
						<h3 class="section__h3">
							What do we offer to investors?
						</h3>
					</div>
					<div class="row">
						<div class="col-sm-4  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s" cellspacing="0"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;">
							<div class="plans">
								<div class="plan_details text-center">
									<div class="plan_title">Beginner Plan</div>
									<div class="percentage">15%</div>
									<p class="profit_duration">After 7 Days</p>
									<ul class="list-items">
										<li class="list-item"></li>
										<li class="list-item">Minimum $200</li>
										<li class="list-item">Maximum $999</li>
										<li class="list-item">Instant Withdrawal</li>
										<li class="list-item">1-5% Affiliate Bonus</li>

									</ul>
									<div class="plans_btn"><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?> <a class="btn btn-warning"
											href="?a=login">Deposit Now</a>
										<?php } else { ?> <a class="btn btn-warning" href="?a=deposit">Deposit Now</a>
										<?php }?></div>
								</div>
							</div>
						</div>
						<div class="col-sm-4  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s" cellspacing="0"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;">
							<div class="plans cyne">
								<div class="plan_details text-center">
									<div class="plan_title">Professional Plan</div>
									<div class="percentage">20%</div>
									<p class="profit_duration">After 7 Days</p>
									<ul class="list-items">
										<li class="list-item"></li>
										<li class="list-item">Minimum $1,000</li>
										<li class="list-item">Maximum $4,999</li>
										<li class="list-item">Instant Withdrawal</li>
										<li class="list-item">1-5% Affiliate Bonus</li>
									</ul><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?> <a class="btn btn-warning" href="?a=login">Deposit
										Now</a>
									<?php } else { ?> <a class="btn btn-warning" href="?a=deposit">Deposit Now</a>
									<?php }?>
								</div>
							</div>
						</div>
						<div class="col-sm-4  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s" cellspacing="0"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;">
							<div class="plans magenta">
								<div class="plan_details text-center">
									<div class="plan_title">Trader Plan</div>
									<div class="percentage">35%</div>
									<p class="profit_duration">After 7 Days</p>
									<ul class="list-items">
										<li class="list-item"></li>
										<li class="list-item">Minimum $5,000</li>
										<li class="list-item">Maximum $1,000,000</li>
										<li class="list-item">Instant Withdrawal</li>
										<li class="list-item">1-5% Affiliate Bonus</li>
									</ul><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?> <a class="btn btn-warning" href="?a=login">Deposit
										Now</a>
									<?php } else { ?> <a class="btn btn-warning" href="?a=deposit">Deposit Now</a>
									<?php }?>
								</div>
							</div>
						</div>
					</div>
					<br>
					<br>
					<section class="section section-affilate textsite titlesite">
						<div class="container">
							<div class="row">
								<div class="col-md-12 section__title">
									<h2 class="section__h2">
										Referral Commission
									</h2>
									<h3 class="section__h3">
										2 level affiliate program
									</h3>
								</div>
								<div class="col-md-6">
									<p class="section__text">At <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
, we believe that advertising about
										our services by our satisfied clients is the best way to grow business. Keeping
										this in mind, <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 founded an amazing lucrative reward in terms
										of two level affiliate program.</p>
									<br>
									<p class="section__text"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 is paying for the popularization of
										its investment program and anyone can be rewarded. To benefit from this, you
										have to refer your friends, relatives and colleagues in your network through a
										referral link. You can earn on our affiliate program and withdraw referral
										rewards regardless of the presence of a deposit in the project.</p>
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
					</section>
					<section class="section textsite titlesite bagblack padsection">
						<div class="container">
							<div class="row">
								<div class="col-md-12 section__title">
									<h2 class="section__h2">
										How it works
									</h2>
									<h3 class="section__h3">
										At every step, the <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 provides
										you with an affordable and easy-to-use way even for beginners.
									</h3>
								</div>
								<div class="col-md-12">
									<div class="howitwork section__howitwork">
										<div class="howitwork__tabs">
											<ul class="nav nav-tabs howitwork__nav">
												<li class="active"> <a data-toggle="tab" href="#howitwork1">Step 1</a>
												</li>
												<li> <a data-toggle="tab" href="#howitwork2">Step 2</a>
												</li>
												<li> <a data-toggle="tab" href="#howitwork3">Step 3</a>
												</li>
											</ul>
										</div>
										<div class="tab-content howitwork__tabcontent">
											<div id="howitwork1" class="tab-pane fade in active">
												<div class="step howitwork__step">
													<div class="step__icon">
														<img src="styles/assets/img/step-alt-1.png"
															alt="Create account">
													</div>
													<div class="step__body">
														<h4 class="step__title">
															Create account
														</h4>
														<div class="step__content">Open a free account with
															<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 by simply clicking on "Register".
															Complete the form and click submit.
															<br>Your account with <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 will be active.
														</div>
													</div>
												</div>
											</div>
											<div id="howitwork2" class="tab-pane fade">
												<div class="step howitwork__step">
													<div class="step__icon">
														<img src="styles/assets/img/step-alt-2.png"
															alt="Create account">
													</div>
													<div class="step__body">
														<h4 class="step__title">
															Make deposit
														</h4>
														<div class="step__content">Log in to your account by click on
															"User's area" button. After that, you can click on "Deposit"
															button in the dashboard, select a payment system and amount
															of
															your deposit and pay, deposit will reflect automatically.
														</div>
													</div>
												</div>
											</div>
											<div id="howitwork3" class="tab-pane fade">
												<div class="step howitwork__step">
													<div class="step__icon">
														<img src="styles/assets/img/step-alt-3.png"
															alt="Create account">
													</div>
													<div class="step__body">
														<h4 class="step__title" style="color: #158467 !important;">
															Withdraw profit
														</h4>
														<div class="step__content">When you will receive your first
															accrual, you can withdraw it without problem. Just click the
															"Withdraw" button in dashboard, select the payment system,
															fill amount field and create withdrawal request.</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="section section-team textsite titlesite">
						<div class="container">
							<div class="row">
								<div class="col-md-12 section__title">
									<h2 class="section__h2">
										Online Statistic
									</h2>
									<h3 class="section__h3">
										Thanks to you, our company is developing steadily and increasing its capacity.
									</h3>
								</div>
								<div class="col-sm-6 col-md-3 mb-3 mb-md-0">
									<div class="statitem">
										<div class="statitem__icon icongold"> <i class="fa fa-calendar "></i>
										</div>
										<div class="statitem__label">Work</div>
										<div class="statitem__value gold"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_days_online_generated']);?>
</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3 mb-3 mb-md-0">
									<div class="statitem">
										<div class="statitem__icon icongold"> <i class="fa fa-users"></i>
										</div>
										<div class="statitem__label">Investors</div>
										<div class="statitem__value gold">3,726
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3 mb-3 mb-sm-0">
									<div class="statitem">
										<div class="statitem__icon icongold"> <i class="fa fa-university"></i>
										</div>
										<div class="statitem__label">Deposits</div>
										<div class="statitem__value gold"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>

											504,827.00</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3 mb-3 mb-sm-0">
									<div class="statitem">
										<div class="statitem__icon icongold"> <i class="fa fa-credit-card"></i>
										</div>
										<div class="statitem__label">Payments</div>
										<div class="statitem__value gold"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>

											420,482.00</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="section section-team">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="text-center">
										<img src="styles/assets/img/pslogo/pyusd.png" alt="Payeer">
										<img src="styles/assets/img/pslogo/pmusd.png" alt="PerfectMoney">
										<img src="styles/assets/img/pslogo/btc.png" alt="Bitcoin">
										<img src="styles/assets/img/pslogo/eth.png" alt="Ethereum">
										<img src="styles/assets/img/pslogo/ltc.png" alt="Litecoin">
										<img src="styles/assets/img/pslogo/doge.png" alt="Dogecoin">
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
 src="styles/assets/js/swiper-bundle.min.js"><?php echo '</script'; ?>
>


				<!-- script slider -->
				<?php echo '<script'; ?>
>
					var swiper = new Swiper('.swiper-container', {
						pagination: {
							el: '.swiper-pagination',
							clickable: true,
							renderBullet: function (index, className) {
								return '<span class="' + className + '">' + (index + 1) + '</span>';
							},
						},
					});

					// Autoplay
					var mySwiper = new Swiper('.swiper-container', {
						autoplay: {
							delay: 5000,
						},
					});

				<?php echo '</script'; ?>
>

				<?php echo '<script'; ?>
>
					$(function () {
						$("#p-1-tabs .icontext").click(function (e) {
							e.preventDefault();
							$(this).tab('show');
						});
						$("#p-1-tabs .icontext").on('shown.bs.tab', function (e) {
							$("#p-1-tabs .icontext").removeClass("active");
							$(e.target).addClass("active");
						});
					});
				<?php echo '</script'; ?>
>





<?php echo '<script'; ?>
>
	var player = videojs('my-player');
  
	var options = {};
  
  var player = videojs('my-player', options, function onPlayerReady() {
	videojs.log('Your player is ready!');
  
	// In this context, `this` is the player that was created by Video.js.
	this.play();
  
	// How about an event listener?
	this.on('ended', function() {
	  videojs.log('Awww...over so soon?!');
	});
  });
  <?php echo '</script'; ?>
>


				<?php echo '<script'; ?>
>
					addClass(document.getElementById('js-menu-home'), 'menu__link--active');
					setTimeout(function () {
						var payments = document.getElementsByClassName('js-header-oper');
						for (var i = 0; i < payments.length; i++) {
							payments[i].style.bottom = null;
							payments[i].style.opacity = null;
						}
					}, 500);
				<?php echo '</script'; ?>
>
		</div>
</body>

</html><?php }
}
?>
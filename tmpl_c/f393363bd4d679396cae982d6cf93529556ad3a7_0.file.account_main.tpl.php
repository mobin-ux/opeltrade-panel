<?php /* Smarty version 3.1.27, created on 2021-05-28 06:15:48
         compiled from "/home/ktlwzufz/public_html/tmpl/account_main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:169739018760b08a94869000_55039850%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f393363bd4d679396cae982d6cf93529556ad3a7' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/account_main.tpl',
      1 => 1610519933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169739018760b08a94869000_55039850',
  'variables' => 
  array (
    'settings' => 0,
    'userinfo' => 0,
    'tfa_enabled' => 0,
    'currency_sign' => 0,
    'ab_formated' => 0,
    'ps' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60b08a948de9a8_88685607',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60b08a948de9a8_88685607')) {
function content_60b08a948de9a8_88685607 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/ktlwzufz/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '169739018760b08a94869000_55039850';
?>
<!DOCTYPE html>

<html lang="en">


<head>
	<meta charset="utf-8">
	<title>Dashboard  <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</title>
	<link rel="shortcut icon" href="styles/assets/img/favicon/favicon.png" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="styles/assets/css/style.css">
	<link rel="stylesheet" href="styles/assets/css/account.css">
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
			<header class="header-bull header--cabinet">
				<div class="container">
					<div class="row">
						<div class="col-lg-12"><?php echo $_smarty_tpl->getSubTemplate ("menua.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div>
					</div>
				</div>
			</header>
			<section class="content bagblack">
				<div class="container">
					<div class="row clearfix">
						<div class="col-lg-12">
							<div class="card" style="margin-top: 30px">
								<div class="body block-header">
									<div class="row">
										<div class="col-lg-6 col-md-8 col-sm-12">
											<h2>Welcome, <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</h2>
											<ul class="breadcrumb p-l-0 p-b-0 ">
												<li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i></a>
												</li>
												<li class="breadcrumb-item active">Dashboard</li>
											</ul>
										</div>
										<div class="col-lg-6 col-md-4 col-sm-12 text-right">
											<a href="?a=deposit">
												<button class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10 btn-warning waves-effect">Make an investment</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_tfa']) {?>
					<?php if ($_smarty_tpl->tpl_vars['tfa_enabled']->value) {?>
					<div class="alert alert-success" style="border-color: #0f1419;color: #e0dede;margin-bottom: 25px; background: #000"><i class="fa fa-shield"></i>&nbsp;&nbsp; Security Note: please, activate <a href="?a=security">Two Factor Authentication</a> to keep your account safe.</div>
					<?php } else { ?>
					
		            <?php }?>
					<?php }?>
					<div class="row clearfix">
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="card info-box-2">
								<div class="body" style="padding: 10px;">
									<div class="icon">
										<img src="styles/assets/img/acc1.png" class="accico">
									</div>
									<div class="content">
										<div class="text">EARNED TOTAL</div>
										<div class="number"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['earning']);?>
</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="card info-box-2">
								<div class="body" style="padding: 10px;">
									<div class="icon">
										<img src="styles/assets/img/acc2.png" class="accico">
									</div>
									<div class="content">
										<div class="text">TOTAL DEPOSITS</div>
										<div class="number"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['deposit']);?>
</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="card info-box-2">
								<div class="body" style="padding: 10px;">
									<div class="icon">
										<img src="styles/assets/img/acc4.png" class="accico">
									</div>
									<div class="content">
										<div class="text">TOTAL WITHDRAW</div>
										<div class="number"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal']);?>
</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="col-xl-12 col-lg-12 col-md-12" style="padding: 0px">
								<div class="card">
									<div class="headeraccount">
										<h2><strong>Financial</strong> Statistics</h2>
									</div>
									<div class="body">
										<div class="row">
											<div class="col-md-7">
												<h2 class="m-b-0"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</h2>
												<p>Account balance</p>
											</div>
											<div class="col-md-5 hidden-xs">
												<div class="sparkline m-b-20" data-type="bar" data-width="100%" data-height="50px" data-bar-width="4" data-bar-spacing="5" data-bar-color="#f6b827">
													<canvas width="58" height="50" style="display: inline-block; width: 58px; height: 50px; vertical-align: top;"></canvas>
												</div>
											</div>
										</div>
										<div class="table-responsive">
											<table class="tabletwo table-hover m-b-0">
												<tbody>
													<tr>
														<th>
															<img src="styles/assets/pay2/18.png" style="width: 20px">
														</th>
														<td>PerfectMoney</td>
														<td class="text-right"><span id="pay18"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['ps']->value[18]['balance'])===null||$tmp==='' ? "0.00" : $tmp));?>
</span>
														</td>
													</tr>
													<tr>
														<th>
															<img src="styles/assets/pay2/43.png" style="width: 20px">
														</th>
														<td>Payeer</td>
														<td class="text-right"><span id="pay43"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['ps']->value[43]['balance'])===null||$tmp==='' ? "0.00" : $tmp));?>
</span>
														</td>
													</tr>
													<tr>
														<th>
															<img src="styles/assets/pay2/48.png" style="width: 20px">
														</th>
														<td>Bitcoin</td>
														<td class="text-right"><span id="pay48"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['ps']->value[48]['balance'])===null||$tmp==='' ? "0.00" : $tmp));?>
</span>
														</td>
													</tr>
													<tr>
														<th>
															<img src="styles/assets/pay2/68.png" style="width: 20px">
														</th>
														<td>Litecoin</td>
														<td class="text-right"><span id="pay68"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['ps']->value[68]['balance'])===null||$tmp==='' ? "0.00" : $tmp));?>
</span>
														</td>
													</tr>
													<tr>
														<th>
															<img src="styles/assets/pay2/79.png" style="width: 20px">
														</th>
														<td>Dogecoin</td>
														<td class="text-right"><span id="pay79"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['ps']->value[79]['balance'])===null||$tmp==='' ? "0.00" : $tmp));?>
</span>
														</td>
													</tr>
													<tr>
														<th>
															<img src="styles/assets/pay2/69.png" style="width: 20px">
														</th>
														<td>Ethereum</td>
														<td class="text-right"><span id="pay69"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['ps']->value[69]['balance'])===null||$tmp==='' ? "0.00" : $tmp));?>
</span>
														</td>
													</tr>
													<tr>
														<th>
															<img src="styles/assets/pay2/77.png" style="width: 20px">
														</th>
														<td>Bitcoin Cash</td>
														<td class="text-right"><span id="pay77"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['ps']->value[77]['balance'])===null||$tmp==='' ? "0.00" : $tmp));?>
</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12" style="padding: 0px">
								<a href="?a=referallinks">
									<button class="btn btn-primary btn-simple btn-round btn-warning waves-effect" style="width: 100%;margin-top: -5px;">Promotional materials</button>
									<br>
									<br>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-12 col-sm-12">
							<div class="col-xl-12 col-lg-12 col-md-12" style="padding: 0px">
								<div class="card">
									<div class="headeraccount">
										<h2><strong>Quick </strong> Info</h2>
									</div>
									<div class="body">
										<div class="hide-sm">
											<div style="border-bottom: 1px solid #26323B; padding: 10px 20px">Minimum Deposit
												<br><b>$200</b>
											</div>
											<div style="border-bottom: 1px solid #26323B; padding: 10px 20px">Minimum Withdrawal for Crypto
												<br><b>$200</b>
											</div>
											<div style="border-bottom: 1px solid #26323B; padding: 10px 20px">Minimum Withdrawal for USD
												<br><b>$200</b>
											</div>
											<div style="border-bottom: 1px solid #26323B; padding: 10px 20px">Withdrawal Time
												<br><b>Within 24 hours</b>
											</div>
											<div style="border-bottom: 1px solid #26323B; padding: 10px 20px">Deposits in Cryptocurrencies visible
												<br><b>After 3 Blockchain confirmations</b>
											</div>
											<div style="border-bottom: 1px solid #26323B; padding: 10px 20px">Deposits in USD (Payeer, PM)
												<br><b>Adding automatically</b>
											</div>
											<div style="border-bottom: 1px solid #26323B; padding: 10px 20px">Referral Commission
												<br><b>8%-3%-2%</b>
											</div>
											<div style="padding: 10px 20px">Representative Commission
												<br><b>10%-3%-2%</b>
											</div>
										</div>
										<table class="tabletwo table-hover m-b-0 hide-xs">
											<tbody>
												<tr>
													<td>Minimum Deposit</td>
													<th>$200</th>
												</tr>
												<tr>
													<td>Minimum Withdrawal for Crypto</td>
													<th>$200</th>
												</tr>
												<tr>
													<td>Minimum Withdrawal for USD</td>
													<th>$200</th>
												</tr>
												<tr>
													<td>Withdrawal Time</td>
													<th>Within 24 Hours</th>
												</tr>
												<tr>
													<td>Deposits in Cryptocurrencies visible</td>
													<th>After 1 Blockchain confirmations</th>
												</tr>
												<tr>
													<td>Deposits in USD (Payeer, PM)</td>
													<th>Adding automatically</th>
												</tr>
												<tr>
													<td>Referral Commission</td>
													<th>7%</th>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12" style="padding: 0px">
								<div class="card overflowhidden weather2">
									<div class="body city-selected l-khaki">
										<div class="row">
											<div class="col-12">
												<div class="city">Your referral url</div>
												<div class="col-md-6" style="padding-left: 0px;padding-top: 10px;color: #158467;">
													<div class="night" style="font-size: 16px"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/<?php echo smarty_modifier_myescape(encurl("?ref=".((string)$_smarty_tpl->tpl_vars['userinfo']->value['username'])));?>
</div>
												</div>
												<div class="col-md-6 text-right" style="padding-right: 0px;">
													<button class="btn btn-warning js-copy" data-text="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/<?php echo smarty_modifier_myescape(encurl("?ref=".((string)$_smarty_tpl->tpl_vars['userinfo']->value['username'])));?>
">COPY LINK</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="row" style="margin-top:50px;">
								<div class="col-md-12">
									<div class="row equal">
										<div class="col-md-8 no-padding wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;min-height: 180px;">
											<div class="incrop-left" style="min-height: 100%;">
												<div class="incrop-left-img">
													<img src="styles/assets/img/uk.png">
													<h4 class="step__title" style="padding-bottom: 15px;color:#158467;">UK Registered Company</h4>
													<p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 is a fully registered and licensed company in UK. <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 is powered by the latest and most secure form of SSL data encryption to keep all your data and information safe and secure.</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 no-padding wow fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;min-height: 180px;">
											<div class="incrop-right" style="min-height: 100%;">
												<div class="incorp-inner">
													<h4 class="step__title" style="padding-bottom: 15px;color:#2f2e2e;">111223344</h4>
													<p style="color:#2f2e2e;">Official Registered Company</p>	<a target="_blank" href="certificate.jpeg" style="padding-left:20px;margin-top: 0px;display: block;" class="btn btn-black-warning section-home__btn textsite truncate" data-pjax="">Check Certificate</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="topline footer__topline">
										<a href="/" class="logo topline__logo">
											<img src="logo.png" alt="Golden" style="width: 180px;">
										</a>
										<nav class="menu topline__menu footer__menu"> <a href="/" class="menu__link" data-pjax>
                                                Home
                                            </a>
											<a href="?a=about" class="menu__link" data-pjax>
                                                About us
                                            </a>
											<a href="?a=investment" class="menu__link" data-pjax>
                                                Investment
                                            </a>
											<a href="?a=partners" class="menu__link" data-pjax>
                                                Partners
                                            </a>
											<a href="?a=terms" class="menu__link" data-pjax>
                                                Terms
                                            </a>
											<a href="?a=support" class="menu__link" data-pjax>
                                                Contact us
                                            </a>
										</nav>
										<div class="footer__socfooter topline__controls" style="height: initial;">
											<a></a>
											<a></a>
											
											
                                            </a>
										</div>
									</div><!--StartofTawk.toScript--><?php echo '<script'; ?>
 type="text/javascript"> var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date(); (function(){ var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0]; s1.async=true; s1.src='https://embed.tawk.to/5f844fe54704467e89f6b48d/default'; s1.charset='UTF-8'; s1.setAttribute('crossorigin','*'); s0.parentNode.insertBefore(s1,s0); })(); <?php echo '</script'; ?>
> <!--End of Tawk.to Script-->
								</div>
							</div>
							<div class="footer__copyright">© <?php echo smarty_modifier_myescape(date('Y'));?>
 <?php echo smarty_modifier_myescape(mb_strtoupper($_smarty_tpl->tpl_vars['settings']->value['site_name'], 'UTF-8'));?>
. ALL RIGHTS RESERVED.</div>
						</div>
					</div>
				</div>
			</footer>
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
			addClass(document.getElementById('js-sidebar-cabinet'), 'menu__link--active');
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
        document.write("<?php echo '<script'; ?>
 type='text/javascript' src='styles/assets/js/data.js?v=" + Date.now() + "'><\/script>");
        <?php echo '</script'; ?>
>
	</div>
</body>

</html><?php }
}
?>
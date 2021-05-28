<!DOCTYPE html>

<html lang="en">


<head>
	<meta charset="utf-8">
	<title>Investment / {$settings.site_name}</title>
	<link rel="shortcut icon" href="styles/assets/img/favicon/favicon.png" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="styles/assets/css/style.css">
	<script src="styles/assets/libs/jquery/jquery-1.9.1.min.js"></script>
	<script src="styles/assets/libs/modernizr/modernizr.js"></script>
	<script src="styles/assets/js/common.js"></script>
	<link rel="stylesheet" href="styles/assets/css/invest.css">
	<script src="styles/assets/js/calculator.js"></script>
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
			<header class="header-clean" style=" background-image:linear-gradient(to right, rgb(39 39 39 / 36%) 0%, rgb(49 49 49 / 37%) 100%), url(https://optimumtrade.net/investment.jpeg);    background-size: cover;    background-position-y: center;    background-repeat: no-repeat;"">
				<div class="header__decors">
				    
				    
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">{include file="menu.tpl"}</div>
						<div class="col-lg-12">
							<div class="header__content">
								<h1 class="header__h1">
                                                                    </h1>
								<h2 class="header__h2">
                                                                  </h2>
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
                    About our investment offer
                </h2>
							<h3 class="section__h3">
                    We offer the ideas that raise your investment above the expected income.   
                </h3>
						</div>
						<div class="col-md-12">
							<p class="section__text">There are several investment contract packages. In any of our investments portfolio you can find something special for yourself. They are very simple, but effective and we guarantee you a stable profit. 

Sound investment strategy initially depends on successful asset allocation. {$settings.site_name}  is a private online investment company that pursues and implements effective trading/mining strategies. Corporate management strategically focuses on the following issues while investing and trading: preservation of finances, risk spreading, regular investing, ensuring a balanced portfolio, and investing with the consideration of investors financial and long-term strategic goals.<br><br>
The trading strategy of {$settings.site_name} consists in investors primary assessment of investment affordability in the particular stock. The investor should focus on the investments/ trade operations. The long-term organization and financial goals of the investor should be considered prior to making the strategic investment decisions. It is critically important to properly allocate assets and follow sound mining strategy. The mining strategy applied by {$settings.site_name} ensures sound returns and effective mining opportunities, as well as investing and growth perspectives.<br><br>
The corporate online investing and trading strategy is primarily based on aggressive investment and trading in businesses considered as highly profitable. The strategy is oriented at high returns owing to a diversified portfolio that consists of investments in shares of R&D and IT companies. The strategy offers sound prospects for further growth and internationalization.<br><br>
In addition to the outlined aggressive strategy, {$settings.site_name} provides an alternative strategy primarily emphasizing on making safe and profitable long-term investments. The key purpose of such strategy consists in amplifying profits and returns by investing in common stocks of reputable and long-established organizations. such organizations are capable to provide greater potential for financial gains and earnings.<br><br>
Alternatively, {$settings.site_name} applies a common stock trading/Mining strategy called candlestick analyses. It has been tested and tried as a rather effective investment methodology. The candlestick analysis strategy enables the online miners/investors to reap stable profits.
<br><br>

All crypto payments ( DEPOSIT ) are made in manual mode and within 0/3 confirmation on the blockchain your deposit/transfer transactions from the time of creating or initiating request, the amount deposited or transferred will reflect in your mining account dashboard immediately.<br><br>
This manual process was initiated because it’s usually much faster. 
You can withdraw your deposit at any given time you of your choice . 
For more enquiries please contact our live support channel for more details and clarification.</p>

<h3 class="section__h3">
                   <b>How to deposit or start up your investments with {$settings.site_name} investment company; simply follow the following steps.</b>
                  <br><br> 1. Create an account.<br><br>
2. Click on the Menu button; select “ADD DEPOSIT” Navigate to contract package page.<br><br>
3. Select a plan.<br><br>
4. Input an amount.<br><br>
5. Select deposit from bitcoin ( coinpayments ) <br><br>
6. Click on submit/spend.<br><br>
                </h3>
							<section class="inv-plans bg-iv-plan textsite titlesite">
								<div class="container">
									<div class="col-md-12 section__title">
										<h2 class="section__h2">
                    Investment Plans
                </h2>
										<h3 class="section__h3">
                    What do we offer to investors?
                </h3>
									</div>
									<div class="row">
										<div class="col-sm-4  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s" cellspacing="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;">
											<div class="plans">
												<div class="plan_details text-center">
													<div class="plan_title">Beginner Plan</div>
													<div class="percentage">15%</div>
													<p class="profit_duration">After 7 Days</p>
													<ul class="list-items">
														<li class="list-item">Minimum $200</li>
														<li class="list-item">Maximum  $999</li>
										                <li class="list-item">Instant Withdrawal</li>
										<li class="list-item">1-5% Affiliate Bonus</li>
										               
										                
													</ul>
													<div class="plans_btn"> {if $userinfo.logged != 1} <a class="btn btn-warning" href="?a=login">Deposit Now</a>
										{else}	<a class="btn btn-warning" href="?a=deposit">Deposit Now</a>
										{/if}
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-4  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s" cellspacing="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;">
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
													</ul> {if $userinfo.logged != 1} <a class="btn btn-warning" href="?a=login">Deposit Now</a>
										{else}	<a class="btn btn-warning" href="?a=deposit">Deposit Now</a>
										{/if}
												</div>
											</div>
										</div>
										<div class="col-sm-4  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s" cellspacing="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;">
											<div class="plans magenta">
												<div class="plan_details text-center">
													<div class="plan_title">Trader Plan</div>
													<div class="percentage">35%</div>
													<p class="profit_duration">After 7 Days</p>
													<ul class="list-items">
														
														<li class="list-item">Minimum $5,000</li>
										                <li class="list-item">Maximum $1,000,000</li>
										                <li class="list-item">Instant Withdrawal</li>
										<li class="list-item">1-5% Affiliate Bonus</li>
													</ul> {if $userinfo.logged != 1} <a class="btn btn-warning" href="?a=login">Deposit Now</a>
										{else}	<a class="btn btn-warning" href="?a=deposit">Deposit Now</a>
										{/if}
												</div>
											</div>
										</div>
									</div>
									<br>
									<br>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>{include file="footer.tpl"}</div>
		
		<link rel="stylesheet" href="styles/assets/libs/bootstrap/fileinput.min.css">
		<script src="styles/assets/libs/bootstrap/bootstrap.min.js"></script>
		<script src="styles/assets/libs/bootstrap/fileinput.min.js"></script>
		<script>
			$(function(){ 
			                                            $("#p-1-tabs .icontext").click(function(e){
			                                                e.preventDefault();
			                                                $(this).tab('show');
			                                            });
			                                            $("#p-1-tabs .icontext").on('shown.bs.tab', function (e) {
			                                                $("#p-1-tabs .icontext").removeClass("active");
			                                                $(e.target).addClass("active");
			                                            });
			                                        });
		</script>
		<script>
			addClass(document.getElementById('js-menu-investment'), 'menu__link--active');
			    
			    function calculate(target) {
			        var percent = parseFloat(target.getAttribute('js-percent')), 
			            days = parseInt(target.getAttribute('js-days')),
			            amount = parseFloat(target.value),
			            daily = amount / 100 * percent,
			            weekly = amount / 100 * percent * 7,
			            mounthly = amount / 100 * percent * 31,
			            total = amount / 100 * percent * days,
			            dailyDom = document.getElementById(target.getAttribute('js-daily')),
			            weeklyDom = document.getElementById(target.getAttribute('js-weekly')),
			            totalDom = document.getElementById(target.getAttribute('js-total')),
			            mounthlyDom = document.getElementById(target.getAttribute('js-mounthly'));
			
			        dailyDom.innerText = isNaN(daily) ? 0.00 : parseFloat(daily.toFixed(8));
			        weeklyDom.innerText = isNaN(weekly) ? 0.00 : parseFloat(weekly.toFixed(8));
			        
			        if (totalDom !== null) {
			            totalDom.innerText = isNaN(total) ? 0.00 : parseFloat(total.toFixed(8));
			        }
			        if (mounthlyDom !== null) {
			            mounthlyDom.innerText = isNaN(mounthly) ? 0.00 : parseFloat(mounthly.toFixed(8));
			        }
			    }
		</script>
	</div>
</body>

</html>
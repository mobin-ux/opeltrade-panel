<!DOCTYPE html>

<html lang="en">


<head>
	<meta charset="utf-8">
	<title>Partners / {$settings.site_name}</title>
	<link rel="shortcut icon" href="styles/assets/img/favicon/favicon.png" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="styles/assets/css/style.css">
	<script src="styles/assets/libs/jquery/jquery-1.9.1.min.js"></script>
	<script src="styles/assets/libs/modernizr/modernizr.js"></script>
	<script src="styles/assets/js/common.js"></script>
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
						<div class="col-lg-12">{include file="menu.tpl"}</div>
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
							<p class="section__text">At {$settings.site_name}, we believe that advertising about our services by our satisfied clients is the best way to grow business. Keeping this in mind, {$settings.site_name} founded an amazing lucrative reward in terms of two level affiliate program.</p>
							<p class="section__text">{$settings.site_name} is paying for the popularization of its investment program and anyone can be rewarded. To benefit from this, you have to refer your friends, relatives and colleagues in your network through a referral link.
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
			</section>{include file="footer.tpl"}</div>
	
		<link rel="stylesheet" href="styles/assets/libs/bootstrap/fileinput.min.css">
		<script src="styles/assets/libs/bootstrap/bootstrap.min.js"></script>
		<script src="styles/assets/libs/bootstrap/fileinput.min.js"></script>
		<script>
			addClass(document.getElementById('js-menu-partners'), 'menu__link--active');
		</script>
	</div>
</body>

</html>
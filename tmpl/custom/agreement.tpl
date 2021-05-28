<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="icon" href="styles/img/favicon.ico" type="image/x-icon" />
        <title>{$settings.site_name} | Crypto Trading</title>
        <script>
            document.write("<link rel='stylesheet' href='styles/css/main.css?v=" + Date.now() + "'>")
        </script>
        
         
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
       
    </head>

    <body class="body-bg">
        <!--
        <a target="_blank" href="https://t.me" class="telegram-group">
            <svg xmlns="http://www.w3.org/2000/svg" height="512px" viewBox="-21 -51 682.66669 682" width="512px"><path d="m640-1.667969-640 272.039063 167.777344 66.585937 59.726562 224.507813 109.976563-106.558594 178.917969 123.570312zm-403.78125 367.402344-6.457031 58.535156-24.800781-93.234375 435.039062-332.703125zm0 0" fill="#fff"/></svg>
            <span>Telegram Group</span>
        </a>
        -->
                <!-- header -->
        <header id="bw-header">
		<section id="bw-header-up">
			<div class="container">
				<div class="">
					<a href="?a=home" class="logo">
						<img src="styles/img/logo/logo.svg" />
					</a>
					<nav class="float-left">
						<ul class="main-menu">
							<li><a class="active" href="?a=home">Home</a>
							</li>
							<li><a href="?a=about">About Us</a>
							</li>
							<li><a href="?a=cust&amp;page=investment">Managed Investment</a>
							</li>
							<li><a href="?a=cust&amp;page=partnership">Referral Program</a>
							</li>
							<li><a href="?a=support">Help Center</a>
							</li>
							<li><a href="?a=news">News</a>
							</li>
						</ul>
					</nav>
					<div>
						<div class="float-right d-block d-md-none">
							<button onclick="CoHeaderMenu('#bw-header-menu')" class="toggle-menu">
								<svg height="20" width="20">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="menu" width="100%" height="100%">
										<path d="M491.318 235.318H20.682C9.26 235.318 0 244.577 0 256s9.26 20.682 20.682 20.682h470.636c11.423 0 20.682-9.259 20.682-20.682 0-11.422-9.259-20.682-20.682-20.682zm0-156.879H20.682C9.26 78.439 0 87.699 0 99.121c0 11.422 9.26 20.682 20.682 20.682h470.636c11.423 0 20.682-9.26 20.682-20.682 0-11.422-9.259-20.682-20.682-20.682zm0 313.758H20.682C9.26 392.197 0 401.456 0 412.879s9.26 20.682 20.682 20.682h470.636c11.423 0 20.682-9.259 20.682-20.682s-9.259-20.682-20.682-20.682z"></path>
									</svg>
								</svg>
							</button>
						</div> <a href="?a=paidout" class="payment-proof float-right d-none d-md-block">Payment Proofs</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</section>
		<section id="bw-header-menu">
			<div onclick="CoHeaderMenu('#bw-header-menu')" class="close-menu float-right d-block d-md-none"></div>
			<div class="container">
				<div id="bw-menu" class="menu">
					<nav class="float-left">
						<ul class="main-menu">
							<li><a class="active" href="?a=home">Home</a>
							</li>
							<li><a href="?a=about">About Us</a>
							</li>
							<li><a href="?a=cust&amp;page=investment">Managed Investment</a>
							</li>
							<li><a href="?a=cust&amp;page=partnership">Referral Program</a>
							</li>
							<li><a href="?a=support">Help Center</a>
							</li>
							<li><a href="?a=news">News</a>
							</li>
							<li><a href="?a=paidout">Payment Proofs</a>
							</li>
						</ul>
					</nav>
					<ul class="auth float-right btn btn-bw">
						{if $userinfo.logged != 1}	
						<li> <a href="?a=login" class="">Login</a>
						</li>
						<li> <a href="?a=signup" class="">Register</a>
						</li>
						{else}
						<li> <a href="?a=account" class="">Dashboard</a>
						</li>
						<li> <a href="?a=logout" class="">Logout</a>
						</li>
						{/if}
					</ul>
				</div>
			</div>
		</section>
	</header>
        <!-- end header -->
            </body>
</html>

<main id="bw-wrapper">
<section id="bw-page-header" class="bg-header-faq news">
  <div class="container">
   <div class=" bw-section-title-vertical-reverse ">
    <h2 class="title">{$settings.site_name}</h2>
    <div class="desc">Terms & Conditions</div>
   </div>
  </div>
</section>
<section id="bw-news-box" class="mb-5 mt-4">
  <div class="container">
    <h4>1. General Provisions</h4>
        <p>1.1 This is an agreement between {$settings.site_name} GROUP LTD. investment company ‘{$settings.site_name} GROUP LTD’ (the ‘company’), established in full compliance with the laws of the United Kingdom, and the individual (the ‘Client’).</p>
        <p>1.2 These regulations concern the provision of investment services by the {$settings.site_name} GROUP LTD company ‘{$settings.site_name}’ to its customers. This provision must be read carefully and thoroughly by the client due to the fact that this document defines the terms under which certain transactions are conducted by the client.</p>
        <p>1.3 Completing first payment by the client under this provision and receipt of this payment by the company is considered unconditional acceptance by the customer of the terms of this provision. The client agrees to comply with the internal rules specified in the paragraphs of this provision and is aware of his/her obligations to our company.</p>
        <p>1.4 Should the client break at least one provision, the company assumes no liability to the client, and therefore disclaims all liability.</p>
        <p>1.5 {$settings.site_name} reserves the right to make changes to these provisions at any time without prior notice.</p>
        <h4>2. Parties to the agreement</h4>
        <p>2.1 The Company ‘{$settings.site_name} GROUP LTD’, referred to as executor, is under the obligation to provide consulting services to the client in the field of capital management and advise on major investment plans of the company.</p>
        <p>2.2 An internet user is considered a client and therefore party to the agreement only upon opening an account on our website www.{$settings.site_name}.com and accepting our terms and conditions.</p>
        <p>2.3 The user opening an account on our website must be of legal age in his/her country.</p>
        <p>2.4 The client is obliged to provide accurate, reliable and complete information about him/herself. Should inaccurate information about the client affect any financial transaction, the company shall not be responsible.</p>
        <p>2.5 The client agrees not to use the services of {$settings.site_name} GROUP LTD for illegal purposes, money laundering or receiving illegal income.</p>
        <p>2.6 The client accepts that all correspondence history with the client in all forms of written communication is recorded in order to improve the quality of our customer service.</p>
        <p>2.7 {$settings.site_name} agrees to comply with the privacy policy, which stipulates non-distribution of our clients’ personal information.</p>
        <h4>3. Using the account</h4>
        <p>3.1 The company determines the rights of internet users to register only one account per person. Using multiple accounts is prohibited by the company as it creates bogus visibility of participation in the partnership program.</p>
        <p>3.2 The client is warned that neither {$settings.site_name}, nor any of its employees, may request that the client disclose his/her login or password to access his/her account.</p>
        <p>3.3 The client is neither entitled to change his/her personal information, nor can he/she delete his/her account.</p>
        <p>3.4 In the event of losing his/her account password, the client has the right to start the procedure of resetting the password free of charge. Having completed the procedure, a new password will be sent to client’s e-mail.</p>
        <p>3.5 The client should use antivirus software to avoid becoming a victim of hackers.</p>
        <h4>4. Terms and conditions</h4>
        <p>4.1 With each of the investment plans, the client will earn the promised hourly interest rate until he/she decides to release his/her initial invested funds.</p>
        <p>4.2 {$settings.site_name} offers clients 3 investment plans, the terms of which are laid out below:<br>
          <strong>Plan 1</strong>: from $10 to $999 - 0.15% return per hour.<br>
          <strong>Plan 2</strong>: from $1,000 to $4,999 - 0.17% return per hour.<br>
          <strong>Plan 3</strong>: from $5,000 - 0.20% return per hour.<br>
          </p>
        <p>4.3 Client has the right to terminate his/her investment and regain the initial invest after 48 hours of his/her investment time. In this case, company reduces 5% of funds as the release fee.</p>
        <p>4.4 Promised interests will be added to users account balance every hour after the investment is placed.</p>
        <p>4.5 The client gains profit only in the currency of the original investment.</p>
        <p>4.6 The minimum allowed amount to invest is 10 USD.</p>
        <p>4.7 Compounding option is not available in any of the plans offered.</p>
        <p>4.8 In order to withdraw funds the client is obliged to specify his/her wallet address/account in the his/her dashboard.</p>
        <p>4.9 Withdrawal of profits will be paid through PerfectMoney, Payeer, Bitcoin, BitCoin Cash, Ethereum, LiteCoin,and DogeCoin. Withdrawal amounts up to $500.00 will be paid instantly on user request. Withdrawals with more than $500 of amount, will be reviewed and processed within 24 hours.</p>
        <p>4.10 Withdrawal request through BitcoinCash, Ethereum, and Dash will not be paid instantly and will be processed within 24 hours.</p>
        <p>4.11 {$settings.site_name} is not responsible for the crediting or withdrawing of funds in the event that payment systems or banks are at fault for any problems.</p>
        <h4>5. {$settings.site_name} Partners' Cooperation</h4>
        <p>5.1 As part of the partnership program, the company is obliged to pay a partner up to 10% of each investment made by any client who has been invited by the partner.</p>
        <p>5.2 Client will earn 5% of each investment made by their referrals as commission.</p>
        <p>5.3 Client is able to apply for being a {$settings.site_name}'s regional representative and use the benefit of earning 10% fixed commission per investments made by his/her referred clients.</a>
</p>
        <p>5.4 The partner is paid instantly the moment that his referred client makes an investment.</p>
        <p>5.5 The partner will have the right to withdraw his / her bonus or to use it in order to make an investment.</p>
        <p>5.6 The partner shall have the right to use the promotional material (banners) that the website provides to actively acquire customers.</p>
        <h4>6. Final provisions. Force majeure.</h4>
        <p>6.1 Unless otherwise provided for within the regulations, or specified in other documents of the company, the client shall acknowledge that all transactions on www.{$settings.site_name}.com are made at his/her own risk. The client should be aware that previous performance does not guarantee similar index numbers in the future, so the client voluntarily gives money to the company to be used for consultation purposes.</p>
        <p>6.2 {$settings.site_name} may suspend its operations and obligations to our customers if the company's operations are affected by such factors as: earthquakes, world economic crises, wars, technological disasters, strikes, epidemics or revolutions. In the event of such factors, the company may suspend its operations on the site.</p>
        <p>6.3 The company shall not be responsible for hacked accounts. Such circumstances are beyond the control of {$settings.site_name}.</p>
        <p>6.4 The company is responsible for the storage of personal data on the server, as well as for the safe operation of the server and the website in general.</p>
        <p>6.5 This provision is legitimate based on the company charter registration documents of the {$settings.site_name}.</p>
        <p>6.6 Legitimacy of this provision may be affected only by the United Kingdom or force majeure.</p>
        <p>6.7 This provision remains legitimate in the case of changes to the conditions or the addition of new conditions by {$settings.site_name}.</p>
  </div>
</section>
<section id="bw-footer-help" class="mt-5" >
  <div class="container ">
   <div class="row ">
    <div class="col-xl-8 col-lg-8 col-md-7">
        <h3 class="title">Need to get in touch? </h3>
        <p class="description">We are here to answer all questions you may have about {$settings.site_name} platform. Get in touch and let us know how we can help. </p>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-5 mt-3">
     <div class="float-right">
      <a href="?a=support" class="btn btn-white">Contact Support</a>
     </div>
     <div class="clearfix"></div>
    </div>
   </div>
  </div>
 </section>

</main>
<!-- footer -->
<footer id="bw-footer">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-push-4">
				<img class="mb-3" src="styles/img/logo/logo.svg" width="200px" style="margin-left: -25px">
				<p class="starter">Simplified Managed Crypto Trading</p>
				<div class="copyright"> <a href="?a=home">BITCOIN TRADING</a> GROUP LTD. | &copy;&nbsp; 2019
					<br>All Rights Reserved.</div>
			</div>
			<div class="col-xl-5 col-lg-4 col-md-4 d-none d-md-block">
				<ul class="menu">
					<li><a class="active" href="?a=home">Home</a>
					</li>
					<li><a href="?a=about">About Us</a>
					</li>
					<li><a href="?a=cust&page=investment">Managed Investment</a>
					</li>
					<li><a href="?a=cust&page=partnership">Referral Program</a>
					</li>
					<li><a href="?a=support">Help Center</a>
					</li>
					<li><a href="?a=news">News</a>
					</li>
				</ul>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4">
				<div class="details">
					<div class="item d-none d-md-block">
						<svg class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.626 511.626" id="envelope" width="100%" height="100%">
								<path d="M49.106 178.729c6.472 4.567 25.981 18.131 58.528 40.685 32.548 22.554 57.482 39.92 74.803 52.099 1.903 1.335 5.946 4.237 12.131 8.71 6.186 4.476 11.326 8.093 15.416 10.852 4.093 2.758 9.041 5.852 14.849 9.277 5.806 3.422 11.279 5.996 16.418 7.7 5.14 1.718 9.898 2.569 14.275 2.569h.575c4.377 0 9.137-.852 14.277-2.569 5.137-1.704 10.615-4.281 16.416-7.7 5.804-3.429 10.752-6.52 14.845-9.277 4.093-2.759 9.229-6.376 15.417-10.852 6.184-4.477 10.232-7.375 12.135-8.71 17.508-12.179 62.051-43.11 133.615-92.79 13.894-9.703 25.502-21.411 34.827-35.116 9.332-13.699 13.993-28.07 13.993-43.105 0-12.564-4.523-23.319-13.565-32.264-9.041-8.947-19.749-13.418-32.117-13.418H45.679c-14.655 0-25.933 4.948-33.832 14.844C3.949 79.562 0 91.934 0 106.779c0 11.991 5.236 24.985 15.703 38.974 10.466 13.99 21.604 24.983 33.403 32.976z"></path>
								<path d="M483.072 209.275c-62.424 42.251-109.824 75.087-142.177 98.501-10.849 7.991-19.65 14.229-26.409 18.699-6.759 4.473-15.748 9.041-26.98 13.702-11.228 4.668-21.692 6.995-31.401 6.995h-.578c-9.707 0-20.177-2.327-31.405-6.995-11.228-4.661-20.223-9.229-26.98-13.702-6.755-4.47-15.559-10.708-26.407-18.699-25.697-18.842-72.995-51.68-141.896-98.501C17.987 202.047 8.375 193.762 0 184.437v226.685c0 12.57 4.471 23.319 13.418 32.265 8.945 8.949 19.701 13.422 32.264 13.422h420.266c12.56 0 23.315-4.473 32.261-13.422 8.949-8.949 13.418-19.694 13.418-32.265V184.437c-8.186 9.132-17.7 17.417-28.555 24.838z"></path>
							</svg>
						</svg> <a href="mailto:support@yoursite.com">support@yoursite.com</a>
					</div>
					<div class="item d-none d-md-block">
						<svg class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480.56 480.56" id="telephone" width="100%" height="100%">
								<path d="M365.354 317.9c-15.7-15.5-35.3-15.5-50.9 0-11.9 11.8-23.8 23.6-35.5 35.6-3.2 3.3-5.9 4-9.8 1.8-7.7-4.2-15.9-7.6-23.3-12.2-34.5-21.7-63.4-49.6-89-81-12.7-15.6-24-32.3-31.9-51.1-1.6-3.8-1.3-6.3 1.8-9.4 11.9-11.5 23.5-23.3 35.2-35.1 16.3-16.4 16.3-35.6-.1-52.1-9.3-9.4-18.6-18.6-27.9-28-9.6-9.6-19.1-19.3-28.8-28.8-15.7-15.3-35.3-15.3-50.9.1-12 11.8-23.5 23.9-35.7 35.5-11.3 10.7-17 23.8-18.2 39.1-1.9 24.9 4.2 48.4 12.8 71.3 17.6 47.4 44.4 89.5 76.9 128.1 43.9 52.2 96.3 93.5 157.6 123.3 27.6 13.4 56.2 23.7 87.3 25.4 21.4 1.2 40-4.2 54.9-20.9 10.2-11.4 21.7-21.8 32.5-32.7 16-16.2 16.1-35.8.2-51.8-19-19.1-38.1-38.1-57.2-57.1zm-19.1-79.7l36.9-6.3c-5.8-33.9-21.8-64.6-46.1-89-25.7-25.7-58.2-41.9-94-46.9l-5.2 37.1c27.7 3.9 52.9 16.4 72.8 36.3 18.8 18.8 31.1 42.6 35.6 68.8zm57.7-160.4c-42.6-42.6-96.5-69.5-156-77.8l-5.2 37.1c51.4 7.2 98 30.5 134.8 67.2 34.9 34.9 57.8 79 66.1 127.5l36.9-6.3c-9.7-56.2-36.2-107.2-76.6-147.7z"></path>
							</svg>
						</svg> <span>+11 22 333 4444</span>
					</div>
					<div class="item mt-4">
						<ul class="socials">
							<li>
								<a target="_black" href="https://www.facebook.com">
									<svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90" id="facebook" width="100%" height="100%">
											<path d="M90 15.001C90 7.119 82.884 0 75 0H15C7.116 0 0 7.119 0 15.001v59.998C0 82.881 7.116 90 15.001 90H45V56H34V41h11v-5.844C45 25.077 52.568 16 61.875 16H74v15H61.875C60.548 31 59 32.611 59 35.024V41h15v15H59v34h16c7.884 0 15-7.119 15-15.001V15.001z"></path>
										</svg>
									</svg>
								</a>
							</li>
							<li>
								<a target="_black" href="https://twitter.com">
									<svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612 612" id="twitter" width="100%" height="100%">
											<path d="M612 116.258a250.714 250.714 0 0 1-72.088 19.772c25.929-15.527 45.777-40.155 55.184-69.411-24.322 14.379-51.169 24.82-79.775 30.48-22.907-24.437-55.49-39.658-91.63-39.658-69.334 0-125.551 56.217-125.551 125.513 0 9.828 1.109 19.427 3.251 28.606-104.326-5.24-196.835-55.223-258.75-131.174-10.823 18.51-16.98 40.078-16.98 63.101 0 43.559 22.181 81.993 55.835 104.479a125.556 125.556 0 0 1-56.867-15.756v1.568c0 60.806 43.291 111.554 100.693 123.104-10.517 2.83-21.607 4.398-33.08 4.398-8.107 0-15.947-.803-23.634-2.333 15.985 49.907 62.336 86.199 117.253 87.194-42.947 33.654-97.099 53.655-155.916 53.655-10.134 0-20.116-.612-29.944-1.721 55.567 35.681 121.536 56.485 192.438 56.485 230.948 0 357.188-191.291 357.188-357.188l-.421-16.253c24.666-17.593 46.005-39.697 62.794-64.861z"></path>
										</svg>
									</svg>
								</a>
							</li>
							<li>
								<a href="javascript:backToTop()"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- end footer -->
<!-- java scripts -->
<script
        src="https://code.jquery.com/jquery-1.9.1.min.js"
        integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ="
        crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
<script src="styles/js/plugins/CustomEase.min.js"></script>
<script src="styles/js/plugins/SplitText.min.js"></script>
<script src="styles/js/plugins/ScrollMagic.js"></script>
<script src="styles/js/methods.js"></script>
<script src="styles/js/app.js?v=1.0.1"></script>

    <script src="styles/js/news.js"></script>
<!-- end java scripts -->

</body>
</html>
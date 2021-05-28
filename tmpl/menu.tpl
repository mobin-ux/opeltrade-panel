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
		<div class="header__login">{if $userinfo.logged != 1} <a href="?a=login" class="btn btn-warning" data-pjax>
                                             &nbsp; Login
                                        </a>
			<a href="?a=signup" class="btn btn-signup" data-pjax>
                                             &nbsp; Register
                                        </a>
			{else}
			<a href="?a=account" class="btn btn-warning" data-pjax>
				<img src="styles/assets/img/user.png">&nbsp; User's area</a>{/if}</div> <span class="burger header__burger" id="js-menu-burger">
                                        <i class="fa fa-bars"></i>
                                    </span>
	</div>
</div>
<div class="topline header__topline">
	<div class="topline__logo">
		<a href="/" class="logo" data-pjax>
			<img width="40" height="40" src="styles/assets/img/logo-img.svg">
		</a>
	</div>
	<div class="topline__controls">
		<div class="dropdown topline__dropdown"> <a href="#" class="dropdown-toggle userdropdown topline__userdropdown" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            {$userinfo.username}                                             <span class="caret userdropdown__caret"></span>
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
</nav>
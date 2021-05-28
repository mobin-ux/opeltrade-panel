<!DOCTYPE html>

<html lang="en">

<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

</style>

<head>
    <meta charset="utf-8">
    <title>Contact Us / {$settings.site_name}</title>
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
			<header class="header-clean" style="background-image:linear-gradient(to right, rgb(39 39 39 / 36%) 0%, rgb(49 49 49 / 37%) 100%), url(https://cryptohash.uk/support.jpeg);    background-size: cover;    background-position-y: center;    background-repeat: no-repeat;">
				<div class="header__decors">
                    
                    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">{include file="menu.tpl"}</div>
                        <div class="col-lg-12">
                            <div class="header__content">
                                <h1 class="header__h1">
                                    Contact Us </h1>
                                <h2 class="header__h2">
                                    We offer the ideas that raise your investment above the expected income. </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section class="section section-contact textsite titlesite">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 section__title">
                            <h2 class="section__h2">
                                Support
                            </h2>
                            <h3 class="section__h3">
                                Our support team will answer any questions within 24 hours
                            </h3>
                        </div>
                        <div class="col-md-6">

                            {if $say eq 'send'}
                            <div class="row">
                                <svg version="1.1" class="center" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 90px; height: auto;" xml:space="preserve">
                                    <ellipse style="fill:#facd8a;" cx="256" cy="256" rx="256" ry="255.832" />
                                    <polygon style="fill:#ffffff;" points="235.472,392.08 114.432,297.784 148.848,253.616 223.176,311.52 345.848,134.504 
	391.88,166.392 " />
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </div>
                            <br>
                            Message has been successfully sent. We will back to you in next 24 hours. Thank you.<br><br>
                            {else}

                            <script language=javascript>
                                {
                                    if $userinfo.logged == 1
                                } {
                                    literal
                                }

                                function checkform() {
                                    if (document.mainform.message.value == '') {
                                        alert("Please type your message!");
                                        document.mainform.message.focus();
                                        return false;
                                    }
                                    return true;
                                } {
                                    /literal} {
                                    else
                                } {
                                    literal
                                }

                                function checkform() {
                                    if (document.mainform.name.value == '') {
                                        alert("Please type your full name!");
                                        document.mainform.name.focus();
                                        return false;
                                    }
                                    if (document.mainform.email.value == '') {
                                        alert("Please enter your e-mail address!");
                                        document.mainform.email.focus();
                                        return false;
                                    }
                                    if (document.mainform.message.value == '') {
                                        alert("Please type your message!");
                                        document.mainform.message.focus();
                                        return false;
                                    }
                                    return true;
                                } {
                                    /literal} { /
                                    if
                                }

                            </script>


                            <form method=post name=mainform onsubmit="return checkform()">
                                <input type=hidden name=a value=support>
                                <input type=hidden name=action value=send>


                                {if $errors}

                                {if $errors.turing_image == 1}
                                <div class="alertnoti alert-warning">Invalid turing image.</div>

                                {/if}
                                {if $errors.invalid_email == 1}
                                <div class="alertnoti alert-warning">Invalid email address.</div>

                                {/if}

                                {/if}

                                <div class="form-group">
                                    {if $userinfo.logged}
                                    <input type="text" class="form-control" placeholder="{$userinfo.name}" readonly>
                                    {else}
                                    <input type="text" name="name" value="{$frm.name|escape:htmlall}" class="form-control" placeholder="Your Name">
                                    {/if}

                                </div>
                                <div class="form-group">
                                    {if $userinfo.logged}
                                    <input type="text" class="form-control" placeholder="{$userinfo.email}" readonly>
                                    {else}
                                    <input type="text" name="email" value="{$frm.email|escape:htmlall}" class="form-control" placeholder="Your Email">
                                    {/if}

                                </div>
                                <div class="form-group">
                                    <textarea name="message" rows="8" class="form-control" placeholder="Your message">{$frm.message|escape:htmlall}</textarea>
                                </div>
                                {if $userinfo.validation_enabled == 1}
                                <div class="form-group">
                                    <label id="js-captcha-label">Enter captcha *</label>
                                    <div class="input-group">
                                        <input type="text" name="validation_number" class="form-control">
                                        <span class="input-group-addon" style="padding: 0;padding-left: 0px;border: none;background: none;padding-left: 10px;">
                                            <img src="{" ?a=show_validation_image&`$ti.session.name`=`$ti.session.id`&rand=`$ti.session.rand`"|encurl}">
                                        </span>
                                    </div>
                                </div>
                                {/if}

                                <div class="form-group text-right">
                                    <button class="btn btn-warning">Send</button>
                                </div>
                            </form>
                            {/if}
                        </div>
                        <div class="col-md-6">
                            <h4>
                                Main office:<br>
                                New York 1735 Bingamon Branch Road.
                            </h4>
                            <br>
                            <p class="section__text">Use contact form after creating support ticket in dashboard, ad messages send on our e-mail!</p>
                            <a href="mailto:{$settings.support_email}" class="contact section-contact__contact" target="_blank">
                                <img src="styles/assets/img/icons/mail.png" alt=""> <span style="color: #facd8a;">{$settings.support_email}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>{include file="footer.tpl"}
        </div>
      
        <link rel="stylesheet" href="styles/assets/libs/bootstrap/fileinput.min.css">
        <script src="styles/assets/libs/bootstrap/bootstrap.min.js"></script>
        <script src="styles/assets/libs/bootstrap/fileinput.min.js"></script>
        <script>
            addClass(document.getElementById('js-menu-contact'), 'menu__link--active');

        </script>
    </div>
</body>

</html>

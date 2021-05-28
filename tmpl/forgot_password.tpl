<!DOCTYPE html>

<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Forgot Password / {$settings.site_name}</title>
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
        <div id="block-content">
            <section class="section section-auth bagblack textsite titlesite">
                <div class="container">
                    <div class="row mt-5 mb-5">
                        <div class="col-md-offset-3 col-md-6">
                            <div class="b--shadow b--auth">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="b--auth__left">
                                            <div class="text-center">
                                                <a href="/" class="logo" data-pjax="">
                                                    <img src="styles/assets/img/logo-img.svg" alt="Golden" style="width: 180px;">
                                                </a>
                                            </div>
                                            <div class="b--shadow__title-bordered">
                                                <div class="title-bordered__wrapper">
                                                    <div class="title-bordered">FORGOT PASSWORD</div>
                                                </div>
                                            </div>

                                            {literal}
                                            <script language=javascript>
                                                function checkform() {
                                                    if (document.forgotform.email.value == '') {
                                                        alert("Please type your username or email!");
                                                        document.forgotform.email.focus();
                                                        return false;
                                                    }
                                                    return true;
                                                }

                                            </script>
                                            {/literal}

                                            {if $errors.turing_image}

                                            <div class="alertnoti alert-warning">Invalid turing image</div>

                                            {/if}


                                            {if $found_records == 2}

                                            <div class="alertnoti alert-warning">Your accound was found. Please check your e-mail address and follow confirm URL to reset your password.</div>

                                            {else}

                                            {if $found_records == 0}
                                            <div class="alertnoti alert-warning">No accounts found for provided info.</div>


                                            {elseif $found_records == 1}
                                            <div class="alertnoti alert-warning">Request was confirmed. Login and password was sent to your email address.</div>


                                            {/if}

                                            <form method=post name=forgotform onsubmit="return checkform();">
                                                <input type=hidden name=a value="forgot_password">
                                                <input type=hidden name=action value="forgot_password">
                                                <div class="form-group">
                                                    <label>Your Username *</label>
                                                    <input type=text name='email' value="{$frm.email|escape:htmlall}" class="form-control">
                                                </div>
                                                {if $ti.check.forgot_password}
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
                                                <div class="form-group">
                                                    <button class="btn btn-warning btn-block">RECOVER</button>
                                                </div>
                                            </form>
                                            {/if}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
      
        <link rel="stylesheet" href="styles/assets/libs/bootstrap/fileinput.min.css">
        <script src="styles/assets/libs/bootstrap/bootstrap.min.js"></script>
        <script src="styles/assets/libs/bootstrap/fileinput.min.js"></script>
    </div>
</body>

</html>

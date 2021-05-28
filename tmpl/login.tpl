<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Log In / {$settings.site_name}</title>
    <link rel="shortcut icon" href="styles/assets/img/favicon/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="styles/assets/css/style.css">
    <script src="styles/assets/libs/jquery/jquery-1.9.1.min.js"></script>
    <script src="styles/assets/libs/modernizr/modernizr.js"></script>
    <script src="styles/assets/js/common.js"></script>
</head>

<body>

    {literal}
    <script language=javascript>
        function checkform() {
            if (document.mainform.username.value == '') {
                alert("Please type your username!");
                document.mainform.username.focus();
                return false;
            }
            if (document.mainform.password.value == '') {
                alert("Please type your password!");
                document.mainform.password.focus();
                return false;
            }
            return true;
        }

    </script>
    {/literal}

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
                <div class="container bagblack textsite titlesite">
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
                                                    <div class="title-bordered">LOG IN</div>
                                                </div>
                                            </div>

                                            {if $frm.say eq 'invalid_login'}
                                            <div class="alertnoti alert-warning">Your login or password or turing image code is wrong. Please check this information.</div>
                                            {/if}

                                            <form method=post name=mainform onsubmit="return checkform()">
                                                <input type=hidden name=a value='do_login'>
                                                <input type=hidden name=follow value='{$frm.follow}'>
                                                <input type=hidden name=follow_id value='{$frm.follow_id}'>
                                                <div class="form-group">
                                                    <label>Username *</label>
                                                    <input type="text" name=username value='{$frm.username|escape:"html"}' class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Your Password *</label>
                                                    <input type="password" value='' name=password class="form-control">
                                                </div>

                                                {if $ti.check.login}
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
                                                    <span class="help-block text-right text-primary pr-1 mt-1">
                                                        <a href="?a=forgot_password" data-pjax="">
                                                            <strong class="text--underline">
                                                                Forgot password?
                                                            </strong>
                                                        </a>
                                                    </span>
                                                </div>




                                                <div class="form-group">
                                                    <button class="btn btn-warning btn-block">LOGIN</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--StartofTawk.toScript--><script type="text/javascript"> var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date(); (function(){ var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0]; s1.async=true; s1.src='https://embed.tawk.to/5f844fe54704467e89f6b48d/default'; s1.charset='UTF-8'; s1.setAttribute('crossorigin','*'); s0.parentNode.insertBefore(s1,s0); })(); </script> <!--End of Tawk.to Script-->
                                        <!--End of Tawk.to Script-->
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

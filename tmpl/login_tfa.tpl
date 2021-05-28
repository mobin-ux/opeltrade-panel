<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Two Factor Authorization / {$settings.site_name}</title>
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
                                                    <div class="title-bordered">AUTHORIZATION 2FA</div>
                                                </div>
                                            </div>






                                            {if $say == 'invalid_code'}
                                            <div class="alertnoti alert-warning">You have entered invalid code.</div>
                                            {/if}

                                            <form method=post name=mainform onsubmit="return checkform()">
                                                <input type=hidden name=a value='do_login_tfa'>
                                                <input type=hidden name=follow value='{$frm.follow}'>
                                                <input type=hidden name=follow_id value='{$frm.follow_id}'>
                                                <input type=hidden name=time>
                                                <div class="form-group">
                                                    <label>Enter code *</label>
                                                    <input type=text name=code value="" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <button class="btn btn-warning btn-block">SUBMIT</button>
                                                </div>
                                            </form>

                                            {literal}
                                            <script language=javascript>
                                                document.mainform.time.value = (new Date()).getTime();

                                                function checkform() {
                                                    if (!document.mainform.code.value.match(/^[0-9]{6}$/)) {
                                                        alert("Please type code!");
                                                        document.mainform.code.focus();
                                                        return false;
                                                    }
                                                    return true;
                                                }

                                            </script>
                                            {/literal}

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

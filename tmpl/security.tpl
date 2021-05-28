{include file="headerbear.tpl"}
<section class="content bagblack">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card" style="margin-top: 30px">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Welcome, {$userinfo.username}</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="?a=account">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Two Factor Authentication</li>
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

        {if $errors.invalid_tfa_code}
        <div class="alertnoti alert-warning">Invalid code.</div>

        {/if}
        {if $errors.invalid_tfa_secret}
        <div class="alertnoti alert-warning">Invalid Secret.</div>

        {/if}

        <div class="row clearfix">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card" style="min-height: 393px;">
                    <div class="headeraccount">
                        <h2><strong>Two Factor</strong> Authentication</h2>
                    </div>
                    <div class="body">

                        <style>
                            .input-group .form-control:last-child,
                            .input-group-addon:last-child,
                            .input-group-btn:first-child>.btn:not(:first-child),
                            .input-group-btn:last-child>.dropdown-toggle {
                                border-left: 0 none;
                            }

                            .input-group>.custom-select:not(:first-child),
                            .input-group>.form-control:not(:first-child) {
                                border-top-left-radius: 0;
                                border-bottom-left-radius: 0;
                            }

                            .input-group .form-control:first-child,
                            .input-group-addon:first-child,
                            .input-group-btn:first-child>.dropdown-toggle,
                            .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
                                border-right: 0 none;
                            }

                            .input-group-addon:first-child {
                                border-bottom-right-radius: 0;
                                border-top-right-radius: 0;
                            }

                            .input-group-addon {
                                background-color: transparent;
                                border: 1px solid #535e69;
                                border-radius: 30px;
                                color: #555;
                                -webkit-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
                                -moz-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
                                -o-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
                                -ms-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
                                transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
                            }

                            .input-group:hover>.input-group-addon {
                                border: 1px solid #fff;
                                background-color: #fff;
                            }

                            .input-group-focus .input-group-addon {
                                background-color: #facd8a;
                                border-color: #facd8a;
                            }



                            .cbx {
                                margin: auto;
                                -webkit-user-select: none;
                                user-select: none;
                                cursor: pointer;
                            }

                            .cbx span {
                                display: inline-block;
                                vertical-align: middle;
                                transform: translate3d(0, 0, 0);
                            }

                            .cbx span:first-child {
                                position: relative;
                                width: 18px;
                                height: 18px;
                                border-radius: 3px;
                                transform: scale(1);
                                vertical-align: middle;
                                border: 1px solid #9098A9;
                                transition: all 0.2s ease;
                            }

                            .cbx span:first-child svg {
                                position: absolute;
                                top: 3px;
                                left: 2px;
                                fill: none;
                                stroke: #000;
                                stroke-width: 2;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-dasharray: 16px;
                                stroke-dashoffset: 16px;
                                transition: all 0.3s ease;
                                transition-delay: 0.1s;
                                transform: translate3d(0, 0, 0);
                            }

                            .cbx span:first-child:before {
                                content: "";
                                width: 100%;
                                height: 100%;
                                background: #facd8a;
                                display: block;
                                transform: scale(0);
                                opacity: 1;
                                border-radius: 50%;
                            }

                            .cbx span:last-child {
                                padding-left: 8px;
                            }

                            .cbx:hover span:first-child {
                                border-color: #facd8a;
                            }

                            .inp-cbx:checked+.cbx span:first-child {
                                background: #facd8a;
                                border-color: #facd8a;
                                animation: wave 0.4s ease;
                            }

                            .inp-cbx:checked+.cbx span:first-child svg {
                                stroke-dashoffset: 0;
                            }

                            .inp-cbx:checked+.cbx span:first-child:before {
                                transform: scale(3.5);
                                opacity: 0;
                                transition: all 0.6s ease;
                            }

                            @keyframes wave {
                                50% {
                                    transform: scale(0.9);
                                }
                            }

                        </style>
						
						{if $settings.use_tfa}
                        <form method=post name=mainform>
                        <input type=hidden name=a value="security">
                        <input type=hidden name=action value="tfa_save">
                        <input type=hidden name=time>


                            {if $tfa_enabled}
                            <input id="login" class="inp-cbx" type="checkbox" name="tfa_on_login" value=1 {if $tfa_settings.login}checked{/if} style="display: none" />
                            <label class="cbx" for="login"><span>
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg></span><span>on Login</span></label><br>

                            <input id="account" class="inp-cbx" type="checkbox" name="tfa_on_edit_account" value=1 {if $tfa_settings.edit_account}checked{/if} style="display: none" />
                            <label class="cbx" for="account"><span>
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg></span><span>on Edit Account</span></label><br>

                            <input id="withdraw" class="inp-cbx" type="checkbox" name="tfa_on_withdraw" value=1 {if $tfa_settings.withdraw}checked{/if} style="display: none" />
                            <label class="cbx" for="withdraw"><span>
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg></span><span>on Withdraw</span></label><br>

                            <input id="disable" class="inp-cbx" type="checkbox" name="tfa_disable" value=1 style="display: none" />
                            <label class="cbx" for="disable"><span>
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg></span><span>Disable Two Factor Authentication</span></label><br>


                            <br>
                            Confirm by typing code:
                            <br>
                            <div class="input-group"> <span class="input-group-addon">
                                    <i class="fa fa-key"></i></span>
                                <input type=text name="code" class="calculate-amount form-controlamount form-control key" style="font-size: 14px;padding: 10px 22px;">
                            </div>
                            <br>
                            <div class="col text-center">
                                <button class="btn btn-primary btn-round btn-simple float-right m-l-10 btn-warning waves-effect">Update</button>
                            </div>


                            {else}
                            <center>Your Secret Code is:
                            <div style="font-size: 18px; background: #facd8a; padding: 10px 15px; border-radius: 10px; color: #000; margin-top: 15px">{$tfa_secret}</div>
                            </center>
                            <input type=hidden name="tfa_secret" value="{$tfa_secret}">
                            <br>
                            <br>
                            <center>
                                <img src="{$tfa_secret_url}">
                            </center>
                            <br>
                            <br>Please enter two factor token from Google Authenticator to verify correct setup:
                            <br>
                            <br>
                            <div class="input-group"> <span class="input-group-addon">
                                    <i class="fa fa-key"></i></span>
                                <input type=text name="code" class="calculate-amount form-controlamount form-control key" style="font-size: 14px;padding: 10px 22px;">
                            </div>
                            <br>
                            <div class="col text-center">
                            <button class="btn btn-primary btn-round btn-simple float-right m-l-10 btn-warning waves-effect">Enable</button>
                            </div>
                           {/if}
                           </form>
                           {/if}
                        
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
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="card" style="min-height: 393px;">
                    <div class="body">Install Google Authenticator or Lastpass Authenticator on your mobile device.
                        <br>
                        <br>
                        <div class="row clearfix">
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <a href="https://www.google.com/landing/2step/" target="_blank">
                                    <img src="styles/assets/google.jpg">
                                </a>
                                <br>
                                <br> <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2" target="_blank">Download for Android</a>
                                <br> <a href="https://apps.apple.com/us/app/google-authenticator/id388497605" target="_blank">Download for iOS</a>
                                <br>
                                <br>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <a href="https://lastpass.com/auth/" target="_blank">
                                    <img src="styles/assets/lastpass.jpg">
                                </a>
                                <br>
                                <br> <a href="https://play.google.com/store/apps/details?id=com.lastpass.authenticator" target="_blank">Download for Android</a>
                                <br> <a href="https://apps.apple.com/us/app/lastpass-authenticator/id1079110004" target="_blank">Download for iOS</a>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    </div>
    </div>
    </div>
</section>{include file="footera.tpl"}</div>

<link rel="stylesheet" href="styles/assets/libs/bootstrap/fileinput.min.css">
<script src="styles/assets/libs/bootstrap/bootstrap.min.js"></script>
<script src="styles/assets/libs/bootstrap/fileinput.min.js"></script>
<script>
    $(".form-control")
        .on("focus", function() {
            $(this).parent(".input-group").addClass("input-group-focus");
        })
        .on("blur", function() {
            $(this).parent(".input-group").removeClass("input-group-focus");
        });

</script>
</div>

</body>

</html>

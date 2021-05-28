<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign up / {$settings.site_name}</title>
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
                <div class="container bagblack textsite titlesite">
                    <div class="row mt-5 mb-5">
                        <div class="col-md-offset-3 col-md-6">
                            <div class="b--shadow b--auth">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="b--auth__left">
                                            <div class="text-center">
                                                <a href="/" class="logo" data-pjax="">
                                                    <img src="styles/assets/img/logo-img.svg" alt="{$settings.site_name}" style="width: 180px;">
                                                </a>
                                            </div>
                                            <div class="b--shadow__title-bordered">
                                                <div class="title-bordered__wrapper">
                                                    <div class="title-bordered">CREATE YOUR ACCOUNT NOW</div>
                                                </div>
                                            </div>


                                            {if $deny_registration}
                                            We are closed for new registrations now.
                                            {elseif $settings.use_referal_program && $settings.force_upline && !$referer && !$settings.get_rand_ref}
                                            You do not have a upline. Our system require a upline for each user.
                                            {else}




                                            {if $errors}

                                            {section name=e loop=$errors}
                                            {if $errors[e] eq 'full_name'}
                                            <div class="alertnoti alert-warning">Please enter your full name!</div>
                                            {/if}
                                            {if $errors[e] eq 'address'}
                                            <div class="alertnoti alert-warning">Please enter your address!</div>
                                            {/if}
                                            {if $errors[e] eq 'city'}
                                            <div class="alertnoti alert-warning">Please enter your city!</div>
                                            {/if}
                                            {if $errors[e] eq 'state'}
                                            <div class="alertnoti alert-warning">Please enter your state!</div>
                                            {/if}
                                            {if $errors[e] eq 'zip'}
                                            <div class="alertnoti alert-warning">Please enter your zip!</div>
                                            {/if}
                                            {if $errors[e] eq 'country'}
                                            <div class="alertnoti alert-warning">Please choose your country!</div>
                                            {/if}
                                            {if $errors[e] eq 'username'}
                                            <div class="alertnoti alert-warning">Please enter valid username! It should contains English letters and digits only.</div>
                                            {/if}
                                            {if $errors[e] eq 'username_exists'}
                                            <div class="alertnoti alert-warning">Sorry, such user already exists! Please try another username.</div>
                                            {/if}
                                            {if $errors[e] eq 'email_exists'}
                                            <div class="alertnoti alert-warning">Sorry, such email already exists! Please try another email.</div>
                                            {/if}
                                            {if $errors[e] eq 'password'}
                                            <div class="alertnoti alert-warning">Please enter a password!</div>
                                            {/if}
                                            {if $errors[e] eq 'password_confirm'}
                                            <div class="alertnoti alert-warning">Please check your password!</div>
                                            {/if}
                                            {if $errors[e] eq 'password_too_small'}
                                            <div class="alertnoti alert-warning">The password you provided is too small, please enter at least {$settings.min_user_password_length} characters!</div>
                                            {/if}
                                            {if $errors[e] eq 'transaction_code'}
                                            <div class="alertnoti alert-warning">Please enter the Transaction Code!</div>
                                            {/if}
                                            {if $errors[e] eq 'transaction_code_confirm'}
                                            <div class="alertnoti alert-warning">Please check your Transaction Code!</div>
                                            {/if}
                                            {if $errors[e] eq 'transaction_code_too_small'}
                                            <div class="alertnoti alert-warning">The Transaction Code you provided is too small, please enter at least {$settings.min_user_password_length} characters!</div>
                                            {/if}
                                            {if $errors[e] eq 'transaction_code_vs_password'}
                                            <div class="alertnoti alert-warning">The Transaction Code should differ from the Password!</div>
                                            {/if}
                                            {if $errors[e] eq 'egold'}
                                            <div class="alertnoti alert-warning">Please enter your e-gold account number!</div>
                                            {/if}
                                            {if $errors[e] eq 'invalid_perfectmoney_account'}
                                            <div class="alertnoti alert-warning">Please enter USD PerfectMoney account number!
                                                {/if}
                                                {if $errors[e] eq 'email'}
                                                <div class="alertnoti alert-warning">Please enter your e-mail!</div>
                                                {/if}
                                                {if $errors[e] eq 'agree'}
                                                <div class="alertnoti alert-warning">You have to agree with the Terms and Conditions!</div>
                                                {/if}
                                                {if $errors[e] eq 'turing_image'}
                                                <div class="alertnoti alert-warning">Enter the verification code as it is shown in the corresponding box.</div>
                                                {/if}
                                                {if $errors[e] eq 'no_upline'}
                                                <div class="alertnoti alert-warning">The system requires an upline to register. {if $settings.get_rand_ref}You have to be agreed to random one or found a referral link in the net.{/if}</div>
                                                {/if}
                                                {if $errors[e] eq 'ip_exists_in_database'}
                                                <div class="alertnoti alert-warning">Your IP already exists in our database. Sorry, but registration impossible.</div>
                                                {/if}

                                                {if $errors[e] eq 'invalid_account_format'}
                                                {foreach from=$account_errors item=err}
                                                <div class="alertnoti alert-warning">{$err}</div>
                                                {/foreach}
                                                {/if}
                                                {/section}

                                                {/if}





                                                <form method=post onsubmit="return checkform()" name="regform">
                                                    <input type=hidden name=a value="signup">
                                                    <input type=hidden name=action value="signup">
                                                    <input type="hidden" name="fullname" id="fullname" value="{$frm.fullname|escape:" quotes"}">
                                                    <input type="hidden" name="email1" id="email1" value="{$frm.email1|escape:" quotes"}">
                                                    <input type="hidden" name="password2" id="password2" value="{$frm.password2|escape:" quotes"}">

                                                    <div class="form-group">
                                                        <label>Username *</label>
                                                        <input id="username" type="text" value="{$frm.username|escape:" quotes"}" name="username" class="form-control">
                                                    </div>


                                                    {if $settings.use_user_location}

                                                    <div class="form-group">
                                                        <label>Your Address *</label>
                                                        <input type=text name=address value="{$frm.address|escape:" quotes"}" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Your City *</label>
                                                        <input type=text name=city value="{$frm.city|escape:" quotes"}" class="form-control">
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Your State *</label>
                                                        <input type=text name=state value="{$frm.state|escape:" quotes"}" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Your Zip *</label>
                                                        <input type=text name=zip value="{$frm.zip|escape:" quotes"}" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Your Country *</label>
                                                        <select name='country' class="form-control">
                                                            <option value=''>--SELECT--</option>
                                                            {section name=c loop=$countries}
                                                            <option {if $countries[c].name eq $frm.country}selected{/if}>{$countries[c].name|escape:"quotes"}</option>
                                                            {/section}
                                                        </select>
                                                    </div>
                                                    {/if}

                                                    <div class="form-group">
                                                        <label>E-mail *</label>
                                                        <input id="email" type="text" value="{$frm.email|escape:" quotes"}" name="email" class="form-control">
                                                    </div>

                                                    {if $settings.use_transaction_code}

                                                    <div class="form-group">
                                                        <label>Define Transaction Code *</label>
                                                        <input type=password name=transaction_code value="{$frm.transaction_code|escape:" quotes"}" class="form-control">
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Retype Transaction Code *</label>
                                                        <input type=password name=transaction_code2 value="{$frm.transaction_code2|escape:" quotes"}" class="form-control">
                                                    </div>
                                                    {/if}

                                                   <!--  {foreach from=$pay_accounts item=ps}
                                                    <div class="form-group">
                                                        <label>Your {$ps.name} Account:</label>
                                                        <input type=text name=pay_account[{$ps.id}] value="{$ps.account|escape:html}" data-validate="{$ps.validate.func}" data-validate-{$ps.validate.func}="{$ps.validate[$ps.validate.func]}" data-validate-notice="{$ps.validate.notification|escape:html}" class="form-control">
                                                    </div>
                                                    {/foreach}

                                                    {foreach item=p from=$mpay_accounts}
                                                    {foreach item=ps from=$p.accounts}
                                                    <div class="form-group">
                                                        <label>Your {$p.name} {$ps.name}</label>
                                                        <input type=text name="pay_account[{$p.id}][{$ps.name|escape:html}]" value="{$ps.value|escape:html}" class="form-control">
                                                    </div>
                                                    {/foreach}
                                                    {/foreach} -->

                                                    <div class="form-group">
                                                        <label>Your Password *</label>
                                                        <input id="password" type="password" value="{$frm.password|escape:" quotes"}" name="password" class="form-control">
                                                    </div>



                                                    {if $ti.check.signup}
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


                                                    {if $settings.use_referal_program}
                                                    {if $referer}

                                                    <div class="form-group">
                                                        <label>Your Upline {*<a href="mailto:{$referer.email}">*}{$referer.name}{*</a>*} ({$referer.username|default:" None "})</label>
                                                    </div>

                                                    {else}
                                                    {if $settings.force_upline}
                                                    {if $settings.get_rand_ref}

                                                    <div class="form-group">
                                                        <input id="rand_ref" type=checkbox name="rand_ref" class="checkbox__input" value=1 checked>
                                                        <label for="rand_ref" class="checkbox__label">You do not have an upline. Our system requires an upline for each user. You'll have to agree to get a random one or find a referral link on the net.</label>
                                                    </div>

                                                    {else}

                                                    You do not have an upline. Our system requires an upline for each user.

                                                    {/if}
                                                    {/if}
                                                    {/if}
                                                    {/if}

                                                    <div class="form-group">
                                                        <input type="checkbox" name="agree" value="1" class="checkbox__input" id="terms" required checked>
                                                        <label for="terms" class="checkbox__label">I'm agree with
                                                            <a href="?a=rules" data-pjax> <strong class="text--underline">
                                                                    Terms & Conditions
                                                                </strong>
                                                            </a>*</label>
                                                    </div>




                                                    <div class="form-group">
                                                        <button class="btn btn-warning btn-block">REGISTER</button>
                                                    </div>
                                                </form>
                                                {/if}
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

        <script type="text/javascript">
            $(document).ready(function() {
                //////////////
                $("#password").on('keyup change', function() {
                    var psw = $("#password").val();
                    $("#password2").val(psw);
                });

                $("#email").on('keyup change', function() {
                    var ema = $("#email").val();
                    $("#email1").val(ema);
                });


                $("#username").keyup(function() {
                    $("#fullname").val(this.value);
                });

            });

        </script>

    </div>
</body>

</html>

{include file="headerbull.tpl"}
<section class="content bagblack">
    <div class="container">
        <style>
            th,
            td {
                padding: 4px;
                font-size: 13px;
            }

        </style>
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
                                    <li class="breadcrumb-item active">Account settings</li>
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

        {literal}


        <script language=javascript>
            function IsNumeric(sText) {
                var ValidChars = "0123456789.";
                var IsNumber = true;
                var Char;
                if (sText == '') return false;
                for (i = 0; i < sText.length && IsNumber == true; i++) {
                    Char = sText.charAt(i);
                    if (ValidChars.indexOf(Char) == -1) {
                        IsNumber = false;
                    }
                }
                return IsNumber;
            }

            function checkform() {
                if (document.editform.fullname.value == '') {
                    alert("Please type your full name!");
                    document.editform.fullname.focus();
                    return false;
                } {
                    /literal} {
                    if $settings.use_user_location == 1
                } {
                    literal
                }
                if (document.editform.address.value == '') {
                    alert("Please enter your address!");
                    document.editform.address.focus();
                    return false;
                }
                if (document.editform.city.value == '') {
                    alert("Please enter your city!");
                    document.editform.city.focus();
                    return false;
                }
                if (document.editform.state.value == '') {
                    alert("Please enter your state!");
                    document.editform.state.focus();
                    return false;
                }
                if (document.editform.zip.value == '') {
                    alert("Please enter your ZIP!");
                    document.editform.zip.focus();
                    return false;
                }
                if (document.editform.country.options[document.editform.country.selectedIndex].text == '--SELECT--') {
                    alert("Please choose your country!");
                    document.editform.country.focus();
                    return false;
                } {
                    /literal} { /
                    if
                } {
                    literal
                }
                if (document.editform.password.value != document.editform.password2.value) {
                    alert("Please check your password!");
                    document.editform.fullname.focus();
                    return false;
                } {
                    /literal} {
                    if $settings.use_transaction_code
                } {
                    literal
                }
                if (document.editform.transaction_code.value != document.editform.transaction_code2.value) {
                    alert("Please check your transaction code!");
                    document.editform.transaction_code2.focus();
                    return false;
                } {
                    /literal} { /
                    if
                } {
                    literal
                } {
                    /literal} {
                    if $settings.usercanchangeemail == 1
                } {
                    literal
                }
                if (document.editform.email.value == '') {
                    alert("Please enter your e-mail address!");
                    document.editform.email.focus();
                    return false;
                } {
                    /literal} { /
                    if
                } {
                    literal
                }

                for (i in document.editform.elements) {
                    f = document.editform.elements[i];
                    if (f.name && f.name.match(/^pay_account/)) {
                        if (f.value == '') continue;
                        var notice = f.getAttribute('data-validate-notice');
                        var invalid = 0;
                        if (f.getAttribute('data-validate') == 'regexp') {
                            var re = new RegExp(f.getAttribute('data-validate-regexp'));
                            if (!f.value.match(re)) {
                                invalid = 1;
                            }
                        } else if (f.getAttribute('data-validate') == 'email') {
                            var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
                            if (!f.value.match(re)) {
                                invalid = 1;
                            }
                        }
                        if (invalid) {
                            alert('Invalid account format. Expected ' + notice);
                            f.focus();
                            return false;
                        }
                    }
                }

                return true;
            }

        </script>
        {/literal}

        <form action="" method=post onsubmit="return checkform()" name=editform>
            <input type=hidden name=a value=edit_account>
            <input type=hidden name=action value=edit_account>
            <input type=hidden name=say value="">


            {if $frm.say eq 'changed'}
            <div class="alertnoti alert-warning">Your account data has been updated successfully.</div>

            {/if}
            {if $errors}

            {section name=e loop=$errors}
            {if $errors[e] eq 'full_name'}
            <div class="alertnoti alert-warning">Please enter your Full Name!</div>

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
            <div class="alertnoti alert-warning">Please enter your username!</div>

            {/if}
            {if $errors[e] eq 'password'}
            <div class="alertnoti alert-warning">Please enter a password!</div>

            {/if}
            {if $errors[e] eq 'password_confirm'}
            <div class="alertnoti alert-warning">Please check your password!</div>

            {/if}
            {if $errors[e] eq 'password_too_small'}
            <div class="alertnoti alert-warning">Password is too small, please enter at least {$settings.min_user_password_length} chars!</div>

            {/if}
            {if $errors[e] eq 'transaction_code'}
            <div class="alertnoti alert-warning">Please enter the Transaction Code!</div>
            {/if}

            {if $errors[e] eq 'transaction_code_confirm'}
            <div class="alertnoti alert-warning">Please check your Transaction Code!</div>

            {/if}
            {if $errors[e] eq 'transaction_code_too_small'}
            <div class="alertnoti alert-warning">Transaction Code is too small, please enter at least {$settings.min_user_password_length} chars!</div>

            {/if}
            {if $errors[e] eq 'wrong_current_password'}
            <div class="alertnoti alert-warning">You entered wrong current password</div>

            {/if}
            {if $errors[e] eq 'transaction_code_vs_password'}
            <div class="alertnoti alert-warning">Transaction Code should be different then the Password!</div>

            {/if}

            {if $errors[e] eq 'invalid_transaction_code'}
            <div class="alertnoti alert-warning">You have provided invalid Current Transaction Code!</div>

            {/if}
            {if $errors[e] eq 'email'}
            <div class="alertnoti alert-warning">Please enter your e-mail!</div>

            {/if}
            {if $errors[e] eq 'turing_image'}
            <div class="alertnoti alert-warning">Enter the verification code as it is shown in the corresponding box.</div>

            {/if}
            {if $errors[e] eq 'tfa_code'}
            <div class="alertnoti alert-warning">Invalid 2FA code.</div>

            {/if}
            {if $errors[e] eq 'invalid_account_format'}
            {foreach from=$account_errors item=err}
            <div class="alertnoti alert-warning">{$err}</div>
            {/foreach}
            {/if}

            {/section}

            {/if}





            <div class="row clearfix">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="card member-card" style="min-height: 499px;border-radius: 0.55rem 0.55rem .25rem .25rem;">
                        <div class="headeraccount l-pink" style="background: #01123c !important">
                            <h4 class="m-t-10">{$userinfo.username}</h4>
                        </div>
                        <div class="member-img">
                            <img src="styles/assets/user2.png" class="rounded-circle" alt="profile-image">
                        </div>
                        <div class="body">
                            <div class="col-12">
                                <p class="text-muted">Registration: {$userinfo.date_register}</p>
                                <p class="text-muted" style="font-size: 16px">{$userinfo.email|escape:"quotes"}</p>
								{if $settings.use_tfa}
                                <br> <a href="?a=security"><i class="fa fa-lock m-r-10"></i> <span>Two Factor Authentication</span></a>
								{/if}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="card" style="min-height: 499px;">
                        <div class="headeraccount">
                            <h2><strong>Personal</strong> Details</h2>
                        </div>
                        <div class="body">
                            <table cellspacing=0 cellpadding=2 border=0 style="width: 100%">
                                <tr>
                                    <td>Full Name:</td>
                                    <td>
                                        <input type=text name=fullname value='{$userinfo.name|escape:"quotes"}' class="editboxz calculate-amount form-controlamount">
                                </tr>
                                <tr>
                                    <td>E-mail:</td>
                                    <td>
                                        {if $settings.usercanchangeemail == 1}<input type=text name=email value='{$userinfo.email|escape:"quotes"}' class="editboxz calculate-amount form-controlamount">{else}<input type=text value='{$userinfo.email}' class="editboxz calculate-amount form-controlamount">{/if}
                                </tr>
                                <tr>
                                    <td>New Password:</td>
                                    <td>
                                        <input type=password name=password value="" class="editboxz calculate-amount form-controlamount">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Retype Password:</td>
                                    <td>
                                        <input type=password name=password2 value="" class="editboxz calculate-amount form-controlamount">
                                    </td>
                                </tr>


                                {if $settings.use_user_location}
                                <tr>
                                    <td>Your Address:</td>
                                    <td><input type=text name=address value="{$userinfo.address|escape:" quotes"}" class="editboxz calculate-amount form-controlamount" size=30></td>
                                </tr>
                                <tr>
                                    <td>Your City:</td>
                                    <td><input type=text name=city value="{$userinfo.city|escape:" quotes"}" class="editboxz calculate-amount form-controlamount" size=30></td>
                                </tr>
                                <tr>
                                    <td>Your State:</td>
                                    <td><input type=text name=state value="{$userinfo.state|escape:" quotes"}" class="editboxz calculate-amount form-controlamount" size=30></td>
                                </tr>
                                <tr>
                                    <td>Your Zip:</td>
                                    <td><input type=text name=zip value="{$userinfo.zip|escape:" quotes"}" class="editboxz calculate-amount form-controlamount" size=30></td>
                                </tr>
                                <tr>
                                    <td>Your Country:</td>
                                    <td>
                                        <select name='country' class="editboxz calculate-amount form-controlamount">
                                            <option value=''>--SELECT--</option>
                                            {section name=c loop=$countries}
                                            <option {if $countries[c].name eq $userinfo.country}selected{/if}>{$countries[c].name|escape:"quotes"}</option>
                                            {/section}
                                    </td>
                                </tr>
                                {/if}

                                {if $settings.use_transaction_code}
                                {if $settings.use_transaction_code_edit_account != 1}
                                {if $userinfo.transaction_code != ''}
                                <tr>
                                    <td>Current Transaction Code:</td>
                                    <td><input type=password name=transaction_code_current value="" class="editboxz calculate-amount form-controlamount" size=30></td>
                                </tr>
                                {/if}
                                {/if}
                                <tr>
                                    <td>New Transaction Code:</td>
                                    <td><input type=password name=transaction_code value="" class="editboxz calculate-amount form-controlamount" size=30></td>
                                </tr>
                                <tr>
                                    <td>Retype Transaction Code:</td>
                                    <td><input type=password name=transaction_code2 value="" class="editboxz calculate-amount form-controlamount" size=30></td>
                                </tr>
                                {/if}

                                {if $userinfo.admin_auto_pay_earning == 1}
                                <tr>
                                    <td colspan=2><input class="editboxz calculate-amount form-controlamount" type=checkbox name=user_auto_pay_earning value=1 {if $userinfo.user_auto_pay_earning==1}checked{/if}> Receive earnings directly to e-currency account</td>
                                </tr>
                                {/if}
                                {if $settings.use_transaction_code_edit_account == 1}
                                <tr>
                                    <td>Current Transaction Code:</td>
                                    <td><input type=password name=transaction_code_current value="" class="editboxz calculate-amount form-controlamount" size=30></td>
                                </tr>
                                {/if}
                                {if $userinfo.tfa_settings.edit_account}
                                <tr>
                                    <td>2FA Code:</td>
                                    <td><input type="text" name="tfa_code" class="editboxz calculate-amount form-controlamount" size=15> <input type="hidden" name="tfa_time" id="tfa_time"></td>
                                </tr>
                                {literal}
                                <script language=javascript>
                                    document.getElementById('tfa_time').value = (new Date()).getTime();

                                </script>
                                {/literal}
                                {/if}
                                {if $ti.check.edit_account}
                                <tr>
                                    <td>Enter captcha * <img src="?a=show_validation_image&{$ti.session.name}={$ti.session.id}&rand={$ti.session.rand}">:</td>
                                    <td><input type=text name=validation_number class="editboxz calculate-amount form-controlamount" size=30></td>
                                </tr>
                                {/if}

                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="card" style="min-height: 499px;">
                        <div class="headeraccount">
                            <h2><strong>Payment</strong> Details</h2>
                        </div>
                        <div class="body">
                            <table cellspacing=0 cellpadding=2 border=0 style="width: 100%">
                                {foreach item=ps from=$pay_accounts}
                                <tr>
                                    <td>
                                        <img src="styles/assets/pay2/{$ps.id}.png" style="width: 25px !important; float: left; margin: -2px 15px 0px 0px">{$ps.name}:</td>
                                    <td>
                                        {if $settings.usercanchangeegoldacc == 0 && $ps.account != ''}<input type=text class="editboxz calculate-amount form-controlamount" value="{$ps.account|escape:html}">{else}<input type=text class="editboxz calculate-amount form-controlamount" name="pay_account[{$ps.id}]" value="{$frm.pay_account[$ps.id]|default:$ps.account|escape:html}" data-validate="{$ps.validate.func}" data-validate-{$ps.validate.func}="{$ps.validate[$ps.validate.func]}" data-validate-notice="{$ps.validate.notification|escape:html}">{/if}
                                    </td>
                                </tr>
                                {/foreach}

                                {foreach item=p from=$mpay_accounts}
                                {foreach item=ps from=$p.accounts}
                                <tr>
                                    <td>
                                        <img src="styles/assets/pay2/{$p.id}.png" style="width: 25px !important; float: left; margin: -2px 15px 0px 0px">{$ps.name}:</td>
                                    <td>
                                        {if $settings.usercanchangeegoldacc == 0 && $ps.value != ''}<input type=text class="editboxz calculate-amount form-controlamount" value="{$ps.value|escape:html}">{else}<input type=text class="editboxz calculate-amount form-controlamount" name="pay_account[{$p.id}][{$ps.name|escape:html}]" value="{$frm.pay_account[$p.id][$ps.name]|default:$ps.value|escape:html}">{/if}
                                    </td>
                                </tr>
                                {/foreach}
                                {/foreach}

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear: both"></div>
            <div class="col text-center">
                <button class="btn btn-primary btn-round btn-simple float-right m-l-10 btn-warning waves-effect">Save Changes</button>
            </div>
            <div style="clear: both"></div>
        </form>
        <br>
        <br>
    </div>
</section>{include file="footera.tpl"}</div>

<link rel="stylesheet" href="styles/assets/libs/bootstrap/fileinput.min.css">
<script src="styles/assets/libs/bootstrap/bootstrap.min.js"></script>
<script src="styles/assets/libs/bootstrap/fileinput.min.js"></script>
<script>
    addClass(document.getElementById('js-sidebar-settings'), 'menu__link--active');

</script>
</div>

</body>

</html>

{include file="headerbull.tpl"}

<section class="content bagblack">

    <style>
        .input-group-addon {
            background-color: transparent;
            border: 1px solid #535e69;
            border-radius: 30px;
            color: #555;
            width: initial;
        }


        .fixpadding {
            padding-right: 15px !important;
            padding-left: 15px !important;
        }

    </style>

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
                                    <li class="breadcrumb-item active">Withdraw funds</li>
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



        <div class="row clearfix">
            <div class="col-lg-12">


                {if $say eq 'processed'}
                {if $batch eq ''}
                <div id="main-msj" class="alertnoti alert-warning">Withdrawal request has been successfully saved.{else} Withdrawal has been processed. Batch id: {$batch}</div>
                {/if}

                {/if}

                {if $fatals}

                {if $fatals.times_limit}
                <div class="alertnoti alert-warning">You can withdraw {$settings.limit_withdraw_period_times} per {$settings.limit_withdraw_period_date} only.</div>
                {/if}

                {else}

                {if $say eq 'ec_forbidden' || $errors.ec_forbidden}
                <div class="alertnoti alert-warning">Sorry, withdraw for this processing is temproary forbidden.</div>
                {/if}
                {if $say eq 'on_hold' || $errors.on_hold}
                <div class="alertnoti alert-warning">Sorry, this amount on hold now.</div>
                {/if}
                {if $say eq 'zero' || $errors.zero}
                <div class="alertnoti alert-warning">Sorry, you can't request a withdraw smaller than {$currency_sign}0.00 only</div>
                {/if}
                {if $say eq 'less_min' || $errors.less_min}
                <div class="alertnoti alert-warning">Sorry, you can request not less than {$currency_sign}{*$settings.min_withdrawal_amount*}{$fees.amount_min}</div>
                {/if}
                {if $say eq 'greater_max' || $errors.greater_max}
                <div class="alertnoti alert-warning">Sorry, you can request not greater than {$currency_sign}{*$settings.max_withdrawal_amount*}{$fees.amount_max}</div>
                {/if}
                {if $say eq 'daily_limit' || $errors.daily_limit}
                <div class="alertnoti alert-warning">Sorry, you have exceeded a daily limit</div>
                {/if}
                {if $say eq 'not_enought' || $errors.not_enought}
                <div class="alertnoti alert-warning">Sorry, you have requested the amount larger than the one on your balance.</div>
                {/if}
                {if $say eq 'invalid_transaction_code' || $errors.invalid_transaction_code}
                <div class="alertnoti alert-warning">You have entered the invalid transaction code.</div>
                {/if}
                {if $say eq 'invalid_tfa_code' || $errors.invalid_tfa_code}
                <div class="alertnoti alert-warning">You have entered invlid 2FA code.</div>
                {/if}
                {if $say eq 'no_deposits' || $errors.no_deposits}
                <div class="alertnoti alert-warning">You have not done any deposits yet. Withdrawal function will be available after a deposit.</div>
                {/if}
                {if $say eq 'no_active_deposits' || $errors.no_active_deposits}
                <div class="alertnoti alert-warning">You must have active deposit to withdraw.</div>
                {/if}
            </div>
        </div>
        {if $preview}






        <form method=post>
            <input type=hidden name=a value=withdraw>
            <input type=hidden name=action value=withdraw>
            <input type=hidden name=amount value={$amount}>
            <input type=hidden name=ec value={$ec}>
            <input type=hidden name=comment value="{$comment|escape:html}">
            <!-- withdraw design start -->
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="headeraccount">
                            <h2><strong>Quick </strong> Info</h2>
                        </div>
                        <div class="body">
                            <table class="table table-hover m-b-0">
                                <tbody>
                                    <tr>
                                        <td>Min withdrawal - Crypto</td>
                                        <th>$2</th>
                                    </tr>
                                    <tr>
                                        <td>Min withdrawal - USD</td>
                                        <th>$0.01</th>
                                    </tr>
                                    <tr class="hide-xs">
                                        <td>Withdrawal time</td>
                                        <th>Instant</th>
                                    </tr>
                                    <tr>
                                        <td>Pending Withdrawals</td>
                                        <th>{$currency_sign}{if $ab_formated.withdraw_pending != 0}{$ab_formated.withdraw_pending}{else}0.00{/if}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="card">
                        <div class="headeraccount">
                            <h2><strong>Confirm</strong> Withdrawal</h2>
                        </div>
                        <div class="body">

                            <div class="table-responsive">

                                <table class="table table-hover m-b-0">
                                    <tr>
                                        <th>Payment System:</th>
                                        <td>{$currency}</td>
                                    </tr>
                                    <tr>
                                        <th>Account:</th>
                                        <td>{$account}</td>
                                    </tr>
                                    <tr>
                                        <th>Debit Amount:</th>
                                        <td>{$currency_sign}{$amount}</td>
                                    </tr>
                                    <tr>
                                        <th>Withdrawal Fee:</th>
                                        <td>
                                            {if $fees.fee > 0}
                                            {$fees.percent}% + {$currency_sign}{$fees.add_amount} (min. {$currency_sign}{$fees.fee_min} max. {if $fees.fee_max}{$currency_sign}{$fees.fee_max}{else}no{/if})
                                            {else}
                                            We have no fee for this operation.
                                            {/if}
                                        </td>
                                    </tr>

                                    {if $converted}
                                    <tr>
                                        <th>Credit Amount:</th>
                                        <td>{$currency_sign}{$converted.amount}</td>
                                    </tr>
                                    <tr>
                                        <th>{$converted.fiat} Amount:</th>
                                        <td>{$to_withdraw}</td>
                                    </tr>
                                    {else}
                                    <tr>
                                        <th>Credit Amount:</th>
                                        <td>{$currency_sign}{$to_withdraw}</td>
                                    </tr>
                                    {/if}


                                    {if $comment}
                                    <tr>
                                        <th>Note:</th>
                                        <td>{$comment|escape:html}</td>
                                    </tr>
                                    {/if}
                                    {if $settings.use_transaction_code && $userinfo.transaction_code}
                                    <tr>
                                        <th>Transaction Code:</th>
                                        <td><input type="password" name="transaction_code" class=inpts size=15></td>
                                    </tr>
                                    {/if}



                                    {if $userinfo.tfa_settings.withdraw}
                                    <tr>
                                        <th>2FA Code:</th>
                                        <td><input type="text" name="tfa_code" class=inpts size=15> <input type="hidden" name="tfa_time" id="tfa_time"></td>
                                    </tr>
                                    {literal}
                                    <script language=javascript>
                                        document.getElementById('tfa_time').value = (new Date()).getTime();

                                    </script>
                                    {/literal}
                                    {/if}
                                </table>



                                <div class="col text-center">

                                    <button class="btn btn-primary btn-round btn-simple float-right m-l-10 btn-warning waves-effect">Confirm</button>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>










        {else}





        <div id="withdrawfd" class="col-lg-12" style="padding-right: 0px;padding-left: 0px;">


            <form method=post>
                <input type=hidden name=a value=withdraw>
                <input type=hidden name=action value=preview>
                <input type=hidden name=say value="">
                <!-- withdraw design start -->
                <div class="row clearfix">
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="headeraccount">
                                <h2>Withdraw <strong>Funds</strong></h2>
                            </div>
                            <div class="body">
                                <h2 class="card-inside-title">Payment processor</h2>


                                {if $have_available}
                                <div class="btntwo-group bootstrap-select">
                                    <label class="select" style="width: 100%;">
                                        <select name="ec" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                            {foreach from=$ps item=p}
                                            {if $p.available > 0}{if $p.status > 0 || $p.available > 0}<option value="{$p.id}">{$p.name|escape:html}</option>{/if}{/if}
                                            {/foreach}
                                        </select>
                                    </label>
                                </div>
                                <h2 class="card-inside-title">Withdrawal amount</h2>
                                <input type="text" value="{$frm.amount|amount_format|default:" 10.00"}" class="calculate-amount form-controlamount" style="font-size: 14px;padding: 10px 22px;" name="amount">
                                <br>
                                {if $ti.check.withdrawal}
                                <div class="form-group">
                                    <label id="js-captcha-label">Enter captcha *</label>


                                    <div class="input-group"> <span class="input-group-addon">
                                            <img src="{" ?a=show_validation_image&`$ti.session.name`=`$ti.session.id`&rand=`$ti.session.rand`"|encurl}"></span>
                                        <input type="text" name="validation_number" class="calculate-amount form-controlamount form-control key" style="font-size: 14px;padding: 10px 22px;">
                                    </div>

                                </div>
                                {/if}
                                <div class="col text-center">
                                    <button class="btn btn-primary btn-round btn-simple float-right m-l-10 btn-warning waves-effect">Withdraw funds</button>
                                </div>
                                {else}
                                You have no funds to withdraw.
                                {/if}

                            </div>
                        </div>
                        <div class="card">
                            <div class="headeraccount">
                                <h2><strong>Quick </strong> Info</h2>
                            </div>
                            <div class="body">
                                <table class="table table-hover m-b-0">
                                    <tbody>
                                        <tr>
                                            <td>Min withdrawal - Crypto</td>
                                            <th>$2</th>
                                        </tr>
                                        <tr>
                                            <td>Min withdrawal - USD</td>
                                            <th>$0.01</th>
                                        </tr>
                                        <tr class="hide-xs">
                                            <td>Withdrawal time</td>
                                            <th>Instant</th>
                                        </tr>
                                        <tr>
                                            <td>Pending Withdrawals</td>
                                            <th>{$currency_sign}{if $ab_formated.withdraw_pending != 0}{$ab_formated.withdraw_pending}{else}0.00{/if}</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <div class="card">
                            <div class="headeraccount">
                                <h2><strong>Available</strong> Balance</h2>
                            </div>
                            <div class="body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="m-b-0">{$currency_sign}{$ab_formated.total}</h2>
                                        <p>Account balance</p>
                                    </div>
                                </div>
                                <div class="table-responsive">


                                    <table class="table table-hover m-b-0">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Processor</th>
                                                <th>Available</th>
                                                <th>Wallet</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        {foreach item=ps from=$pay_accounts from=$ps item=p}
                                        <tbody>
                                            <tr>
                                                <td style="max-width: 30px">
                                                    <img src="styles/assets/pay2/{$p.id}.png" style="width: 20px;min-width: 15px">
                                                </td>
                                                <td>{$p.name|escape:html}</td>

                                                <td class="text-left"><span>{$currency_sign}{$p.available}</span>

                                                </td>
                                                <td>{if $p.account != ''}{$p.account|truncate:7:"...":true}{else}<a href="{" ?a=edit_account"|encurl}"><i>not set</i></a>{/if}
                                                </td>
                                                <td style="width: 20px"></td>
                                            </tr>
                                        </tbody>
                                        {/foreach}

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        {/if}

        {/if}


    </div>
</section>{include file="footera.tpl"}</div>

<link rel="stylesheet" href="styles/assets/libs/bootstrap/fileinput.min.css">
<script src="styles/assets//libs/bootstrap/bootstrap.min.js"></script>
<script src="styles/assets//libs/bootstrap/fileinput.min.js"></script>

<script>
    document.write("<script type='text/javascript' src='styles/assets/js/data.js?v=" + Date.now() + "'><\/script>");

</script>


<script>
    addClass(document.getElementById('js-sidebar-withdraw'), 'menu__link--active');

</script>

<script>
    if ($('#main-msj').length) {
        /* it exists */
        addClass(document.getElementById('withdrawfd'), 'fixpadding');
    } else {
        /* it doesn't exist */
    }

</script>


</div>
</body>

</html>

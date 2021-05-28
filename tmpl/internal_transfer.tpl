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

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
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
                                    <li class="breadcrumb-item active">Internal Transfer</li>
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




        {if $say == 'processed'}
        <div class="alertnoti alert-warning">Internal transfer has been successfully completed.</div>

        {/if}

        {if $fatals}

        {if $fatals.forbidden}<div class="alertnoti alert-warning">Internal transfers are forbidden.</div>{/if}
        {if $fatals.no_deposits}<div class="alertnoti alert-warning">You can not send funds before you make any deposit.</div>{/if}
        {if $fatals.times_limit}<div class="alertnoti alert-warning">You can send internal transfer {$settings.limit_transfer_period_times} per {$settings.limit_transfer_period_date} only.</div>{/if}

        {else}

        {if $errors.turing_image}<div class="alertnoti alert-warning">Invalid turing image.</div>{/if}
        {if $errors.user_not_found}<div class="alertnoti alert-warning">The recipient's username entered has not been found or has been suspended.</div>{/if}
        {if $errors.less_min}<div class="alertnoti alert-warning">You can transfer the amount not less {$currency_sign}{if $settings.internal_transfer_min}{$settings.internal_transfer_min}{else}0.00{/if} only.</div>{/if}
        {if $errors.too_big_amount}<div class="alertnoti alert-warning">You have no such amount on your balance.</div>{/if}
        {if $errors.too_big_amount_plus_fee}<div class="alertnoti alert-warning">You have no enough funds to complte the transaction. Total amount you should have to send ${$frm.amount|amount_format} + fee is <b>${$errors.too_big_amount_plus_fee}</b>.</div>{/if}
        {if $errors.greater_max}<div class="alertnoti alert-warning">Maximum amount you can send is {$currency_sign}{$settings.internal_transfer_max}.</div>{/if}

        {if $errors.invalid_transaction_code}<div class="alertnoti alert-warning">Invalid Transaction Code.</div>{/if}

        {if $preview}





        <form method=post>
            <input type=hidden name=a value=internal_transfer>
            <input type=hidden name=action value=confirm>
            <input type=hidden name=amount value={$amount}>
            <input type=hidden name=account value={$user.username|escape:html}>
            <input type=hidden name=ec value={$ec}>
            <input type=hidden name=comment value="{$comment}">

            <!-- withdraw design start -->
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-4 col-md-12 hide-xs">
                    <div class="card" style="min-height: 315px;">
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

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="card" style="min-height: 315px;">
                        <div class="headeraccount">
                            <h2><strong>Internal</strong> Transfer</h2>
                        </div>
                        <div class="body">

                            <div class="table-responsive">

                                <table cellspacing=0 cellpadding=2 border=0 class="table table-hover m-b-0">
                                    <tr>
                                        <th>Payment System:</th>
                                        <td>{$currency}</td>
                                    </tr>
                                    <tr>
                                        <th>Recipient:</th>
                                        <td>{$user.username|escape:html}</td>
                                    </tr>
                                    <tr>
                                        <th>Fee:</th>
                                        <td>
                                            {if $fee > 0}
                                            {$settings.internal_transfer_fee}% (min. {$currency_sign}{$settings.minimum_internal_transfer_fee})
                                            {else}
                                            We have no fee for this operation.
                                            {/if}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Debit Amount:</th>
                                        <td>{$currency_sign}{$to_send}</td>
                                    </tr>
                                    <tr>
                                        <th>Credit Amount:</th>
                                        <td>{$currency_sign}{$to_receive}</td>
                                    </tr>
                                    {if $comment}
                                    <tr>
                                        <th>With comments:</th>
                                        <td>{$comment|escape:html}</th>
                                    </tr>
                                    {/if}

                                    {if $settings.use_transaction_code && $userinfo.transaction_code}
                                    <tr>
                                        <th>Transaction Code:</th>
                                        <td><input class="calculate-amount form-controlamount" type="password" name="transaction_code" size=15></td>
                                    </tr>
                                    {/if}
                                </table>
                                <br>


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


        <form method=post>
            <input type=hidden name=a value=internal_transfer>
            <input type=hidden name=action value=preview>
            <input type=hidden name=say value="">

            <!-- withdraw design start -->
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-4 col-md-12 hide-xs">
                    <div class="card" style="min-height: 315px;">
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

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="card" style="min-height: 315px;">
                        <div class="headeraccount">
                            <h2><strong>Internal</strong> Transfer</h2>
                        </div>
                        <div class="body">

                            <div class="table-responsive">

                                <table cellspacing=0 cellpadding=2 border=0 class="table table-hover m-b-0">
                                    <tr>
                                        <td>Account Balance:</td>
                                        <td>{$currency_sign}<b>{$ab_formated.total}</b></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td> <small>
                                                {foreach from=$ps item=p}
                                                {if $p.balance > 0}{$currency_sign}{$p.balance} of {$p.name}{if $p.hold > 0} / {$currency_sign}{$p.hold} on hold{/if}<br>{/if}
                                                {/foreach}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=2>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Select e-currency:</td>
                                        <td><select class="calculate-amount form-controlamount" name=ec class="calculate-amount form-controlamount" class=inpts>
                                                {foreach from=$ps item=p}
                                                {if $p.available > 0}<option value={$p.id}>{$p.name}</option>{/if}
                                                {/foreach}
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Transfer ({$currency_sign}):</td>
                                        <td><input class="calculate-amount form-controlamount" type=text name=amount value="{if $frm.amount}{$frm.amount|escape:htmlall}{else}10.00{/if}" class=inpts size=15></td>
                                    </tr>
                                    <tr>
                                        <td>To Account:</td>
                                        <td><input class="calculate-amount form-controlamount" type=text name=account value="{$frm.account|escape:htmlall}" class=inpts size=15></td>
                                    </tr>
                                    <tr>
                                        <td colspan=2><textarea class="form-control" name=comment class=inpts cols=45 rows=4>{if $frm.comment}{$frm.comment|escape:htmlall}{else}Your comment{/if}</textarea>
                                    </tr>
                                    {if $ti.check.internal_transfer}
                                    <tr>
                                        <td>Enter captcha *:<img src="{" ?a=show_validation_image&`$ti.session.name`=`$ti.session.id`&rand=`$ti.session.rand`"|encurl}"></td>
                                        <td><input class="calculate-amount form-controlamount" type=text name=validation_number class=inpts size=15></td>
                                    </tr>
                                    {/if}
                                </table>
                                <br>


                                <div class="col text-center">

                                    <button class="btn btn-primary btn-round btn-simple float-right m-l-10 btn-warning waves-effect">Confirm</button>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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

{include file="headerbear.tpl"}


<style>
    .deposit-process {
        color: #fff;
        background-color: #01123c;
        border-color: #01123c;


        text-decoration: none;
        padding-left: 30px;
        padding-right: 30px;

        display: inline-block;
        margin-bottom: 0;
        font-weight: 500;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        padding: 12px 20px;
        font-size: 14px;
        line-height: 1.42857;
        border-radius: 2.75px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        margin-top: 30px;
        margin-right: 20px;
    }

    .deposit-cancel {
        color: #fff;
        background-color: #01123c;
        border-color: #01123c;


        text-decoration: none;
        padding-left: 30px;
        padding-right: 30px;

        display: inline-block;
        margin-bottom: 0;
        font-weight: 500;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        padding: 12px 20px;
        font-size: 14px;
        line-height: 1.42857;
        border-radius: 2.75px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        margin-top: 30px;
    }

</style>

<link rel="stylesheet" href="styles/assets/css/plans.css">
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
                                    <li class="breadcrumb-item active">Deposit Confirmation</li>
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

            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="headeraccount">
                        <h2><strong>Deposit</strong> Confirmation</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">




                            {if $false_data != 1}


                            <table cellspacing=0 cellpadding=2 class="table table-hover m-b-0">
                                {if $deposit.id > 0}
                                <tr>
                                    <td align="center" colspan="3">{$coin_payment_image}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;color: #01123c;">Plan:</th>
                                    <td style="text-align: right;">{$deposit.name|escape:html}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;color: #01123c;">Profit:</th>
                                    <td style="text-align: right;">{$deposit.percent}% {if $deposit.period == 'end'}after {$deposit.periods} days{else}{$deposit.period_name} for {if $deposit.periods == 0}lifelong{else}{$deposit.periods} {$deposit.time_units}{if $deposit.time_units != 1}s{/if} {if $deposit.work_week}(mon-fri){/if}{/if}{/if}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;color: #01123c;">Principal Return:</th>
                                    <td style="text-align: right;">{if $deposit.principal_return}Yes{if $deposit.principal_return_hold_percent > 0}, with {$deposit.principal_return_hold_percent|number_format:2}% fee{/if}{else}No (included in profit){/if}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;color: #01123c;">Principal Withdraw:</th>
                                    <td style="text-align: right;">
                                        {if $deposit.principal_withdraw}Available with
                                        {foreach from=$deposit.principal_withdraw_terms item=t name=wpt}
                                        {$t.percent}% fee {if $t.duration > 0}after {$t.duration} days{/if}{if !$smarty.foreach.wpt.last} or {/if}
                                        {/foreach}
                                        {if $deposit.principal_withdraw_duration_max} but before {$deposit.principal_withdraw_duration_max|number_format} days{/if}
                                        {else}Not available{/if}
                                    </td>
                                </tr>
                                {if $deposit.use_compound == 1}
                                <tr>
                                    <th style="text-align: left;color: #01123c;">Compound:</th>
                                    <td style="text-align: right;">{$deposit.compound|number_format}%</td>
                                </tr>
                                {/if}
                                {/if} {* $deposit.id *}

                                {if $deposit.ec_fees.fee}
                                <tr>
                                    <th style="text-align: left;color: #01123c;">Credit Amount:</th>
                                    <td style="text-align: right;">{$currency_sign}{$deposit.user_amount}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;color: #01123c;">Deposit Fee:</th>
                                    <td style="text-align: right;">{$deposit.ec_fees.percent}% + {$currency_sign}{$deposit.ec_fees.add_amount} (min. {$currency_sign}{$deposit.ec_fees.fee_min} max. {$currency_sign}{$deposit.ec_fees.fee_max})</td>
                                </tr>
                                {/if}
                                {if $deposit.converted_amount}
                                <tr>
                                    <th style="text-align: left;color: #01123c;">Debit Amount:</th>
                                    <td style="text-align: right;">{$currency_sign}{$deposit.converted_amount}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;color: #01123c;">{$deposit.converted_fiat} Debit Amount:</th>
                                    <td style="text-align: right;">{$deposit.amount}</td>
                                </tr>
                                {else}
                                <tr>
                                    <th style="text-align: left;color: #01123c;">Debit Amount:</th>
                                    <td style="text-align: right;">{$currency_sign}{$deposit.amount}</td>
                                </tr>
                                {/if}
                            </table>

                            {$payment_form}
                            {/if}




                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>
</section>{include file="footera.tpl"}</div>

<link rel="stylesheet" href="styles/assets/libs/bootstrap/fileinput.min.css">
<script src="styles/assets/libs/bootstrap/bootstrap.min.js"></script>
<script src="styles/assets/libs/bootstrap/fileinput.min.js"></script>
<script src="styles/assets/libs/jquery/jquery-1.9.1.min.js"></script>
<script>
    document.write("<script type='text/javascript' src='styles/assets/js/data.js?v=" + Date.now() + "'><\/script>");

</script>




<script>
    addClass(document.getElementById('js-sidebar-invest'), 'menu__link--active');

</script>



</div>
</body>

</html>

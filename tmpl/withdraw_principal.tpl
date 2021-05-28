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
                                    <li class="breadcrumb-item active">Withdraw Principal</li>
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


        {if $fatal}
        {if $fatal eq 'deposit_not_found'}<div class="alertnoti alert-warning">Wrong deposit ID has been provided</div>{/if}
        {if $fatal eq 'withdraw_forbidden'}<div class="alertnoti alert-warning">Can not process principal withdrawal for this plan</div>{/if}
        {if $fatal eq 'too_early_withdraw'}<div class="alertnoti alert-warning">Can not process principal withdrawal yet</div>{/if}
        {if $fatal eq 'too_late_withdraw'}<div class="alertnoti alert-warning">Can not process principal withdrawal longer</div>{/if}
        {if $fatal eq 'withdraw_complete'}<div class="row">
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
        <div class="alertnoti alert-warning">Withdrawal has been sucessfully completed.</div>{/if}
        {else}
        {if $say == 'too_big_amount'}<div class="alertnoti alert-warning">You have no such amount on this deposit.</div>{/if}
        {if $say == 'too_small_amount'}<div class="alertnoti alert-warning">Provided amount is too small.</div>{/if}

        {if $preview == 1}



        <form method=post name=withdraw_form>
            <input type=hidden name=a value=withdraw_principal>
            <input type=hidden name=action value=withdraw>
            <input type=hidden name=deposit value={$deposit.id}>
            <input type=hidden name=amount value={$amount}>
            <!-- withdraw design start -->
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-4 col-md-12 hide-xs">
                    <div class="card" style="min-height: 297px;">
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
                    <div class="card" style="min-height: 297px;">
                        <div class="headeraccount">
                            <h2><strong>Withdraw</strong> Principal</h2>
                        </div>
                        <div class="body">

                            <div class="table-responsive">

                                <table cellspacing=0 cellpadding=2 border=0 class="table table-hover m-b-0">
                                    <tr>
                                        <td>Withdrawal from <b>{$currency_sign}{$deposit.deposit}</b> deposit from the <b>{$type.name|escape:html}</b></td>
                                    </tr>
                                    <tr>
                                        <td>You are withdrawing <b>{$currency_sign}{$amount}</b>. Our fee is <b>{$type.withdraw_principal_percent}%</b>
                                            that is <b>{$currency_sign}{$fee}</b>.</td>
                                    </tr>
                                    <tr>
                                        <td>Actually you will acquire the total of <b>{$currency_sign}{$to_balance}</b> on your balance.</td>
                                    </tr>
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


        <script>
            var max_amount = new Number('{$deposit.deposit}');
            var percent = new Number('{$type.withdraw_principal_percent}');
            var currency_pow = 8;

            {
                literal
            }

            function withdraw() {
                var out_val = new Number(document.withdraw_form.amount.value.replace(",", "."));
                if (isNaN(out_val)) {
                    out_val = 0;
                }
                out_val = out_val;

                if (out_val > max_amount) {
                    out_val = max_amount;
                    document.withdraw_form.amount.value = out_val.toFixed(currency_pow);
                }

                if (out_val < 0) {
                    document.withdraw_form.amount.value = '';
                    document.withdraw_form.quote.value = 0;
                } else {
                    var fee = out_val * (percent / 100);
                    if (fee <= 0) fee = 0;
                    out_val = out_val - fee;
                    if (out_val < 0) out_val = 0;
                    document.withdraw_form.quote.value = out_val.toFixed(currency_pow);
                }
            } {
                /literal}

        </script>



        <form method=post name=withdraw_form>
            <input type=hidden name=a value=withdraw_principal>
            <input type=hidden name=action value=withdraw_preview>
            <input type=hidden name=deposit value={$deposit.id}>
            <!-- withdraw design start -->
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-4 col-md-12 hide-xs">
                    <div class="card" style="min-height: 326px;">
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
                    <div class="card" style="min-height: 326px;">
                        <div class="headeraccount">
                            <h2><strong>Withdraw</strong> Principal</h2>
                        </div>
                        <div class="body">

                            <div class="table-responsive">

                                <table cellspacing=0 cellpadding=2 border=0 class="table table-hover m-b-0">
                                    <tr>
                                        <td colspan=2>Withdrawal from <b>{$currency_sign}{$deposit.deposit}</b> deposit from the <b>{$type.name|escape:html}</b></td>
                                    </tr>
                                    <tr>
                                        <td colspan=2>Withdrawal fee is <b>{$type.withdraw_principal_percent}% or {$currency_sign}0.01 as minimal</b></b></td>
                                    </tr>
                                    <tr>
                                        <td width=1% nowrap>Withdrawal ({$currency_sign}):</td>
                                        <td><input class="calculate-amount form-controlamount" type=text name=amount value="{$deposit.deposit}" class=inpts size=15 onchange="withdraw()" onkeyup="withdraw()" onfocusout="withdraw()" onactivate="withdraw()" ondeactivate="withdraw()"></td>
                                    </tr>
                                    <tr>
                                        <td width=1% nowrap>You will get on you account balance ({$currency_sign}):</td>
                                        <td><input class="calculate-amount form-controlamount" type=text name=quote readonly class=inpts size=15></td>
                                    </tr>
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

        <script>
            withdraw();

        </script>
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

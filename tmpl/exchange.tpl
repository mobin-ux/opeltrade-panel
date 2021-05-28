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
                                    <li class="breadcrumb-item active">Exchange Center</li>
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
        <script>
            var balances = new Array(); {
                /literal}

                var currencies = new Array({
                        section name = ec loop = $ec
                    }
                    '{$ec[ec].ec}' {
                        if !$smarty.section.ec.last
                    }, {
                        /if}{/section
                    });
                var curs = new Array({
                        section name = ec loop = $exchange
                    }
                    '{$exchange[ec].from}' {
                        if !$smarty.section.ec.last
                    }, {
                        /if}{/section
                    });

                {
                    section name = ec loop = $ec
                }
                balances[{
                    $ec[ec].ec
                }] = new Number('{$ec[ec].balance}'); {
                    /section}

                    var exchange = new Array(); {
                        section name = from loop = $exchange
                    }
                    exchange[{
                        $exchange[from].from
                    }] = new Array(); {
                        section name = to loop = $exchange[from].tos
                    }
                    exchange[{
                        $exchange[from].from
                    }][{
                        $exchange[from].tos[to].to
                    }] = new Number('{$exchange[from].tos[to].percent}'); {
                        /section} { /
                        section
                    }

                    {
                        literal
                    }

                    function in_out(id, bForce) {
                        var d = document.exchange_form;

                        if (d.elements['to_' + id].selectedIndex == 0) {
                            chng_bg(id, '#FBF7CC');
                            d.elements["estimate_" + id].value = 0;
                            return true;
                        }

                        in_val = new Number(d.elements["amount_" + id].value.replace(",", "."));
                        if (isNaN(in_val)) {
                            in_val = 0;
                        }

                        in_val = Math.floor(in_val * 100) / 100;
                        if (in_val <= 0) {
                            d.elements['estimate_' + id].value = 0;
                            return false;
                        }

                        if (in_val > balances[id]) {
                            d.elements['amount_' + id].value = balances[id];
                            in_out(id);
                            return false;
                        }

                        var from_id = id;
                        var to_id = d.elements['to_' + id].options[d.elements['to_' + id].selectedIndex].value;

                        if (document.getElementById('e' + from_id + '_' + to_id)) {
                            chng_bg(from_id, '#FBF7CC');
                            document.getElementById('e' + from_id + '_' + to_id).style.backgroundColor = '#FFEA00';
                        }

                        var percent = Math.round(exchange[from_id][to_id] * 100) / 10000;
                        var amount = Math.round((1 - percent) * in_val * 100) / 100;

                        d.elements["estimate_" + id].value = amount;

                        if (bForce) {
                            out_in(id);
                        }
                    }

                    function out_in(id, bForce) {
                        var d = document.exchange_form;

                        if (d.elements['to_' + id].selectedIndex == 0) {
                            chng_bg(id, '#FBF7CC');
                            return true;
                        }

                        out_val = new Number(d.elements["estimate_" + id].value.replace(",", "."));
                        if (isNaN(out_val)) {
                            out_val = 0;
                        }

                        out_val = Math.ceil(out_val * 100) / 100;

                        if (out_val <= 0) {
                            d.elements['amount_' + id].value = 0;
                            return false;
                        }

                        var from_id = id;
                        var to_id = d.elements['to_' + id].options[d.elements['to_' + id].selectedIndex].value;

                        if (document.getElementById('e' + from_id + '_' + to_id)) {
                            chng_bg(from_id, '#FBF7CC');
                            document.getElementById('e' + from_id + '_' + to_id).style.backgroundColor = '#FFEA00';
                        }

                        var percent = Math.round(exchange[from_id][to_id] * 100) / 10000;
                        var amount = Math.round(out_val / (1 - percent) * 100) / 100;

                        if (amount > balances[id]) {
                            d.elements["amount_" + id].value = balances[id];
                            in_out(id);
                            return false;
                        }

                        d.elements["amount_" + id].value = amount;

                        if (bForce) {
                            in_out(id);
                        }
                    }

                    function chng_selection(id) {
                        var d = document.exchange_form;

                        if (d.from.length) {
                            if (!id) {
                                for (i = 0; i < d.from.length; i++) {
                                    if (d.from[i].checked) {
                                        id = d.from[i].value;
                                    }
                                }
                            }

                            for (i = 0; i < currencies.length; i++) {
                                tid = currencies[i];
                                d.elements['to_' + tid].disabled = true;
                                d.elements['amount_' + tid].disabled = true;
                                d.elements['estimate_' + tid].disabled = true;
                                d.elements['exchange_' + tid].disabled = true;
                                chng_bg(tid, '#FFFFFF');
                            }

                            d.elements['to_' + id].disabled = false;
                            d.elements['amount_' + id].disabled = false;
                            d.elements['estimate_' + id].disabled = false;
                            d.elements['exchange_' + id].disabled = false;
                            chng_bg(id, '#FBF7CC');
                        }
                    }

                    function chng_bg(id, color) {
                        if (document.getElementById('e' + id + '_t')) {
                            document.getElementById('e' + id + '_t').style.backgroundColor = color;
                        }

                        for (var i = 0; i < curs.length; i++) {
                            if (document.getElementById('e' + id + '_' + curs[i])) {
                                document.getElementById('e' + id + '_' + curs[i]).style.backgroundColor = color;
                            }
                        }
                    }

        </script>
        {/literal}

        {if $ec}
        <form method=post name="exchange_form">
            <input type="hidden" name="a" value="exchange">
            <input type="hidden" name="action" value="preview">

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
                            <h2><strong>Exchange</strong> Center</h2>
                        </div>
                        <div class="body">

                            <div class="table-responsive">

                                <table cellspacing=0 cellpadding=2 border=0 class="table table-hover m-b-0">
                                    {section name=ec loop=$ec}
                                    <tr>
                                        <td><input type="radio" name="from" value="{$ec[ec].ec}" {if $smarty.section.ec.index==0}checked{/if} onclick="chng_selection('{$ec[ec].ec}')"></td>
                                        <td><img src="styles/assets/pay2/{$ec[ec].ec}.png" align=absmiddle height=17> {$ec[ec].ec_name} :</td>
                                        <td><input class="calculate-amount form-controlamount" type=text name="amount_{$ec[ec].ec}" value="{$ec[ec].balance}" class=inpts size=7 onchange="in_out('{$ec[ec].ec}')" onkeyup="in_out('{$ec[ec].ec}')" onfocusout="in_out('{$ec[ec].ec}', true)" onactivate="in_out('{$ec[ec].ec}', true)" ondeactivate="in_out('{$ec[ec].ec}', true)">
                                        </td>
                                        <td>to</td>
                                        <td>
                                            <select class="calculate-amount form-controlamount" name="to_{$ec[ec].ec}" class=inpts onchange="in_out('{$ec[ec].ec}')">
                                                <option value=''>--SELECT--</option>
                                                {section name=ecs loop=$ec[ec].tos}
                                                {if $ec[ec].ec != $ec[ec].tos[ecs].to}
                                                <option value={$ec[ec].tos[ecs].to}>{$ec[ec].tos[ecs].ec_name}</option>
                                                {/if}
                                                {/section}
                                            </select>
                                        </td>
                                        <td><input class="calculate-amount form-controlamount" type=text name="estimate_{$ec[ec].ec}" value="0" class=inpts size=7 onchange="out_in('{$ec[ec].ec}')" onkeyup="out_in('{$ec[ec].ec}')" onfocusout="out_in('{$ec[ec].ec}', true)" onactivate="out_in('{$ec[ec].ec}', true)" ondeactivate="out_in('{$ec[ec].ec}', true)">
                                        </td>
                                        <td><input style="padding-left: 30px; padding-right: 30px;padding: 6px 6px;" class="btn btn-primary btn-round btn-simple float-right m-l-10 btn-warning waves-effect" type=submit name="exchange_{$ec[ec].ec}" value="Exchange" class=sbmt></td>
                                    </tr>
                                    {/section}
                                </table>
                                <br>




                            </div>
                        </div>
                    </div>
        </form>
        {else}
        Currently you have no funds to exchange.
        {/if}





        <div class="card" style="min-height: 315px;">
            <div class="headeraccount">
                <h2><strong>Our Exchange</strong> Rates</h2>
            </div>
            <div class="body">

                <div class="table-responsive">


                    <table cellspacing=0 cellpadding=2 border=0 class="table table-hover m-b-0">
                        <tr>

                            <td align=center class=calendartablebg>From / To</td>
                            {section name=from loop=$exchange}
                            <td align=center class=calendartablebg><img src="styles/assets/pay2/{$exchange[from].from}.png" height=17></td>
                            {/section}
                        </tr>
                        {section name=from loop=$exchange}
                        <tr>
                            <td align=center class=calendartablebg id="e{$exchange[from].from}_t"><img src="styles/assets/pay2/{$exchange[from].from}.png" height=17></td>
                            {section name=to loop=$exchange[from].tos}
                            <td align=center class=calendartablebg id="e{$exchange[from].from}_{$exchange[from].tos[to].to}">
                                {if $exchange[from].from == $exchange[from].tos[to].to}
                                -
                                {else}
                                {if $exchange[from].tos[to].percent == 100}
                                -
                                {else}
                                {$exchange[from].tos[to].percent}%
                                {/if}
                                {/if}
                            </td>
                            {/section}
                        </tr>
                        {/section}
                    </table>


                    {if $ec}
                    {literal}
                    <script>
                        chng_selection();

                    </script>
                    {/literal}
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

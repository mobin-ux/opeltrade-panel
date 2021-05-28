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
                                    <li class="breadcrumb-item active">My deposits</li>
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
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card info-box-2">
                    <div class="body">
                        <div class="icon">
                            <img src="styles/assets/img/acc3.png" class="accico">
                        </div>
                        <div class="content">
                            <div class="text">ACTIVE DEPOSITS</div>
                            <div class="number">{$currency_sign}{$total}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="card">
                    <div class="body">
                        <style>
                            input[type=radio] {
                                width: auto;
                                height: auto;
                            }

                            .customers {
                                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                            }

                            .customers td,
                            .customers th {
                                border: 1px solid #ddd;
                                padding: 8px;
                            }

                            .customers tr:nth-child(even) {
                                background-color: #f2f2f2;
                            }

                            .customers th {
                                padding-top: 12px;
                                padding-bottom: 12px;
                                text-align: left;
                                background-color: #4CAF50;
                                color: white;
                            }

                        </style>





                        {foreach from=$plans item=p}
                        <table cellspacing=1 cellpadding=2 border=0 width=100% class=line>
                            <tr>
                                <td class=item>
                                    <table cellspacing=1 cellpadding=2 border=0 width=100% id="a1" class="tab">
                                        <tr>
                                            <td colspan=3 align=center style="color: #158467;"><b>{$p.name}</b></td>
                                        </tr>
                                        <tr>
                                            <th class=inheader style="color: #158467;">Plan</th>
                                            <th class=inheader width=200 style="color: #158467;">Amount Spent ({$currency_sign})</th>
                                            <th class=inheader width=100 nowrap style="color: #158467;">
                                                <nobr>{$p.period} Profit (%)</nobr>
                                            </th>
                                        </tr>
                                        {foreach from=$p.plans item=o}
                                        <tr>
                                            <td class=item align=left>{$o.name}</td>
                                            <td class=item align=right>{$o.deposit}</td>
                                            <td class=item align=right>{$o.percent}</td>
                                        </tr>
                                        {/foreach}
                                    </table>
                                    <br>
                                    <table cellspacing=1 cellpadding=2 border=0 width=100%>
                                        {if !$p.deposits}
                                        <tr>
                                            <td colspan="4" style="border: 1px solid #ddd;padding: 8px;"><b>No deposits for this plan</b></td>
                                        </tr>
                                        {else}
                                        <tr>
                                            <th class=inheader style="color: #158467;">Date</th>
                                            <th class=inheader style="color: #158467;">Amount</th>
                                            {if $p.use_compound}
                                            <th class=inheader style="text-align: center;color: #158467;">Compounding Percent</th>
                                            {/if}
                                            {if $p.withdraw_principal}
                                            <th style="text-align: center;color: #158467;" class=inheader>Release</th>
                                            {/if}
                                        </tr>
                                        {foreach from=$p.deposits item=d}
                                        <tr>
                                            <td align=left class=item><b>{$d.date}</b><br>{if $p.q_days == 0}Working {$d.duration} days{else}Expire in {$d.expire_in} days{/if}</td>
                                            <td align=center class=item><b>{$currency_sign}{$d.deposit} <img src="styles/assets/pay2/{$d.ec}.png" align=absmiddle hspace=1 height=17></b></td>
                                            {if $p.use_compound}
                                            <td align=center class=item align=center>{$d.compound}% <a href="{" ?a=change_compound&deposit=`$d.id`"|encurl}">[change]</a></td>
                                            {/if}
                                            {if $p.withdraw_principal}
                                            <td align=center class=item>
                                                {if $d.can_withdraw}
                                                <a href="{" ?a=withdraw_principal&deposit=`$d.id`"|encurl}">[release]</a>
                                                {else}
                                                {if $d.pending_duration > 0}
                                                {$d.pending_duration} day{if $d.pending_duration > 1}s{/if} left
                                                {else}
                                                not available
                                                {/if}
                                                {/if}
                                            </td>
                                            {/if}
                                        </tr>
                                        {/foreach}
                                        {/if}
                                    </table>
                                    {if $p.total_deposit > 0 || $p.today_profit > 0 || $p.total_profit > 0}
                                    <table cellspacing=0 cellpadding=1 border=0>
                                        <tr>
                                            <td style="color: #158467;">Deposited Total:</td>
                                            <td><b>{$currency_sign}{$p.total_deposit}</b></td>
                                        </tr>
                                        <tr>
                                            <td style="color: #158467;">Profit Today:</td>
                                            <td><b>{$currency_sign}{$p.today_profit}</b></td>
                                        </tr>
                                        <tr>
                                            <td style="color: #158467;">Total Profit:</td>
                                            <td><b>{$currency_sign}{$p.total_profit}</b></td>
                                        </tr>
                                    </table>
                                    {/if}
                                    <br>
                                </td>
                            </tr>
                        </table>
                        <br>
                        {/foreach}



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
    addClass(document.getElementById('js-sidebar-deposits'), 'menu__link--active');

</script>
</div>

</body>

</html>

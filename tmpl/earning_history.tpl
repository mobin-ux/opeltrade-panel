{include file="headerbull.tpl"}
<section class="content bagblack">
    <div class="container">
        {literal}
        <script language=javascript>
            function go(p) {
                document.opts.page.value = p;
                document.opts.submit();
            }

        </script>
        {/literal}

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
                                    <li class="breadcrumb-item active">Transactions history</li>
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
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="card info-box-2" style="min-height: 326.33px;">
                    <div class="headeraccount">
                        <h2><strong>Transactions</strong> Filter</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <form method=post name=opts>
                                <input type=hidden name=a value=earnings>
                                <input type=hidden name=page value={$current_page}>
                                <div class="btntwo-group bootstrap-select">
                                    <label class="select" style="width: 100%;">
                                        <select name="type" id="type" onchange="document.opts.submit();" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                            <option value="">All transactions</option>
                                            {section name=opt loop=$options}
                                            <option value="{$options[opt].type}" {if $options[opt].selected}selected{/if}>{$options[opt].type_name}</option>
                                            {/section}
                                        </select>
                                    </label>
                                </div>
                                {if $ecs}
                                <div class="btntwo-group bootstrap-select" style="width: 100%;padding-bottom: 10px;">
                                    <label class="select" style="width: 100%;">
                                        <select name="ec" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                            <option value="1">All eCurrencies</option>
                                            {section name=ec loop=$ecs}
                                            <option value={$ecs[ec].id} {if $frm.ec eq $ecs[ec].id}selected{/if}>{$ecs[ec].name}</option>
                                            {/section}
                                        </select>
                                    </label>
                                </div>
                                {/if}
                                <div class="col-xl-6 col-lg-6 col-md-6" style="padding-right: 5px;padding-left: 0px;">
                                    <h2 class="card-inside-title" style="margin-top: 0px;">From</h2>
                                    <div class="btntwo-group bootstrap-select">
                                        <label class="select" style="width: 100%;padding-bottom: 3px;">
                                            <select name="month_from" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                                {section name=month_from loop=$month}
                                                <option value={$smarty.section.month_from.index+1} {if $smarty.section.month_from.index+1==$frm.month_from}selected{/if}>{$month[month_from]}</option>
                                                {/section}
                                            </select>
                                        </label>
                                    </div>
                                    <div class="btntwo-group bootstrap-select">
                                        <label class="select" style="width: 100%;padding-bottom: 3px;">
                                            <select name="day_from" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                                {section name=day_from loop=$day}
                                                <option value={$smarty.section.day_from.index+1} {if $smarty.section.day_from.index+1==$frm.day_from}selected{/if}>{$day[day_from]}</option>
                                                {/section}
                                            </select>
                                        </label>
                                    </div>
                                    <div class="btntwo-group bootstrap-select">
                                        <label class="select" style="width: 100%;padding-bottom: 3px;">
                                            <select name="year_from" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                                {section name=year_from loop=$year}
                                                <option value={$year[year_from]} {if $year[year_from]==$frm.year_from}selected{/if}>{$year[year_from]}</option>
                                                {/section}
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6" style="padding-left: 5px;padding-right: 0px;">
                                    <h2 class="card-inside-title" style="margin-top: 0px;">To</h2>
                                    <div class="btntwo-group bootstrap-select">
                                        <label class="select" style="width: 100%;padding-bottom: 3px;">
                                            <select name="month_to" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                                {section name=month_to loop=$month}
                                                <option value={$smarty.section.month_to.index+1} {if $smarty.section.month_to.index+1==$frm.month_to}selected{/if}>{$month[month_to]}</option>
                                                {/section}
                                            </select>
                                        </label>
                                    </div>
                                    <div class="btntwo-group bootstrap-select">
                                        <label class="select" style="width: 100%;padding-bottom: 3px;">
                                            <select name="day_to" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                                {section name=day_to loop=$day}
                                                <option value={$smarty.section.day_to.index+1} {if $smarty.section.day_to.index+1==$frm.day_to}selected{/if}>{$day[day_to]}</option>
                                                {/section}
                                            </select>
                                        </label>
                                    </div>
                                    <div class="btntwo-group bootstrap-select">
                                        <label class="select" style="width: 100%;padding-bottom: 3px;">
                                            <select name="year_to" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                                {section name=year_to loop=$year}
                                                <option value={$year[year_to]} {if $year[year_to]==$frm.year_to}selected{/if}>{$year[year_to]}</option>
                                                {/section}
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="col text-center">
                                    <button class="btn btn-primary btn-round btn-simple float-right m-l-10 btn-warning waves-effect">Apply filter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card info-box-2">
                    <div class="headeraccount">
                        <h2><strong>Financial</strong> Statistics</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <tbody>
                                    <tr>
                                        <td>Total Transaction</td>
                                        <td>{$currency_sign} {$allsum}</td>
                                    </tr>
                                    {if $qtrans > 0}
                                    <tr>
                                        <td>For This Period</td>
                                        <td>{$currency_sign} {$periodsum}</td>
                                    </tr>
                                    {/if}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="card">
                    <div class="headeraccount">
                        <h2>Transactions <strong>History</strong></h2>
                    </div>
                    <div class="body">




                        {if $settings.use_history_balance_mode}
                        <table cellspacing=1 cellpadding=2 border=0 width=100%>
                            <tr>
                                <th class=inheader align=left style="color: #facd8a;">Date</th>
                                <th class=inheader style="text-align: center;color: #facd8a;">Type</th>
                                <th class=inheader style="text-align: center;color: #facd8a;">Credit</th>
                                <th class=inheader style="text-align: center;color: #facd8a;">Debit</th>
                                <th class=inheader style="text-align: center;color: #facd8a;">Balance</th>
                                <th class=inheader style="text-align: right;color: #facd8a;">P.S.</th>
                            </tr>
                            {if $qtrans > 0}
                            {section name=trans loop=$trans}
                            <tr>
                                <td align=left nowrap>{$trans[trans].d}</td>
                                <td align=center><b>{$trans[trans].transtype}</b><br><small class=gray>{$trans[trans].description}</small></td>
                                <td align=center><b>
                                        {if $trans[trans].debitcredit == 0}
                                        {$currency_sign}{$trans[trans].actual_amount}
                                    </b>
                                    {else}
                                    &nbsp;
                                    {/if}
                                </td>
                                <td align=center><b>
                                        {if $trans[trans].debitcredit == 1}
                                        {$currency_sign}{$trans[trans].actual_amount}
                                    </b>
                                    {else}
                                    &nbsp;
                                    {/if}
                                </td>
                                <td align=center><b>
                                        {$currency_sign}{$trans[trans].balance}
                                </td>
                                <td><img src="styles/assets/pay2/{$trans[trans].ec}.png" align=right hspace=1 height=17></td>
                            </tr>
                            {/section}
                            {else}
                            <tr>
                                <td colspan=6 align=center style="border: 1px solid #ddd;padding: 8px;">No transactions found</td>
                            </tr>
                            {/if}
                            <tr>
                        </table>
                        {else}
                        <table cellspacing=1 cellpadding=2 border=0 width=100%>
                            <tr>
                                <th class=inheader style="color: #facd8a;"><b>Type</b></th>
                                <th class=inheader width=200 style="text-align: center;color: #facd8a;"><b>Amount</b></th>
                                <th class=inheader width=170 style="text-align: center;color: #facd8a;"><b>Date</b></th>
                            </tr>
                            {if $qtrans > 0}
                            {section name=trans loop=$trans}
                            <tr>
                                <td><b>{$trans[trans].transtype}</b></td>
                                <td width=200 align=center><b>{$currency_sign} {$trans[trans].actual_amount}</b> <img src="styles/assets/pay2/{$trans[trans].ec}.png" align=absmiddle hspace=1 height=17></td>
                                <td width=170 align=center valign=bottom><b><small>{$trans[trans].d}</small></b></td>
                            </tr>
                            <tr>
                                <td colspan=3 class=gray><small>{$trans[trans].description}</small></td>
                            </tr>
                            {/section}
                            {else}
                            <tr>
                                <td colspan=3 align=center style="border: 1px solid #ddd;padding: 8px;">No transactions found</td>
                            </tr>
                            {/if}
                            <tr>



                        </table>
                        {/if}

                        </br></br>

                        {if $colpages > 1}
                        <center>
                            {if $prev_page > 0}
                            <a href="javascript:go('{$prev_page}')">&lt;&lt;</a>
                            {/if}
                            {section name=p loop=$pages}
                            {if $pages[p].current == 1}
                            {$pages[p].page}
                            {else}
                            <a href="javascript:go('{$pages[p].page}')">{$pages[p].page}</a>
                            {/if}
                            {/section}
                            {if $next_page > 0}
                            <a href="javascript:go('{$next_page}')">&gt;&gt;</a>
                            {/if}
                        </center>
                        {/if}


                    </div>




                    </br>
                </div>
            </div>
        </div>
    </div>
</section>{include file="footera.tpl"}</div>

<link rel="stylesheet" href="styles/assets/libs/bootstrap/fileinput.min.css">
<script src="styles/assets/libs/bootstrap/bootstrap.min.js"></script>
<script src="styles/assets/libs/bootstrap/fileinput.min.js"></script>		
<script>
    addClass(document.getElementById('js-sidebar-history'), 'menu__link--active');

</script>
</div>
</body>

</html>

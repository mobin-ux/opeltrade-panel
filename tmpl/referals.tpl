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
                                    <li class="breadcrumb-item active">My Referrals</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                <a href="?a=referallinks">
                                    <button class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10 btn-warning waves-effect">Promotional materials</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card overflowhidden weather2" style="min-height: 352.67px;">
                    <div class="body city-selected l-khaki">
                        <div class="row">
                            <div class="col-12">
                                <div class="city">Your referral url</div>
                                <div class="night" style="font-size: 13px;color: #facd8a;">{$settings.site_url}/{"?ref=`$userinfo.username`"|encurl}</div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped m-b-0" style="color: #012c6d;">
                        <tbody>
                            <tr>
                                <td>Your status</td>
                                <td class="font-medium">Client</td>
                            </tr>
                            <tr>
                                <td>Your upline</td>
                                <td class="font-medium">{$upline.name|default:None}</td>
                            </tr>
                            <tr>
                                <td>Referrals</td>
                                <td class="font-medium">{$total_ref}</td>
                            </tr>
                            <tr>
                                <td>Active referrals</td>
                                <td class="font-medium">{$active_ref}</td>
                            </tr>
                            <tr>
                                <td>Total commission</td>
                                <td class="font-medium">{$currency_sign}{$commissions}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="card user-account" style="min-height: 352.67px;">
                    <div class="headeraccount">
                        <h2>Your <strong>Referrals</strong></h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <div class="alert alert-warning">You have earned {$currency_sign}{$commissions} from referrals so far!</div>
                            <br>Each participant of the program invites investors using their referral link.
                            <br>
                            <br><b>Your personal referral link: {$settings.site_url}/{"?ref=`$userinfo.username`"|encurl}</b>
                            <br>
                            <br>When opening an investment deposit by invited participant you get 7% of additional income from each deposit of invited participant.
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row clearfix">

            {if $settings.show_refstat}
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card info-box-2" style="min-height: 326.33px;">
                    <div class="headeraccount">
                        <h2><strong>Referral</strong> Filter</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <form method=post name=opts>
                                <input type=hidden name=a value=referals>
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
            </div>
            {/if}
             
			{if $settings.show_refstat}
            <div class="col-xl-8 col-lg-8 col-md-12">

                <div class="card" style="min-height: 326.33px;">

                    
                    <div class="headeraccount">
                        <h2>Referral <strong>ins/signups</strong></h2>
                    </div>
                    
                    <div class="body">


                        
                        <table width=100% celspacing=1 cellpadding=1 border=0>
                            <tr>
                                <th class=inheader style="text-align: center;color: #facd8a;">Date</th>
                                <th class=inheader style="text-align: center;color: #facd8a;">Ins</th>
                                <th class=inheader style="text-align: center;color: #facd8a;">Signups</th>
                            </tr>
                            {if $show_refstat}
                            {section name=s loop=$refstat}
                            <tr>
                                <td class=item align=center><b>{$refstat[s].date}</b></td>
                                <td class=item align=center>{$refstat[s].income}</td>
                                <td class=item align=center>{$refstat[s].reg}</td>
                            </tr>
                            {/section}
                            {else}
                            <tr>
                                <td class=item align=center colspan=3 style="border: 1px solid #ddd;padding: 8px;">No statistics found for this period.</td>
                            </tr>
                            {/if}
                        </table><br><br>
                        

                        {if $settings.show_referals}
                        {if $show_referals}
                        <div class="headeraccount" style="padding-left: 0px;">
                            <h2>Your <strong>referrals</strong></h2>
                        </div>
                        <table cellspacing=1 cellpadding=1 border=0 width=100%>
                            <tr>
                                <th class=inheader style="text-align: center;color: #facd8a;">Nickname</th>
                                <th class=inheader style="text-align: center;color: #facd8a;">E-mail</th>
                                <th class=inheader style="text-align: center;color: #facd8a;">Status</th>
                            </tr>
                            {section name=s loop=$referals}
                            <tr>
                                <td class=item align=center><b>{$referals[s].username}</b></td>
                                <td class=item align=center><a href=mailto:{$referals[s].email}>{$referals[s].email}</a></td>
                                <td class=item align=center>{if $referals[s].q_deposits > 0}Deposited{else}No deposit yet{/if}</td>
                            </tr>
                            {if $referals[s].ref_stats}
                            <tr>
                                <td colspan=3>
                                    User referrals:
                                    {section name=l loop=$referals[s].ref_stats}
                                    <nobr>{$referals[s].ref_stats[l].cnt_active} active of {$referals[s].ref_stats[l].cnt} on level {$referals[s].ref_stats[l].level}{if !$smarty.section.l.last};{/if}</nobr>
                                    {/section}
                                </td>
                            </tr>
                            {/if}
                            {if $referals[s].came_from}
                            <tr>
                                <td colspan=3>
                                    <a href="{$referals[s].came_from}" target=_blank>[User came from]</a>
                                </td>
                            </tr>
                            {/if}
                            {/section}
                            <tr>
                                <td colspan=3>&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan=3><b style="color: #facd8a;">2-10 level referrals:</b> {$cnt_other}</td>
                            </tr>
                            <tr>
                                <td colspan=3><b style="color: #facd8a;">2-10 level active referrals:</b> {$cnt_other_active}</td>
                            </tr>
                        </table>
                        {/if}
                        {/if}



                    </div>
                    </br>
                </div>
            </div>
			{/if}
        </div>
        <br>
        <style>
            div.tab-frame input {
                display: none;
            }

            div.tab-frame label {
                display: block;
                float: left;
                padding: 5px 10px;
                cursor: pointer;
                margin: 20px;
                border-radius: 30px
            }

            div.tab-frame input:checked+label {
                background: #f6b827;
                color: #000;
                cursor: default
            }

            div.tab-frame div.tab {
                display: none;
                padding: 0px;
                clear: left
            }

            div.tab-frame input:nth-of-type(1):checked~.tab:nth-of-type(1),
            div.tab-frame input:nth-of-type(2):checked~.tab:nth-of-type(2),
            div.tab-frame input:nth-of-type(3):checked~.tab:nth-of-type(3),
            div.tab-frame input:nth-of-type(4):checked~.tab:nth-of-type(4) {
                display: block;
            }

            @media only screen and (min-width:991px) {
                .tabpad {
                    margin-left: 240px !important
                }
            }

            @media only screen and (min-width:1200px) {
                .tabpad {
                    margin-left: 330px !important
                }
            }

            @media only screen and (min-width:1366px) {
                .tabpad {
                    margin-left: 400px !important
                }
            }

            @media only screen and (min-width:1600px) {
                .tabpad {
                    margin-left: 500px !important
                }
            }


            .table {
                color: inherit;
            }

            .m-b-0 {
                margin-bottom: 0;
            }

            .table {
                width: 100%;
                color: #212529;
            }

            table {
                border-collapse: collapse;
            }

            .table-striped tbody tr:nth-of-type(odd) {
                background-color: rgba(88, 88, 88, 0.05);
            }

            .weather2 .table tbody tr td {
                padding: 14px 20px;
            }

            .table tr td,
            .table tr th {
                vertical-align: middle;
                border-top: 1px solid #263238;
                white-space: nowrap;
            }

            .weather2 {
                color: #012c6d;
            }

            .overflowhidden {
                overflow: hidden;
            }

            .table tr td {
                vertical-align: middle !important;
                border-top: 1px solid #263238 !important;
                white-space: nowrap !important;
            }

        </style>

        <br>
        <br>
    </div>
</section>{include file="footera.tpl"}</div>

<link rel="stylesheet" href="styles/assets/libs/bootstrap/fileinput.min.css">
<script src="styles/assets/libs/bootstrap/bootstrap.min.js"></script>
<script src="styles/assets/libs/bootstrap/fileinput.min.js"></script>

<script>
    addClass(document.getElementById('js-sidebar-partners'), 'menu__link--active');

</script>

</div>
</body>

</html>

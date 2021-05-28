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
                                    <li class="breadcrumb-item active">Change Compounding Percent</li>
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
        {if $fatal eq 'deposit_not_found'}<div class="alertnoti alert-warning">Wrong deposit ID has been provided.</div>{/if}
        {if $fatal eq 'compound_forbidden'}<div class="alertnoti alert-warning">Compounding is not available for your deposit.</div>{/if}
        {else}

        <script>
{literal}
function openCalculator(id)
{
  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");
}
{/literal}
</script>

        {if $frm.complete}
        <div class="alertnoti alert-warning">Compounding percent has been successfully changed.</div>
        {/if}


        <form method=post name=change_compound>
            <input type=hidden name=a value=change_compound>
            <input type=hidden name=action value=change>
            <input type=hidden name=deposit value={$deposit.id}>

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
                            <h2><strong>Change</strong> Compounding Percent</h2>
                        </div>
                        <div class="body">

                            <div class="table-responsive">

                                <table cellspacing=0 cellpadding=2 border=0 class="table table-hover m-b-0">
                                    <tr>
                                        <td colspan=2>
                                            Change the compounding percent for <b>{$currency_sign}{$deposit.deposit}</b>
                                            deposit in the <b>{$type.name|escape:html}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td nowrap width=1%>Compounding percent: </td>
                                        <td>
                                            <select style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" name='percent' class="btntwo dropdown-togglex btntwo-round btntwo-simple">
                                                {foreach from=$compound_percents key=p item=i}
                                                <option value="{$p}" {if $deposit.compound==$p}selected{/if}>{$p}</option>
                                                {/foreach}
                                            </select>
                                        </td>
                                    </tr>
                                    {if $settings.enable_calculator}
                                    <tr>
                                        <td colspan=2><a href="javascript:openCalculator({$type.id})">Calculate your profit &gt;&gt;</a></td>
                                    </tr>
                                    {/if}
                                </table>
                                <br>


                                <div class="col text-center">
                                    <a style="margin-right: 50px;background-color: #a5a3a2;border-color: #a5a3a2;" href="{" ?a=deposit_list"|encurl}" class="btn btn-primary btn-round btn-simple float-right m-l-10 btn-warning waves-effect">Return</a>

                                    <button style="margin-left: 50px;" class="btn btn-primary btn-round btn-simple float-right m-l-10 btn-warning waves-effect">Change</button>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

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

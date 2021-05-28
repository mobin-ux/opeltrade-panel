{include file="headerbear.tpl"}



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
                                    <li class="breadcrumb-item active">Make an Investment</li>
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

        {if $fatal == 'one_per_month'}
        <div class="alertnoti alert-warning">You can deposit once a month only.</div>
        {/if}

        {else}


        {if $frm.say eq 'deposit_success'}
        <div class="alertnoti alert-warning">The deposit has been successfully saved.</div>


        {/if}

        {if $frm.say eq 'deposit_saved'}
        <div class="alertnoti alert-warning">The deposit has been saved. It will become active when the administrator checks statistics.</div>
        {/if}


        {if $errors}
        {if $errors.less_min}
        <div class="alertnoti alert-warning">Sorry, you can deposit not less than {$currency_sign}{$errors.less_min} with selected processing.</div>

        {/if}
        {if $errors.greater_max}
        <div class="alertnoti alert-warning">Sorry, you can deposit not greater than {$currency_sign}{$errors.greater_max} with selected processing.</div>

        {/if}
        {if $errors.ec_forbidden}
        <div class="alertnoti alert-warning">Sorry, deposit with selected processing is temproary forbidden.</div>

        {/if}
        {/if}


        <form method=post name="spendform">
            <input type=hidden name=a value=deposit>
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-4 col-md-4" style="padding: 0px">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card" style="min-height: 428px;">
                            <div class="headeraccount">
                                <h2>Make an <strong>Investment</strong></h2>
                            </div>
                            <div class="body">


                                {section name=p loop=$ps}
                                <h2 class="card-inside-title">Payment processor</h2>
                                <div class="btntwo-group bootstrap-select">
                                    <label class="select" style="width: 100%;">

                                        <select name=type id="type" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                            {section name=p loop=$ps}
                                            {if $ps[p].status}
                                            <option value="process_{$ps[p].id}"> Coinpayments</option>
                                            {/if}
                                            {/section}
                                            {section name=p loop=$ps}
                                            {if $ps[p].balance > 0 and $ps[p].status == 1}
                                            <option value="account_{$ps[p].id}">Account Balance {$ps[p].name}</option>
                                            {/if}
                                            {/section}
                                        </select>


                                    </label>
                                </div>
                                {/section}



                                <br>
                                <br>
                                <h2 class="card-inside-title">Deposit amount</h2>
                                <input type="text" name=amount value='{$min_deposit}' class="calculate-amount form-controlamount" style="font-size: 14px;padding: 10px 22px;">
                                <br>
                                <div class="col text-center hide-xs">
                                        <button class="btn btn-primary btn-round btn-simple float-right m-l-10 btn-warning waves-effect">Make deposit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 hide-xs">
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
                                    <table class="tabletwo table-hover m-b-0">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <img src="styles/assets/pay2/18.png" style="width: 20px">
                                                </th>
                                                <td>PerfectMoney</td>
                                                <td class="text-right"><span id="pay18b">&nbsp;</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <img src="styles/assets/pay2/43.png" style="width: 20px">
                                                </th>
                                                <td>Payeer</td>
                                                <td class="text-right"><span id="pay43b">&nbsp;</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <img src="styles/assets/pay2/48.png" style="width: 20px">
                                                </th>
                                                <td>Bitcoin</td>
                                                <td class="text-right"><span id="pay48b">&nbsp;</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <img src="styles/assets/pay2/68.png" style="width: 20px">
                                                </th>
                                                <td>Litecoin</td>
                                                <td class="text-right"><span id="pay68b">&nbsp;</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <img src="styles/assets/pay2/79.png" style="width: 20px">
                                                </th>
                                                <td>Dogecoin</td>
                                                <td class="text-right"><span id="pay79b">&nbsp;</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <img src="styles/assets/pay2/69.png" style="width: 20px">
                                                </th>
                                                <td>Ethereum</td>
                                                <td class="text-right"><span id="pay69b">&nbsp;</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <img src="styles/assets/pay2/77.png" style="width: 20px">
                                                </th>
                                                <td>Bitcoin Cash</td>
                                                <td class="text-right"><span id="pay77b">&nbsp;</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 ">
                    <div class="card" style="min-height: 428px;">
                        <div class="headeraccount">
                            <h2><strong>Invesment</strong> Plan</h2>
                        </div>
                        <div class="body">


{literal}
<script language="javascript"><!--
function openCalculator(id)
{

  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");

{/literal}
  {if $qplans > 1}
{literal}
  for (i = 0; i < document.spendform.h_id.length; i++)
  {
    if (document.spendform.h_id[i].value == id)
    {
      document.spendform.h_id[i].checked = true;
    }
  }
{/literal}
  {/if}
{literal}

}

function updateCompound() {
  var id = 0;
  var tt = document.spendform.h_id.type;
  if (tt && tt.toLowerCase() == 'hidden') {
    id = document.spendform.h_id.value;
  } else {
    for (i = 0; i < document.spendform.h_id.length; i++) {
      if (document.spendform.h_id[i].checked) {
        id = document.spendform.h_id[i].value;
      }
    }
  }

  var cpObj = document.getElementById('compound_percents');
  if (cpObj) {
    while (cpObj.options.length != 0) {
      cpObj.options[0] = null;
    }
  }

  if (cps[id] && cps[id].length > 0) {
    document.getElementById('coumpond_block').style.display = '';

    for (i in cps[id]) {
      cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
    }
  } else {
    document.getElementById('coumpond_block').style.display = 'none';
  }
}
var cps = {};
--></script>
{/literal}


                            <div class="row" id="planselectz">


                                {section name=plans loop=$plans}
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12" data-wow-duration="1s" data-wow-delay="0s" cellspacing="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;padding-bottom: 30px;">

                                    {if $qplans > 1}
                                    <input id="plan{$plans[plans].id}" type=radio name=h_id value='{$plans[plans].id}' {if (($smarty.section.plans.first==1) && ($frm.h_id eq '' )) || ($frm.h_id==$plans[plans].id)} checked {/if} onclick="updateCompound()">
                                    <label class="counterz" for="plan{$plans[plans].id}">
                                        <div class="plans">
                                            {section name=options loop=$plans[plans].plans}
                                            <div class="plan_details text-center">
                                                <div class="plan_title">{$plans[plans].name} Plan</div>
                                                <div class="percentage">{$plans[plans].plans[options].percent}%</div>
                                                <p class="profit_duration">{$plans[plans].period} Profit</p>
                                                <ul class="list-items">
                                                    <li class="list-item">Minimum {$currency_sign}{$plans[plans].plans[options].min_deposit|string_format:"%d"}</li>
                                                    <li class="list-item">Maximum {$currency_sign}{$plans[plans].plans[options].max_deposit|string_format:"%d"}</li>
                                                    <li class="list-item"><a href="javascript:openCalculator('{$plans[plans].id}')">Calculate your profit &gt;&gt;</a></li>
                                                </ul>
                                                <div class="plans_btn"> <a class="btnplan btn-deposit">Select Plan</a>
                                                </div>
                                            </div>
                                            {/section}
                                        </div>

                                    </label>
                                    {else}
                                    <input type=hidden name=h_id value='{$plans[plans].id}'>
                                    {/if}
                                </div>
                                {/section}

                            </div>
                            {/if}
							
							 <div class="col text-center hide-sm">
                                        <button class="btn btn-primary btn-round btn-simple float-right m-l-10 btn-warning waves-effect">Make deposit</button>
                             </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>

        {literal}
        <script language=javascript>
            for (i = 0; i < document.spendform.type.length; i++) {
                if ((document.spendform.type[i].value.match(/^process_/))) {
                    document.spendform.type[i].checked = true;
                    break;
                }
            }
            updateCompound();

        </script>
        {/literal}

        <script>
            cps[{
                $plans[plans].id
            }] = {
                $plans[plans].compound_percents_json
            };

        </script>

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

<script>
    $(document).ready(function() {
        $(':radio').change(function() {
            $(':radio[name=' + this.name + ']').next('label').removeClass('selexty');
            $(this).next('label').addClass('selexty');
        });
    });

</script>

<script>
    $(document).ready(function() {
        $("input:radio:checked").next('label').addClass("selexty");
    });

</script>

</div>
</body>

</html>

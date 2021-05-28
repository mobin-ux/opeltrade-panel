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
                                    <li class="breadcrumb-item active">Promotional Materials</li>
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
            <div class="col-xl-4 col-lg-4 col-md-4" style="padding: 0px">

                <div class="col-xl-12 col-lg-12 col-md-12 hide-xs">
                    <div class="card">
                        <div class="headeraccount">
                            <h2><strong>Available</strong> Balance</h2>
                        </div>
                        <div class="body">
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
                        <h2><strong>Promotional</strong> materials</h2>
                    </div>


                    <div class="body">
                        <div class="table-responsive">


                            <div class="tab_content">

                                <div class="tab-content">
                                    <img src="styles/promo/125x125.gif" width="100">
                                    <div class="tab-link">
                                        <label for="promo-3"></label>
                                        <textarea class="calculate-amount form-controlamount" name="name" readonly="" rows="1" cols="80">&lt;a href="{$settings.site_url}/{"?ref=`$user.username`"|encurl}"&gt;&lt;img src="styles/promo/125x125.gif"&gt;&lt;/a&gt;</textarea>
                                    </div>
                                </div>

                                <br>
                                <div class="tab-content">
                                    <img src="styles/promo/200x300.gif">
                                    <div class="tab-link">
                                        <label for="promo-3"></label>
                                        <textarea class="calculate-amount form-controlamount" name="name" readonly="" rows="1" cols="80">&lt;a href="{$settings.site_url}/{"?ref=`$user.username`"|encurl}"&gt;&lt;img src="styles/promo/200x300.gif"&gt;&lt;/a&gt;</textarea>
                                    </div>
                                </div>

                                <br>
                                <div class="tab-content">
                                    <img src="styles/promo/468x60.gif">
                                    <div class="tab-link">
                                        <label for="promo-3"></label>
                                        <textarea class="calculate-amount form-controlamount" name="name" readonly="" rows="1" cols="80">&lt;a href="{$settings.site_url}/{"?ref=`$user.username`"|encurl}"&gt;&lt;img src="styles/promo/468x60.gif"&gt;&lt;/a&gt;</textarea>
                                    </div>
                                </div>

                                <br>
                                <div class="tab-content">
                                    <img src="styles/promo/728x90.gif">
                                    <div class="tab-link">
                                        <label for="promo-2"></label>
                                        <textarea class="calculate-amount form-controlamount" name="name" readonly="" rows="1" cols="80">&lt;a href="{$settings.site_url}/{"?ref=`$user.username`"|encurl}"&gt;&lt;img src="styles/promo/468x60.gif"&gt;&lt;/a&gt;</textarea>

                                    </div>
                                </div>


                            </div>
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
<script>
    document.write("<script type='text/javascript' src='styles/assets/js/data.js?v=" + Date.now() + "'><\/script>");

</script>





</div>
</body>

</html>

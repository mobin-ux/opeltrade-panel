{include file="headerbear.tpl"}


<style>
    .deposit-process {
        color: #4f4f4f;
        background-color: #facd8a;
        border-color: #facd8a;


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
        color: #4f4f4f;
        background-color: #facd8a;
        border-color: #facd8a;


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
                                    <li class="breadcrumb-item active">Your Deposit Status</li>
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

        <br>
        <br>
        {if $process eq 'yes' || $frm.m_status eq 'success'}
        <div class="alertnoti alert-warning">We have received your deposit. Thank you!.</div>

        {else}
        <div class="alertnoti alert-warning">We have not received your deposit. Please try again.</div>

        {/if}
        <br>
        <br>






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

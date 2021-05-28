<?php /* Smarty version 3.1.27, created on 2021-05-25 06:36:29
         compiled from "/home/ktlwzufz/public_html/tmpl/earning_history.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:110829832360ac9aed63a436_61126529%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8716852b5197ce8722ba6a7f65fc7ae3d2bb5fa' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/earning_history.tpl',
      1 => 1604395146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110829832360ac9aed63a436_61126529',
  'variables' => 
  array (
    'userinfo' => 0,
    'current_page' => 0,
    'options' => 0,
    'ecs' => 0,
    'frm' => 0,
    'month' => 0,
    'day' => 0,
    'year' => 0,
    'currency_sign' => 0,
    'allsum' => 0,
    'qtrans' => 0,
    'periodsum' => 0,
    'settings' => 0,
    'trans' => 0,
    'colpages' => 0,
    'prev_page' => 0,
    'pages' => 0,
    'next_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60ac9aed72a714_44114977',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60ac9aed72a714_44114977')) {
function content_60ac9aed72a714_44114977 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/ktlwzufz/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '110829832360ac9aed63a436_61126529';
echo $_smarty_tpl->getSubTemplate ("headerbull.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<section class="content bagblack">
    <div class="container">
        
        <?php echo '<script'; ?>
 language=javascript>
            function go(p) {
                document.opts.page.value = p;
                document.opts.submit();
            }

        <?php echo '</script'; ?>
>
        

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card" style="margin-top: 30px">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Welcome, <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</h2>
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
                                <input type=hidden name=page value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['current_page']->value);?>
>
                                <div class="btntwo-group bootstrap-select">
                                    <label class="select" style="width: 100%;">
                                        <select name="type" id="type" onchange="document.opts.submit();" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                            <option value="">All transactions</option>
                                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['opt'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['name'] = 'opt';
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['options']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['total']);
?>
                                            <option value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opt']['index']]['type']);?>
" <?php if ($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opt']['index']]['selected']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opt']['index']]['type_name']);?>
</option>
                                            <?php endfor; endif; ?>
                                        </select>
                                    </label>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['ecs']->value) {?>
                                <div class="btntwo-group bootstrap-select" style="width: 100%;padding-bottom: 10px;">
                                    <label class="select" style="width: 100%;">
                                        <select name="ec" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                            <option value="1">All eCurrencies</option>
                                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ec'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['name'] = 'ec';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ecs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['total']);
?>
                                            <option value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ecs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ec']['index']]['id']);?>
 <?php if ($_smarty_tpl->tpl_vars['frm']->value['ec'] == $_smarty_tpl->tpl_vars['ecs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ec']['index']]['id']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ecs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ec']['index']]['name']);?>
</option>
                                            <?php endfor; endif; ?>
                                        </select>
                                    </label>
                                </div>
                                <?php }?>
                                <div class="col-xl-6 col-lg-6 col-md-6" style="padding-right: 5px;padding-left: 0px;">
                                    <h2 class="card-inside-title" style="margin-top: 0px;">From</h2>
                                    <div class="btntwo-group bootstrap-select">
                                        <label class="select" style="width: 100%;padding-bottom: 3px;">
                                            <select name="month_from" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['name'] = 'month_from';
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['month']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total']);
?>
                                                <option value=<?php echo smarty_modifier_myescape($_smarty_tpl->getVariable('smarty')->value['section']['month_from']['index']+1);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['month_from']['index']+1 == $_smarty_tpl->tpl_vars['frm']->value['month_from']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['month']->value[$_smarty_tpl->getVariable('smarty')->value['section']['month_from']['index']]);?>
</option>
                                                <?php endfor; endif; ?>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="btntwo-group bootstrap-select">
                                        <label class="select" style="width: 100%;padding-bottom: 3px;">
                                            <select name="day_from" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['name'] = 'day_from';
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['day']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total']);
?>
                                                <option value=<?php echo smarty_modifier_myescape($_smarty_tpl->getVariable('smarty')->value['section']['day_from']['index']+1);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['day_from']['index']+1 == $_smarty_tpl->tpl_vars['frm']->value['day_from']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['day']->value[$_smarty_tpl->getVariable('smarty')->value['section']['day_from']['index']]);?>
</option>
                                                <?php endfor; endif; ?>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="btntwo-group bootstrap-select">
                                        <label class="select" style="width: 100%;padding-bottom: 3px;">
                                            <select name="year_from" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['name'] = 'year_from';
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['year']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total']);
?>
                                                <option value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_from']['index']]);?>
 <?php if ($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_from']['index']] == $_smarty_tpl->tpl_vars['frm']->value['year_from']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_from']['index']]);?>
</option>
                                                <?php endfor; endif; ?>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6" style="padding-left: 5px;padding-right: 0px;">
                                    <h2 class="card-inside-title" style="margin-top: 0px;">To</h2>
                                    <div class="btntwo-group bootstrap-select">
                                        <label class="select" style="width: 100%;padding-bottom: 3px;">
                                            <select name="month_to" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['name'] = 'month_to';
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['month']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total']);
?>
                                                <option value=<?php echo smarty_modifier_myescape($_smarty_tpl->getVariable('smarty')->value['section']['month_to']['index']+1);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['month_to']['index']+1 == $_smarty_tpl->tpl_vars['frm']->value['month_to']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['month']->value[$_smarty_tpl->getVariable('smarty')->value['section']['month_to']['index']]);?>
</option>
                                                <?php endfor; endif; ?>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="btntwo-group bootstrap-select">
                                        <label class="select" style="width: 100%;padding-bottom: 3px;">
                                            <select name="day_to" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['name'] = 'day_to';
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['day']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total']);
?>
                                                <option value=<?php echo smarty_modifier_myescape($_smarty_tpl->getVariable('smarty')->value['section']['day_to']['index']+1);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['day_to']['index']+1 == $_smarty_tpl->tpl_vars['frm']->value['day_to']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['day']->value[$_smarty_tpl->getVariable('smarty')->value['section']['day_to']['index']]);?>
</option>
                                                <?php endfor; endif; ?>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="btntwo-group bootstrap-select">
                                        <label class="select" style="width: 100%;padding-bottom: 3px;">
                                            <select name="year_to" style="width: 100%;padding: 10px 22px;border-color: #535e69;z-index: 9999;position: relative;" class="btntwo dropdown-togglex btntwo-round btntwo-simple" tabindex="-98">
                                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['name'] = 'year_to';
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['year']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total']);
?>
                                                <option value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_to']['index']]);?>
 <?php if ($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_to']['index']] == $_smarty_tpl->tpl_vars['frm']->value['year_to']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_to']['index']]);?>
</option>
                                                <?php endfor; endif; ?>
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
                                        <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['allsum']->value);?>
</td>
                                    </tr>
                                    <?php if ($_smarty_tpl->tpl_vars['qtrans']->value > 0) {?>
                                    <tr>
                                        <td>For This Period</td>
                                        <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['periodsum']->value);?>
</td>
                                    </tr>
                                    <?php }?>
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




                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_history_balance_mode']) {?>
                        <table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?>
                            <tr>
                                <th class=inheader align=left style="color: #facd8a;">Date</th>
                                <th class=inheader style="text-align: center;color: #facd8a;">Type</th>
                                <th class=inheader style="text-align: center;color: #facd8a;">Credit</th>
                                <th class=inheader style="text-align: center;color: #facd8a;">Debit</th>
                                <th class=inheader style="text-align: center;color: #facd8a;">Balance</th>
                                <th class=inheader style="text-align: right;color: #facd8a;">P.S.</th>
                            </tr>
                            <?php if ($_smarty_tpl->tpl_vars['qtrans']->value > 0) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['trans'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['name'] = 'trans';
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['trans']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total']);
?>
                            <tr>
                                <td align=left nowrap><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['d']);?>
</td>
                                <td align=center><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['transtype']);?>
</b><br><small class=gray><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['description']);?>
</small></td>
                                <td align=center><b>
                                        <?php if ($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['debitcredit'] == 0) {?>
                                        <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['actual_amount']);?>

                                    </b>
                                    <?php } else { ?>
                                    &nbsp;
                                    <?php }?>
                                </td>
                                <td align=center><b>
                                        <?php if ($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['debitcredit'] == 1) {?>
                                        <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['actual_amount']);?>

                                    </b>
                                    <?php } else { ?>
                                    &nbsp;
                                    <?php }?>
                                </td>
                                <td align=center><b>
                                        <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['balance']);?>

                                </td>
                                <td><img src="styles/assets/pay2/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['ec']);?>
.png" align=right hspace=1 height=17></td>
                            </tr>
                            <?php endfor; endif; ?>
                            <?php } else { ?>
                            <tr>
                                <td colspan=6 align=center style="border: 1px solid #ddd;padding: 8px;">No transactions found</td>
                            </tr>
                            <?php }?>
                            <tr>
                        </table>
                        <?php } else { ?>
                        <table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?>
                            <tr>
                                <th class=inheader style="color: #facd8a;"><b>Type</b></th>
                                <th class=inheader width=200 style="text-align: center;color: #facd8a;"><b>Amount</b></th>
                                <th class=inheader width=170 style="text-align: center;color: #facd8a;"><b>Date</b></th>
                            </tr>
                            <?php if ($_smarty_tpl->tpl_vars['qtrans']->value > 0) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['trans'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['name'] = 'trans';
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['trans']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total']);
?>
                            <tr>
                                <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['transtype']);?>
</b></td>
                                <td width=200 align=center><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['actual_amount']);?>
</b> <img src="styles/assets/pay2/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['ec']);?>
.png" align=absmiddle hspace=1 height=17></td>
                                <td width=170 align=center valign=bottom><b><small><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['d']);?>
</small></b></td>
                            </tr>
                            <tr>
                                <td colspan=3 class=gray><small><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['description']);?>
</small></td>
                            </tr>
                            <?php endfor; endif; ?>
                            <?php } else { ?>
                            <tr>
                                <td colspan=3 align=center style="border: 1px solid #ddd;padding: 8px;">No transactions found</td>
                            </tr>
                            <?php }?>
                            <tr>



                        </table>
                        <?php }?>

                        </br></br>

                        <?php if ($_smarty_tpl->tpl_vars['colpages']->value > 1) {?>
                        <center>
                            <?php if ($_smarty_tpl->tpl_vars['prev_page']->value > 0) {?>
                            <a href="javascript:go('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['prev_page']->value);?>
')">&lt;&lt;</a>
                            <?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
                            <?php if ($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['current'] == 1) {?>
                            <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['page']);?>

                            <?php } else { ?>
                            <a href="javascript:go('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['page']);?>
')"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['page']);?>
</a>
                            <?php }?>
                            <?php endfor; endif; ?>
                            <?php if ($_smarty_tpl->tpl_vars['next_page']->value > 0) {?>
                            <a href="javascript:go('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['next_page']->value);?>
')">&gt;&gt;</a>
                            <?php }?>
                        </center>
                        <?php }?>


                    </div>




                    </br>
                </div>
            </div>
        </div>
    </div>
</section><?php echo $_smarty_tpl->getSubTemplate ("footera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div>

<link rel="stylesheet" href="styles/assets/libs/bootstrap/fileinput.min.css">
<?php echo '<script'; ?>
 src="styles/assets/libs/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="styles/assets/libs/bootstrap/fileinput.min.js"><?php echo '</script'; ?>
>		
<?php echo '<script'; ?>
>
    addClass(document.getElementById('js-sidebar-history'), 'menu__link--active');

<?php echo '</script'; ?>
>
</div>
</body>

</html>
<?php }
}
?>
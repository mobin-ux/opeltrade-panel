<?php /* Smarty version 3.1.27, created on 2021-05-28 06:15:27
         compiled from "/home/ktlwzufz/public_html/tmpl/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:144083062860b08a7f564b15_41482678%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4009278f24e5e7503c2bb963f52f789061ad1134' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/signup.tpl',
      1 => 1604395146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144083062860b08a7f564b15_41482678',
  'variables' => 
  array (
    'settings' => 0,
    'deny_registration' => 0,
    'referer' => 0,
    'errors' => 0,
    'account_errors' => 0,
    'err' => 0,
    'frm' => 0,
    'countries' => 0,
    'pay_accounts' => 0,
    'ps' => 0,
    'mpay_accounts' => 0,
    'p' => 0,
    'ti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60b08a7f689a38_88241903',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60b08a7f689a38_88241903')) {
function content_60b08a7f689a38_88241903 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/ktlwzufz/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';
if (!is_callable('smarty_modifier_escape')) require_once '/home/ktlwzufz/public_html/inc/libs/smarty3/plugins/modifier.escape.php';

$_smarty_tpl->properties['nocache_hash'] = '144083062860b08a7f564b15_41482678';
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign up / <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</title>
    <link rel="shortcut icon" href="styles/assets/img/favicon/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="styles/assets/css/style.css">
    <?php echo '<script'; ?>
 src="styles/assets/libs/jquery/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="styles/assets/libs/modernizr/modernizr.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="styles/assets/js/common.js"><?php echo '</script'; ?>
>
</head>

<body>

   

    <div id="preloader" class="loader">
        <div class='sk-three-bounce'>
            <div class='sk-bounce-1 sk-child'></div>
            <div class='sk-bounce-2 sk-child'></div>
            <div class='sk-bounce-3 sk-child'></div>
        </div>
    </div>
    <div id="pjax-container">
        <div id="block-content">
            <section class="section section-auth bagblack textsite titlesite">
                <div class="container bagblack textsite titlesite">
                    <div class="row mt-5 mb-5">
                        <div class="col-md-offset-3 col-md-6">
                            <div class="b--shadow b--auth">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="b--auth__left">
                                            <div class="text-center">
                                                <a href="/" class="logo" data-pjax="">
                                                    <img src="styles/assets/img/logo-img.svg" alt="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
" style="width: 180px;">
                                                </a>
                                            </div>
                                            <div class="b--shadow__title-bordered">
                                                <div class="title-bordered__wrapper">
                                                    <div class="title-bordered">CREATE YOUR ACCOUNT NOW</div>
                                                </div>
                                            </div>


                                            <?php if ($_smarty_tpl->tpl_vars['deny_registration']->value) {?>
                                            We are closed for new registrations now.
                                            <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] && $_smarty_tpl->tpl_vars['settings']->value['force_upline'] && !$_smarty_tpl->tpl_vars['referer']->value && !$_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
                                            You do not have a upline. Our system require a upline for each user.
                                            <?php } else { ?>




                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>

                                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['name'] = 'e';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total']);
?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'full_name') {?>
                                            <div class="alertnoti alert-warning">Please enter your full name!</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'address') {?>
                                            <div class="alertnoti alert-warning">Please enter your address!</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'city') {?>
                                            <div class="alertnoti alert-warning">Please enter your city!</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'state') {?>
                                            <div class="alertnoti alert-warning">Please enter your state!</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'zip') {?>
                                            <div class="alertnoti alert-warning">Please enter your zip!</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'country') {?>
                                            <div class="alertnoti alert-warning">Please choose your country!</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username') {?>
                                            <div class="alertnoti alert-warning">Please enter valid username! It should contains English letters and digits only.</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username_exists') {?>
                                            <div class="alertnoti alert-warning">Sorry, such user already exists! Please try another username.</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email_exists') {?>
                                            <div class="alertnoti alert-warning">Sorry, such email already exists! Please try another email.</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password') {?>
                                            <div class="alertnoti alert-warning">Please enter a password!</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_confirm') {?>
                                            <div class="alertnoti alert-warning">Please check your password!</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_too_small') {?>
                                            <div class="alertnoti alert-warning">The password you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 characters!</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code') {?>
                                            <div class="alertnoti alert-warning">Please enter the Transaction Code!</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_confirm') {?>
                                            <div class="alertnoti alert-warning">Please check your Transaction Code!</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_too_small') {?>
                                            <div class="alertnoti alert-warning">The Transaction Code you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 characters!</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_vs_password') {?>
                                            <div class="alertnoti alert-warning">The Transaction Code should differ from the Password!</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'egold') {?>
                                            <div class="alertnoti alert-warning">Please enter your e-gold account number!</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'invalid_perfectmoney_account') {?>
                                            <div class="alertnoti alert-warning">Please enter USD PerfectMoney account number!
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email') {?>
                                                <div class="alertnoti alert-warning">Please enter your e-mail!</div>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'agree') {?>
                                                <div class="alertnoti alert-warning">You have to agree with the Terms and Conditions!</div>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'turing_image') {?>
                                                <div class="alertnoti alert-warning">Enter the verification code as it is shown in the corresponding box.</div>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'no_upline') {?>
                                                <div class="alertnoti alert-warning">The system requires an upline to register. <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>You have to be agreed to random one or found a referral link in the net.<?php }?></div>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'ip_exists_in_database') {?>
                                                <div class="alertnoti alert-warning">Your IP already exists in our database. Sorry, but registration impossible.</div>
                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'invalid_account_format') {?>
                                                <?php
$_from = $_smarty_tpl->tpl_vars['account_errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['err']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
$foreach_err_Sav = $_smarty_tpl->tpl_vars['err'];
?>
                                                <div class="alertnoti alert-warning"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['err']->value);?>
</div>
                                                <?php
$_smarty_tpl->tpl_vars['err'] = $foreach_err_Sav;
}
?>
                                                <?php }?>
                                                <?php endfor; endif; ?>

                                                <?php }?>





                                                <form method=post onsubmit="return checkform()" name="regform">
                                                    <input type=hidden name=a value="signup">
                                                    <input type=hidden name=action value="signup">
                                                    <input type="hidden" name="fullname" id="fullname" value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['fullname'], " quotes"));?>
">
                                                    <input type="hidden" name="email1" id="email1" value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['email1'], " quotes"));?>
">
                                                    <input type="hidden" name="password2" id="password2" value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['password2'], " quotes"));?>
">

                                                    <div class="form-group">
                                                        <label>Username *</label>
                                                        <input id="username" type="text" value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['username'], " quotes"));?>
" name="username" class="form-control">
                                                    </div>


                                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location']) {?>

                                                    <div class="form-group">
                                                        <label>Your Address *</label>
                                                        <input type=text name=address value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['address'], " quotes"));?>
" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Your City *</label>
                                                        <input type=text name=city value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['city'], " quotes"));?>
" class="form-control">
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Your State *</label>
                                                        <input type=text name=state value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['state'], " quotes"));?>
" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Your Zip *</label>
                                                        <input type=text name=zip value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['zip'], " quotes"));?>
" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Your Country *</label>
                                                        <select name='country' class="form-control">
                                                            <option value=''>--SELECT--</option>
                                                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['c'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['countries']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
                                                            <option <?php if ($_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name'] == $_smarty_tpl->tpl_vars['frm']->value['country']) {?>selected<?php }?>><?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name']));?>
</option>
                                                            <?php endfor; endif; ?>
                                                        </select>
                                                    </div>
                                                    <?php }?>

                                                    <div class="form-group">
                                                        <label>E-mail *</label>
                                                        <input id="email" type="text" value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['email'], " quotes"));?>
" name="email" class="form-control">
                                                    </div>

                                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>

                                                    <div class="form-group">
                                                        <label>Define Transaction Code *</label>
                                                        <input type=password name=transaction_code value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['transaction_code'], " quotes"));?>
" class="form-control">
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Retype Transaction Code *</label>
                                                        <input type=password name=transaction_code2 value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['transaction_code2'], " quotes"));?>
" class="form-control">
                                                    </div>
                                                    <?php }?>

                                                   <!--  <?php
$_from = $_smarty_tpl->tpl_vars['pay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>
                                                    <div class="form-group">
                                                        <label>Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
 Account:</label>
                                                        <input type=text name=pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['id']);?>
] value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['account'], ENT_QUOTES, 'UTF-8', true));?>
" data-validate="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate']['func']);?>
" data-validate-<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate']['func']);?>
="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate'][$_smarty_tpl->tpl_vars['ps']->value['validate']['func']]);?>
" data-validate-notice="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['validate']['notification'], ENT_QUOTES, 'UTF-8', true));?>
" class="form-control">
                                                    </div>
                                                    <?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>

                                                    <?php
$_from = $_smarty_tpl->tpl_vars['mpay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['accounts'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>
                                                    <div class="form-group">
                                                        <label>Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
</label>
                                                        <input type=text name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
][<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
]" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['value'], ENT_QUOTES, 'UTF-8', true));?>
" class="form-control">
                                                    </div>
                                                    <?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
                                                    <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?> -->

                                                    <div class="form-group">
                                                        <label>Your Password *</label>
                                                        <input id="password" type="password" value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['password'], " quotes"));?>
" name="password" class="form-control">
                                                    </div>



                                                    <?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['signup']) {?>
                                                    <div class="form-group">
                                                        <label id="js-captcha-label">Enter captcha *</label>
                                                        <div class="input-group">
                                                            <input type="text" name="validation_number" class="form-control">
                                                            <span class="input-group-addon" style="padding: 0;padding-left: 0px;border: none;background: none;padding-left: 10px;">
                                                                <img src="<?php echo smarty_modifier_myescape(encurl(" ?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <?php }?>


                                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program']) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['referer']->value) {?>

                                                    <div class="form-group">
                                                        <label>Your Upline <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['referer']->value['name']);?>
 (<?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['referer']->value['username'])===null||$tmp==='' ? " None " : $tmp));?>
)</label>
                                                    </div>

                                                    <?php } else { ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['force_upline']) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>

                                                    <div class="form-group">
                                                        <input id="rand_ref" type=checkbox name="rand_ref" class="checkbox__input" value=1 checked>
                                                        <label for="rand_ref" class="checkbox__label">You do not have an upline. Our system requires an upline for each user. You'll have to agree to get a random one or find a referral link on the net.</label>
                                                    </div>

                                                    <?php } else { ?>

                                                    You do not have an upline. Our system requires an upline for each user.

                                                    <?php }?>
                                                    <?php }?>
                                                    <?php }?>
                                                    <?php }?>

                                                    <div class="form-group">
                                                        <input type="checkbox" name="agree" value="1" class="checkbox__input" id="terms" required checked>
                                                        <label for="terms" class="checkbox__label">I'm agree with
                                                            <a href="?a=rules" data-pjax> <strong class="text--underline">
                                                                    Terms & Conditions
                                                                </strong>
                                                            </a>*</label>
                                                    </div>




                                                    <div class="form-group">
                                                        <button class="btn btn-warning btn-block">REGISTER</button>
                                                    </div>
                                                </form>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--StartofTawk.toScript--><?php echo '<script'; ?>
 type="text/javascript"> var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date(); (function(){ var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0]; s1.async=true; s1.src='https://embed.tawk.to/5f844fe54704467e89f6b48d/default'; s1.charset='UTF-8'; s1.setAttribute('crossorigin','*'); s0.parentNode.insertBefore(s1,s0); })(); <?php echo '</script'; ?>
> <!--End of Tawk.to Script-->
                                        <!--End of Tawk.to Script-->
                        </div>
                    </div>
            </section>
        </div>
      
        <link rel="stylesheet" href="styles/assets/libs/bootstrap/fileinput.min.css">
        <?php echo '<script'; ?>
 src="styles/assets/libs/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="styles/assets/libs/bootstrap/fileinput.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function() {
                //////////////
                $("#password").on('keyup change', function() {
                    var psw = $("#password").val();
                    $("#password2").val(psw);
                });

                $("#email").on('keyup change', function() {
                    var ema = $("#email").val();
                    $("#email1").val(ema);
                });


                $("#username").keyup(function() {
                    $("#fullname").val(this.value);
                });

            });

        <?php echo '</script'; ?>
>

    </div>
</body>

</html>
<?php }
}
?>
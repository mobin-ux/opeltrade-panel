<?php /* Smarty version 3.1.27, created on 2021-05-25 05:19:01
         compiled from "/home/ktlwzufz/public_html/tmpl/left.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:183498668960ac88c5dccb62_44589551%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7944432fe2f5e8ced82871413d9f5669e1a07c9b' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/left.tpl',
      1 => 1601403553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183498668960ac88c5dccb62_44589551',
  'variables' => 
  array (
    'frm' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60ac88c5de53b2_33856819',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60ac88c5de53b2_33856819')) {
function content_60ac88c5de53b2_33856819 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '183498668960ac88c5dccb62_44589551';
?>
				   <!-- Image Table: Start -->

<?php if ($_smarty_tpl->tpl_vars['frm']->value['a'] != 'login' && $_smarty_tpl->tpl_vars['frm']->value['a'] != 'login_tfa') {?>
<?php echo $_smarty_tpl->getSubTemplate ("login_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
				   
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_stats_box']) {?>
<br>
<?php echo $_smarty_tpl->getSubTemplate ("stats_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
                                   
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box']) {?>
<br>
<?php echo $_smarty_tpl->getSubTemplate ("info_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("index_last_add_funds.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_last_deposits.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_last_withdrawals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_top_referrals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_top_investors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


					<!-- Stats Table: End -->

<?php }
}
?>
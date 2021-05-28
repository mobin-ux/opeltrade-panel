<?php /* Smarty version 3.1.27, created on 2021-05-24 22:48:47
         compiled from "/home/ktlwzufz/public_html/tmpl/top10.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:86417990760ac2d4f08b761_64370576%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcabf55d71e6f3eb61e6c2a4339dd06b61ef0937' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/top10.tpl',
      1 => 1601403553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86417990760ac2d4f08b761_64370576',
  'variables' => 
  array (
    'members' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60ac2d4f0b5a39_66138829',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60ac2d4f0b5a39_66138829')) {
function content_60ac2d4f0b5a39_66138829 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/ktlwzufz/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '86417990760ac2d4f08b761_64370576';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo loaddata_smarty(array('name'=>"top_investors",'limit'=>10,'var'=>'members'),$_smarty_tpl);?>


<h3>Investors Top 10</h3><br>

<table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <td class=inheader>Username</td>
 <td class=inheader width=200>Reg. Date</td>
 <td class=inheader width=170>Deposit</td>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['members']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['m']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
$foreach_m_Sav = $_smarty_tpl->tpl_vars['m'];
?>
<tr>
 <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['m']->value['username']);?>
</b></td>
 <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['m']->value['reg_date']);?>
</b></td>
 <td align=right><b><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['m']->value['amount']));?>
</b></td>
</tr>
<?php
$_smarty_tpl->tpl_vars['m'] = $foreach_m_Sav;
}
if (!$_smarty_tpl->tpl_vars['m']->_loop) {
?>
<tr>
 <td colspan=3 align=center>No investors found</td>
</tr>
<?php
}
?>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
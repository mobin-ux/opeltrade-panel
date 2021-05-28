<?php /* Smarty version 3.1.27, created on 2021-05-25 05:19:02
         compiled from "/home/ktlwzufz/public_html/tmpl/index_top_investors.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:141162164860ac88c60383b1_86094169%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bafbdd40dffcb541ef411cee028b08c6ad2441ca' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/index_top_investors.tpl',
      1 => 1555918126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141162164860ac88c60383b1_86094169',
  'variables' => 
  array (
    'settings' => 0,
    'top_investors' => 0,
    's' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60ac88c6046e77_92317910',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60ac88c6046e77_92317910')) {
function content_60ac88c6046e77_92317910 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/ktlwzufz/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '141162164860ac88c60383b1_86094169';
if ($_smarty_tpl->tpl_vars['settings']->value['index_top_investors']) {?>
<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <th colspan=4><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
  <th colspan=2 class=title>Top Investors</th>
</tr>
<?php echo loaddata_smarty(array('name'=>"top_investors",'limit'=>$_smarty_tpl->tpl_vars['settings']->value['index_top_investors'],'var'=>"top_investors",'active'=>1),$_smarty_tpl);?>


<?php
$_from = $_smarty_tpl->tpl_vars['top_investors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
<tr>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['username']);?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['amount']);?>
</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
</table>
<?php }
}
}
?>
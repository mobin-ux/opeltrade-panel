<?php /* Smarty version 3.1.27, created on 2021-05-28 06:15:45
         compiled from "/home/ktlwzufz/public_html/tmpl/login_redirect.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:210326850760b08a913a4a09_99802972%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a0a16d435d1a20fde06ea5d2fcd55cd500e699f' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/login_redirect.tpl',
      1 => 1604395146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210326850760b08a913a4a09_99802972',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60b08a913b0381_24289307',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60b08a913b0381_24289307')) {
function content_60b08a913b0381_24289307 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/ktlwzufz/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '210326850760b08a913a4a09_99802972';
?>
<html>

<head>
<META HTTP-EQUIV=Refresh CONTENT="0; URL=<?php echo smarty_modifier_myescape(encurl("?a=account"));?>
">
</head>
</html><?php }
}
?>
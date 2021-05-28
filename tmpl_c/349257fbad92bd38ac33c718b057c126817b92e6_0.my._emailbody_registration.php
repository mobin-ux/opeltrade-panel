<?php /* Smarty version 3.1.27, created on 2021-05-25 23:56:33
         compiled from "my:_emailbody_registration" */ ?>
<?php
/*%%SmartyHeaderCode:118274858860ad8eb1e06174_41990976%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349257fbad92bd38ac33c718b057c126817b92e6' => 
    array (
      0 => 'my:_emailbody_registration',
      1 => 1621986993,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '118274858860ad8eb1e06174_41990976',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60ad8eb1e0ff57_24109312',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60ad8eb1e0ff57_24109312')) {
function content_60ad8eb1e0ff57_24109312 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '118274858860ad8eb1e06174_41990976';
?>
Hello #name#,

Thank you for registration on our site.

Your login information:

Login: #username#
Password: #password#

You can login here: #site_url#

Contact us immediately if you did not authorize this registration.

Thank you.<?php }
}
?>
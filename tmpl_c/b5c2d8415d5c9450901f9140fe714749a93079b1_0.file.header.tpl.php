<?php /* Smarty version 3.1.27, created on 2021-05-25 05:19:01
         compiled from "/home/ktlwzufz/public_html/tmpl/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27091226260ac88c5d92ad1_91759841%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5c2d8415d5c9450901f9140fe714749a93079b1' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/header.tpl',
      1 => 1442771496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27091226260ac88c5d92ad1_91759841',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60ac88c5da63d4_95418708',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60ac88c5da63d4_95418708')) {
function content_60ac88c5da63d4_95418708 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27091226260ac88c5d92ad1_91759841';
echo $_smarty_tpl->getSubTemplate ("logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['reverse_columns']) {?>
  <tr> 
    <td valign="top">
	 <table cellspacing=0 cellpadding=1 border=0 width=100% height=100%  class=line>
	   <tr>
	     <td>
           <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
             <tr class=bgcolorleft valign="top"> 
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_news_box']) {?>
              <td width=300 align=center class=bgcolorright><img src="images/q.gif" width=180 height=1>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_news_box']) {?>
<?php echo $_smarty_tpl->getSubTemplate ("news_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
              </td>
              <td class=line valign="top" width=1><img src=images/q.gif width=1 height=1></td>
<?php }?>

              <td class=bgcolormain valign="top" width=99<?php echo '%>';?>
            <!-- Main: Start -->
            <table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0" class="forTexts">
              <tr>
                <td width=100% height=100% valign=top>
<div class=framebody>

<?php } else { ?>

  <tr> 
    <td valign="top">
	 <table cellspacing=0 cellpadding=1 border=0 width=100% height=100%  class=line>
	   <tr>
	     <td>
           <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
             <tr class=bgcolorleft valign="top"> 
              <td width=300 align=center><img src="images/q.gif" width=180 height=1>
<?php echo $_smarty_tpl->getSubTemplate ("left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

              </td>
              <td class=line valign="top" width=1><img src=images/q.gif width=1 height=1></td>          
              <td class=bgcolormain valign="top" width=99<?php echo '%>';?>
            <!-- Main: Start -->
            <table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0" class="forTexts">
              <tr>
                <td width=100% height=100% valign=top>
<div class=framebody>
<?php }
}
}
?>
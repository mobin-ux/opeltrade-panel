<?php /* Smarty version 3.1.27, created on 2021-05-25 06:04:58
         compiled from "/home/ktlwzufz/public_html/tmpl/mfooter.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:176461702060ac938a9481a7_42259928%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ab70d89811bd0d5873a8ff753422f72ff290c10' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/mfooter.tpl',
      1 => 1608488082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176461702060ac938a9481a7_42259928',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60ac938a9506e0_29934755',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60ac938a9506e0_29934755')) {
function content_60ac938a9506e0_29934755 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '176461702060ac938a9481a7_42259928';
?>
<div class="panel-footer">
		<nav class="float-right menu d-none d-md-block">
		<ul>
			<li><a href="?a=home">Home</a>
			</li>
			<li><a href="?a=about">About Us</a>
			</li>
			<li><a href="?a=cust&amp;page=investment">Managed Investment</a>
			</li>
			<li><a href="?a=cust&amp;page=partnership">Referral Program</a>
			</li>
			<li><a href="?a=support">Help Center</a>
			</li>
			<li><a href="?a=news">News</a>
			</li>
		</ul>
		</nav>
		<ul class="socials float-left">
			
		</ul>
		<div class="clearfix">
		</div>
	</div>
	</section>
	<!-- end main -->
	</main>
	<!-- end panel-wrapper -->
</div>
<!-- end container -->
<!-- java scripts -->
<?php echo '<script'; ?>
 src="styles/js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/smillscoll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/ResizeSensor.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/theia-sticky-sidebar.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="styles/js/panel/app.js"><?php echo '</script'; ?>
>
<!-- end java scripts -->
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
		$(function () {
		  var clipboard =  new ClipboardJS('.copy');
		  clipboard.on('success', function(e) {
		    e.clearSelection();
		  });
		});
	<?php echo '</script'; ?>
>
	
<?php echo '<script'; ?>
>document.write("<?php echo '<script'; ?>
 type='text/javascript' src='styles/js/calculator.js?v=" + Date.now() + "'><\/script>");<?php echo '</script'; ?>
>	

	<?php echo '<script'; ?>
>
    $(".invest-coin-check").click(function() {
        $(".invest").removeClass("inactive");
    })
    $('.close-box').click(function () {
        var box = $(this).parents('.box');
        $('.radio-container-price .box').removeClass('inactive');
        $(box).addClass('inactive');
    });
    <?php echo '</script'; ?>
>	
</body><?php }
}
?>
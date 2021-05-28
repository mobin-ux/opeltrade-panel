<?php /* Smarty version 3.1.27, created on 2021-05-28 06:21:08
         compiled from "/home/ktlwzufz/public_html/tmpl/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:165057292060b08bd4c6cf38_82505575%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d2e4fb62cfd4e95ef40812687ac350fb92ce740' => 
    array (
      0 => '/home/ktlwzufz/public_html/tmpl/footer.tpl',
      1 => 1606658525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165057292060b08bd4c6cf38_82505575',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60b08bd4c864e0_14240867',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60b08bd4c864e0_14240867')) {
function content_60b08bd4c864e0_14240867 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/ktlwzufz/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '165057292060b08bd4c6cf38_82505575';
?>
 <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                           
                               <div class="row" style="margin-top:50px;">
	     <div class="col-md-12">
		     <div class="row equal">
			     <div class="col-md-8 no-padding wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;min-height: 180px;"> 
				    <div class="incrop-left" style="min-height: 100%;">
    					<div class="incrop-left-img">
    						<img src="styles/assets/img/uk.png">
							<h4 class="step__title" style="padding-bottom: 15px;color:#facd8a;">US Registered Company</h4>
    						<p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 is a fully registered and licensed company in US. <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 is powered by the latest and most secure form of SSL data encryption to keep all your data and information safe and secure.</p>
    					</div>
    				</div>
				 </div>
				 <div class="col-md-4 no-padding wow fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;min-height: 180px;">
				    <div class="incrop-right" style="min-height: 100%;">
					  <div class="incorp-inner">
						<h4 class="step__title" style="padding-bottom: 15px;color:#2f2e2e;">111223344</h4>
						<p style="color:#2f2e2e;">Official Registered Company</p>
						<a target="_blank" href="certificate.jpeg" style="padding-left:20px;margin-top: 0px;display: block;" class="btn btn-black-warning section-home__btn textsite truncate" data-pjax="">Check Certificate</a>
					  </div>
	    			</div>
				 </div>
			 </div>
		 </div>
		 
	    </div>
						   
						   
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="topline footer__topline">
                                        <a href="/" class="logo topline__logo">
                                           <img src="logo.png" alt="Golden" style="width: 180px;">
                                        </a>
                                        <nav class="menu topline__menu footer__menu">
                                            <a href="/" class="menu__link" data-pjax>
                                                Home
                                            </a>
                                            <a href="?a=cust&amp;page=about" 
                                               class="menu__link" 
                                               data-pjax>
                                                About us
                                            </a>
                                            <a href="?a=cust&amp;page=investment" 
                                               class="menu__link" 
                                               data-pjax>
                                                Investment
                                            </a>
                                            <a href="?a=cust&amp;page=partners" 
                                               class="menu__link" 
                                               data-pjax>
                                                Partners
                                            </a>
                                            <a href="?a=rules" 
                                               class="menu__link" 
                                               data-pjax>
                                                Terms
                                            </a>
                                            <a href="?a=support" 
                                               class="menu__link" 
                                               data-pjax>
                                                Contact us
                                            </a>
                                        </nav>
                                        <div class="footer__socfooter topline__controls" style="height: initial;">
										    <a></a>
											<a></a>
                                            
											
                                            </a>
											                                  
                                        </div>
                                        
                                        <!--StartofTawk.toScript--><!--StartofTawk.toScript--><?php echo '<script'; ?>
 type="text/javascript"> var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date(); (function(){ var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0]; s1.async=true; s1.src='https://embed.tawk.to/5f844fe54704467e89f6b48d/default'; s1.charset='UTF-8'; s1.setAttribute('crossorigin','*'); s0.parentNode.insertBefore(s1,s0); })(); <?php echo '</script'; ?>
> <!--End of Tawk.to Script-->
                                       <!--End of Tawk.to Script-->
                                    </div>
                                </div>
                            </div>
                            <div class="footer__copyright">
                                © 2018 -<?php echo smarty_modifier_myescape(date('Y'));?>
 <?php echo smarty_modifier_myescape(mb_strtoupper($_smarty_tpl->tpl_vars['settings']->value['site_name'], 'UTF-8'));?>
. ALL RIGHTS RESERVED.
                            </div>
                        </div>
                    </div>
                </div>
            </footer><?php }
}
?>
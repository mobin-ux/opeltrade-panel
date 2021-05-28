<link rel="stylesheet" href="styles/assets/css/style.css">
<link rel="stylesheet" href="styles/assets/css/extra.css">
<link rel="stylesheet" href="styles/assets/css/themefisher-fonts.css">
<script src="styles/assets/libs/jquery/jquery-1.9.1.min.js"></script>
<script src="styles/assets/libs/modernizr/modernizr.js"></script>
<script src="styles/assets/js/common.js"></script>







<header class="header header--home" style="background:initial;">

<div style="display: none;">
<form method=post name=opts>
<input type=hidden name=a value=paidout>
<input type=hidden name=page value={$current_page}>
<table cellspacing=0 cellpadding=0 border=0 width=100%>
<tr>
 <td align=right>
<select name=month class=inpts>
{section name=month loop=$month}
<option value={$smarty.section.month.index+1} {if $smarty.section.month.index+1 == $frm.month}selected{/if}>{$month[month]}
{/section}
</select> &nbsp;
<select name=year class=inpts>
{section name=year loop=$year}
<option value={$year[year]} {if $year[year] == $frm.year}selected{/if}>{$year[year]}
{/section}
</select>
 </td>
 <td width=1% nowrap>
	&nbsp; <input type=submit value="Go" class=sbmt>
 </td>
</tr></table>
</form>
</div>              

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="topline header__topline">
                                
                                <nav class="menu topline__menu header__menu" id="js-menu">
                                    <a  class="menu__link" id="js-menu-home" data-pjax>
                                    </a>
                                </nav>
                            </div>
                            
                        </div>
                        <div class="col-md-8 col-lg-6">
                            <div class="header__content">
                                                     
                                <div class="header__opers">
                                 
                                    {section name=s loop=$stats}  						
                                    <div class="oper header__oper js-header-oper" style="bottom: 160px;opacity: 0">
                                            <div class="label oper__cell oper__label">
                                                Paidout
                                            </div>
                                            <div class="oper__cell">
                                            {$currency_sign}{$stats[s].actual_amount} USD
											<span class="oper__user">
                                            {$stats[s].username}                                                   
                                            </span>
                                            </div>
                                    </div> 						
									{/section}
								
									
                                </div>
                                
                                                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>







 
                                    
<script>
    addClass(document.getElementById('js-menu-home'), 'menu__link--active');
    setTimeout(function () {
        var payments = document.getElementsByClassName('js-header-oper');
        for (var i = 0; i < payments.length; i++) {
            payments[i].style.bottom = null;
            payments[i].style.opacity = null;
        }
    }, 500);
    
</script>

<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  if ($messageStack->size('header') > 0) {
    echo '<div class="grid_24">' . $messageStack->output('header') . '</div>';
  }
?>

<div id="header">
 <div  class="container_<?php echo $oscTemplate->getGridContainerWidth(); ?>" >
  <div id="storeLogo"><?php echo '<a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . tep_image(DIR_WS_IMAGES . 'store_logo.png', STORE_NAME) . '</a>'; ?></div>

  <div class="header_links">
 
<a href="<?php echo tep_href_link('advanced_search.php')?>"><?php echo IMAGE_BUTTON_SEARCH?></a><?php echo tep_draw_separator('pixel_trans.gif', '15', '1'); ?>| <?php echo tep_draw_separator('pixel_trans.gif', '15', '1'); ?><a href="<?php echo tep_href_link('reviews.php')?>"><?php echo IMAGE_BUTTON_REVIEWS?></a><?php echo tep_draw_separator('pixel_trans.gif', '15', '1'); ?>|<?php echo tep_draw_separator('pixel_trans.gif', '15', '1'); ?><?php if (tep_session_is_registered('customer_id')) { 
?><a href="<?php echo tep_href_link('account.php')?>"><?php echo HEADER_TITLE_MY_ACCOUNT?></a><?php } else 
{ ?><a href="<?php echo tep_href_link('create_account.php')?>"><?php echo HEADER_TITLE_CREATE_ACCOUNT?></a><?php } 
?><?php echo tep_draw_separator('pixel_trans.gif', '15', '1'); ?>|<?php echo tep_draw_separator('pixel_trans.gif', '15', '1'); ?><?php if (tep_session_is_registered('customer_id')) { 
?><a href="<?php echo tep_href_link('logoff.php')?>"><?php echo HEADER_TITLE_LOGOFF?></a><?php } else 
{ ?><a href="<?php echo tep_href_link('login.php')?>"><?php echo HEADER_TITLE_LOGIN?></a><?php } 
?>
   </div>

<div  class="header_box_cart">Shopping Cart : <a href="<?php echo tep_href_link('shopping_cart.php')?>">
						
	<?php if ($cart->count_contents() > 0) {	$cart_text= $cart->count_contents() . ' item' ;  } 	else {		
						$cart_text= 'is empty!' ; }
		?>				
						<span style=" padding-top:3px;font-size: 12px;font-weight: normal;"><?php echo $cart_text ?></span></a>
					
				</div>

  <div class="headerbutton">
 <ul class="menu">  

            <li class="menu_item un <?php if ($PHP_SELF == 'index.php')  echo "selected"?>"><a href="<?php echo tep_href_link(FILENAME_DEFAULT);?>"><?php echo HEADER_TITLE_TOP ?></a></li>
            <li class="menu_item <?php if ($PHP_SELF == 'products_new.php') echo "selected"?>"><a href="<?php echo tep_href_link(FILENAME_PRODUCTS_NEW);?>">WHATS NEW </a></li>     
            <li class="menu_item <?php if ($PHP_SELF == 'specials.php') echo "selected"?>"><a href="<?php echo tep_href_link(FILENAME_SPECIALS);?>">SPECIALS</a></li>

            <li class="menu_item <?php if ($PHP_SELF == 'contact_us.php')  echo "selected"?>" ><a href="<?php echo tep_href_link(FILENAME_CONTACT_US);?>">CONTACT</a></li>


   </ul>

    </div>

  </div>
</div>
<?php
  if (isset($HTTP_GET_VARS['error_message']) && tep_not_null($HTTP_GET_VARS['error_message'])) {
?>
<table border="0" width="100%" cellspacing="0" cellpadding="2">
  <tr class="headerError">
    <td class="headerError"><?php echo htmlspecialchars(stripslashes(urldecode($HTTP_GET_VARS['error_message']))); ?></td>
  </tr>
</table>
<?php
  }

  if (isset($HTTP_GET_VARS['info_message']) && tep_not_null($HTTP_GET_VARS['info_message'])) {
?>
<table border="0" width="100%" cellspacing="0" cellpadding="2">
  <tr class="headerInfo">
    <td class="headerInfo"><?php echo htmlspecialchars(stripslashes(urldecode($HTTP_GET_VARS['info_message']))); ?></td>
  </tr>
</table>
<?php
  }
?>

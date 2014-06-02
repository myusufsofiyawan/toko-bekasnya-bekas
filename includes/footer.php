<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require(DIR_WS_INCLUDES . 'counter.php');
?>

<div class="grid_24 footer">
  <span style="float:right"><?php echo FOOTER_TEXT_BODY; ?></span>
  <span style="float:left">Created by  <a href="http://www.oscommerceforyou.hu" target="_blank"><font color="#D50000"  >O.</font><font color="#7979FF" >F.</font><font color="#007D00" >Y.</font></a>   <a  href="http://users.skynet.be/mgueury/mozilla/" target="_blank">
  <img   src="templates/images/serial_16.gif" alt="Validated by HTML Validator" height="13" width="32" />
</a><a href="http://www.oscommerceforyou.hu" target="_blank"> shopping cart development</a></span>
</div>

<?php
  if ($banner = tep_banner_exists('dynamic', '468x50')) {
?>

<div class="grid_24" style="text-align: center; margin-top: 20px;">
  <?php echo tep_display_banner('static', $banner); ?>
</div>

<?php
  }
?>

<script type="text/javascript">
$('.productListTable tr:nth-child(even)').addClass('alt');
</script>

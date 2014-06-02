<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2009 osCommerce

  Released under the GNU General Public License
*/

  $paypal_express_ping_button = '';
  if (defined('MODULE_PAYMENT_PAYPAL_EXPRESS_STATUS')) {
    $paypal_express_ping_button = '<p><img src="images/icons/locked.gif" border="0">&nbsp;<a href=' . tep_href_link('ext/modules/payment/paypal/paypal_express.php', 'action=test', 'SSL') . ' target="_blank" style="text-decoration: underline; font-weight: bold;">Tes API Pengamanan Jaringan</a></p>';
  }

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_TITLE', 'Selesaikan dengan PayPal Express');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_PUBLIC_TITLE', 'PayPal (termasuk Kartu Kredit dan Debit)');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_DESCRIPTION', '<img src="images/icon_popup.gif" border="0">&nbsp;<a href="https://www.paypal.com/mrb/pal=PS2X9Q773CKG4" target="_blank" style="text-decoration: underline; font-weight: bold;">Kunjungi PayPal</a>&nbsp;<a href="javascript:toggleDivBlock(\'paypalExpressInfo\');">(info)</a><span id="paypalExpressInfo" style="display: none;"><br /><i>Gunakan link tersebut untuk membuat akun di PayPal dan dapatkan bonus dengan mereferensikan teman Anda.</i></span>' . $paypal_express_ping_button);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_BUTTON', 'Selesaikan dengan PayPal');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_COMMENTS', 'Komentar:');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_EMAIL_PASSWORD', 'Akun telah dibuat secara otomatis untuk Anda dengan menggunakan alamat Email dan password:' . "\n\n" . 'Simpan Akun Alamat Email: %s' . "\n" . 'Simpan Akun Password: %s' . "\n\n");
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_BUTTON', 'https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_LANGUAGE_LOCALE', 'en_US');

  unset($paypal_express_ping_button);
?>

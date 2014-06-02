<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Dutch translation for v2.3.1 by dfirefire
  http://www.dfirefire.be
  
  Copyright (c) 2003 osCommerce

  Released under de GNU General Public License
*/

  $moneybookers_ping_button = '';
  if (defined('MODULE_PAYMENT_MONEYBOOKERS_STATUS') && tep_not_null(MODULE_PAYMENT_MONEYBOOKERS_SECRET_WORD)) {
    $moneybookers_ping_button = '<p><img src="images/icons/locked.gif" border="0">&nbsp;<a href=' . tep_href_link('ext/modules/payment/moneybookers/activation.php', 'action=testSecretWord', 'SSL') . ' style="text-decoration: underline; font-weight: bold;">Test Secret Word</a></p>';
  }

  define('MODULE_PAYMENT_MONEYBOOKERS_TEXT_TITLE', 'Moneybookers - Core Module');
  define('MODULE_PAYMENT_MONEYBOOKERS_TEXT_PUBLIC_TITLE', 'Moneybookers eWallet');
  define('MODULE_PAYMENT_MONEYBOOKERS_TEXT_DESCRIPTION', '<img src="images/icon_popup.gif" border="0">&nbsp;<a href="http://www.moneybookers.com/partners/oscommerce" target="_blank" style="text-decoration: underline; font-weight: bold;">Bezoek de Moneybookers website</a>' . $moneybookers_ping_button);
  define('MODULE_PAYMENT_MONEYBOOKERS_RETURN_TEXT', 'Continue en return tot ' . STORE_NAME);
  define('MODULE_PAYMENT_MONEYBOOKERS_LANGUAGE_CODE', 'EN');

  define('MB_ACTIVATION_TITLE', 'Moneybookers Account Activation');
  define('MB_ACTIVATION_ACCOUNT_TITLE', 'Verify Account');
  define('MB_ACTIVATION_ACCOUNT_TEXT', 'Activating Moneybookers Quick Afrekenen enables you tot take direct payments van kredietkaarts, debit kaarten en over 60 other local payment options in over 200 countries as well as de Moneybookers eWallet.<br /><br />tot have access tot de international payment network of Moneybookers <a href="http://www.moneybookers.com/partners/oscommerce" target="_blank">please register here</a> voor a free account if you don\'t have one yet.');
  define('MB_ACTIVATION_EMAIL_ADDRESS', 'Moneybookers Account E-Mail adres:');
  define('MB_ACTIVATION_ACTIVATE_TITLE', 'Account Activation');
  define('MB_ACTIVATION_ACTIVATE_TEXT', 'An activation request werd verzonden tot Moneybookers. Please be aware that de verification process tot use Moneybookers Quick Afrekenen could take up tot 72 hours. <strong>You will be contacted by Moneybookers when de verification process has been completed.</strong><br /><br /><i>After activation Moneybookers will give you access tot a nieuw section in uw Moneybookers account called "Merchant Tools". Please choose a secret word (do not use uw paswoord voor this) en enter it in de merchant tools section en in de configuratie of de betalingsmodule on de next pagina.</i>');
  define('MB_ACTIVATION_NONEXISTING_ACCOUNT_TITLE', 'Account Fout');
  define('MB_ACTIVATION_NONEXISTING_ACCOUNT_TEXT', 'The e-mailadres is not a registered Moneybookers account. Please <a href="http://www.moneybookers.com/partners/oscommerce" target="_blank">register here</a> tot begin selling met Moneybookers.');
  define('MB_ACTIVATION_SECRET_WORD_TITLE', 'Secret Word Test');
  define('MB_ACTIVATION_SECRET_WORD_SUCCESS_TEXT', 'The secret word has been setup <strong>correctly</strong>! Transactions can nu be securely verified met de payment gateway.');
  define('MB_ACTIVATION_SECRET_WORD_FAIL_TEXT', 'The secret word configuratie has <strong>failed</strong>! Please beoordeling de secret word at uw Moneybookers "Merchant Tools" account en de configuratie of de betalingsmodule.');
  define('MB_ACTIVATION_SECRET_WORD_ERROR_TITLE', 'Fout');
  define('MB_ACTIVATION_SECRET_WORD_ERROR_EXCEEDED', 'The maximum number of tries has been exceeded. Gelieve opnieuw te proberen in an hour.');
  define('MB_ACTIVATION_CORE_REQUIRED_TITLE', 'Core Moneybookers Module Required');
  define('MB_ACTIVATION_CORE_REQUIRED_TEXT', 'The core Moneybookers betalingsmodule is vereist tot support de Moneybookers Quick Afrekenen payment options. Please continue tot install en configure de core betalingsmodule.');
  define('MB_ACTIVATION_VERIFY_ACCOUNT_BUTTON', 'Verify Account');
  define('MB_ACTIVATION_CONTINUE_BUTTON', 'Continue en configure betalingsmodule');
  define('MB_ACTIVATION_SUPPORT_TITLE', 'Support');
  define('MB_ACTIVATION_SUPPORT_TEXT', 'Do you have questions? Contact Moneybookers by e-mail at <a href="mailto:ecommerce@moneybookers.com">ecommerce@moneybookers.com</a> of by phone +44 (0) 870 383 0762. Uw question may also already be answered on de <a href="http://forums.oscommerce.com/forum/78-moneybookers/" target="_blank">osCommerce Community Support forum</a>.');
?>

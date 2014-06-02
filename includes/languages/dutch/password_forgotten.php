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

define('NAVBAR_TITLE_1', 'Aanmelden');
define('NAVBAR_TITLE_2', 'Paswoord vergeten');

define('HEADING_TITLE', 'Ik ben mijn paswoord vergeten!');

define('TEXT_MAIN', 'Indien u uw paswoord vergeten bent, gelieve dan hieronder uw e-mail-adres op te geven en wij zullen u een nieuw paswoord toesturen.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Fout: The E-Mail adres was not found in our records, 	.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Nieuw paswoord');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Een nieuw paswoord werd aangevraagd van ' . tep_get_ip_address() . '.' . "\n\n" . 'Uw nieuw paswoord voor \'' . STORE_NAME . '\' is:' . "\n\n" . '   %s' . "\n\n");

define('SUCCESS_PASSWORD_SENT', 'Succes: Een nieuw paswoord werd verzonden naar uw e-mailadres.');
?>
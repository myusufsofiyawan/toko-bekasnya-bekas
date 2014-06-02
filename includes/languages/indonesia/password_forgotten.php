<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Login');
define('NAVBAR_TITLE_2', 'Lupa Password');

define('HEADING_TITLE', 'Saya lupa passwordnya!');

define('TEXT_MAIN', 'Jika anda lupa passwordnya, masukan alamat dan kami akan mangirim email berisi password baru.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Error: Email tidak terdaftar, silahkan ulangi.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Password Baru');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Permintaan password baru telah dikirim dari ' . tep_get_ip_address() . '.' . "\n\n" . 'Password baru Anda untuk \'' . STORE_NAME . '\' adalah:' . "\n\n" . '   %s' . "\n\n");

define('SUCCESS_PASSWORD_SENT', 'Berhasil: Password baru telah dikirim ke alamat Email Anda.');
?>
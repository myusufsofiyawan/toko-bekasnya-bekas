<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  $moneybookers_ping_button = '';
  if (defined('MODULE_PAYMENT_MONEYBOOKERS_STATUS') && tep_not_null(MODULE_PAYMENT_MONEYBOOKERS_SECRET_WORD)) {
    $moneybookers_ping_button = '<p><img src="images/icons/locked.gif" border="0">&nbsp;<a href=' . tep_href_link('ext/modules/payment/moneybookers/activation.php', 'action=testSecretWord', 'SSL') . ' style="text-decoration: underline; font-weight: bold;">Tes kata-kata rahasia</a></p>';
  }

  define('MODULE_PAYMENT_MONEYBOOKERS_TEXT_TITLE', 'Moneybookers - Core Module');
  define('MODULE_PAYMENT_MONEYBOOKERS_TEXT_PUBLIC_TITLE', 'Moneybookers eWallet');
  define('MODULE_PAYMENT_MONEYBOOKERS_TEXT_DESCRIPTION', '<img src="images/icon_popup.gif" border="0">&nbsp;<a href="http://www.moneybookers.com/partners/oscommerce" target="_blank" style="text-decoration: underline; font-weight: bold;">Kunjungi Moneybookers</a>' . $moneybookers_ping_button);
  define('MODULE_PAYMENT_MONEYBOOKERS_RETURN_TEXT', 'Lanjutkan dan kembali ke ' . STORE_NAME);
  define('MODULE_PAYMENT_MONEYBOOKERS_LANGUAGE_CODE', 'ID');

  define('MB_ACTIVATION_TITLE', 'Moneybookers Aktifasi Akun');
  define('MB_ACTIVATION_ACCOUNT_TITLE', 'Verifikasi Akun');
  define('MB_ACTIVATION_ACCOUNT_TEXT', 'Aktifasi Moneybookers Selesaikan Cepat memungkinkan Anda melakukan pembayaran langsung dari Kartu Kredit, Kartu Debit dan lebih dari 60 metode pembayaran lain di lebih dari 200 negara termasuk Moneybookers eWallet.<br /><br />Untuk mendapatkan akses jaringan pembayaran internasional dari Moneybookers <a href="http://www.moneybookers.com/partners/oscommerce" target="_blank">daftar disini</a> untuk mendapatkan akun secara cuma-cuma jika Anda belum memilikinya.');
  define('MB_ACTIVATION_EMAIL_ADDRESS', 'Alamat Email Akun Moneybookers:');
  define('MB_ACTIVATION_ACTIVATE_TITLE', 'Aktifasi Akun');
  define('MB_ACTIVATION_ACTIVATE_TEXT', 'Aktifasi Akun telah dikirim ke Moneybookers. Silahkan lekukan proses/prosedur verifikasi untuk Moneybookers Selesaikan Cepat membutuhkan waktu kurang lebih 72 jam. <strong>Anda akan dihubungi Moneybookers saat proses verifikasi telah lengkap.</strong><br /><br /><i>Setelah di aktifasi, Moneybookers akan memerikan Anda akses ke seksi baru di akun Anda yang bernama "Merchant Tools". Silahkan pilih kata-kata rahasia (jangan gunakan kata password anda disini) dan masukan masukan ke dalam seksi merchant tool dan konfigurasi modul pembayaran di halaman berikutnya.</i>');
  define('MB_ACTIVATION_NONEXISTING_ACCOUNT_TITLE', 'Akun Gagal');
  define('MB_ACTIVATION_NONEXISTING_ACCOUNT_TEXT', 'Alamat Email tidak terdaftar sebagai akun di Moneybookers account. Silahkan <a href="http://www.moneybookers.com/partners/oscommerce" target="_blank">daftar disini</a> untuk memulai penjualan dengan Moneybookers.');
  define('MB_ACTIVATION_SECRET_WORD_TITLE', 'Tes kata-kata rahasia');
  define('MB_ACTIVATION_SECRET_WORD_SUCCESS_TEXT', 'Seting kata-kata rahasia telah <strong>berhasil</strong>! Transaksi dapat di verifikasi dengan aman melalui gateway pembayaran.');
  define('MB_ACTIVATION_SECRET_WORD_FAIL_TEXT', 'Seting kata-kata rahasia telah <strong>gagal</strong>! Silahkan lihat kembali kata-kata rahasia Anda di Akun Moneybookers seksi "Merchant Tools" dan konfigurasi kembali module pembayaran ini.');
  define('MB_ACTIVATION_SECRET_WORD_ERROR_TITLE', 'Gagal');
  define('MB_ACTIVATION_SECRET_WORD_ERROR_EXCEEDED', 'Kegagalan yang terjadi telah melebihi batas. Silahkan coba kembali setelah satu jam.');
  define('MB_ACTIVATION_CORE_REQUIRED_TITLE', 'Dibutuhkan Module Core Moneybookers');
  define('MB_ACTIVATION_CORE_REQUIRED_TEXT', 'Modul pembayaran core Moneybookers dibutuhkan untuk mendukung metode Moneybookers Pembayaran Cepat. Silahkan lanjutkan instalasi dan konfigurasi module core pembayaran.');
  define('MB_ACTIVATION_VERIFY_ACCOUNT_BUTTON', 'Verifikasi Akun');
  define('MB_ACTIVATION_CONTINUE_BUTTON', 'Lanjutkan dan konfigurasi modul');
  define('MB_ACTIVATION_SUPPORT_TITLE', 'Dukungan');
  define('MB_ACTIVATION_SUPPORT_TEXT', 'Anda punya pertanyaan? Hubungi Moneybookers di alamat Email <a href="mailto:ecommerce@moneybookers.com">ecommerce@moneybookers.com</a> atau telepon +44 (0) 870 383 0762. Pertanyaan Anda dapat ditanyakan di <a href="http://forums.oscommerce.com/forum/78-moneybookers/" target="_blank">forum osCommerce Community Support</a>.');
?>

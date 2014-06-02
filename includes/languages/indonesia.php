<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Examples:
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
@setlocale(LC_TIME, 'en_US.ISO_8859-1');

define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_I18N_CODE', ''); // leave empty for en_US; see http://jqueryui.com/demos/datepicker/#localization
define('JQUERY_DATEPICKER_FORMAT', 'dd/mm/yy'); // see http://docs.jquery.com/UI/Datepicker/formatDate

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'IDR');

// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="id"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE', STORE_NAME);

// header text in includes/header.php
define('HEADER_TITLE_CREATE_ACCOUNT', 'Buat Akun');
define('HEADER_TITLE_MY_ACCOUNT', 'Akun Saya');
define('HEADER_TITLE_CART_CONTENTS', 'Cart Contents');
define('HEADER_TITLE_CHECKOUT', 'Tagihan');
define('HEADER_TITLE_TOP', 'Top');
define('HEADER_TITLE_CATALOG', 'Katalog');
define('HEADER_TITLE_LOGOFF', 'Keluar');
define('HEADER_TITLE_LOGIN', 'Login');

// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'Permintaan sejak');

// text for gender
define('MALE', 'Laki-laki');
define('FEMALE', 'Perempuan');
define('MALE_ADDRESS', 'Mr.');
define('FEMALE_ADDRESS', 'Ms.');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Informasi Pengiriman');
define('CHECKOUT_BAR_PAYMENT', 'Inormasi Pembayaran');
define('CHECKOUT_BAR_CONFIRMATION', 'Konfirmasi');
define('CHECKOUT_BAR_FINISHED', 'Selesai!');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Opsi Pilihan');
define('TYPE_BELOW', 'Ketik');

// javascript messages
define('JS_ERROR', 'Gagal memproses permintaan.\n\nSilahkan lakukan perbaikan:\n\n');

define('JS_REVIEW_TEXT', '* \'Review Text\' harus paling sedikit ' . REVIEW_TEXT_MIN_LENGTH . ' huruf.\n');
define('JS_REVIEW_RATING', '* Anda harus membuat rate produk yang di-review.\n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Silahkan pilih metode pembayaran untuk pesanan Anda.\n');

define('JS_ERROR_SUBMITTED', 'Formulir pemesanan telah dikirim. Tekan Ok dan tunggu sampai proses selesai.');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Silahkan pilih metode pembayaran untuk pemesanan Anda.');

define('CATEGORY_COMPANY', 'Detail Perusahaan');
define('CATEGORY_PERSONAL', 'Detail Data Anda');
define('CATEGORY_ADDRESS', 'Alamat Anda');
define('CATEGORY_CONTACT', 'Informasi Kontak Anda');
define('CATEGORY_OPTIONS', 'Pilihan');
define('CATEGORY_PASSWORD', 'Password Anda');

define('ENTRY_COMPANY', 'Perusahaan Anda:');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Jenis Kelamin:');
define('ENTRY_GENDER_ERROR', 'Silahkan pilih jenis kelamin Anda.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Nama Depan:');
define('ENTRY_FIRST_NAME_ERROR', 'Nama Depan harus memiliki minimal ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' huruf.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Nama Belakang:');
define('ENTRY_LAST_NAME_ERROR', 'Nama Belakang harus memiliki minimal ' . ENTRY_LAST_NAME_MIN_LENGTH . ' huruf.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Tanggal Lahir:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Format tanggal: DD/MM/YYYY (eg 21/05/1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (eg. 21/05/1970)');
define('ENTRY_EMAIL_ADDRESS', 'Alamat Email:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Alamat Email  harus mimiliki minimal ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' huruf.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Alamat Email Anda tidak benar - Silahkan lakukan perbaikan.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Alamat Email Anda telah digunakan - Silahkan login dengan Email  tersebut atau buat akun baru dengan Email lain.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS', 'Alamat Rumah:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Alamat Rumah harus memiliki minimal ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' huruf.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'Kecamatan/Kabupaten:');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Kode Pos:');
define('ENTRY_POST_CODE_ERROR', 'Kode Pos harus memiliki minimal ' . ENTRY_POSTCODE_MIN_LENGTH . ' huruf.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'City:');
define('ENTRY_CITY_ERROR', 'Kota harus memiliki minimal ' . ENTRY_CITY_MIN_LENGTH . ' huruf.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'Propinsi');
define('ENTRY_STATE_ERROR', 'Propinsi harus memiliki minimal ' . ENTRY_STATE_MIN_LENGTH . ' huruf.');
define('ENTRY_STATE_ERROR_SELECT', 'Silahkan pilih Proponsi dari menu pull down.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY', 'Negara:');
define('ENTRY_COUNTRY_ERROR', 'Pilih negara anda menggunakan menu pull down.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'No Telepon:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'No Telepon harus memiliki minimal ' . ENTRY_TELEPHONE_MIN_LENGTH . ' huruf.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'No Fax:');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Langganan Berita:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Berlangganan');
define('ENTRY_NEWSLETTER_NO', 'Tidak Berlangganan');
define('ENTRY_PASSWORD', 'Password:');
define('ENTRY_PASSWORD_ERROR', 'Password harus memiliki minimal ' . ENTRY_PASSWORD_MIN_LENGTH . ' huruf.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Password Konfirmasi harus sama dengan Password.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'Password Konfirmasi:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Password lama:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Password harus memiliki minimal ' . ENTRY_PASSWORD_MIN_LENGTH . ' huruf.');
define('ENTRY_PASSWORD_NEW', 'Password baru:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Password Baru harus memiliki minimal ' . ENTRY_PASSWORD_MIN_LENGTH . ' huruf.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Password Konfirmasi harus sama dengan Password.');
define('PASSWORD_HIDDEN', '--HIDDEN--');

define('FORM_REQUIRED_INFORMATION', '* Informasi Wajib');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Halaman hasil pencarian:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Menampilkan <strong>%d</strong> sampai <strong>%d</strong> (dari <strong>%d</strong> produk)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Menampilkan <strong>%d</strong> sampai <strong>%d</strong> (dari <strong>%d</strong> pesanan)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Menampilkan <strong>%d</strong> sampai <strong>%d</strong> (dari <strong>%d</strong> review)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Menampilkan <strong>%d</strong> sampai <strong>%d</strong> (dari <strong>%d</strong> produk baru)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Menampilkan <strong>%d</strong> sampai <strong>%d</strong> (dari <strong>%d</strong> spesial)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Halaman satu');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Halaman sebelumnya');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Halaman berikut');
define('PREVNEXT_TITLE_LAST_PAGE', 'Halaman akhir');
define('PREVNEXT_TITLE_PAGE_NO', 'halaman %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'halaman sebelumnya %d ');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'halaman sesudahnya %d ');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;PERTAMA');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Sebelumnya]');
define('PREVNEXT_BUTTON_NEXT', '[Berikutnya&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', 'TERAKHIR&gt;&gt;');

define('IMAGE_BUTTON_ADD_ADDRESS', 'Alamat Lain');
define('IMAGE_BUTTON_ADDRESS_BOOK', 'Address Book');
define('IMAGE_BUTTON_BACK', 'Kembali');
define('IMAGE_BUTTON_BUY_NOW', 'Segera Beli');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Rubah Alamat');
define('IMAGE_BUTTON_CHECKOUT', 'Pembayaran');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Konfirmasi Pemesanan');
define('IMAGE_BUTTON_CONTINUE', 'Lanjutkan');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Lanjutkan Belanja');
define('IMAGE_BUTTON_DELETE', 'Hapus/Batalkan');
define('IMAGE_BUTTON_EDIT_ACCOUNT', 'Rubah Akun');
define('IMAGE_BUTTON_HISTORY', 'Sejarah Pemesanan');
define('IMAGE_BUTTON_LOGIN', 'Signin');
define('IMAGE_BUTTON_IN_CART', 'Tambahkan ke Keranjang');
define('IMAGE_BUTTON_NOTIFICATIONS', 'Notifikasi');
define('IMAGE_BUTTON_QUICK_FIND', 'Cari Cepat');
define('IMAGE_BUTTON_REMOVE_NOTIFICATIONS', 'Hapus Notifikasi');
define('IMAGE_BUTTON_REVIEWS', 'Review');
define('IMAGE_BUTTON_SEARCH', 'Cari');
define('IMAGE_BUTTON_SHIPPING_OPTIONS', 'Opsi Pengiriman/Espedisi');
define('IMAGE_BUTTON_TELL_A_FRIEND', 'Beritahu Teman');
define('IMAGE_BUTTON_UPDATE', 'Perbaharui');
define('IMAGE_BUTTON_UPDATE_CART', 'Update Keranjang');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Buat Review');

define('SMALL_IMAGE_BUTTON_DELETE', 'Hapus/Batalkan');
define('SMALL_IMAGE_BUTTON_EDIT', 'Perbaiki');
define('SMALL_IMAGE_BUTTON_VIEW', 'Lihat');

define('ICON_ARROW_RIGHT', 'lebih lanjut');
define('ICON_CART', 'Daftar Belanjaan');
define('ICON_ERROR', 'Kesalahan/Kegagalan');
define('ICON_SUCCESS', 'Berhasil');
define('ICON_WARNING', 'Peringatan');

define('TEXT_GREETING_PERSONAL', 'Selamat Datang <span class="greetUser">%s!</span> Apakah anda ingin melihat <a href="%s"><u>produk baru</u></a> untuk dibeli?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Jika Anda bukan  %s, silahkan <a href="%s"><u>login</u></a> dengan akun Anda.</small>');
define('TEXT_GREETING_GUEST', 'Selamat Datang <span class="greetUser">Guest!</span> Apakah anda ingin <a href="%s"><u>login</u></a>? Atau memilih <a href="%s"><u>membuat akun</u></a>?');

define('TEXT_SORT_PRODUCTS', 'Urutkan ');
define('TEXT_DESCENDINGLY', 'descending');
define('TEXT_ASCENDINGLY', 'ascending');
define('TEXT_BY', ' by ');

define('TEXT_REVIEW_BY', 'by %s');
define('TEXT_REVIEW_WORD_COUNT', '%s words');
define('TEXT_REVIEW_RATING', 'Rating: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Tanggal Ditambahkan: %s');
define('TEXT_NO_REVIEWS', 'Belum ada yang meriview.');

define('TEXT_NO_NEW_PRODUCTS', 'Produk belum tersedia.');

define('TEXT_UNKNOWN_TAX_RATE', 'Pajak lain');

define('TEXT_REQUIRED', '<span class="errorText">Dibutuhkan</span>');

define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><strong><small>TEP ERROR:</small> Tidak berhasil mengirim email ke SMTP server yang Anda gunakan. Silahkan cek seting php.ini dan perbaikan yang dibutuhkan.</strong></font>');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Tanggal berlaku kartu kredit salah. Silahkan cek tanggal tersebut dan coba lagi.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Nomor kartu kredit salah. Silahkan cek dan coba lagi.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Empat nomor pertama kartu anda: %s. Jika benar, kami tidak dapat menerima tipe kartu kredit anda. Jika salah silahkan coba kembali.');

define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a><br />Powered by <a href="http://www.oscommerce.com" target="_blank">osCommerce</a>');
?>

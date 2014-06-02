<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Pencarian Lanjutan');
define('NAVBAR_TITLE_2', 'Hasil Pencarian');

define('HEADING_TITLE_1', 'Pencarian Lanjutan');
define('HEADING_TITLE_2', 'Produk yang sesuai dengan kriteria pencarian');

define('HEADING_SEARCH_CRITERIA', 'Kriteria Pencarian');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Cari di deskripsi/penjelasan produk');
define('ENTRY_CATEGORIES', 'Kategori:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Termasuk subkategori');
define('ENTRY_MANUFACTURERS', 'Pembuat:');
define('ENTRY_PRICE_FROM', 'Harga Dari:');
define('ENTRY_PRICE_TO', 'Harga Sampai:');
define('ENTRY_DATE_FROM', 'Tanggal Dari:');
define('ENTRY_DATE_TO', 'Tanggal Sampai:');

define('TEXT_SEARCH_HELP_LINK', '<u>Bentuan Pencarian</u> [?]');

define('TEXT_ALL_CATEGORIES', 'Semua Kategori');
define('TEXT_ALL_MANUFACTURERS', 'Semua Pembuat');

define('HEADING_SEARCH_HELP', 'Bantuan Pencarian');
define('TEXT_SEARCH_HELP', 'Kata/kriteria pencarian dapat dipisah dengan AND dan/atau OR untuk pencarian lebih rini.<br /><br />Contoh, <u>Microsoft AND mouse</u> akan mengasilkan pencarian produk yang mengandung kedua kata tersebut. Namun, untuk <u>mouse OR keyboard</u>, hasil pencarian akan menampilkan produk yang mengandung salah satu kata tersebut.<br /><br />Untuk pencarian kata secara tepat, guunakan kutip ganda pada kata yang harus ada.<br /><br />Contoh, <u>"notebook computer"</u> akan menghasilkan pencarian produk yang memiliki kata "notebook computer".<br /><br />Tanda kurung digunakan untuk mengatur proses kondisi pencarian.<br /><br />Contoh, <u>Microsoft and (keyboard or mouse or "visual basic")</u>.');
define('TEXT_CLOSE_WINDOW', '<u>Tutup Window</u> [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Model');
define('TABLE_HEADING_PRODUCTS', 'Nama Produk');
define('TABLE_HEADING_MANUFACTURER', 'Pembuat');
define('TABLE_HEADING_QUANTITY', 'Jumlah');
define('TABLE_HEADING_PRICE', 'Harga');
define('TABLE_HEADING_WEIGHT', 'Berat');
define('TABLE_HEADING_BUY_NOW', 'Beli Segera');

define('TEXT_NO_PRODUCTS', 'Tidak ada produk yang memenuhi kata/kriteria pencarian.');

define('ERROR_AT_LEAST_ONE_INPUT', 'Belum mengisi salah satu form pencarian.');
define('ERROR_INVALID_FROM_DATE', 'Tanggal Dari pencarian salah.');
define('ERROR_INVALID_TO_DATE', 'Tanggal Sampai pencarian salah.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', 'Tanggal Sampai harus lebih baru atau sama dengan Tanggal Dari.');
define('ERROR_PRICE_FROM_MUST_BE_NUM', 'Harga Dari harus numerik/bilangan.');
define('ERROR_PRICE_TO_MUST_BE_NUM', 'Harga Samapi harus numerik/bilangan.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', 'Harga Sampai harus lebih besar atau sama dengan Harga Dari.');
define('ERROR_INVALID_KEYWORDS', 'Kata Kunci salah.');
?>

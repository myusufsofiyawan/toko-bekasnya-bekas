<?php
/*
  $Id: index.php,v 1.2 2003/07/11 09:04:22 jan0815 Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('TEXT_MAIN', 'Via het menu aan de linkerzijde kunt u al onze artikelen vinden.');
define('TABLE_HEADING_NEW_PRODUCTS', 'Nieuw(e) artikel(en) voor %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Verwachte artikel(en)');
define('TABLE_HEADING_DATE_EXPECTED', 'Datum');

if ( ($category_depth == 'products') || (isset($HTTP_GET_VARS['manufacturers_id'])) ) {
  define('HEADING_TITLE', 'Artikelen<BR><SPAN class="smallText">(U kunt sorteren op prijs, artikelnaam, artikelID en aantal door op de kolomnaam te klikken)</SPAN>');
  define('TABLE_HEADING_IMAGE', '');
  define('TABLE_HEADING_MODEL', 'Artikelmodel');
  define('TABLE_HEADING_PRODUCTS', 'Artikelnaam');
  define('TABLE_HEADING_MANUFACTURER', 'Fabrikant');
  define('TABLE_HEADING_QUANTITY', 'Aantal');
  define('TABLE_HEADING_PRICE', 'Prijs');
  define('TABLE_HEADING_WEIGHT', 'Gewicht');
  define('TABLE_HEADING_BUY_NOW', 'Bestel NU');
  define('TEXT_NO_PRODUCTS', 'Er bevinden zich geen artikelen in deze categorie.');
  define('TEXT_NO_PRODUCTS2', 'Er zijn geen artikelen van deze fabrikant beschikbaar.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Artikel: ');
  define('TEXT_SHOW', '<b>Toon:</b>');
  define('TEXT_BUY', 'Bestel \'');
  define('TEXT_NOW', '\' NU!');
  define('TEXT_ALL_CATEGORIES', 'Alle categorie&euml;n');
  define('TEXT_ALL_MANUFACTURERS', 'Alle fabrikanten');
} elseif ($category_depth == 'top') {
  define('HEADING_TITLE', 'in catalog includes languages dutch staat het bestend index.php en op regel 37 deze tekst.');
} elseif ($category_depth == 'nested') {
  define('HEADING_TITLE', 'Sub-categorie&euml;n');
}
?>
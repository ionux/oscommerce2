<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2015 osCommerce

  Released under the GNU General Public License
*/

  use OSC\OM\OSCOM;

  define('MODULE_CONTENT_FOOTER_EXTRA_COPYRIGHT_TITLE', 'Copyright Details');
  define('MODULE_CONTENT_FOOTER_EXTRA_COPYRIGHT_DESCRIPTION', 'Adds a Copyright Block to the Extra Footer Area of your site');
  
  define('FOOTER_TEXT_BODY', '<p>Copyright &copy; ' . date('Y') . ' <a href="' . OSCOM::link('index.php') . '">' . STORE_NAME . '</a> Powered by <a href="http://www.oscommerce.com" target="_blank">osCommerce</a></p>');
  

<?php

$options = array(
  // Available languages
  'supported_langs' => array('en', 'fr', 'nl', 'de'),

  // Default application language
  'default_lang' => 'en',

  // Path to tho wkhtmltopdf binary relative to pdf/pdf.php
  'bin' => './wkhtmltopdf-i386',

  // Path to the PHP wrapper relative to pdf/pdf.php
  'wkhtmltopdf_wrapper' => './WkHtmlToPdf.php',

  // URL to the template of the letter
  'letter_template_url' => 'http://' . $_SERVER['HTTP_HOST'] . '/pdf/template.php',

  // URL to send the form
  'form_action_url' => './pdf/pdf.php'
);

?>
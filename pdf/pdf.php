<?php

// Include options
require_once '../config.php';

// Main functions
require_once '../functions.php';

// Get user lang
detectLang();

// Look for dependencies
if (!file_exists($options['wkhtmltopdf_wrapper']) || !file_exists($options['bin'])) {
  header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?lang=' . $user_lang . '&error=error-missing-dependencies#form-error');
}

// Include the WkHtmlToPdf wrapper
require_once $options['wkhtmltopdf_wrapper'];

if (
isset($_POST['letter_type'])    && !empty($_POST['letter_type']) &&
isset($_POST['firstname'])      && !empty($_POST['firstname']) &&
isset($_POST['lastname'])       && !empty($_POST['lastname']) &&
isset($_POST['postal-address']) && !empty($_POST['postal-address']) &&
isset($_POST['postal-code'])    && !empty($_POST['postal-code']) &&
isset($_POST['city'])           && !empty($_POST['city']) &&
isset($_POST['country'])        && !empty($_POST['country']) &&
isset($_POST['email'])          && !empty($_POST['email']) &&
isset($_POST['user_lang'])      && !empty($_POST['user_lang'])) {
  // Get all params
  $letter_types   = $_POST['letter_type'];
  $firstname      = $_POST['firstname'];
  $lastname       = $_POST['lastname'];
  $postal_address = $_POST['postal-address'];
  $postal_code    = $_POST['postal-code'];
  $city           = $_POST['city'];
  $country        = $_POST['country'];
  $email          = $_POST['email'];
  $user_lang      = $_POST['user_lang'];

  $q = implode('-', $letter_types);

  // Create WkHtmlToPdf object
  $pdf = new WkHtmlToPdf;

  $pdf->setOptions(array('bin' => $options['bin']));

  // Generate pages
  $url =
    '"' . $options['letter_template_url'] . '?' .
    'firstname=' . urlencode($firstname) .
    '&lastname=' . urlencode($lastname) .
    '&postal_address=' . urlencode($postal_address) .
    '&postal_code=' . urlencode($postal_code) .
    '&city=' . urlencode($city) .
    '&country=' . urlencode($country) .
    '&email=' . urlencode($email) .
    '&q=' . urlencode($q) .
    '&user_lang=' . urlencode($user_lang) .
    '"';

  $pdf->addPage($url);

  // Generate PDF and return it as response
  if (!$pdf->send('SNCB-dataleak_' . dechex(time()) . '.pdf')) {
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?lang=' . $user_lang . '&error=error-pdf-creation-failed#form-error');
  }
} else {
  header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?lang=' . $user_lang . '&error=error-missing-args#form-error');
}

?>

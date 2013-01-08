<?php

// Main functions
require_once '../functions.php';

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" media="all" href="template.css" />
</head>

<?php

$firstname      = htmlspecialchars(trim($_GET['firstname']));
$lastname       = htmlspecialchars(trim($_GET['lastname']));
$postal_address = htmlspecialchars(trim($_GET['postal_address']));
$postal_code    = htmlspecialchars(trim($_GET['postal_code']));
$city           = htmlspecialchars(trim($_GET['city']));
$country        = htmlspecialchars(trim($_GET['country']));
$email          = htmlspecialchars(trim($_GET['email']));
$user_lang      = htmlspecialchars(trim($_GET['user_lang']));
$q              = htmlspecialchars(trim($_GET['q']));

$postal_address = nl2br(trim($postal_address));
$date = date('d/m/Y', time());

// Set user lang
$GLOBALS['user_lang'] = $user_lang;

?>

<body>
<?php

$search = array(
  '__firstname__',
  '__lastname__',
  '__postal_address__',
  '__postal_code__',
  '__city__',
  '__country__',
  '__email__',
  '__date__',
  '__lang__'
);

$replace = array(
  $firstname,
  $lastname,
  $postal_address,
  $postal_code,
  $city,
  $country,
  $email,
  $date,
  $GLOBALS['user_lang']
);

if (isset($q) && preg_match('/opposition/i', $q)) {
  $opposition = str_replace($search, $replace, __('opposition'));

  echo $opposition;
}

if (isset($q) && preg_match('/complaint/i', $q)) {
  $complaint = str_replace($search, $replace, __('complaint'));

  echo $complaint;
}

?>
</body>
</html>

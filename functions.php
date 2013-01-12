<?php
function __($key) {
  // Detect the language to use, if needed
  detectLang();

  // Load the lang array if needed
  loadLangStrings($GLOBALS['user_lang']);

  if (array_key_exists($key, $GLOBALS['lang']) && !empty($GLOBALS['lang'][$key])) {
    return $GLOBALS['lang'][$key];
  }
  elseif (array_key_exists($key, $GLOBALS['default_lang'])) {
    return $GLOBALS['default_lang'][$key];
  }
  else {
    throw new Exception('Lang key "' . $key . '" does not exist');
  }
}

function detectLang() {
  $supported_langs = array('en', 'fr', 'nl', 'de');

  if (!array_key_exists('user_lang', $GLOBALS) || !$GLOBALS['user_lang']) {
    // Is there a lang specified via query string?
    if (array_key_exists('lang', $_GET) && in_array($_GET['lang'], $supported_langs)) {
      $lang = $_GET['lang'];
    }
    // Is there a lang specified via form submission?
    elseif (array_key_exists('user_lang', $_POST) && in_array($_POST['user_lang'], $supported_langs)) {
      $lang = $_POST['user_lang'];
    }
    // If no lang was explicitly specified, we try a very
    // simplistic test against the data provided by the browser
    elseif (in_array($str = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), $supported_langs)) {
      $lang = $str;
    }
    // Default value
    else {
      $lang = 'en';
    }

    $GLOBALS['user_lang'] = $lang;
  }
}

function loadLangStrings($iso = 'en') {
  if (!array_key_exists('lang', $GLOBALS) || !$GLOBALS['lang']) {
    if (file_exists(dirname(__FILE__) . '/lang/' . $iso . '.php')) {
      require_once dirname(__FILE__) . '/lang/' . $iso . '.php';
    }
    else {
      require dirname(__FILE__) . '/lang/en.php';
    }
    $GLOBALS['lang'] = $lang;
  }

  // Also load the strings for the default language
  if ($iso !== 'en') {
    require dirname(__FILE__) . '/lang/en.php';
    $GLOBALS['default_lang'] = $lang;
  }
}
?>
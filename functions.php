<?php

// Include config
require_once dirname(__FILE__) . '/config.php';

// Sets $user_lang according to dynamic parameters or browser settings
// $user_lang is a two chars string

function detectLang() {
  if (!isset($GLOBALS['user_lang'])) {
    if (isset($_GET['lang']) && in_array($_GET['lang'], $GLOBALS['options']['supported_langs'])) {
      $current_lang = $_GET['lang'];
    }
    elseif (isset($_POST['user_lang']) && in_array($_POST['user_lang'], $GLOBALS['options']['supported_langs'])) {
      $current_lang = $_POST['user_lang'];
    }
    elseif (in_array($str = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), $GLOBALS['options']['supported_langs'])) {
      $current_lang = $str;
    }
    else {
      $current_lang = $GLOBALS['options']['default_lang'];
    }

    $GLOBALS['user_lang'] = $current_lang;
  }
}

// Sets $lang and $lang_default
// $lang and $lang_default are associative arrays containing translated strings

function loadLangStrings($current_lang) {
  $current_lang = empty($current_lang) ? $GLOBALS['options']['default_lang'] : $current_lang;

  if (!isset($GLOBALS['lang'])) {
    if (file_exists(dirname(__FILE__) . '/lang/' . $current_lang . '.php')) {
      require_once dirname(__FILE__) . '/lang/' . $current_lang . '.php';
    }
    else {
      require dirname(__FILE__) . '/lang/' . $GLOBALS['options']['default_lang'] . '.php';
    }

    $GLOBALS['lang'] = $lang;

    if ($current_lang != $GLOBALS['options']['default_lang']) {
      require dirname(__FILE__) . '/lang/' . $GLOBALS['options']['default_lang'] . '.php';
    }

    $GLOBALS['lang_default'] = $lang;
  }
}

// Returns a translated string or triggers an error

function __($key) {
  detectLang();

  loadLangStrings($GLOBALS['user_lang']);

  if (array_key_exists($key, $GLOBALS['lang']) && !empty($GLOBALS['lang'][$key])) {
    return $GLOBALS['lang'][$key];
  }
  elseif (array_key_exists($key, $GLOBALS['lang_default']) && !empty($GLOBALS['lang_default'][$key])) {
    return $GLOBALS['lang_default'][$key];
  }
  elseif (array_key_exists($key, $GLOBALS['lang'])) {
    return $GLOBALS['lang'][$key];
  }
  elseif (array_key_exists($key, $GLOBALS['lang_default'])) {
    return $GLOBALS['lang_default'][$key];
  }
  else {
    throw new Exception('Lang key "' . $key . '" does not exist');
  }
}

?>
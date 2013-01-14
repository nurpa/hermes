<?php

// Include options
require_once './config.php';

// Main functions
require_once './functions.php';

// Mail
$mail = __('mail');

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= __('main-form-page-title') ?></title>
  <link rel="stylesheet" href="./ui/main.css">
</head>
<body>
  <div id="header">
    <h1><?= __('main-form-page-title') ?></h1>
  </div>
  <div id="nav">
    <ul>
      <li<?php if ($GLOBALS['user_lang'] === 'de') echo ' class="current"';?>>
        <a href="?lang=de">Deutsch</a>
      </li>
      <li<?php if ($GLOBALS['user_lang'] === 'en') echo ' class="current"';?>>
        <a href="?lang=en">English</a>
      </li>
      <li<?php if ($GLOBALS['user_lang'] === 'fr') echo ' class="current"';?>>
        <a href="?lang=fr">Français</a>
      </li>
      <li<?php if ($GLOBALS['user_lang'] === 'nl') echo ' class="current"';?>>
        <a href="?lang=nl">Nederlands</a>
      </li>
    </ul>
  </div>
  <h2 class="center"><?= __('pick-up-line') ?></h2>
  <div id="intro">
    <?= __('abstract') ?>
  </div>
  <form action="<?= $options['form_action_url'] ?>" method="post">
    <fieldset class="letter_type">
      <legend><?= __('type-of-letter') ?></legend>
      <div>
        <input type="checkbox" name="letter_type[]" id="letter_type_info" class="checkbox checked" value="information" checked="checked">
        <label for="letter_type_info"><?= __('information-checkbox-label')?></label>
      </div>
      <div>
        <input type="checkbox" name="letter_type[]" id="letter_type_opposition" class="checkbox" value="opposition">
        <label for="letter_type_opposition"><?= __('opposition-checkbox-label')?></label>
      </div>
      <div>
        <input type="checkbox" name="letter_type[]" id="letter_type_complaint" class="checkbox checked" value="complaint" checked="checked">
        <label for="letter_type_complaint"><?= __('complaint-checkbox-label')?></label>
      </div>
    </fieldset>
    <fieldset class="contact_details">
      <legend><?= __('person-contact-details') ?></legend>
      <?= isset($_GET['error']) ? '<p id="form-error">' . __('error-missing-args') . '</p>' : '' ?>
      <div>
        <label for="firstname"><?= __('firstname') ?></label>
        <input type="text" name="firstname" id="firstname">
      </div>
      <div>
        <label for="lastname"><?= __('lastname') ?></label>
        <input type="text" name="lastname" id="lastname">
      </div>
      <div>
        <label for="postal-address"><?= __('postal-address') ?></label>
        <textarea name="postal-address" id="postal-address" cols="30" rows="10"></textarea>
      </div>
      <div>
        <label for="postal-code"><?= __('postal-code') ?></label>
        <input type="text" name="postal-code" id="postal-code">
      </div>
      <div>
        <label for="city"><?= __('city') ?></label>
        <input type="text" name="city" id="city">
      </div>
      <div>
        <label for="country"><?= __('country') ?></label>
        <input type="text" name="country" id="country">
      </div>
      <div>
        <label for="email"><?= __('email') ?></label>
        <input type="text" name="email" id="email">
      </div>
    </fieldset>
    <div id="create">
      <input type="hidden" name="user_lang" value="<?= $GLOBALS['user_lang'] ?>">
      <input type="submit" id="submit" value="<?= __('make-letters') ?>" />
    </div>
  </form>
  <div id="step-by-step">
    <h2><?= __('what-should-i-do') ?></h2>
    <ol>
      <li id="step-print-pdf"><?= __('step-print-pdf') ?></li>
      <li id="step-print-id"><?= __('step-print-id') ?></li>
      <li id="step-send-letters"><?= __('step-send-letters') ?></li>
      <li id="step-mail-cpvp"><?= __('step-mail-cpvp') ?></li>
      <li id="step-mail-sncb"><?= __('step-mail-sncb') ?></li>
      <li id="step-mails"><?= __('step-mails') ?></li>
      <li id="step-wait"><?= __('step-wait') ?></li>
    </ol>
  </div>
  <div id="footer">
    <p><?= __('footer-text') ?></p>
  </div>
  <script>
    window.lang = <?= json_encode($mail) ?>
  </script>
  <script src="./js/mini.js"></script>
</body>
</html>

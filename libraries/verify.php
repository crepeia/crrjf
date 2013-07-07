<?php
  require_once('recaptchalib.php');
  $privatekey = "6LdTbsESAAAAAK7rX7smj6fbUXXDbRRESg2NHhmy";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    die ("Digito verificador inválido. Tente novamente." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    require('insert.php');}

?>
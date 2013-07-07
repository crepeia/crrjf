<?php
  require_once('recaptchalib.php');
  $privatekey = "6LdTbsESAAAAAK7rX7smj6fbUXXDbRRESg2NHhmy";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
	  echo "<script type='text/javascript'>
        		alert('Digito Verificador Incorreto');
		    </script>";
		require('../pages/contato.php');
  } else {
    require('contactmail.php');}

?>
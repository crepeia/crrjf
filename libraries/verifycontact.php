<?php
  require_once('recaptchalib.php');
  $privatekey = "6LeYN-QSAAAAAHvVBr2SGDiCkrAg2ShAlHDlzOk9";
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
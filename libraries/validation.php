<?php

include 'libraries/formvalidator.php'

if ($_POST) {

$messages = array();

	if (isblank($_POST['name'])) {
		$messages[] = "Favor, informe seu nome.";
	}
	
	if (!isvalidemail($_POST['email'])) {
		$messages[] = "Favor, informe um endereço de email válido";
	}
	
	if (count($messages) > 0) {
		echo '<ul>';
		foreach($messages AS $messages) {
			echo '<li>$messages</li>';
		}
		echo '</ul>';
	} else {
		echo '<p>Sua inscrição foi efetuada com sucesso!</p>';
	}
}
		
?>		

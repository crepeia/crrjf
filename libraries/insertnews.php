<?php
header('Content-Type: text/html; charset=utf-8');
$conexao = mysql_connect("mysql02.redehost.com.br:3306","henriquepgomide","h3nr1qu3")
or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("uaihealth")
or die ("Erro ao selecionar a base de dados.");


mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
mysql_select_db("uaihealth", $db);


$sql = "INSERT INTO crr_news (
		nome, 
		sobrenome, 
		cidade, 
		estado, 
		email, 
		data,
		hora, 
		titulo, 
		resumo, 
		texto
	) VALUES (
		'".mysql_real_escape_string($_POST['nome'])."', 
		'".mysql_real_escape_string($_POST['sobrenome'])."', 
		'".mysql_real_escape_string($_POST['cidade'])."', 
		'".mysql_real_escape_string($_POST['estado'])."', 
		'".mysql_real_escape_string($_POST['email'])."', 
		NOW(), 
		NOW(), 
		'".mysql_real_escape_string($_POST['titulo'])."',
		'".mysql_real_escape_string($_POST['resumo'])."',
		'".mysql_real_escape_string($_POST['texto'])."'
	)";

$sql = mysql_query($sql)
or die ("Houve erro na gravação dos dados.");
?>

<h1>Cadastro efetuado com sucesso!</h1>
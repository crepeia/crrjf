<?php
header('Content-Type: text/html; charset=utf-8');
/*
 * faz a conexao ao banco
 * e seleciona a base de dados
 */
$conexao = mysql_connect("mysql02.redehost.com.br:3306","henriquepgomide","h3nr1qu3")
or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("uaihealth")
or die ("Erro ao selecionar a base de dados.");

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
mysql_select_db("uaihealth", $db);


/*
 * monta e executa consulta em SQL
 */
$sql = "UPDATE 
		crr_news 
	SET 
		nome='".mysql_real_escape_string($_POST['nome'])."', 
		sobrenome='".mysql_real_escape_string($_POST['sobrenome'])."', 
		cidade='".mysql_real_escape_string($_POST['cidade'])."', 
		estado='".mysql_real_escape_string($_POST['estado'])."', 
		email='".mysql_real_escape_string($_POST['email'])."', 
		data=NOW(), 
		hora=NOW(), 
		titulo='".mysql_real_escape_string($_POST['titulo'])."', 
		resumo='".mysql_real_escape_string($_POST['resumo'])."', 
		texto='".mysql_real_escape_string($_POST['texto'])."', 
		ver='".(($_POST['ver']) ? 1 : '0')."' 
	WHERE 
		id = ".(int)$_GET['id'];

$resultado = mysql_query($sql)
or die ("Erro ao alterar notícia.");

?>

<h1>Notícia alterada com sucesso!</h1>
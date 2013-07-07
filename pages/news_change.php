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

$sql = "SELECT 
		* 
	FROM 
		crr_news 
	WHERE 
		id = ".(int)$_GET['id'];
$resultado = mysql_query($sql)
or die ("Não foi possível realizar a consulta.");

$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

?>

<h1>Alterar Cadastro</h1>

<form action="news_change.php?id=<?php echo $_GET['id'] ?>" method="post">

	<label for="nome">Nome: </label>
	<input name="nome" id="nome" type="text" 
	value="<?php echo $linha['nome'] ?>" />

	<label for="sobrenome">Sobrenome: </label>
	<input name="sobrenome" id="sobrenome" type="text" 
	value="<?php echo $linha['sobrenome'] ?>" /><br />

	<label for="cidade">Cidade: </label>
	<input name="cidade" id="cidade" type="text" 
	value="<?php echo $linha['cidade'] ?>" /><br />

	<label for="estado">Estado: </label>
	<input name="estado" id="estado" type="text" 
	value="<?php echo $linha['estado'] ?>" /><br />

	<label for="email">Email: </label>
	<input name="email" id="email" type="text" 
	value="<?php echo $linha['email'] ?>" /><br />

	<label for="titulo">Título do Texto: </label>
	<input name="titulo" id="titulo" type="text" 
	value="<?php echo $linha['titulo'] ?>" /><br />

	<label for="resumo">Resumo do Texto:</label>
	<input name="resumo" id="resumo" type="text" 
	value="<?php echo $linha['resumo'] ?>" ><br />

	<label for="texto">Texto: </label>
	<textarea name="texto" id="texto" rows="10" cols="30" /> 
	<?php echo $linha['texto'] ?></textarea><br />

	<label for="mostra">Mostrar Notícia? </label>
	<input name="ver" id="ver" type="checkbox" value="1" 
	<?php if ($linha['ver'] == 1) { ?>checked="checked"<?php } ?>/><br />

	<input type="submit" value="Alterar" />


</form>

?>
<?php
$conexao = mysql_connect("mysql02.redehost.com.br:3306","henriquepgomide","h3nr1qu3")
or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("uaihealth")
or die ("Erro ao selecionar a base de dados.");


$sql = "DELETE FROM 
		crr_news 
	WHERE 
		id = ".(int)$_GET['id'];

$resultado = mysql_query($sql)
or die ("Erro ao remover notícia.");

?>

<h1>A notícia foi excluída com êxito!</h1>
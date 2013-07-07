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

/*
 * monta consulta em SQL
 * seleciona as ultimas 15 noticias ordenadas
 * decrescente por data
 * obs.: seleciona somente as noticias que foram
 * liberadas pelo webmaster
 */




$sql = "SELECT 
		*
	FROM 
		crr_news 
	WHERE
		ver = '1' 
	ORDER BY
		id DESC 
	LIMIT 5";

/*
 * executa e trata a consulta
 */
$resultado = mysql_query($sql) 
or die ("Não foi possível realizar a consulta");
if (@mysql_num_rows($resultado) == 0)
   die('Nenhum registro encontrado');

/*
 * fazendo um loop para mostrar os resultados
 */
while ($linha = mysql_fetch_array($resultado, MYSQL_ASSOC))
{
	$novadata = substr($linha['data'],8,2) . "/" . 
	substr($linha['data'],5,2) . "/" . 
	substr($linha['data'],0,4);

	$novahora = substr($linha['hora'],0,2) . "h" . 
	substr($linha['hora'],3,2) . "min";

	echo "<b>Código da Notícia</b>: {$linha['id']} <br />";
	echo "Autor: {$linha['nome']} {$linha['sobrenome']} <br />";
	echo "E-mail: {$linha['email']} <br />";
	echo "Cidade: {$linha['cidade']} <br />";
	echo "Estado: {$linha['estado']} <br />";
	echo "Data: $novadata - Horário: $novahora <br />";
	echo "Título: {$linha['titulo']} <br />";
	echo "Resumo: <em> {$linha['resumo']} </em> <br />";
	echo "Notícia: {$linha['texto']} <br />";
	echo "Validado pelo Webmaster: ";

	if ($linha['ver'] == 1)
	  echo "Sim";
	else
	  echo "Não";
	echo "<hr />";
}

?>

<?php
header('Content-Type: text/html; charset=utf-8');


//include 'config.inc.php'

$db = mysql_connect("mysql02.redehost.com.br:3306","henriquepgomide","h3nr1qu3");
if (!$db)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
mysql_select_db("uaihealth", $db);

$sql="insert into ins_popssday (pname, pemail, pcurso)

values 
('$_POST[name]','$_POST[email]','$_POST[curso]')";

if (!mysql_query($sql,$db))
  {
  die('Error: ' . mysql_error());
  }
echo '<h1>Inscrição Efetuada</h1><p> Sua inscrição foi efetuada com sucesso! Clique <a href="http://www.ufjf.br/popss">aqui</a> para voltar a página principal </p>';


mysql_close($db)


?>



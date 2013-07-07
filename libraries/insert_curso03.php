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

$sql="insert into crr_aperfeicoamento (name, age, gender, job, workplace, city, state, email, tel_fix, tel_cel, howknow, question_1, question_2)

values 
('$_POST[name]','$_POST[age]', '$_POST[gender]', '$_POST[job]', '$_POST[workplace]', '$_POST[city]','$_POST[state]','$_POST[email]', '$_POST[tel_fix]', '$_POST[tel_cel]', '$_POST[howknow]', '$_POST[question_1]', '$_POST[question_2]')";

if (!mysql_query($sql,$db))
  {
  die('Error: ' . mysql_error());
  }
include ('inscricao-efetuada.php');

mysql_close($db)


?>



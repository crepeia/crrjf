<?php 

$recebenome = $_POST["cname"];
$recebemail = $_POST["cmail"];
$recebemsg  = $_POST["cmsg"];

$headers = "Content-type:text/html; charset=iso-8859-1" . "\r\n";
$headers .= 'From: CRR-JF' . "\r\n";

// Destinat�rio do email

$para = "crrjf@uaihealth.com";

// Definindo o aspecto da mensagem

$mensagem   = "<h3>De:</h3> ";
$mensagem  .= $recebenome . $recebemail;
$mensagem  .= "<h3>Assunto:</h3>";
$mensagem  .= "Mensagem do Site";
$mensagem  .= "<h3>Mensagem</h3>";
$mensagem  .= "<p>";
$mensagem  .= $recebemsg;
$mensagem  .= "</p>";

// Enviando a mensagem para o destinat�rio

$envia =  mail($para,"UAI-Health",$mensagem,$headers);
  
// Envia um e-mail para o remetente, agradecendo a visita no site, e dizendo que em breve o e-mail ser� respondido.

$mensagem2  = "<p>Ol� <strong>" . $recebenome . "</strong>. Agradecemos sua visita e a oportunidade de recebermos o seu contato. Responderemos em breve sua mensagem</p>";
$mensagem2 .= "<p>Observa��o - N�o � necess�rio responder esta mensagem.</p>";

$envia =  mail($recebemail,"Mensagem Recebida",$mensagem2,$headers);


// Exibe na tela a mensagem de sucesso, e depois redireciona devolta para a p�gina de contato.
  
require('../pages/contato_ok.php');


?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../style/psaude.css" />
<script type="text/javascript" src="../js/validator.js"></script>
</head>

<div id="formheader">	
    <a href="www.ufjf.br/popss"><img id="logo" src="http://www.ufjf.br/popss/wp-content/themes/popss/imagens/logo.gif" alt="Pólo de Pesquisa em Psicologia Social e Saúde Coletiva" /></a>
</div>    

<div id="wrapper">
  <h1> PET - Saúde </h1>
	<h2> Formulário de inscrição </h2> <br />
<form id="form" onsubmit="return validate(this)"  action="../libraries/verify.php" method="post">
			<p> Nome Completo: <br />
				<input name="name" id="name" type="text" size="35" value="" />
			</p>
 
			<p>
				Curso: <br />
					<select name="curso">
                    	<option value="escolhaum">Escolha um curso</option>
 						<option value="psicologia">Psicologia</option>
  				        <option value="servicosocial">Serviço Social</option>
  				        <option value="enfermagem">Enfermagem</option>
   				        <option value="medicina">Medicina</option>
    				     <option value="outros">Outros</option>
  					 </select>
			</p>

			<p> Periodo: <br />
				<input name="periodo" id="periodo" type="text" size="10" value="" />
			</p>
    
			<p> Matrícula: <br />
				<input name="mat" id="mat" type="text" size="15" value="" />
			</p>        

			<p> Idade: <br />
				<input name="age" id="age" type="text" size="05" value="" />
			</p>

			<p> E-mail: <br />
				<input name="email" id="email" type="text" size="35" value="" />
			</p>

			<p> Telefone Fixo: <br />
				<input name="tel_fix" id="tel_fix" type="text" size="15" value="" />
			</p>

			<p> Celular: <br />
				<input name="tel_cel" id="tel_cel" type="text" size="15" value="" />
			</p>

			<p> Endereço: <br />
				<input name="adress" id="adress" type="text" size="35" value="" />
			</p><br />

			<p id="question1"> Responda a seguinte questão: <br /> Por que gostaria de ser bolsista do PET ad? (Max. 100 Caracteres) <br />
				<textarea name="question_1" id="question_1" cols="50" rows="4"></textarea>
			</p>
			<p>
            <br />
            <?php
          require_once('../libraries/recaptchalib.php');
          $publickey = "6LdTbsESAAAAAIhKZtjRRsfmhBVkKhLTqadm6sv4"; 
		  echo recaptcha_get_html($publickey);
        	?>
            	<input name="ok" type="submit" value="Submeter">
            </p>              
</form>

</div>
<div id="formfooter">
<p> Pólo de Pesquisa em Psicologia Social e Saúde Coletiva - 2011</p>
<p> Contato: henriquepgomide@gmail.com </p>
</div>
      

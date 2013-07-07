<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inscrição | Curso de Atualização em Atenção Integral aos Usuários de Crack e Outras Drogas para Profissional em Hospital Geral</title>
<link rel="shortcut icon" href="../favicon.ico" />
<?php include '../variables/variables.php' ?>
<link type="text/css" rel="stylesheet" href="<?php echo '../style/core.css' ?>" />
<!--[if !IE 7]>
	<style type="text/css">
		#corpo {display:table;height:100%}
	</style>
<![endif]-->
<script type="text/javascript" src="../js/charCount.js"></script>
</head>

<body>

	<!--custommenu-->
		<div class="custommenu">
			<?php include('../layout/custommenu.php'); ?>
 		</div>
    
	
    	<div id="corpo"> 
    
    			<!-- header -->    
   		 
    	        <div class="header">
   					<?php include('../layout/header.php'); ?>
			    </div>
    
     		
			   	<!--mainmenu-->        
	    	
            	<div class="main">
					<div class="leftmenu">
                    	 <div id="navsite">
	        				<?php include('../layout/leftmenu.php'); ?>
					    </div>
                    </div>    
            
		    			<div class="pagecontent">
        					<div class="subscribeform">	
                                <h1> Curso de Atualização em Atenção Integral aos Usuários de Crack e Outras Drogas para Profissional em Hospital Geral</h1>
                                <?php include('inscricao-informacoes.php'); ?>
                                <h2> Formulário de inscrição </h2>
                                <form id="form" onsubmit="return validate(this)"  action="../libraries/insert_curso04.php" method="post">
                                            <p> Nome Completo: <br />
                                                <input name="name" id="name" type="text" size="35" value="" />
                                            </p>
                                            
                                            <p> Idade: <br />
                                                <input name="age" id="age" type="text" size="10" value="" />
                                            </p>
                                            
                                            <p> Sexo: <br />
                                                <input name="gender" id="gender" type="radio" value="masculino" />Masculino<br />
                                                <input name="gender" id="gender" type="radio" value="feminino" />Feminino
                                            </p>    
                                 
                                            <p>
                                                Profissão: <br />
                                                    <select name="job" >
                                                        <option value="escolhaum">Escolha um curso</option>
                                                        <option value="acs">Agente comunitário</option>
                                                        <option value="assistentesocial">Assistente Social</option>
                                                        <option value="enfermeiro">Enfermeiro</option>
                                                        <option value="fonaudiologo">Fonaudiólogo</option>
                                                        <option value="fisioterapeuta">Fisioterapeuta</option>
                                                        <option value="medico">Médico</option>
                                                        <option value="nutricionista">Nutricionista</option>
                                                        <option value="psicologo">Psicólogo</option>
                                                        <option value="taenfermagem">Técnico ou auxiliar de enfermagem</option>
                                                        <option value="outros">Outros</option>
                                                     </select>
                                            </p>
                                            
                                            <p>Local de Trabalho:<br />
                                                <input name="workplace" id="name" type="text" size="35" value="" />
                                            </p>
                                            
                                            <p>Cidade:<br />
                                                <input name="city" id="city" type="text" size="35" value="" />
                                            </p>
                                            
                                            <p>Estado:<br />
                                                <input name="state" id="state" type="text" size="35" value="" />
                                            </p>
                                                           
                                            <p> E-mail: <br />
                                                <input name="email" id="email" type="text" size="35" value="" />
                                            </p>
                                
                                            <p> Telefone Fixo: <br />
                                                <input name="tel_fix" id="tel_fix" type="text" size="10" value="" />
                                            </p>
                                
                                            <p> Celular: <br />
                                                <input name="tel_cel" id="tel_cel" type="text" size="10" value="" />
                                            </p>
                                            
                                             <p>Como você ficou sabendo do curso?<br />
                                                <input name="howknow" id="howknow" type="text" size="68" value="" />
                                            </p>
                                                                
                                            <p id="question1">Porque gostaria de participar do curso? (Max. 300 Caracteres) <br />
                                                <textarea name="question_1" id="question_1" cols="70" rows="5"
onkeyup="CheckFieldLength(question_1, 'charcount2', 'remaining2', 300);" onkeydown="CheckFieldLength(question_1, 'charcount2', 'remaining2', 300);" onmouseout="CheckFieldLength(taMessage2, 'charcount2', 'remaining2', 300);"></textarea><br />
<small><span id="charcount2">0</span> caracteres digitados.   |   <span id="remaining2">300</span> caracteres restantes</small><br /> 
                                            </p>
                                            
                                            <p id="question2">Tem alguma experiência com o tema? Qual? (Max. 300 Caracteres) <br />
                                                <textarea name="question_2" id="question_2" cols="70" rows="5"
onkeyup="CheckFieldLength(question_2, 'charcount3', 'remaining3', 300);" onkeydown="CheckFieldLength(question_2, 'charcount3', 'remaining3', 300);" onmouseout="CheckFieldLength(taMessage2, 'charcount2', 'remaining2', 300);"></textarea><br />
<small><span id="charcount3">0</span> caracteres digitados.   |   <span id="remaining3">300</span> caracteres restantes</small><br /> 
                                            </p>
                                            <p>
                                            <input name="ok" type="submit" value="Inscrever">
                                            </p>              
                                    </form>
                              </div> 
						</div>
                </div>

   		</div><!-- end.corpo --> 
     
    
    <!--Footer -->
     <div class="footer">
     		<?php include('../layout/footer.php') ?>
     </div> 







</body>
</html>
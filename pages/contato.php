<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contato | CRR-jf</title>
<link rel="shortcut icon" href="../favicon.ico" >
<?php include '../variables/variables.php' ?>
<link type="text/css" rel="stylesheet" href="<?php echo '../style/core.css' ?>" />
<!--[if !IE 7]>
	<style type="text/css">
		#corpo {display:table;height:100%}
	</style>
<![endif]-->
<script type="text/javascript">
var RecaptchaOptions = {
   lang : 'pt',
};

 var RecaptchaOptions = {
    theme : 'clean'
 };
</script>
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
    
     		
			   	<!-	-mainmenu-->        
	    	
            	<div class="main">
					<div class="leftmenu">
                    	 <div id="navsite">
	        				<?php include('../layout/leftmenu.php'); ?>
					    </div>
                    </div>    
            
		    			<div class="pagecontent">
        					
                            <h1>Contato</h1>
                            <h4>Endereço:</h4> 
									 <p style="text-indent:0; font-size:0.9em;">Novas Instalações do Instituto de Ciências Humanas </br> Rua José Lourenço Kelmer, s/n – Campus Universitário </br> Bairro São Pedro Juiz de Fora – Minas Gerais – Brasil
36036-330</p>
									 <h4>Telefones: (32) 2102-3165</h4>                            
                            <h4>Email: nucleo.crepeia@ufjf.edu.br</h4>
                                                    
                            <form action="../libraries/verifycontact.php" method="post">
	                         <fieldset>   
	                                <legend><h4>Dados para envio de e-mail</h4></legend>
    	                            	<p> Nome: <br /> <input type="text" name="cname" value="<?php echo $_POST["cname"]?>" /> </p>
        	                            <p> E-mail: <br /> <input type="text" name="cmail" value="<?php echo $_POST["cmail"]?>"/> </p>
            	                        <p> Mensagem: <br /> <textarea name="cmsg" cols="80" rows="10"><?php echo $_POST["cmsg"]?></textarea> </p>
                	                    
                                        <?php
								          require_once('../libraries/recaptchalib.php');
								          $publickey = "6LeYN-QSAAAAAOo97koEpTiZ9cYGwHwLnxI5vRI- "; 
										  echo recaptcha_get_html($publickey);
							        	?>
                                        
                                        <input type="submit" value="Enviar" />
                            </fieldset>    
                                	    
                            </form>
                            
									                
                                
						</div>
                </div>

   		</div><!-- end.corpo --> 
     
    
    <!--Footer -->
     <div class="footer">
     		<?php include('../layout/footer.php') ?>
     </div> 

</body>
</html>
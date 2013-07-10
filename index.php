<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'variables/variables.php' ?>
<title>Centro de Referência sobre Drogas de Juiz de Fora para Formação Permanente de Profissionais na Área de Crack e Outras Drogas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="O CRR-JF tem como objetivos qualificar e fortalecer ações da rede de atenção a usuários de crack, álcool e outras drogas." />
<meta name="keywords" content="centro, referência, CRR, Senad, crack, álcool, drogas, capacitação, treinamento" />
<meta name="author" content="hpgomide" />
<link rel="shortcut icon" href="favicon.ico" />
<link type="text/css" rel="stylesheet" href="<?php echo $core ?>" />
<!--[if !IE 7]>
	<style type="text/css">
		#corpo {display:table;height:100%}
	</style>
<![endif]-->
<!--analytics-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21354814-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="js/compressed.js"></script>



<script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $("p").fadeOut()
  });
  $(".btn2").click(function(){
    $("p").fadeIn();
  });
});
</script>
</head>

<body>

	<!--custommenu-->
		<div class="custommenu">
			<?php include('layout/custommenu.php'); ?>
 		</div>
    
	
    	<div id="corpo"> 
    
    			<!-- header -->    
   		 
    	        <div class="header">
   					<?php include('layout/header.php'); ?>
			    </div>
    
     		
			   	<!--mainmenu-->        
	    	
            	<div class="main">
									
					<div class="leftmenu">
                   <div id="navsite">
	        				<?php include('layout/leftmenu.php'); ?>
					    </div>
               </div>    
            
		    			<div class="pagecontent">
        					<?php include('pages/index.php') ?>    
						</div>
                </div>

   		</div><!-- end.corpo -->    
    
    <!--Footer -->
     <div class="footer">
     		<?php include('layout/footer.php') ?>
     </div> 
</body>
</html>
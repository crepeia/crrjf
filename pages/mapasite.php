<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mapa do Site</title>
<link rel="shortcut icon" href="../favicon.ico" >
<?php include '../variables/variables.php' ?>
<link type="text/css" rel="stylesheet" href="<?php echo '../style/core.css' ?>" />
<!--[if !IE 7]>
	<style type="text/css">
		#corpo {display:table;height:100%}
	</style>
<![endif]-->
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
        					<h1> Mapa Site </h1> 
						</div>
                </div>

   		</div><!-- end.corpo --> 
     
    
    <!--Footer -->
     <div class="footer">
     		<?php include('../layout/footer.php') ?>
     </div> 

</body>
</html>
<!DOCTYPE HTML>
  <head>
    <title>1 praktikum | esileht</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
	
  </head>
  
  <body>
    <?php	$_GET;
	print_r($_GET); 
	
	$link_file="2ndpage.php"; 
	$age=40;?> 	
	
   <h1>Alustame siit!</h1>
   
   <a href="2ndpage.php?what-is-this=2">and let's see where we end up</a>
   
  <?php  echo "<a href='$link_file?age=$age'>PS! Saab ka niimoodi</a>";?>
       <?php echo "<h2>" . $_GET["name"]. "</h2>";
       echo "<h2>" . $_GET["age"] . "</h2>";	    
	   echo "<h2>" . $_GET["country"] . "</h2>";	?>
   </body>
</html>


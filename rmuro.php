
<?php
require_once('common.php');
	checkUser();
  $ar=fopen("muro.txt","a+") or
    die("Problemas en la creacion");
     
    if (flock($ar,LOCK_EX ));
     fwrite(fseek($ar, 0));
     fwrite($ar,"<div class='ribbitWrapper'>");     
     fwrite($ar,"<img src='gfx/user2.png' alt='Avatar' class='avatar'>");
     fwrite($ar,"<b><span class='name'>@");
    fputs($ar,$_SESSION['userName']);
 
   
     fwrite($ar,"</span> <br><small><small>");
     date_default_timezone_set('America/Bogota');
    //preguntamos la zona horaria
    $zonahoraria = date_default_timezone_get();
     $zonahoraria=$hora;
      $hora= date("j, F, Y h:i:a");
     fwrite($ar,"<span class='time'>&nbsp;"); 
       fwrite($ar,$hora);
   fputs($ar,"</small></small></span><br><p>");
  fputs($ar,$_REQUEST['mensaje']);
  fwrite($ar,"</p> </div>");  
    
  
  fputs($ar,"\n");

  flock ($ar, LOCK_UN);
  fclose($ar);
  
header ("Location:index.php");
  ?>
</body>
</html>
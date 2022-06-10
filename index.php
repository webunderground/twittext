<?php
	require_once('common.php');
	checkUser();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
  <link rel="stylesheet/less" href="style.less">
	<script src="less.js"></script>
</head>
<body>
    <div class="wrapper">
			<img src="gfx/logo.png">
			<span>Twitter Clone</span>
			<form action="logout.php">
		<input type="submit" id="btnLogOut" value="Log Out">
			</form>
		</div>
	</header>
	<div id="content">
		<div class="wrapper">
			<div class="panel right">
				<h1>Create a Ribbit</h1>
				<p>
					<form action="rmuro.php" method="post">
						<textarea name="mensaje" class="ribbitText"></textarea>
						<input type="submit" value="Ribbit!">
					</form>
				</p>
			</div>
			<div id="ribbits" class="panel left">
				<h1>Public Ribbits</h1>
				<div class="ribbitWrapper">
					<img src="gfx/user2.png" class="avatar">
					<span class="name">@<?php echo $_SESSION['userName']; ?> </span! <span class="time">15m</span>
					<p>
						
<?php
date_default_timezone_set('America/Bogota');    
$DateAndTime2 = date('m-d-Y h:i:s a', time());  
echo "The current date and time  $DateAndTime2.";
?>

<a href="https://time.is/es/Bogot%C3%A1">time.is.es</a>
					</p>
				</div>
				<div class="ribbitWrapper">
					<img class="avatar" src="gfx/user1.png">
					<span class="name">Frogger</span> @Frogger <span class="time">15m</span>
					<?php
$archivo="mensajes.txt";
$frases=file($archivo);
shuffle($frases);
echo ("<p>".$frases[0]."</p>");
?>.</p>
				</div>
				
				<div class="ribbitWrapper">
					<img class="avatar" src="gfx/user3.png">
					<span class="name">imagenes</span> @img <span class="time">15m</span>
					<p>
	<?php
$archivo="img.txt";
$frases=file($archivo);
shuffle($frases);
echo ("<img class='avatar' src=".$frases[0].">");
?>						
						<a href="#">http://net.tutsplus.com/tutorials/php/ ...</a>
					</p>
				</div>
				
		
        <?php //Ejemplo aprenderaprogramar.com
		error_reporting(0);
		$datos=file('muro.txt') or die ("no puede leer en el archivo");
	//obtiene la ultima linea

$lineas = count(file($datos));


//obtine la linea 2 a la 6
$lineas=array_slice($datos, 0,300);
echo implode("\n",$lineas); 

echo $datos[$lineas] ."\n";


?>
				
			</div></div>
		</div>
	</div>
	<footer>
		<div class="wrapper">
			Ribbit - A Twitter Clone Tutorial<img src="gfx/logo-nettuts.png">
		</div>
	</footer>
		
		<p><a href="logout.php"> To log out click here!</a></p>
	  </div>	
	  <div id="source">Micro Login System v 1.0</div>
    </div>
</body>   

<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<title>Panel</title>
</head>

<body style="overflow:hidden;">
		<nav>
			<a href="index.html"><img class="logo" src="img/logo.jpg"></a>
			<a href="login.html" class="logocont"><img class="user" src="img/user.png" ></a>
			<a href="registro.html" class="nav_link" >REGISTRO</a>
			<a href="novedades.html" class="nav_link" >NOVEDADES</a>
			<a href="obras.html" class="nav_link" >OBRAS</a>
			<a href="artistas.html" class="nav_link">ARTISTAS</a>
			<a href="historia.html" class="nav_link"> HISTORIA</a>
		</nav>
<section style="display:flex; flex-direction:column; align-items:center; justify-content:center;">
				
<?php



if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){

	

echo "<h5 style='color:#fff; font-family: sans-serif; font-size:60px' >Hola! ";
echo $_SESSION['nombre']." ";
echo $_SESSION['apellido']."<h5>" ;
echo "<a style= 'color:#f0f0f0; font-size:48px; font-family: sans-serif;' href='salir.php'>Cerrar sesion</a>";
echo "<img style='width:100%; position:absolute; z-index:-9; left:0; top:0;'   src='img/sur1.jpg' class='fondo-panel'>";

	
}else{
	echo "Solo usuarios registrados...";

	header("login.html");
}
?>
</section>
<footer>
	<p>joaquinbenitez@surrealismo.com</p>
</footer>
</body>
</html>
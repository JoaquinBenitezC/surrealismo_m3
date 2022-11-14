<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<title>Login de Usuarios</title>
</head>

<body>
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
	$usuario=$_POST['usuario'];
	$password=md5($_POST['password']);

	include("conexion.php");

	$consulta=mysqli_query($conexion, "SELECT nombre, apellido, email FROM usuarios WHERE usuario='$usuario' AND password='$password'");

	$resultado=mysqli_num_rows($consulta);

	if($resultado!=0){
	$respuesta=mysqli_fetch_array($consulta);
	
	$_SESSION['nombre']=$respuesta['nombre'];
	$_SESSION['apellido']=$respuesta['apellido'];
		
	    echo "<h5 style='color:#fff; font-family: sans-serif; font-size:70px' >Hola! ";
	    echo $_SESSION['nombre']." ";
	    echo $_SESSION['apellido']."</h5>" ;
		echo "<h4 style='color:#fff; font-family: sans-serif; font-size:60px'> Acceso al panel de usuarios.<br/></h4>";
		echo "<a style= 'color:#f0f0f0; font-size:48px; font-family: sans-serif;'href='panel.php'>Panel</a>";	

	}else{
	echo "No es un usuario registrado";
	include ("registro.html");
	}








?>
</section>
<footer>
	<p>joaquinbenitez@surrealismo.com</p>
</footer>
</body>
</html>
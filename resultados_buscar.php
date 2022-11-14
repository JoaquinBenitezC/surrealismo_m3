<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>surrealismo</title>
<link rel="stylesheet" href="css/responsiveslides.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body style="overflow-y:auto;">
<nav>
			<a href="index.html"><img class="logo" src="img/logo.jpg"></a>
			<a href="login.html" class="logocont"><img class="user" src="img/user.png" ></a>
			<a href="registro.html" class="nav_link" >REGISTRO</a>
			<a href="novedades.html" class="nav_link" >NOVEDADES</a>
			<a href="obras.html" class="nav_link" >OBRAS</a>
			<a href="artistas.html" class="nav_link">ARTISTAS</a>
			<a href="historia.html" class="nav_link"> HISTORIA</a>
		</nav>







<section style="height:auto; margin-bottom:20px">
<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
?>
<article style="width:60%;margin:0 auto;border:solid;padding:10px">
	<p style="position:unset;width: auto;margin-left: auto;margin-top: auto;font-size: 40px;">Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
  <div style="display:flex; flex-direction:column;">  
    <?php	
			echo $resultados['nombre'] . " ";
			echo $resultados['apellido'] . " <br> ";
			echo $resultados['bio']
	?>
    
    <img src="<?php echo $resultados['foto']; ?> "></div>
    <hr/>
    <?php

	}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>
</section>

</body>
<footer style= "position:unset;">
	<p>joaquinbenitez@surrealismo.com</p>
</footer>
</html>
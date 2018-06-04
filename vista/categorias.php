<?php
include "../controlador/seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type"  content="text/html"; charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/librerias/ajax/jquery-3.3.1.min.js"></script> 
     <script type="text/javascript" src="js/codigo.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
	<!-- <link rel="stylesheet" href="css/estilos1.css"> -->
	<link rel="stylesheet" href="css/categorias.css">
	<title>categorias de empleos</title>
</head>
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
<body>
<div class="container" align="center">
<div class="contenedor-form">
<h2 align="center">EMPLEOS DISPONIBLES</h2>


<h3 align="center"><b>CATEGORIAS</b></h3>
<br>
<br>
<form action="Profesiones.php">
<input type="submit" name="Profesiones" id="Profesiones" value="Profesiones">
</form>
<br>
<br>
<form action="Oficios.php">
	<input type="submit" name="Oficios" id="Oficios" value="Oficios">
</form>
<br>
<br>
<form action="Otros.php">
	<input type="submit" name="Otros" id="Otros" value="Otros">

</form>
<br>



</div>

	




</div>
	
</body>
</html>
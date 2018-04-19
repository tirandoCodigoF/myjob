<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>insertar usuarios</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
<script type="text/javascript" src="js/codigo.js"></script>

</head>
<body>
<div class="formularioregistro" align="center">	
	<form action="insertar.php" method="post">
	<h1>Insertar Usuarios</h1>
		<!-- <fieldset> margen o borde en forma de linea -->
			<!-- <legend><h1>Insertar Usuarios</h1></legend> insertar el texto en medio de las linea -->
			<br>
			<!-- <label>Usuario: </label> -->
		<input type="text" align="center" id="usuario"  title="Ingresa tu Usuario" placeholder="USUARIO:">
		<br>
		<br>
		<!-- <label>Contraseña: </label> -->
		<input type="password" align="center" id="pass" title="Ingresa tu Contraseña" placeholder="CONTRASEÑA:">
		<br>
		<br>
		<input type="button" id="registrar" value="Registrar" title="Registrar Usuario" >

		<!-- </fieldset> -->

	</form>
	</div> 
</body>
</html>

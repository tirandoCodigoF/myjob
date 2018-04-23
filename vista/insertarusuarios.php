<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>insertar usuarios</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type"  content="text/html"; charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script type="text/javascript" src="js/codigo.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    
	<link rel="stylesheet" href="css/insertuser.css">

</head>
<body>
<h1 align="center" title="Nombre De La Empresa">MyJoB.COM</h1>
<div class="formularioregistro" align="center">	
	<form action="insertar.php" method="post">
	<h2 aling="center">Bienvenido</h2>
	<br>
	<h1>Registrar Usuarios</h1>
		<!-- <fieldset> margen o borde en forma de linea -->
			<!-- <legend><h1>Insertar Usuarios</h1></legend> insertar el texto en medio de las linea -->
			
			<br><br>
			<!-- <label>Usuario: </label> -->
		<input type="text" align="center" id="usuario"  title="Ingresa tu Usuario" placeholder="USUARIO:">
		<br>
		<!-- <label>Contraseña: </label> -->
		<input type="password" align="center" id="pass" title="Ingresa tu Contraseña" placeholder="CONTRASEÑA:">
		<br>
		
		<input type="button" id="registrar" value="Registrar" title="Registrar Usuario" >

	</form>
	<br>
	<br>
	<div align="center" id="resultado"></div>
<br>
<div class="toggle"  align="center">
 <div class="insertaruser">
 	<a href="index.php"><span>Iniciar Sesion</span></a></div>
 </div>
 <br>

	</div> 

	
	<script src="js/js/jquery-3.3.1.min.js"></script>    
    <script src="js/js/main.js"></script>
</body>

</html>

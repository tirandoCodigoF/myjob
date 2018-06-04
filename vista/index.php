<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type"  content="text/html"; charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/librerias/ajax/jquery-3.3.1.min.js"></script> 
     <script type="text/javascript" src="js/codigo.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
	<link rel="stylesheet" href="css/estilos1.css">

<!-- <marquee  direction=right>
	<a href="index.php"><img class="logo" title="Logo De La Empresa" src="img/logo/LOGO2.jpg"></a>
	</marquee> -->
	<title>login</title>
</head>
<body>
<h1 align="center" title="Nombre De La Empresa"><b><i>MyJoB.COM</i></b></h1>
<h3 align="center">Bienvenido</h3>
<div class="contenedor-form" align="center">
<form action="logueo.php" method="post">

 <div class="mensaje" id="resultado">	</div>
<div class="formulario" align="center " role="form">
<h2 aling="center">Iniciar Sesion</h2>
<br>
<br>

<input type="text"  name="usuario" id="usuario" title="Ingresa tu Usuario" placeholder="USUARIO:" required /></br>
<input type="password"   name="pass" id="pass" title="Ingresa tu Contraseña" placeholder="CONTRASEÑA:" required />
<br>
<input type="submit" name="ingresar" id="ingresar" value="Ingresar">
</form>
<!-- </form> -->
 </div>
<br>
<div class="toggle" align="center">
 	<span>Crear Cuenta</span>
 </div>	
 <div class="formulario" align="center">
 	<form action="insertar.php" method="GET">
 		
 		<input type="text"  name="usuario1" id="usuario1" placeholder="USUARIO: " title="Ingresa Tu Usuario" required>
 		<br>
 		<input type="password" name="pass1" id="pass1" placeholder="CONTRASEÑA: " title="Ingresa Tu Contraseña" required="">
 		<br>

 		<input type="submit" id="registrar"  value="Registrar" title="Registrar Usuario">

 	</form>
 </div>
 
<!-- <div align="center" class="reset-password">
	<a href="#">Olvide Mi Contraseña</a>

</div> -->

</div>
	<script src="js/js/jquery-3.3.1.min.js"></script>    
    <script src="js/js/main.js"></script>
</body>
</html>

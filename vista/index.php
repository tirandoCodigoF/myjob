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


	<!-- <a href="index.php"><img class="logo" title="Logo De La Empresa" src="logo/LOGO2.jpg"></a> -->
	<title>login</title>
</head>
<body>
<h1 align="center" title="Nombre De La Empresa">MyJoB.COM</h1>

<div class="contenedor-form" align="center">
<form action="logueo.php" method="post">
<h2 aling="center">Bienvenido</h2>
<div class="formulario" align="center " role="form">
<h2 aling="center">Iniciar Sesion</h2>
<br>
<input type="text"  name="usuario" id="usuario" title="Ingresa tu Usuario" placeholder="USUARIO:" required /></br>
<input type="password"   name="pass" id="pass" title="Ingresa tu Contraseña" placeholder="CONTRASEÑA:" required />
<br>
<input type="submit" id="ingresar" value="Ingresar">
</form>
<!-- </form> -->
 </div>

 <div class="toggle"  align="center">
 <div class="insertaruser">
 	<a href="insertarusuarios.php"><span>Crear Cuenta</span></a></div>
 </div>	
 
 <br>
  <div class="mensaje" id="resultado">	</div>
 <br>


<div align="center" class="reset-password">
	<a href="#">Olvide Mi Contraseña</a>

</div>

</div>
	<script src="js/js/jquery-3.3.1.min.js"></script>    
    <script src="js/js/main.js"></script>
</body>
</html>

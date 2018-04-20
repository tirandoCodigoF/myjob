<?php 
session_start();
if(isset($_SESSION["usuario"]) && isset($_SESSION["pass"])){
echo "<link rel='stylesheet' href='../css/estilos1.css'>";
echo "<h1>MyJoB.COM</h1>";	
echo "<h2 align='center'>Hola Bienvenido</h2>";
echo  "<div class='cerrar' align='right'> <form action='../controlador/cerrarsesion.php' autocomplete='off'><input type='submit' value='Cerrar Sesion'>
</form> </div>";
}else{
	
echo "<script type='text/javascript'> alert('No Existe El Usuario');
window.location='index.php';
</script>";
}

 ?>
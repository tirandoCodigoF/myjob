<?php 
//session_start();
//if(isset($_SESSION["usuario"]) && isset($_SESSION["pass"])){
//echo "hola";
//echo "<a href='cerrarsesion.php'>cerrar sesion</a>";

// echo "<link rel='stylesheet' href='../css/estilos1.css'>";
// echo "<h1>MyJoB.COM</h1>";	
// echo "<h2 align='center'>Hola Bienvenido</h2>";
// echo  "<div class='cerrar' align='right'> <form action='../controlador/cerrarsesion.php' autocomplete='off'><input type='submit' value='Cerrar Sesion'>
// </form> </div>";
//}else{
	//echo "<meta http-equiv='refresh' content='0'; url='index.php'>";
	//echo "mal";
// echo "<script type='text/javascript'> alert('No Existe El Usuario');
// window.location='index.php';
// </script>";
//}
require_once("../clases/clases.php");
$objClases=new Clases();

$respuesta=$objClases->login($_POST["usuario"],$_POST["pass"]);
if ($respuesta==1) {
echo "<link rel='stylesheet' href='css/estilos1.css'>";
// echo"<a href='index.php' ><img class='logo' title='Logo De La Empresa' src='logo/LOGO2.jpg'></a>";
echo "<h1>MyJoB.COM</h1>";	
echo "<h2 align='center'>Hola Bienvenido</h2>".$_SESSION['sesion_usuario'];
echo  "<div class='cerrar' align='right'> <form action='../controlador/cerrarsesion.php' autocomplete='off'>
<input type='submit' value='Cerrar Sesion'>
</form> </div>";
}else{

echo "<script type='text/javascript'> alert('No Existe El Usuario');
window.location='index.php';
</script>";
}


 ?>

<?php 

require_once("../clases/clases.php");
$objClases=new Clases();

$respuesta=$objClases->login($_POST["usuario"],$_POST["pass"]);
if ($respuesta==1) {
echo "<link rel='stylesheet' href='css/estilos1.css'>";
// echo"<a href='index.php' ><img class='logo' title='Logo De La Empresa' src='logo/LOGO2.jpg'></a>";
echo "<h1>MyJoB.COM</h1>";	
echo "<h3 align='center'>Hola Bienvenido</h3>";
echo "<div class='menu'>"."<h5> "."Usuario: ".$_SESSION['sesion_usuario']." </h5>"."</div>";
echo  "<div class='cerrar' align='right'> <form action='../controlador/cerrarsesion.php' autocomplete='off'>
<input type='submit' value='Cerrar Sesion'>
</form> </div>";
include "navar.php";


}else{

echo "<script type='text/javascript'> alert('No Existe El Usuario');
window.location='index.php';
</script>";
}


 ?>

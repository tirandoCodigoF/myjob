
<?php
include "../controlador/seguridad.php";

echo "<h1>MyJoB.COM</h1>";	

echo "<div class='menu'>"."<h5> "."Usuario: ".$_SESSION['sesion_usuario']." </h5>"."</div>";
echo  "<div class='cerrar' align='right'> <form action='../controlador/cerrarsesion.php' autocomplete='off'><input type='submit' value='Cerrar Sesion'></form> </div>";
include "categorias.php";



 ?>

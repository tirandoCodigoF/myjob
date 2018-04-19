<?php 
include "../controlador/usercontrol.php";

if (isset($_GET["usuario"]) || isset($_GET["pass"])) {
	$usuariosCon = new usercontrol();
	if ($usuariosCon->insertar($_GET["usuario"],$_GET["pass"])) {
		echo "true";
	}else{
echo "false";

	}
	
}else{
	echo "false";
}

 ?>
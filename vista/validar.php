<?php 
include "../controlador/usercontrol.php";

if (isset($_POST["usuario"]) || isset($_POST["pass"])) {
if(trim($_POST["usuario"]) == "" || trim($_POST["pass"]) == ""){
echo "false";
}else{
	$usuariosCon = new usercontrol();
	if ($usuariosCon->validar($_POST["usuario"],$_POST["pass"])) {
		echo "true";
	}else{
echo "false";

	}
	}
}else{
	echo "false";
}

 ?>
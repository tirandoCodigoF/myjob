<?php 
include "../controlador/usercontrol.php";

if (isset($_GET["usuario1"]) || isset($_GET["pass1"])) {
if(trim($_GET["usuario1"]) == "" || trim($_GET["pass1"]) == ""){
// echo "false";
}else{ 
	$usuariosCon = new usercontrol();
	if ($usuariosCon->insertar($_GET["usuario1"],$_GET["pass1"])) {
		// echo "true";
	echo "<script type='text/javascript'> alert('Registro Exitoso');
window.location='index.php';
</script>";
	}else{
// echo "false";
echo "<script type='text/javascript'> alert('El Usuario Ya existe, Intenta Con Uno Nuevo');
window.location='index.php';
</script>";

	}
	}
}else{
	// echo "false";
}

 ?>
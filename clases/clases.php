<?php 
require_once("../modelo/conexion.php");

class Clases{
public function login($usuario,$pass){
$sql="SELECT * FROM usuarios WHERE usuario='".$usuario."' AND password ='".$pass."'";
$res=mysqli_query(conexion::conectar(),$sql);
if (mysqli_num_rows($res)==0){
	return 0;
}else {
if($reg=mysqli_fetch_array($res)){
$_SESSION["sesion_usuario"]=$reg["usuario"];
$_SESSION["sesion_id"]=$reg["usuario"];
return 1;
}
}
}
}
?>
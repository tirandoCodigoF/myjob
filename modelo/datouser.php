<?php 
include("../clases/usuarios.php");
include ("conexion.php");
//datos del usuario
class datouser{
function insertar($usuario,$pass){
	$conec=new conexion();
	$conect=$conec->conectar();
$usuarios = new usuarios();
$usuarios->usuario = $usuario;
$usuarios->password = $pass;
mysqli_select_db($conect,"loginorientado");
$sql=" INSERT INTO usuarios(usuario,password) values('".$usuarios->usuario."','".$usuarios->password."')";
if (mysqli_query($conect,$sql)){
	return true;
}else{
return false;
}
mysqli_close($conect);
}

}
// $obj = new datouser();
// if($obj->insertar("chanty","12345")){
// 	echo "registro realizado";//para ejecutar la insercion del usuario y passwor en la base de datos.

// }

 ?>
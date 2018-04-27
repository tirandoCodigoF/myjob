<?php 
include("../clases/usuarios.php");
// include("../clases/usercontrolpost");
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

$sql=" INSERT INTO usuarios (usuario,password) VALUES ('".$usuarios->usuario."','".$usuarios->password."')";
if (mysqli_query($conect,$sql)){
	return true;                  
}else{
return false;
}
mysqli_close($conect);
}

function validar($usuario,$pass){
	$conec=new conexion();
	$conect=$conec->conectar();

	$usuarios= new usuarios();
	$usuarios->usuario=$usuario;
	$usuarios->password=$pass;

	mysqli_select_db($conect,"loginorientado");

	$sql= "SELECT * FROM usuarios WHERE usuario='".$usuarios->usuario."' add password='".$usuarios->password."'";
	$consulta = mysqli_query($conect,$sql);
	$fila = mysqli_fetch_array($consulta);
	if ($fila > 0) {
		if ($fila["usuario"]== $usuarios->usuario && $fila["password"]==$usuarios->password) {
			return true;
		}
	}else {
		return false;
	}
}

}
// $obj = new daqtouser();
// if($obj->insertar("chanty","12345")){
// 	echo "registro realizado";//para ejecutar la insercion del usuario y passwor en la base de datos.

// }

 ?>
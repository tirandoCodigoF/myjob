<?php 
include("../clases/usuarios.php");
include ("conexion.php");
//datos del usuario
class datouser {
function insertar($usuario,$password){
	$conec=new conexion();
	$conect=$conec->conectar();
$usuarios= new usuarios();
$usuarios->usuario=$usuario;
$usuarios->password=$password;

mysqli_select_db($conect,"loginorientado");
$sql="insert into usuarios(usuario,password) values('".$usuarios->usuario."','".$usuarios->password."')";
if (mysqli_query($conect,$sql)){
	return true;
}else{
return false;
}
mysqli_close($conect);
}
$obj = new datouser();
if($obj->insertar("vicente","samuragi23")){
	echo "registro realizado";
}

}

 ?>
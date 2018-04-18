<?php 
include("../clases/usuarios.php");
include "conexion.php";
//datos del usuario
class datos(){
function insertar($usuario,$password){
	$conec=new conexion();
	$conect=$conec->conectar();
$usuarios= new usuarios();
$usuarios->usuario=$usuario;
$usuarios->password=$password;


}






}







 ?>
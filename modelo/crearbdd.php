<?php 
include "conexion.php";

function crearbdd(){
$conec= new conexion();
$conect=$conec->conectar();

$sql="CREATE DATABASE loginorientado";
if (mysqli_query($conect,$sql)) {
	echo "la consulta fue exitosa";
}
mysqli_close($conect);
}
//crearbdd();//para empezar a crear la base de datos
function Ctablas(){
$conec =new conexion();
$conect=$conec->conectar();
mysqli_select_db($conect,"loginorientado");
$sql="create table usuarios (id int primary key not null auto_increment,usuario char(50),password char(50))";
if (mysqli_query($conect,$sql)) {
	echo "tabla creada";
}
mysqli_close($conect);

}
//Ctablas();//secrean las tablas
 ?>
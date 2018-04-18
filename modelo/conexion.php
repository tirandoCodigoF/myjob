<?php 
class conexion{

function conectar(){
$conectar=new mysqli ("localhost","root","");
return $conectar;  
}

}
// $conect=new conexion();
// if($conect->conectar()){
// 	echo "conectado";
// }
// else {
// 	echo"desconectado";
// }
 ?>
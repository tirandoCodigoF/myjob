<?php 
// session_start();
class conexion{
function conectar(){
$conectar=new mysqli ("localhost","root","","loginorientado");
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
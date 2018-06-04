<?php 

class conexion{
function conectar(){
$conectar=new mysqli ("localhost","root","","loginorientado");
return $conectar;  
}

}
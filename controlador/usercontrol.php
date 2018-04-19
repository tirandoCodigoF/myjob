<?php 
include "../modelo/datouser.php";
//clase que se implementa para llamar al metodo insertar q se encuentra en la carpeta modelo.
class usercontrol{
function insertar($usuario,$pass){
$obj = new datouser();
return $obj->insertar($usuario,$pass);

}


}


 ?>
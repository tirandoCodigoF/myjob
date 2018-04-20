<?php 
class usuariospost{
public $idUsuario;	
public $usuario;
public $password;
function POST_id(){
return $this->idUsuario;
}
function set_id($id){
	$this->idUsuario=$idUsuario;
}

function POST_usuario(){
	$this->usuario;
}

function set_usuario($usuario){
	$this->usuario=$usuario;
}

function POST_password(){
	$this->password;
}
function set_password($password){
 $this->password=$password;
}
}

 ?>
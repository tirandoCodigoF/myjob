<?php 
class usuarios{
public $id;	
public $usuario;
public $password;
function POST_id(){
return $this->id;
}
function set_id($id){
	$this->id=$id;
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
$(document).ready(ini);

function ini(){
$("#registrar").click(enviarDatos);
}

function enviarDatos(){
	var usuario = $("#usuario").val();
	var pass = $("#pass").val();
	console.log(usuario);
$.ajax({
	url:"insertar.php",
	success:function(result){
		alert(result);
	},
	data:{
		usuario:usuario,
		pass:pass
	},
	type:"GET"
});
}
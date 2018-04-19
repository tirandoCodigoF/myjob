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
		if (result == "false") {
			$("#resultado").html("<br> el registro no se pudo completar");

		}else{
$("#resultado").html("<br> el registro se ha completado");
		}
	},
	data:{
		usuario:usuario,
		pass:pass
	},
	type:"GET"
});
}
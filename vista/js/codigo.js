$(document).ready(ini);

function ini(){
$("#registrar").click(enviarDatos);
$("#ingresar").click(validar);
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
function validar(){
var usuario = $("#usuario").val();
	var pass = $("#pass").val();
	console.log(usuario);
$.ajax({
	url:"validar.php",
	success:function(result){
		if (result == "false") {
			$("#resultado").html("<div style='background:red'>no se pudo comprobar el usuario correctamente</div>");

		}else{
		$("#resultado").html("<div style='background:black'>Acceso exitoso</div>");
		}
	},
	data:{
		usuario:usuario,
		pass:pass
	},
	type:"POST"
});


}

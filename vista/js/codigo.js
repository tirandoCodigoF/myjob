$(document).ready(ini);

function ini(){
$("#registrar").click(enviarDatos);
$("#ingresar").click(validaruser);
}
function enviarDatos(){
    var usuario = $("#usuario").val();
    var pass = $("#pass").val();
    
    $.ajax({
        url:"insertar.php",
        success:function(result){
            if(result =="true"){
                $("#resultado").html("se ha registrado el usuario correctamente");   
            }else{
                $("#resultado").html("no se ha podido registrar el usuario correctamente");
            }
        },
        data:{
            usuario:usuario,
            pass:pass
        },
        type:"GET"
    });
}
function validaruser(){
    
    var usuario = $("#usuario").val();
    var pass = $("#pass").val();
    
    $.ajax({
        url:"validar.php",
        success:function(result){
            if(result =="true"){
               document.location.href="logueo.php";
               //$("#resultado").html("<div class='alert alert-danger' role='alert'><b>acceso exitoso, </b>Se pudo comprobar el usuario</div>");
               
            }else{
                $("#resultado").html("<div class='alert alert-danger' role='alert'><b>acceso denegado, </b>no se pudo comprobar el usuario</div>");
            }
        },
        data:{
            usuario:usuario,
            pass:pass
        },
        type:"POST"
    });

}
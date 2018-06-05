<!DOCTYPE html>
<?php
include "../controlador/seguridad.php";
?>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Administrador</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">	
	<script src="js/metodos.js"></script>
</head>
<body>
<?php include 'navar.php'; ?>

	<div class="container">
		<div class="row">	
	
			<a class="btn btn-success" data-toggle="modal" data-target="#nuevoUsu"><span class="glyphicon glyphicon-plus"></span> Nuevo Empleo</a><br><br>
			<div class="table-responsive">
			<table class='table'>
				<tr>
					<th>Id</th><th>Empresa</th><th>Puesto</th><th>Correo Electronico</th><th>Direccion</th><th>Telefono</th><th colspan="2"><span class="glyphicon glyphicon-wrench"></span></th>
				</tr>			

	        </table>
		</div> 
		</div> 



		<div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Nuevo Usuario</h4>                       
                    </div>
                    <div class="modal-body">
                       <form action="insertar_usuario.php" method="POST">              		
                       		<div class="form-group">
                       			<label for="edad">Usuario:</label>
                       			<input class="form-control" id="user" name="user" type="text" placeholder="Usuario"></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="direccion">Contreseña invitado:</label>
                       			<input class="form-control" id="password" name="password" type="password" placeholder="Contreseña invitado"></input>
                       		</div>
                       		
                       		<div class="form-group">
                       			<label for="nombre">Correo Electrónico:</label>
                       			<input class="form-control" id="email" name="email" type="text" placeholder="Correo Electrónico"></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="nombre">Contreseña Administrador:</label>
                       			<input class="form-control" id="pasadmin" name="pasadmin" type="password" placeholder="Contreseña Administrador"></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="nombre">Rol:</label>
                       			<input class="form-control" id="rol" name="rol" type="text" placeholder="1->Administrador 2->Invitado"></input>
                       		</div>
							<input type="submit" class="btn btn-success" value="Guardar">
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div> 

        <div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Usuario</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualizar_usuario.php" method="POST">                       		
                       		        
                       		        <input  id="id" name="id" type="hidden" ></input>   		
		                       		<div class="form-group">
		                       			<label for="nombre">Usuario:</label>
		                       			<input class="form-control" id="user" name="user" type="text" ></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="edad">Contraseña Invitado:</label>
		                       			<input class="form-control" id="password" name="password" type="text" ></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="direccion">Correo Electrónico:</label>
		                       			<input class="form-control" id="email" name="email" type="text" ></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="direccion">Contraseña Administrador:</label>
		                       			<input class="form-control" id="pasadmin" name="pasadmin" type="password" ></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="direccion">Rol:</label>
		                       			<input class="form-control" id="rol" name="rol" type="text" value="Actualizar" ></input>
		                       		</div>

									<input type="submit" class="btn btn-success">							
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div> 



	</div>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>		
	<script>			 
		  $('#editUsu').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient0 = button.data('id')
		  var recipient1 = button.data('user')
		  var recipient2 = button.data('password')
		  var recipient3 = button.data('email')
		  var recipient3 = button.data('pasadmin')
		  var recipient3 = button.data('rol')

		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id').val(recipient0)
		  modal.find('.modal-body #user').val(recipient1)
		  modal.find('.modal-body #password').val(recipient2)
		  modal.find('.modal-body #email').val(recipient3)
		  modal.find('.modal-body #pasadmin').val(recipient3)
		  modal.find('.modal-body #rol').val(recipient3)		 
		});
		
	</script>
	
</body>
</html>
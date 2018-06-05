<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ventana modal</title>
</head>
<body>
	

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
                       			<label for="edad">Empresa:</label>
                       			<input class="form-control" id="user" name="user" type="text" placeholder="Usuario"></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="direccion">Puesto:</label>
                       			<input class="form-control" id="password" name="password" type="password" placeholder="Contreseña invitado"></input>
                       		</div>
                       		
                       		<div class="form-group">
                       			<label for="nombre">Correo Electrónico:</label>
                       			<input class="form-control" id="email" name="email" type="text" placeholder="Correo Electrónico"></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="nombre">Direccion</label>
                       			<input class="form-control" id="pasadmin" name="pasadmin" type="password" placeholder="Contreseña Administrador"></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="nombre"></label>
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




</body>
</html>

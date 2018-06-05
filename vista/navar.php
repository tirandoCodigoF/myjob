	<header>
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
						<span class="sr-only">Desplegar / Ocultar Menu</span>	
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a  class="navbar-brand">Courmet</a>
				</div>	
				<div class="collapse navbar-collapse" id="navegacion-fm">
					<ul class="nav navbar-nav">
						<li><a href="../Tablas/T_usuario.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>	

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th"></span>
								Bitácoras<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" class="clearfix">
								<li><a href="../bitacoras/B_cliente_proveedor.php">Cliente/Proveedor</a></li>
								<li class="divider"></li>
								<li><a href="../bitacoras/B_menu.php">Menú</a></li>
								<li class="divider"></li>
								<li><a href="../bitacoras/B_personal.php">Personal</a>
								</li>
								<li class="divider"></li>
								<li><a href="../bitacoras/B_productos.php">Productos</a>
							</ul>
							
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-th-large"></span>
								Tablas<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="../Tablas/T_usuario.php">Usuarios</a></li>
								<li class="divider"></li>
								<li><a href="../Tablas/T_bebida.php">Bebida</a></li>
								<li class="divider"></li>
								<li><a href="../Tablas/T_clientes.php">Clientes</a></li>
								<li class="divider"></li>
								<li><a href="../Tablas/T_correo_clientes.php">Correo_Clientes</a></li>
								<li class="divider"></li>
								<li><a href="../Tablas/T_direccion.php">Direccion</a></li>
								<li class="divider"></li>
								<li><a href="../Tablas/T_muebles.php">Muebles</a></li>
								<li class="divider"></li>
								<li><a href="../Tablas/T_pedido.php">Pedidos</a></li>
								<li class="divider"></li>
								<li><a href="../Tablas/T_personal.php">Personal</a></li>
								<li class="divider"></li>
								<li><a href="../Tablas/T_platillo.php">Platillo</a></li>
								<li class="divider"></li>
								<li><a href="../Tablas/T_postre.php">Postre</a></li>
								<li class="divider"></li>
								<li><a href="../Tablas/T_productos.php">Productos</a></li>
								<li class="divider"></li>
								<li><a href="../Tablas/T_proveedor.php">Proveedor</a></li>
								<li class="divider"></li>
								<li><a href="../Tablas/T_reservacion.php">Reservación</a></li>
								<li class="divider"></li>
								<li><a href="../Tablas/T_restaurante.php">Restaurante</a></li>
								<li class="divider"></li>
								<li><a href="../Tablas/T_telefono.php">Teléfono</a></li><li class="divider"></li>
								<li><a href="../Tablas/T_turnos.php">Turnos</a></li>


							</ul>
							
						</li>		
										
					</ul>
					<ul class="nav navbar-nav navbar-right">

						<?php								
							echo "<li class=dropdown>
										<a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span> ".$_SESSION['user']."</a>
										<ul class='dropdown-menu'>
											<li><a href='../cerrarsesion.php'>Cerrar Sesión</a></li>
								
										</ul>
									</li>";
						?>

						
				    </ul>			
				</div>
			</div>
		</nav>
	</header>
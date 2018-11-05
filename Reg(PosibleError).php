<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar o Eliminar Usuarios</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style>
		header{
			font-family: Notable;
			color: #fff;
			background-color: #3e3f42;
			padding-top: 20px;
			padding-left: 20px;
			padding-bottom: 20px;
			border-bottom: 4px #fff solid;
		}

		header .logo{
			min-height: 62px;
			max-height: 62px;
			min-width: 155px;
		}

		.menu{
			background-color: #f2f2f2;
		}

		.opcion_menu{
			margin-right: 20px;
		}

		.items{
			color: gray;
			font-family: 'Georgia';
		}

		.contenido {
			margin-top: 30px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<header class="row">
			<div class="col-3 col-xs-12">
				<img  src="icono_config/logo.png" alt="Logo Empresa" class="img-fluid logo">
			</div>
			<div class="col-1 offset-4">
				<img  src="icono_config/user.jpg" alt="Foto" class="rounded-circle foto" width="65" height="65">
			</div>
			<div class="col-4">
				<p>Usuario Administrador</p>
				<p>Castilla Perez, Juan</p>
				<div class="col-1 offset-7">
				<button class="btn btn-link" style= "position: absolute;bottom: 10px">
		<img src="icono_config/icono_salir.png"></button>
			</div>
			</div>
		</header>

		<section class="row menu">
			<div class="col-12">
				<div class="btn-group" role="group" aria-label="Basic example">

				<div class="dropdown opcion_menu">
				  <button class="btn btn-link items dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Acceso
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    <a class="dropdown-item" href="Cabecera.html">Menu 1</a>
				    <a class="dropdown-item" href="#">Menu 2</a>
				    <a class="dropdown-item" href="#">Menu 3</a>
				  </div>
				</div>

				<div class="dropdown opcion_menu">
				  <button class="btn btn-link items dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Portada Principal
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    <a class="dropdown-item" href="#">Cabecera de Portada</a>
				    <a class="dropdown-item" href="#">Redes Sociales</a>
				    <a class="dropdown-item" href="#">Slider</a>
				    <a class="dropdown-item" href="#">Pie de Portada</a>
				  </div>
				</div>

				<div class="dropdown opcion_menu">
				  <button class="btn btn-link items dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Secciones Inicio
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    <a class="dropdown-item" href="#">Conoce mas...</a>
				    <a class="dropdown-item" href="#">Noticias</a>
				  </div>
				</div>

				<div class="dropdown opcion_menu">
				  <button class="btn btn-link items dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Nosotros
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    <a class="dropdown-item" href="#">Imagen de Portada</a>
				    <a class="dropdown-item" href="#">Contenido</a>
				  </div>
				</div>

				</div>
			</div>
		</section>

		<section class="row contenido">
			<div class="col-md-2">
				<button class="btn btn-secondary form-control mb-5 botones"><img src="icono_config/icono_lista.png">
					&nbsp Lista de Usuarios
				</button>

				<button class="btn btn-secondary form-control botones">
				<img src="icono_config/icono_anadir.png">
					&nbsp Agregar Usuario
				</button>
			</div>

			<div class="col-md-8 offset-md-1">
				<div class="card">
				  <div class="card-header">
				    Actualizar o Eliminar Usuario

				  </div>
				  <div class="card-body">
				    <form>

				    <tr>
				    	<p>
				    	</p>
					<div class="radio">
						<input type="radio" name="Usuario Administrador" id="usuario_administrador">
						<label for="usuario_administrador">Usuario Administrador</label>
						<input type="radio" name="Usuario Administrador" id="usuario_de_servicio">
						<label for="usuario_de_servicio">Usuario De Servicio</label>
					</div>
				<p>
				</p>
			</tr>
					  	<div class="form-group row">
					    	<label for="Apellidos" class="col-sm-3 col-form-label">Apellidos:</label>
					    	<div class="col-sm-8">
					      		<input type="text" class="form-control" id="Apellidos" placeholder="Ingrese Sus Apellidos">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="Nombres" class="col-sm-3 col-form-label">Nombres:</label>
					    	<div class="col-sm-8">
					      		<input type="text" class="form-control" id="Nombres" placeholder="Ingrese Sus Nombres">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="E-mail" class="col-sm-3 col-form-label">E-mail:</label>
					    	<div class="col-sm-4">
					      		<input type="text" class="form-control" id="E-mail" placeholder="Ingrese Su E-mail">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="Contraseña" class="col-sm-3 col-form-label">Contraseña:</label>
					    	<div class="col-sm-4">
					      		<input type="password" class="form-control" id="E-mail" placeholder="Escriba Una Contraseña">
					    	</div>
					  	</div>


					<button class="btn btn-danger text-center" style="background: green ; border:green"><img src="icono_config/icono_limpiar.png">&nbsp Limpiar</button>
					<button class="btn btn-danger text-center" style="background: green ; border:green"><img src="icono_config/icono_actualizar.png">&nbsp Actualizar</button>
					<button class="btn btn-danger text-center" style="background: green ; border:green"><img src="icono_config/icono_eliminar.png">&nbsp Eliminar</button>
					</form>
				  </div>
				</div>
			</div>
		</section>

	</div>



	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cabecera</title>
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
				<img  src="img/logo.png" alt="Logo Empresa" class="img-fluid logo">
			</div>
			<div class="col-1 offset-5 text-right">
				<img  src="img/user.jpg" alt="Foto" class="rounded-circle foto" width="65" height="65">
			</div>
			<div class="col-2-auto text-right">
				<p>Usuario Administrador</p>
				<p>Martinez Perez, Juan</p>
			</div>
			<div class="col-1 text-center align-self-center">
				<button class="btn btn-outline-secondary"><img src="icono_config/icono_salir.png"></button>
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
				    <a class="dropdown-item" href="#">Menu 1</a>
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

		<section class="row contenido justify-content-center">
			<div class="col-md-8">
				<div class="card">
				  <div class="card-header">
				    	Registro Cabecera
				  </div>
				  <div class="card-body">
				    <form>
					  	<div class="form-group row">
					    	<label for="nombre" class="col-sm-4 col-form-label">Nombre de la Organizacion:</label>
					    	<div class="col-sm-8">
					      		<input type="text" class="form-control" id="nombre" placeholder="Nombre de la Organizacion">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="email" class="col-sm-4 col-form-label">Email:</label>
					    	<div class="col-sm-8">
					      		<input type="email" class="form-control" id="email" placeholder="email@example.com">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="telefono" class="col-sm-4 col-form-label">Telefono:</label>
					    	<div class="col-sm-4">
					      		<input type="text" class="form-control" id="telefono" placeholder="Telefono">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					  		<div class="col-sm-4">Logotipo:</div>
					    	<div class="col-sm-8">
					      		<input type="file" id="archivo">
					    	</div>
					  	</div>
					  	
					  	<div class="form-group row">
					  		<div class="col-sm-4"></div>
					  		<div class="col-sm-3">
					      		<button class="btn btn-danger text-center" style="background: green; border: green; color:white" >
					      			<img src="img/icono_actualizar.png">&nbsp Actualizar
					      		</button>
					    	</div>
					  	</div>
						
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
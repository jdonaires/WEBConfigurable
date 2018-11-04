<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar Imagen</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style>
		header{
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
			color: #f94040;
			font-family: 'Georgia';
		}

		/*.items:hover{
			color: green;
			font-family: 'Georgia';
		}*/

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
				<button class="btn btn-outline-secondary"><img src="img/icono_salir.png"></button>
			</div>
		</header>
		
		<section class="row menu">
			<div class="col-12">
				<div class="btn-group" role="group" aria-label="Grupo">			
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
				    <a class="dropdown-item" href="actualizar_noticia.html">Noticias</a>
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
				<button class="btn btn-secondary form-control mb-5 botones"><img src="img/icono_lista.png">
					&nbsp Lista de Imagenes
				</button>

				<button class="btn btn-secondary form-control botones">
				<img src="img/icono_anadir.png">
					&nbsp Agregar Imagen
				</button>
			</div>

			<div class="col-md-8 offset-md-1">
				<div class="card">
				  <div class="card-header">
				    Actualizar Imagen
				  </div>
				  <div class="card-body">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
				    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
					  	<div class="form-group row">
					    	<label for="descripcion" class="col-sm-3 col-form-label">Descripcion:</label>
					    	<div class="col-sm-8">
					      		<input type="text" class="form-control" id="descripcion" placeholder="Descripcion">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="enlace" class="col-sm-3 col-form-label">Añadir Enlace:</label>
					    	<div class="col-sm-8">
					      		<input type="text" class="form-control" id="enlace" placeholder="Añadir Enlace:">
					    	</div>
					  	</div>
					  	<!--<div class="form-group row">
					    	<label for="posicion" class="col-sm-3 col-form-label">Posicion:</label>
					    	<div class="col-sm-4">
					      		<input type="text" class="form-control" id="posicion" placeholder="Posicion">
					    	</div>
					  	</div> -->
					  	<div class="form-group row">
					  		<div class="col-sm-3"></div>
					    	<div class="col-sm-8">
					      		<input type="file" id="archivo" value="Seleccionar Archivo">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					  		<div class="col-sm-3"></div>
					    	<div class="col-sm-8">
					      		<input type="submit" class="btn btn-green text-center" style="background: green; border: green; color:white" value="Guardar" name="BtnGuardar">
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Imagenes</title>
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
				    <a class="dropdown-item" href="RegUsuario.php">Registro Usuario</a>
				    <a class="dropdown-item" href="Lista_De_Usuarios.php">Lista de Usuario</a>
				    <a class="dropdown-item" href="RegPrivilegios.php">Privilegios</a>
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
				<button class="btn btn-secondary form-control mb-5 botones"><img src="img/icono_lista.png">
					&nbsp Lista de Imagenes
				</button>

				<button class="btn btn-secondary form-control botones">
				<img src="img/icono_anadir.png">
					&nbsp Agregar Imagen
				</button>
			</div>

			<div class="col-md-8 offset-md-1">
				<h4 class="text-muted mb-3">Imagenes Conoce Mas</h4>
				<table class="table table-responsive">
				    	<thead>
				    		<th>Imagen</th>
				    		<th>Descripcion</th>
				    		<th>Posicion</th>
				    		<th>Opciones</th>
				    	</thead>
				    	<tbody>
				    		<tr>
				    			<td><img src="img/fb_icono.png" width="150" height="150"></td>
				    			<td class="">Imagen del logotipo de la empresa Facebook</td>
				    			<td>LID</td>
				    			<td>
				    				<button class="btn btn-link"><img src="img/icono_modificar.png"></button>
				    				<br>
				    				<button class="btn btn-link"><img src="img/icono_eliminar.png"></button>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td><img src="img/twiter1.png" width="150" height="150"></td>
				    			<td>Imagen del logotipo de la empresa Twitter</td>
				    			<td>LDS</td>
				    			<td>
				    				<button class="btn btn-link"><img src="img/icono_modificar.png"></button>
				    				<br>
				    				<button class="btn btn-link"><img src="img/icono_eliminar.png"></button>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td><img src="img/instagram1.png" width="150" height="150"></td>
				    			<td>Imagen del logotipo de la empresa Instagram</td>
				    			<td>LIS</td>
				    			<td>
				    				<button class="btn btn-link"><img src="img/icono_modificar.png"></button>
				    				<br>
				    				<button class="btn btn-link"><img src="img/icono_eliminar.png"></button>
				    			</td>
				    		</tr>
				    	</tbody>
				    </table>
			</div>
		</section>

	</div>




	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
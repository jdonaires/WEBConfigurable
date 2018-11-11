<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Imagenes</title>
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
			<div class="col-1 offset-5">
				<img  src="icono_config/user.jpg" alt="Foto" class="rounded-circle foto" width="65" height="65">
			</div>
			<div class="col-2">
				<p>Usuario Administrador</p>
				<p>Magallanes Magallanes, Fáride</p>
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
				    Registro Noticias
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				   <a class="dropdown-item" href="Lista_de_Noticias.php">Lista de Noticias</a>
				  </div>
				</div>
				  
					<div class="dropdown opcion_menu">
				  <button class="btn btn-link items dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Registro Conoce mas
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				   <a class="dropdown-item" href="Lista_ConoceMas.php">Lista Conoce mas</a>
				  </div>
				</div>
					
				<div class="dropdown opcion_menu">
				  <button class="btn btn-link items dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Registro Slider
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				   <a class="dropdown-item" href="ListaSlider.php">Lista Slider</a>
				   <a class="dropdown-item" href="RegSlider.php">Registro Slider</a>
				  </div>
				</div>
					
				<div class="dropdown opcion_menu">
				  <button class="btn btn-link items dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Nosotros
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    <a class="dropdown-item" href="RegNosotrosImagenFondo.php">Imagen de Portada</a>
				    <a class="dropdown-item" href="RegNoticia.php">Contenido</a>
				  </div>
				</div>

				</div>
			</div>
		</section>

		<section class="row contenido">
			<div class="col-md-2">
				<button class="btn btn-secondary form-control mb-5 botones" href="ListaSlider.php"><img src="icono_config/icono_lista.png">
					&nbsp Lista de Imágenes
				</button>

				<button class="btn btn-secondary form-control botones" href="RegSlider.php">
				<img src="icono_config/icono_anadir.png">
					&nbsp Agregar Imagen
				</button>
			</div>

			<div class="col-md-8 offset-md-1">
				<h4 class="text-muted mb-3">Imagenes Slider</h4>
				<table class="table table-responsive">
				    	<thead>
				    		<th>Imagen</th>
				    		<th>Descripción</th>
				    		<th>Opcion</th>
				    	</thead>
				    	<tbody>
				    		<tr>
				    			<td><img src="https://images-blogger-opensocial.googleusercontent.com/gadgets/proxy?url=http%3A%2F%2Fdefinicionde.hugex.net%2Fwp-content%2Fuploads%2F2015%2F07%2Fe1001e86903d5fccba2a7e83a0547bd4.jpg&container=blogger&gadget=a&rewriteMime=image%2F*" width="150" height="150"></td>
				    			<td class=""> Descripción de la imagen</td>
				    			
				    			<td>
				    				<button class="btn btn-link"><img src="icono_config/icono_eliminar.png"></button>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td><img src="https://mott.pe/noticias/wp-content/uploads/2016/11/Janette-Asche.jpg" width="150" height="150"></td>
				    			<td>Descripción de la imagen</td>
				    			
				    			<td>
				    				<button class="btn btn-link"><img src="icono_config/icono_eliminar.png"></button> 
				    			</td>
				    		</tr>
				    		<tr>
				    			<td><img src="https://www.paisajesimagenes.com/wp-content/uploads/paisajes-de-paris1.jpg" width="150" height="150"></td>
				    			<td>Descripción de la imagen</td>
				    			
				    			<td>
				    				<button class="btn btn-link"><img src="icono_config/icono_eliminar.png"></button>
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
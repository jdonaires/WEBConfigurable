<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Redes Sociales</title>
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
			color: #3D3B3B;
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
				<p>Usuario: Administrador</p>
				<p>Ormeño Yataco Eduardo</p>
			
			<di class="col-1 offset-7">
			<button class="btn btn-link" style= "position: absolute;bottom: 10px">
			<img src="icono_config/icono_salir.png"></button>
			</di>
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

			<div class="col-md-12">
				<h4 class="text-muted mb-3">Lista de Redes Sociales</h4>
				<table class="table">
				    	<thead>
				    		<th>Imagen</th>
				    		<th>Titulo</th>
				    		<th>Enlace</th>
				    		<th>Eliminar</th>
				    	</thead>
				    	<tbody>
				    		<tr>
				    			<td><img src="icono_config/fb_icono.png" width="60" height="60"></td>
				    			<td class=""> Facebook</td>
				    			<td><a href="https://es-la.facebook.com">https://es-la.facebook.com</a></td>
				    			<td>
				    				<button class="btn btn-link"><img src="icono_config/icono_eliminar.png"width="25" height="25"></button>
				   
				    			</td>
				    		</tr>
				    		<tr>
				    			<td><img src="icono_config/twiter1.png" width="60" height="60"></td>
				    			<td>Twitter</td>
				    			<td><a href="https://es-la.facebook.com">https://es-la.facebook.com</a></td>
				    			<td>
				    				<button class="btn btn-link"><img src="icono_config/icono_eliminar.png"width="25" height="25"></button>
				    				
				    			</td>
				    		</tr>
				    		<tr>
				    			<td><img src="icono_config/instagram1.png" width="60" height="60"></td>
				    			<td> Instagram</td>
				    			<td><a href="https://es-la.facebook.com">https://es-la.facebook.com</a></td>
				    			<td>
				    				<button class="btn btn-link"><img src="icono_config/icono_eliminar.png"width="25" height="25"></button>
				    				
				    			</td>
				    		</tr>
                            <tr>
				    			<td><img src="icono_config/google_mas.png" width="60" height="60"></td>
				    			<td> Google+</td>
				    			<td><a href="https://es-la.facebook.com">https://es-la.facebook.com</a></td>
				    			<td>
				    				<button class="btn btn-link"><img src="icono_config/icono_eliminar.png"width="25" height="25"></button>
				    				
				    			</td>
				    		</tr>
                            <tr>
				    			<td><img src="icono_config/youtube1.png" width="60" height="60"></td>
				    			<td> Youtube</td>
				    			<td><a href="https://es-la.facebook.com">https://es-la.facebook.com</a></td>
				    			<td>
				    				<button class="btn btn-link"><img src="icono_config/icono_eliminar.png"width="25" height="25"></button>
				    				
				    			</td>
				    		</tr>
                            <tr>
				    			<td><img src="icono_config/linkedin1.png" width="55" height="55"></td>
				    			<td> Linkdin</td>
				    			<td><a href="https://es-la.facebook.com">https://es-la.facebook.com</a></td>
				    			<td>
				    				<button class="btn btn-link"><img src="icono_config/icono_eliminar.png"width="25" height="25"></button>
				    				
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
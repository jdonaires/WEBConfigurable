

<?php
require_once('PHP/BOL/Noticias.php');
require_once('PHP/DAO/NoticiasDAO.php');

$per = new Noticias();
$perDAO = new NoticiasDAO();

if(isset($_POST['BtnGuardar']))
{
	echo  $_POST['TxtDescripcion'];
	$per->__SET('IdNoticias', "0");
	$per->__SET('TituloNoticia', $_POST['TxtTituloNoticia']);
	$per->__SET('Descripcion',        $_POST['TxtDescripcion']);
	$per->__SET('Imagen', $_POST['TxtImagen']);
	$per->__SET('URL', $_POST['TxtURL']);
	$per->__SET('Posicion', $_POST['TxtPosicion']);
	$per->__SET('IdUsuario', "1");
	$per->__SET('Opcion', "I");
	
	

	$perDAO->Registrar($per);
	
	

}



?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar Noticia</title>
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
				<p>De La Cruz Huarote, Daniel</p>
			</div>
			<div class="col-1 text-center align-self-center">
				<button class="btn btn-outline-secondary"><img src="img/icono_salir.png"></button>
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
				


				<!-- <a href="login.html" class="btn items">Acceso</a> -->

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

		<section class="row contenido justify-content-center">
			<div class="col-md-8">
				<div class="card">
				  <div class="card-header">
				    	Registro Noticia
				  </div>
				  <div class="card-body">
				    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
					  	<div class="form-group row">
					    	<label for="titulo" class="col-sm-3 col-form-label">Titulo de la Noticia:</label>
					    	<div class="col-sm-8">
					      		<input type="text" class="form-control" id="titulo" placeholder="Titulo de la Noticia" name="TxtTituloNoticia">
								</div>
							

					  	</div>
					  	<div class="form-group row">
					    	<label for="descripcion" class="col-sm-3 col-form-label">Descripcion de la Noticia:</label>
					    	<div class="col-sm-8">
					      		<input type="text" class="form-control" id="descripcion" placeholder="Descripcion de la Noticia" name="TxtDescripcion">
								</div>
								
						


								
					  	</div>
					  	<div class="form-group row">
					  		<div class="col-sm-3">Seleccionar Imagen:</div>
					    	<div class="col-sm-8">
					      		<input type="file" id="archivo" name="TxtImagen">
								</div>
								
								<div class="card-body">
				    <form>
					  	<div class="form-group row">
					    	<label for="titulo" class="col-sm-3 col-form-label">URL:</label>
					    	<div class="col-sm-8">
					      		<input type="text" class="form-control" id="titulo" placeholder="Insertar Url" name="TxtURL">
								</div>



					  	</div>
					  	<div class="form-group row">
					    	<label for="posicion" class="col-sm-3 col-form-label">Posicion:</label>
					    	<div class="col-sm-2">
					      		<select name="TxtPosicion" id="posicion" class="form-control">
					      			<option value="1">1</option>
					      			<option value="2">2</option>
					      			<option value="3">3</option>
					      			<option value="4">4</option>
					      		</select>
					    	</div>
					  	</div>

					 <!-- 	<div class="form-group row">
					    	<label for="contenido" class="col-sm-3 col-form-label">Contenido de la Noticia:</label>
					    	<div class="col-sm-8">
					      		<textarea name="contenido" id="contenido" class="form-control" rows="5"></textarea>
					    	</div>
					  	</div>       -->
					  	
					  	<div class="form-group row">
					  		<div class="col-sm-3"></div>
					  		<div class="col-sm-3">
					      		<button class="btn btn-success text-center">
					      			<img src="img/icono_regresar.png">&nbsp Retornar
					      		</button>
					    	</div>
					    	<div class="col-sm-3">
					      		<input type="submit" class="btn btn-success text-center" name="BtnGuardar" value="Guardar">
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
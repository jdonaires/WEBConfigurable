
<?php
require_once('PHP/BOL/ImagenNosotros.php');
require_once('PHP/DAO/ImagenNosotrosDAO.php');

$per = new ImagenNosotros();
$perDAO = new ImagenNosotrosDAO();

if(isset($_POST['BtnGuardar']))
{
	
	$per->__SET('IdImagenNostros', "0");
	
	$per->__SET('Image', $_POST['TxtImage']);
	$per->__SET('IdUsuario', "1");
	$per->__SET('Opcion', "I");

	

	$perDAO->Registrar($per);
	echo "HolaInsertando2";
	
header('Location: Agregar_Usuario.php');
}



?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar Imagen</title>
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
			color: #767777;
			font-family: 'Georgia';
		}

		.contenido {
			margin-top: 40px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<header class="row">
			<div class="col-3 col-xs-12">
				<img  src="icono_config/logo.png" alt="Logo Empresa" class="icono_config-fluid logo">
			</div>
			<div class="col-1 offset-4">
				<img  src="icono_config/user.jpg" alt="Foto" class="rounded-circle foto" width="65" height="65">
			</div>
			<div class="col-4">
				<p>Usuario Administrador</p>
				<p>Guerra Roman, Briggith</p>
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
				    <a class="dropdown-item" href="RegUsuario.php">Registro Usuario</a>
				    <a class="dropdown-item" href="Lista_De_Usuarios.php">Lista de Usuario</a>
				    <a class="dropdown-item" href="RegPrivilegios.php">Privilegios</a>
				  </div>
				</div>
				


				<!-- <a href="login.html" class="btn items">Acceso</a> -->

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
				    	Actualizar Imagen
				  </div>
				  <div class="card-body">
                  
                  
                  
                  
                  
                  
                  
                  
				    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
				    	<div class="form-group row">
					  		<div class="col-sm-3">Seleccionar Archivo</div>
					    	<div class="col-sm-8">
					      		<input type="file" id="archivo" name="TxtImage">
					    	</div>
					  	</div>
					  	 <div class="form-group row">
					  		<div class="col-sm-3"></div>
					    	<div class="col-sm-8">
					      		<input type="submit" class="btn btn-green text-center" style="background: green; border: green; color:white" value="Guardar" name="BtnGuardar">
					    	</div>
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
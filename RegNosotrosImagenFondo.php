
<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

	$_SESSION['loggedin'] = true;
	$ID=$_SESSION['IdUsuario'];
	$Nombre= $_SESSION['Nombre'] ;



} else {

	header('Location: login.php');

exit;
}

/*--------------------------------------------------*/

require_once('C:\xampp\htdocs\WEBConfigurable\PHP\BOL\Cabecera.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP\DAO\CabeceraDAO.php');

$Cabecera = new Cabecera();
$CabeceraDAO = new CabeceraDAO();

/*Cabecera*/
	$ResulCabecera = array();//VARIABLE TIPO RESULTADO
	$Cabecera->__SET('Opcion', 'T');
$ResulCabecera = $CabeceraDAO->Listar($Cabecera);


					foreach( $ResulCabecera as $ReCa){


						$Logotipo=$ReCa->__GET('Logotipo');



					}

?>
<?php
require_once('PHP/BOL/ImagenNosotros.php');
require_once('PHP/DAO/ImagenNosotrosDAO.php');

$per = new ImagenNosotros();
$perDAO = new ImagenNosotrosDAO();

if(isset($_POST['BtnGuardar']))
{
	$Ruta_Destino = ($_SERVER['DOCUMENT_ROOT'].'/WEBConfigurable/FILE_IMAGE/'.$_FILES['TxtImage']['name']);
	$Ruta_Actual_Img = $_FILES['TxtImage']['tmp_name'];
	move_uploaded_file($Ruta_Actual_Img,$Ruta_Destino);
	$per->__SET('IdImagenNostros', "0");

	$per->__SET('Image', 'FILE_IMAGE/'.$_FILES['TxtImage']['name']);
	$per->__SET('IdUsuario', $ID);
	$per->__SET('Opcion', "I");



	$perDAO->Registrar($per);



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
			<img  src="<?php echo	$Logotipo;?>" alt="Logo Empresa" class="img-fluid logo">
			</div>
			<div class="col-1 offset-5 text-right">
				<img  src="img/user.jpg" alt="Foto" class="rounded-circle foto" width="65" height="65">
			</div>
			<div class="col-2-auto text-right">
				<p>Usuario Administrador</p>
				<p><?php echo $Nombre;?></p>
			</div>
			<div class="col-1 text-center align-self-center">
				<a href="logout.php"><img src="icono_config/icono_salir.png"></a>
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
				    	<!--	<a class="dropdown-item" href="RegPrivilegios.php">Privilegios</a>-->
				  </div>
				</div>

				<div class="dropdown opcion_menu">
				  <button class="btn btn-link items dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Registro Principal
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    <a class="dropdown-item" href="RegCabecera.php">Registro Cabecera</a>
					<a class="dropdown-item" href="RegNostrosIndex.php">Registro Nosotros Pie de Pagina</a>

				  </div>
				</div>

				<div class="dropdown opcion_menu">
				  <button class="btn btn-link items dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Registro Noticias
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				   <a class="dropdown-item" href="Lista_de_Noticias.php">Lista de Noticias</a>
				   <a class="dropdown-item" href="RegNoticia.php">Registro de Noticias</a>

				  </div>
				</div>

					<div class="dropdown opcion_menu">
				  <button class="btn btn-link items dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Registro Conoce mas
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				   <a class="dropdown-item" href="Lista_ConoceMas.php">Lista Conoce mas</a>
					  <a class="dropdown-item" href="RegConoceMas.php">Registro Conoce Mas</a>

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
				    <a class="dropdown-item" href="RegVentanaNosotrosContenido.php">Contenido</a>
				  </div>
				</div>
				<div class="dropdown opcion_menu">
				  <button class="btn btn-link items dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Registro Redes Sociales
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    <a class="dropdown-item" href="Lista_Redes_Sociales.php">Lista Redes Sociales</a>
				    <a class="dropdown-item" href="RegRedesSociales.php">Registro Redes Sociales</a>
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








				    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
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

<?php
require_once('C:\xampp\htdocs\WEBConfigurable\PHP\BOL\Noticias.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP\DAO\NoticiasDAO.php');

$Noticias = new Noticias();
$NoticiasDAO = new NoticiasDAO();

$ResulNoticias = array();//VARIABLE TIPO RESULTADO

	$Noticias->__SET('Opcion', 'T');
$ResulNoticias = $NoticiasDAO->Listar($Noticias); //CARGAMOS LOS REGISTRO EN EL ARRAY RESULTADO


?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Noticias</title>
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
	<header class="row">
			<div class="col-3 col-xs-12">
				<img  src="img/logo.png" alt="Logo Empresa" class="img-fluid logo">
			</div>
			<div class="col-1 offset-5 text-right">
				<img  src="img/user.jpg" alt="Foto" class="rounded-circle foto" width="65" height="65">
			</div>
			<div class="col-2-auto text-right">
				<p>Usuario Administrador</p>
				<p>Romero Orme�o, Camila</p>
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



				<!-- <a href="login.html" class="btn items">Acceso</a> -->

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
		</section>

		<section class="row contenido">


			<div class="col-md-8 offset-md-1">
				<h4 class="text-muted mb-3">Lista de Noticias</h4>
				<table class="table table-responsive">
				    	<thead>
				    		<th>TITULO NOTICIA</th>
				    		<th>DESCRIPCION</th>
				    		<th>IMAGEN</th>
<th>URL</th>

								<th>Opciones</th>
				    	</thead>
				    	<tbody>
								<?php
					foreach( $ResulNoticias as $ReCM){
					echo "<tr>";
	echo "	<td>".$ReCM->__GET('TituloNoticia')."</td>";
		echo "	<td>".$ReCM->__GET('Descripcion')."</td>";
			echo "<td><img src='".$ReCM->__GET('Imagen')."' width='150' height='150'></td>";
echo "	<td>".$ReCM->__GET('URL')."</td>";


				echo	"<td><a href='PHP/ELIMINAR/Eliminar_Noticias.php?a=".$ReCM->__GET('IdNoticias')."'><img src='img/icono_cerrar.png'></a>	</td>";




echo "		</tr>";



					}
					?>

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

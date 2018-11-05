
<?php
require_once('PHP/BOL/Nosotros.php');
require_once('PHP/DAO/NosotrosDAO.php');

$per = new Nosotros();
$perDAO = new NosotrosDAO();

if(isset($_POST['BtnGuardar']))
{
	
	$per->__SET('IdNostros', "0");
	
	$per->__SET('Descripcion', $_POST['TxtDescripcion']);
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
    <title>Pie de Portada</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
	<style>
  	 header {
 	 font-family: Notable;
  	 color: #fff;
   	 background-color: #3e3f42;
  	 padding-top: 20px;
   	 padding-left: 20px;
   	 padding-bottom: 20px;
    	 border-bottom: 4px #fff solid;
	}

	header .logo {
 	 min-height: 62px;
   	 max-height: 62px;
  	 min-width: 155px;
	}

	.menu {
 	 background-color: #f2f2f2;
	}
	
	.opcion_menu {
 	 margin-right: 20px;
	}
	
	.items {
 	 color: #767777;
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
                <img src="icono_config/logo.png" alt="Logo Empresa" class="img-fluid logo">
            </div>
            <div class="col-1 offset-4">
                <img src="icono_config/user.jpg" alt="Foto" class="rounded-circle foto" width="65" height="65">
            </div>
            <div class="col-4">
                <p>Usuario Administrador</p>
                <p>Romero Ormeño, Camila</p>
			</div>
	    <div class="col-1 offset-7">
	 	<button class="btn btn-link" style= "position: absolute;bottom: 10px">
		<img src="icono_config/icono_salir.png"></button>
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
                            <a class="dropdown-item" href="pie.php">Pie de Portada</a>
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
                        Actualizar Pie de Portada
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                            <div class="form-group row">
                                <label for="titulo" class="col-sm-3 col-form-label">Nosotros (Contenido) <br><br>50 carácteres max.</label>
                                
                                <div class="col-sm-8">
                                    
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="TxtDescripcion"></textarea>
                                </div>
                            </div>
                           

                            <div class="form-group row">
                                <div class="col-sm-5 "></div>
                                
                                <div class="col-sm-3">
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
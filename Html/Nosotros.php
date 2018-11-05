<?php

require_once('C:\xampp\htdocs\WEBConfigurable\PHP\BOL\InfoNosotros.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP\DAO\InfoNosotrosDAO.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP\BOL\ImagenNosotros.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP\DAO\ImagenNosotrosDAO.php');

$Usu = new InfoNosotros();
$UsuDAO = new InfoNosotrosDAO();

$ImagenNosotros = new ImagenNosotros();
$ImagenNosotrosDAO = new ImagenNosotrosDAO();

	$resultado = array();//VARIABLE TIPO RESULTADO
	
$Usu->__SET('Opcion',          'T');
	$resultado = $UsuDAO->Listar($Usu); //CARGAMOS LOS REGISTRO EN EL ARRAY RESULTADO
	


						foreach( $resultado as $r){
							
							//RECORREMOS EL ARRAY RESULTADO A TRAVES DE SUS CAMPOS
						
						

						}





$resultado2 = array();//VARIABLE TIPO RESULTADO
	
$ImagenNosotros->__SET('Opcion',          'T');
	$resultado2 = $ImagenNosotrosDAO->Listar($ImagenNosotros); //CARGAMOS LOS REGISTRO EN EL ARRAY RESULTADO
	


						foreach( $resultado2 as $r2){
							
							//RECORREMOS EL ARRAY RESULTADO A TRAVES DE SUS CAMPOS
						
						$ruta=$r2->__GET('Image');



}

?>







<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pagina Administrable</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/fontello.css">
	<link rel="stylesheet" href="../css/Nosotros.css">
    <link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/estilo.css">
    
    </head>
<body style ="background: linear-gradient(#EEE15B,#66CB17)">
	<body>
    <header>
        
        <div class="container-header-all">
        <div class="container-columnas">
            <div class="colu1">
                <div class="rowi1">
                <img src="../imagenes/cupcake_delivery.png" alt="">
                <h1>Slogan</h1>
                </div>
            </div>
            
            <div class="colu2">
                <div class="rowi">
                <img src="../iconos/mensaje1.png">
                <h1>paginaadministrable@upsjb.com</h1>
                <img src="../iconos/telefono1.png">
                <h1>(056)264010</h1>
                </div>
            <div class="rowi">
            <a href="https://mail.google.com">
                <img src="../iconos/fb_icono.png">
                </a>
                <a href="https://mail.google.com">
                <img src="../iconos/twiter1.png">
                </a>

                <a href="https://mail.google.com">
                <img src="../iconos/instagram1.png">
                </a>

                <a href="https://mail.google.com">
                <img src="../iconos/google_mas.png">
                </a>
                <a href="https://mail.google.com">
                <img src="../iconos/youtube1.png">
                </a>
                <a href="https://mail.google.com">
                <img src="../iconos/linkedin1.png">
                </a>
            </div>
        </div>
        </div>
        </div>
            
		<div class="contenedor">
			<input type="checkbox" id="menu-bar">
			<label class="icon-menu" for="menu-bar"> </label>
			<nav class="menu">

				<a href="../index.php">Inicio</a>
				<a href="../Html/Nosotros.php">Nosotros</a>
			</nav>
		</div>
	</header>
<main>
		
		<section id="fondo">
			<img src="../imagenes/<?php echo $ruta; ?>">
            
		</section>	

		<section id="Nosotros">
			<div class="contenedor">
			<h3><?php echo $r->__GET('Tema'); ?></h3>
			<p><?php echo $r->__GET('Descripcion'); ?></p>
			</div>
		</section>
		<section id="imagenes">

			<div class="contenedor2">
				<div class="colum_imagenes1"> 
            <div class="fila1">
            <img src="../imagenes/<?php echo $r->__GET('Image1') ?>">
			<img src="../imagenes/<?php echo $r->__GET('Image2') ?>">
        	</div>
           
				</div>
			</div>
		</section>
	</main>
<footer>
        <div class="container-footer-all">
    <div class="container-body">
        <div class="colum1">
            <h1>Nosotros</h1>
            
            <p>
                mmmmmmmmkjhjkjh kjjjjdddddddjhj
                hjhjhjhjjkjdlkj
                flkfdlkjfklfjf
                jcnnvnvnvnvn
                vnvnvnvnvnv
                vnvnvnv
                nvnvnvnvnv
            </p>
            
        </div>
        <div class="colum2">
            <h1>Redes Sociales</h1>
            
            <div class="row">
            <img src="../iconos/fb_icono.png">
            <a href="https://mail.google.com">Facebook </a>
            </div>
            <div class="row">
            <img src="../iconos/twiter1.png">
             <a href="https://mail.google.com">Twiter </a>
            </div>
            <div class="row">
            <img src="../iconos/instagram1.png">
             <a href="https://mail.google.com">Instagram </a>
            </div>
            <div class="row">
            <img src="../iconos/google_mas.png">
             <a href="https://mail.google.com">Google+</a>
            </div>
            <div class="row">
            <img src="../iconos/youtube1.png">
             <a href="https://mail.google.com">YouTube </a>
            </div>
            <div class="row">
            <img src="../iconos/linkedin1.png">
             <a href="https://mail.google.com">Linkedin </a>
            </div>
        </div>
        
        <div class="colum3">
            <h1> Contactanos</h1>
            <div class="row2">
                <img src="../iconos/mensaje1.png">
                <label>paginaadministrable@upsjb.com</label>
            </div>
            <div class="row2">
                <img src="../iconos/telefono1.png">
                <label> 928467529</label>
            </div>
        </div>
        </div>
        <div class="contenedor-footer">
			<p class="copy">Copyright &copy; 2018 Pagina Administrable</p>
        </div>
            
        </div>
    </footer>
	</body>
</html>
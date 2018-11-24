
<?php

require_once('C:\xampp\htdocs\WEBConfigurable\PHP\BOL\Noticias.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP\DAO\NoticiasDAO.php');

require_once('C:\xampp\htdocs\WEBConfigurable\PHP\BOL\Nosotros.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP\DAO\NosotrosDAO.php');

require_once('C:\xampp\htdocs\WEBConfigurable\PHP\BOL\Cabecera.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP\DAO\CabeceraDAO.php');

require_once('C:\xampp\htdocs\WEBConfigurable\PHP\BOL\RedesSociales.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP\DAO\RedesSocialesDAO.php');

require_once('C:\xampp\htdocs\WEBConfigurable\PHP\BOL\Slider.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP\DAO\SliderDAO.php');

require_once('C:\xampp\htdocs\WEBConfigurable\PHP\BOL\ConoceMas.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP\DAO\ConoceMasDAO.php');




$ConoceMas = new ConoceMas();
$ConoceMasDAO = new ConoceMasDAO();

$Slider = new Slider();
$SliderDAO = new SliderDAO();

$RedesSociales = new RedesSociales();
$RedesSocialesDAO = new RedesSocialesDAO();


$Cabecera = new Cabecera();
$CabeceraDAO = new CabeceraDAO();


$Nosotros = new Nosotros();
$NosotrosDAO = new NosotrosDAO();


$Noticias = new Noticias();
$NoticiasDAO = new NoticiasDAO();



	$ResulNoticias = array();//VARIABLE TIPO RESULTADO
	
    $Noticias->__SET('Opcion', 'T');
	$ResulNoticias = $NoticiasDAO->Listar($Noticias); //CARGAMOS LOS REGISTRO EN EL ARRAY RESULTADO


/*CONOCEMAS*/

$ResulConoceMas = array();//VARIABLE TIPO RESULTADO
	
    $ConoceMas->__SET('Opcion', 'T');
	$ResulConoceMas = $ConoceMasDAO->Listar($ConoceMas);


/*SLIDER*/

$ResulSlider = array();//VARIABLE TIPO RESULTADO
	
    $Slider->__SET('Opcion', 'T');
	$ResulSlider = $SliderDAO->Listar($Slider);
	
/*REDES SOCIALES*/

$ResulRedesSociales = array();//VARIABLE TIPO RESULTADO
	
    $RedesSociales->__SET('Opcion', 'T');
	$ResulRedesSociales = $RedesSocialesDAO->Listar($RedesSociales); //CARGAMOS LOS REGISTRO EN EL ARRAY RESULTADO
	
	
	
	
	/*Nosotros*/
    $ResulNosotros = array();//VARIABLE TIPO RESULTADO
    $Nosotros->__SET('Opcion', 'T');
	$ResulNosotros = $NosotrosDAO->Listar($Nosotros);
	
	
						foreach( $ResulNosotros as $ReNo){
							
							$DescripcionRuta=$ReNo->__GET('Descripcion');
						
						

						}
						
						
						
							
	/*Cabecera*/
    $ResulCabecera = array();//VARIABLE TIPO RESULTADO
    $Cabecera->__SET('Opcion', 'T');
	$ResulCabecera = $CabeceraDAO->Listar($Cabecera);
	
	
						foreach( $ResulCabecera as $ReCa){
							
							$Nombre=$ReCa->__GET('NombreOrganizacion');
							$Email=$ReCa->__GET('Email');
							$Telefono=$ReCa->__GET('Telefono');
							$Logotipo=$ReCa->__GET('Logotipo');
						
						

						}

					
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pagina Administrable</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/flexslider.css">
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
    $('.flexslider').flexslider({
        touch: true,
        pauseOnAction: false,
        pauseOnHover: false,
    });
    });
        
    </script>
</head>
    <body style="background-color:#D3D8C8">
    <header>
        <section>
        <div class="container-header-all">
        <div class="container-columnas">
            <div class="colu1">
                <div class="rowi1">
                <img src="imagenes/<?php echo $Logotipo; ?>" alt="">
                <h1><?php echo $Nombre; ?></h1>
                </div>
            </div>
            
            <div class="colu2">
                <div class="rowi">
                <img src="iconos/mensaje1.png">
                <h1><?php echo $Email; ?></h1>
                <img src="iconos/telefono1.png">
                <h1><?php echo $Telefono; ?></h1>
                </div>
            <div class="rowi">
            
            
             <?php 
			foreach( $ResulRedesSociales as $ReRS){
				
				echo "<a href='https:/".$ReRS->__GET('Enlace')."'>";
				echo "<img src='imagenes/".$ReRS->__GET('Imagen')."'>";	
           		echo "</a>";
			
			}
			
			 ?>
            
            
            
            
            
            
           
            </div>
        </div>
        </div>
        </div>
            </section>
		<div class="contenedor">
			<input type="checkbox" id="menu-bar">
			<label class="icon-menu" for="menu-bar"> </label>
			<nav class="menu">

				<a href="index.php">Inicio</a>
				<a href="Html/Nosotros.php">Nosotros</a>
				<a href="Login.php">Acceso</a>
			</nav>
		</div>
	</header>
        <div class="flexslider">  
    <ul class="slides"> 
        <?php 
		foreach( $ResulSlider as $ResulSl){
        echo "<li>";
            echo "<a href='".$ResulSl->__GET('Enlace')."'><img src='imagenes/".$ResulSl->__GET('Imagen')."' alt=''></a>";
            echo "<section class='flex-slider'>";
             echo "<p>".$ResulSl->__GET('Descripcion')."</p></section>";
        echo "</li>";
		}
		?>
     
        </ul>
    </div>
    <main>
        <div class="contenedor_body_all">
        <div class="columnas">

        <div class="colum_imagenes">
            <h1>Conoce mas sobre nosotros</h1>  
            
              <?php 
			foreach( $ResulConoceMas as $ReCM){
			echo " <div class='fila1'>";
			echo "<img src='imagenes/".$ReCM->__GET('URL')."'>";
			echo "<img src='imagenes/".$ReCM->__GET('Image')."'>";	
			echo "</div>";
           		
			}
			?>
            
            
            
        
         </div>
            
        <div class="colum_noticias">
            <h1 >Noticias</h1>
            <div class="fila2">
            
            
            <?php 
			foreach( $ResulNoticias as $ResulNot){
			echo "<a href='".$ResulNot->__GET('URL')."'><div class='noticias_columna'>";
            echo "<img src='imagenes/".$ResulNot->__GET('Imagen')."' alt='' class='noticias_img'>";
           echo  "<div class='noticias_descripcion'>";
              echo "<h2 class='noticias_titulo'>".$ResulNot->__GET('TituloNoticia')."</h2>";
              echo "<div class='noticias_txt'>".$ResulNot->__GET('Descripcion')."</div>";
            echo "</div>                </div></a>";
			
			}
			
			 ?>
            
            
            
            
            
        
          
                </div>
        </div>
        </div>
    </div>
		
	</main>
     <footer>
        <div class="container-footer-all">
    <div class="container-body">
        <div class="colum1">
            <h1>Nosotros</h1>
            
            <p>
                <?php echo $DescripcionRuta; ?>
            </p>
            
        </div>
        <div class="colum2">
            <h1>Redes Sociales</h1>
            
            
            <?php 
			foreach( $ResulRedesSociales as $ReRS){
			echo "<div class='row'>";
			echo "<img src='imagenes/".$ReRS->__GET('Imagen')."'>";	
			echo "<a href='https:/".$ReRS->__GET('Enlace')."'>".$ReRS->__GET('Descripcion');
           		echo "</a></div>";
			}
			?>
            
        </div>
        
        <div class="colum3">
            <h1> Contactanos</h1>
            <div class="row2">
                <img src="iconos/mensaje1.png">
                <label><?php echo $Email; ?></label>
            </div>
            <div class="row2">
                <img src="iconos/telefono1.png">
                <label> <?php echo $Telefono; ?></label>
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
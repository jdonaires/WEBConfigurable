<?php

$ID=$_GET['a'];

require_once('C:\xampp\htdocs\WEBConfigurable\PHP\BOL\Slider.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP\DAO\SliderDAO.php');

$per = new Slider();
$perDAO = new SliderDAO();





	$per->__SET('IdSlider', $ID);
	$per->__SET('Descripcion', $_POST['TxtDescripcion']);
	$per->__SET('Enlace',        $_POST['TxtEnlace']);
	$per->__SET('Imagen', $_POST['TxtImagen']);
	$per->__SET('IdUsuario', "0");
	$per->__SET('Opcion', "D");



	$perDAO->Registrar($per);



header('Location: http://localhost/WEBConfigurable/ListaSlider.php');

?>

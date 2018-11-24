<?php

$ID=$_GET['a'];



require_once('C:\xampp\htdocs\WEBConfigurable\PHP/BOL/RedesSociales.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP/DAO/RedesSocialesDAO.php');

$per = new RedesSociales();
$perDAO = new RedesSocialesDAO();


	$per->__SET('IdRedesSociales', $ID);
	$per->__SET('Descripcion', $_POST['TxtDescripcion']);
	$per->__SET('Enlace',        $_POST['TxtEnlace']);
	$per->__SET('Imagen', $_POST['TxtImagen']);
	$per->__SET('IdUsuario', $ID);
	$per->__SET('Opcion', "D");



	$perDAO->Registrar($per);
header('Location: http://localhost/WEBConfigurable/Lista_Redes_Sociales.php');

?>

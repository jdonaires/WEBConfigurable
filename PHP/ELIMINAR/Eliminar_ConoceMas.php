<?php

$ID=$_GET['a'];

require_once('C:\xampp\htdocs\WEBConfigurable\PHP\BOL\ConoceMas.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP\DAO\ConoceMasDAO.php');

$per = new ConoceMas();
$perDAO = new ConoceMasDAO();



	$per->__SET('IdConoceMas', $ID);
	$per->__SET('Descripcion', $_POST['TxtDescripcion']);
	$per->__SET('URL',        $_POST['TxtImagen1']);
	$per->__SET('Image', $_POST['TxtImagen2']);
	$per->__SET('IdUsuario', "0");
	$per->__SET('Opcion', "D");



	$perDAO->Registrar($per);

header('Location: http://localhost/WEBConfigurable/Lista_ConoceMas.php');

?>

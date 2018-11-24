<?php

$ID=$_GET['a'];



require_once('C:\xampp\htdocs\WEBConfigurable\PHP/BOL/Noticias.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP/DAO/NoticiasDAO.php');

$per = new Noticias();
$perDAO = new NoticiasDAO();



	$per->__SET('IdNoticias', $ID);
	$per->__SET('TituloNoticia', $_POST['TxtTituloNoticia']);
	$per->__SET('Descripcion',        $_POST['TxtDescripcion']);
	$per->__SET('Imagen', $_POST['TxtImagen']);
	$per->__SET('URL', $_POST['TxtURL']);
	$per->__SET('Posicion', $_POST['TxtPosicion']);
	$per->__SET('IdUsuario', "0");
	$per->__SET('Opcion', "D");



	$perDAO->Registrar($per);

header('Location: http://localhost/WEBConfigurable/Lista_de_Noticias.php');

?>

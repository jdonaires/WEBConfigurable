<?php

$ID=$_GET['a'];

require_once('C:\xampp\htdocs\WEBConfigurable\PHP/BOL/Usuario.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP/DAO/UsuarioDao.php');

$per = new Usuario();
$perDAO = new UsuarioDAO();





$per->__SET('IdUsuario', $ID);
$per->__SET('Nombres',          $_POST['TxtNombres']);
$per->__SET('Apellidos',        $_POST['TxtApellidos']);
$per->__SET('Correo', $_POST['TxtCorreo']);
$per->__SET('Contraseña', $_POST['TxtContraseña']);
$per->__SET('Estado', "A");
$per->__SET('Opcion', "D");



$perDAO->Registrar($per);



header('Location: http://localhost/WEBConfigurable/Lista_De_Usuarios.php');

?>

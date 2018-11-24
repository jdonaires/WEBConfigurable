
<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Formulario de Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilo_login.css">

</head>
	<body style ="background: linear-gradient(#CCF76F,#66CB17)">

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
		<h2>Iniciar Sesión</h2>
		<input type="text" placeholder="&#128113; Usuario" name="TxtCorreo">
		<input type="password" placeholder="&#128272; Contraseña" name="TxtContraseña">
		<input type="submit" name= "btnIngresar"value="Ingresar">

		</form>
	</body>
</html>


<?php

require_once('PHP/BOL/Usuario.php');
require_once('PHP/DAO/UsuarioDAO.php');

$Usu = new Usuario();
$UsuDAO = new UsuarioDAO();
if(isset($_POST['btnIngresar']))
{
	$resultado = array();//VARIABLE TIPO RESULTADO
	$Usu->__SET('Correo',          $_POST['TxtCorreo']);
	$Usu->__SET('Contraseña',          $_POST['TxtContraseña']);
	$Usu->__SET('Opcion',          'L');
	$resultado = $UsuDAO->Listar($Usu); //CARGAMOS LOS REGISTRO EN EL ARRAY RESULTADO
	if(!empty($resultado)){ //PREGUNTAMOS SI NO ESTA VACIO EL ARRAY

		foreach( $resultado as $resul){


$_SESSION['loggedin'] = true;
$_SESSION['IdUsuario'] = $resul->__GET('IdUsuario');
$_SESSION['Nombre'] = $resul->__GET('Nombres')." ".$resul->__GET('Apellidos');
echo $_SESSION['Nombre'];

header('Location: VentanaPrincipalConfig.php');

}


	}
	else
	{


	header('Location: http://localhost/WEBConfigurable/Login.php');
	echo "<script language='javascript'>";
echo "alert('Error!! Torna a identificar-te. Les dades no són correctes.')";
echo "</script>";

	}



}
?>

<?php

class Usuario
{
	private $IdUsuario;
	private $Nombres;
	private $Apellidos;
	private $Correo;
	private $Contraseña;
	private $Estado;
	private $Opcion;

	public function __GET($x)
	{
		return $this->$x;
	}
	public function __SET($x, $y)
	{
		return $this->$x = $y;
	}

}
?>

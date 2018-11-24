<?php

class Cabecera
{
	private $IdContacto;
	private $NombreOrganizacion;
	private $Email;
	private $Telefono;
	private $Logotipo;
	private $IdUsuario;
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

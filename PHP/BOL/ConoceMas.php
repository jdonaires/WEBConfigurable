<?php

class ConoceMas
{
	private $IdConoceMas;
	private $Descripcion;
	private $URL;
	private $Image;
	private $IdUsuario;
	private $_Opcion;

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

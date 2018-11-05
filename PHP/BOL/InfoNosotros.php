<?php

class InfoNosotros
{
	private $IdInfoNosotros;
	private $Tema;
	private $Descripcion;
	private $Image1;
	private $Image2;
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

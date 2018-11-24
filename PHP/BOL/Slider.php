<?php

class Slider
{
	private $IdSlider;
	private $Descripcion;
	private $Enlace;
	private $Imagen;
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

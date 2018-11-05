<?php
echo "hola usuario";
class Nosotros
{
	private $IdNosotros;
	private $Descripcion;
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

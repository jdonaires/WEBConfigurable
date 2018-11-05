<?php
echo "hola usuario";
class Noticias
{
	private $IdNoticias;
	private $TituloNoticia;
	private $Descripcion;
	private $Imagen;
	private $URL;
	private $IdUsuario;
	private $Posicion;
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

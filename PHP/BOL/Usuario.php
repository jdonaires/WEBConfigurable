<?php
echo "hola usuario";
class Usuario
{
	private $_IdUsuario;
	private $_Nombres;
	private $_Apellidos;
	private $_Correo;
	private $_Contraseña;
	private $_Estado;
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

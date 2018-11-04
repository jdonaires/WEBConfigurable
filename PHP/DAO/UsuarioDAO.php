<?php
require_once('PHP/DAL/DBAccess.php');
require_once('PHP/BOL/Usuario.php');

class UsuarioDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
			echo "hola";
	}

	public function Registrar(Usuario $Usuario)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL PA_Set_Usuario(?,?,?,?,?,?,?)");
    $statement->bindParam(1,$Usuario->__GET('_IdUsuario'));
		$statement->bindParam(2,$Usuario->__GET('_Nombres'));
		$statement->bindParam(3,$Usuario->__GET('_Apellidos'));
		$statement->bindParam(4,$Usuario->__GET('_Correo'));
		$statement->bindParam(5,$Usuario->__GET('_Contraseña'));
		$statement->bindParam(6,$Usuario->__GET('_Estado'));
		$statement->bindParam(7,$Usuario->__GET('_Opcion'));
	echo "hola";
    $statement -> execute();
	echo "hola";
		} catch (Exception $e)
		{
			die($e->getMessage());
				echo "holae";
		}
	}

	public function Listar(Usuario $Usuario)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call Pa_Get_Usuario(?,?,?)");
			$statement->bindParam(1,$Usuario->__GET('_Correo'));
			$statement->bindParam(2,$Usuario->__GET('_Contraseña'));
			$statement->bindParam(3,$Usuario->__GET('_Opcion'));
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new Usuario();

				$per->__SET('_IdUsuario', $r->IdUsuario);
				$per->__SET('_Nombres', $r->Nombres);
				$per->__SET('_Apellidos', $r->Apellidos);
				$per->__SET('_Correo', $r->Correo);
								$per->__SET('_Contraseña', $r->Contraseña);


				$result[] = $per;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}

?>

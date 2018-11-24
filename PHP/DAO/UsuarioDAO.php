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

	}

	public function Registrar(Usuario $Usuario)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL PA_Set_Usuario(?,?,?,?,?,?,?)");
    $statement->bindValue(1,$Usuario->__GET('IdUsuario'));
		$statement->bindVAlue(2,$Usuario->__GET('Nombres'));
		$statement->bindValue(3,$Usuario->__GET('Apellidos'));
		$statement->bindValue(4,$Usuario->__GET('Correo'));
		$statement->bindValue(5,$Usuario->__GET('Contraseña'));
		$statement->bindValue(6,$Usuario->__GET('Estado'));
		$statement->bindValue(7,$Usuario->__GET('Opcion'));

    $statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());

		}
	}

	public function Listar(Usuario $Usuario)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call Pa_Get_Usuario(?,?,?)");
			$statement->bindValue(1,$Usuario->__GET('Correo'));
			$statement->bindValue(2,$Usuario->__GET('Contraseña'));
			$statement->bindValue(3,$Usuario->__GET('Opcion'));
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new Usuario();

				$per->__SET('IdUsuario', $r->IdUsuario);
				$per->__SET('Nombres', $r->Nombres);
				$per->__SET('Apellidos', $r->Apellidos);
				$per->__SET('Correo', $r->Correo);
								$per->__SET('Contraseña', $r->Contraseña);


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

<?php
require_once('C:/xampp/htdocs/WEBConfigurable/PHP/DAL/DBAccess.php');
require_once('C:/xampp/htdocs/WEBConfigurable/PHP/BOL/Cabecera.php');

class CabeceraDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();

	}

	public function Registrar(Cabecera $Campo)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL PA_Set_Cabecera(?,?,?,?,?,?,?)");
    $statement->bindValue(1,$Campo->__GET('IdContacto'));
		$statement->bindValue(2,$Campo->__GET('NombreOrganizacion'));
		$statement->bindValue(3,$Campo->__GET('Email'));
		$statement->bindValue(4,$Campo->__GET('Telefono'));
		$statement->bindValue(5,$Campo->__GET('Logotipo'));
		$statement->bindValue(6,$Campo->__GET('IdUsuario'));
		$statement->bindValue(7,$Campo->__GET('Opcion'));

    $statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());

		}
	}

	public function Listar(Cabecera $Campo)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call Pa_Get_Cabecera(?)");

			$statement->bindValue(1,$Campo->__GET('Opcion'));
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new Cabecera();
			    $per->__SET('IdContacto', $r->IdContacto);
				$per->__SET('NombreOrganizacion', $r->NombreOrganizacion);
				$per->__SET('Email', $r->Email);
				$per->__SET('Telefono', $r->Telefono);
				$per->__SET('Logotipo', $r->Logotipo);

				$per->__SET('IdUsuario', $r->IdUsuario);



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

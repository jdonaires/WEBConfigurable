<?php
require_once('C:\xampp\htdocs\WEBConfigurable\PHP/DAL/DBAccess.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP/BOL/ConoceMas.php');

class ConoceMasDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();

	}

	public function Registrar(ConoceMas $Campo)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL PA_Set_ConoceMas(?,?,?,?,?,?)");
    	$statement->bindValue(1,$Campo->__GET('IdConoceMas'));
		$statement->bindValue(2,$Campo->__GET('Descripcion'));
		$statement->bindValue(3,$Campo->__GET('URL'));
		$statement->bindValue(4,$Campo->__GET('Image'));
		$statement->bindValue(5,$Campo->__GET('IdUsuario'));
		$statement->bindValue(6,$Campo->__GET('Opcion'));

    $statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());

		}
	}

	public function Listar(ConoceMas $Campo)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call Pa_Get_ConoceMas(?)");

			$statement->bindValue(1,$Campo->__GET('Opcion'));
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new ConoceMas();
			    $per->__SET('IdConoceMas', $r->IdConoceMas);
				$per->__SET('Descripcion', $r->Descripcion);
				$per->__SET('URL', $r->URL);
				$per->__SET('Image', $r->Image);


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

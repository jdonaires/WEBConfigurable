<?php
require_once('C:/xampp/htdocs/WEBConfigurable/PHP/DAL/DBAccess.php');
require_once('C:/xampp/htdocs/WEBConfigurable/PHP/BOL/RedesSociales.php');

class RedesSocialesDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();

	}

	public function Registrar(RedesSociales $Campo)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL PA_Set_RedesSociales(?,?,?,?,?,?)");
    	$statement->bindValue(1,$Campo->__GET('IdRedesSociales'));
		$statement->bindValue(2,$Campo->__GET('Descripcion'));
		$statement->bindValue(3,$Campo->__GET('Enlace'));
		$statement->bindValue(4,$Campo->__GET('Imagen'));

		$statement->bindValue(5,$Campo->__GET('IdUsuario'));
		$statement->bindValue(6,$Campo->__GET('Opcion'));

    $statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());

		}
	}

	public function Listar(RedesSociales $Campo)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call Pa_Get_RedesSociales(?)");

			$statement->bindValue(1,$Campo->__GET('Opcion'));
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new RedesSociales();
			    $per->__SET('IdRedesSociales', $r->IdRedesSociales);
				$per->__SET('Descripcion', $r->Descripcion);
				$per->__SET('Enlace', $r->Enlace);
				$per->__SET('Imagen', $r->Imagen);

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

<?php
require_once('PHP/DAL/DBAccess.php');
require_once('PHP/BOL/Nosotros.php');

class NosotrosDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();

	}

	public function Registrar(Nosotros $Campo)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL PA_Set_Nosotros(?,?,?,?)");
    $statement->bindValue(1,$Campo->__GET('IdNosotros'));

		$statement->bindValue(2,$Campo->__GET('Descripcion'));

		$statement->bindValue(3,$Campo->__GET('IdUsuario'));
		$statement->bindValue(4,$Campo->__GET('Opcion'));

    $statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());

		}
	}

	public function Listar(Nosotros $Campo)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call Pa_Get_Nosotros(?)");

			$statement->bindValue(1,$Campo->__GET('Opcion'));
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new Nosotros();
	$per->__SET('IdNosotros', $r->IdNosotros);

				$per->__SET('Descripcion', $r->Descripcion);

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

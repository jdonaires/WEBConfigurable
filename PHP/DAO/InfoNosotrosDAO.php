<?php
require_once('C:/xampp/htdocs/WEBConfigurable/PHP/DAL/DBAccess.php');
require_once('C:/xampp/htdocs/WEBConfigurable/PHP/BOL/InfoNosotros.php');

class InfoNosotrosDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();

	}

	public function Registrar(InfoNosotros $Campo)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL PA_Set_InfoNosotros(?,?,?,?,?,?,?)");
    	$statement->bindValue(1,$Campo->__GET('IdInfoNosotros'));
		$statement->bindValue(2,$Campo->__GET('Tema'));
		$statement->bindValue(3,$Campo->__GET('Descripcion'));
		$statement->bindVAlue(4,$Campo->__GET('Image1'));
		$statement->bindValue(5,$Campo->__GET('Image2'));
		$statement->bindValue(6,$Campo->__GET('IdUsuario'));
		$statement->bindValue(7,$Campo->__GET('Opcion'));
	echo "hola";
    $statement -> execute();
	echo "hola";
		} catch (Exception $e)
		{
			echo "holae";
			die($e->getMessage());

		}
	}

	public function Listar(InfoNosotros $Campo)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call Pa_Get_InfoNosotros(?)");

			$statement->bindValue(1,$Campo->__GET('Opcion'));
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new InfoNosotros();

				$per->__SET('IdInfoNosotros', $r->IdInfoNosotros);
				$per->__SET('Tema', $r->Titulo);
				$per->__SET('Descripcion', $r->Descripcion);
				$per->__SET('Image1', $r->Image1);
				$per->__SET('Image2', $r->Image2);
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

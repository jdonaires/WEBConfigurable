<?php
require_once('PHP/DAL/DBAccess.php');
require_once('PHP/BOL/Slider.php');

class SliderDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();

	}

	public function Registrar(Slider $Campo)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL PA_Set_Slider(?,?,?,?,?,?)");
		$statement->bindValue(1,$Campo->__GET('IdSlider'));
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

	public function Listar(Slider $Campo)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call Pa_Get_Slider(?)");

			$statement->bindValue(1,$Campo->__GET('Opcion'));
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new Slider();
				$per->__SET('IdSlider', $r->IdSlider);
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

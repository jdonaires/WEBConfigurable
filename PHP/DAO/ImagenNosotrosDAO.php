<?php
require_once('C:/xampp/htdocs/WEBConfigurable/PHP/DAL/DBAccess.php');
require_once('C:/xampp/htdocs/WEBConfigurable/PHP/BOL/ImagenNosotros.php');

class ImagenNosotrosDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();

	}

	public function Registrar(ImagenNosotros $Campo)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL PA_Set_ImagenNosotros(?,?,?,?)");
    	$statement->bindValue(1,$Campo->__GET('IdImagenNosotros'));
		$statement->bindValue(2,$Campo->__GET('Image'));
		$statement->bindVAlue(3,$Campo->__GET('IdUsuario'));

		$statement->bindValue(4,$Campo->__GET('Opcion'));

    $statement -> execute();

		} catch (Exception $e)
		{

			die($e->getMessage());

		}
	}

	public function Listar(ImagenNosotros $Campo)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call Pa_Get_ImagenNosotros(?)");

			$statement->bindValue(1,$Campo->__GET('Opcion'));
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new ImagenNosotros();

				$per->__SET('IdImagenNosotros', $r->IdImagenNosotros);

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

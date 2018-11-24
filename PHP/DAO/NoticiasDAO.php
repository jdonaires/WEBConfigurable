<?php
require_once('C:\xampp\htdocs\WEBConfigurable\PHP/DAL/DBAccess.php');
require_once('C:\xampp\htdocs\WEBConfigurable\PHP/BOL/Noticias.php');

class NoticiasDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();

	}

	public function Registrar(Noticias $Campo)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL PA_Set_Noticias(?,?,?,?,?,?,?,?)");
    	$statement->bindValue(1,$Campo->__GET('IdNoticias'));
		$statement->bindValue(2,$Campo->__GET('TituloNoticia'));
		$statement->bindValue(3,$Campo->__GET('Descripcion'));
		$statement->bindValue(4,$Campo->__GET('Imagen'));
		$statement->bindValue(5,$Campo->__GET('URL'));
		$statement->bindValue(6,$Campo->__GET('Posicion'));
		$statement->bindValue(7,$Campo->__GET('IdUsuario'));
		$statement->bindValue(8,$Campo->__GET('Opcion'));

    $statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());

		}
	}

	public function Listar(Noticias $Campo)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call Pa_Get_Noticias(?)");

			$statement->bindValue(1,'T', PDO::PARAM_STR);
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new Noticias();
			    $per->__SET('IdNoticias', $r->IdNoticias);
				$per->__SET('TituloNoticia', $r->TituloNoticia);
				$per->__SET('Descripcion', $r->Descripcion);
				$per->__SET('Imagen', $r->Imagen);
				$per->__SET('URL', $r->URL);
				$per->__SET('Posicion', $r->Posicion);
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

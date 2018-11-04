<?php
require_once('PHP/DAL/DBAccess.php');
require_once('PHP/BOL/Noticias.php');

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
    $statement->bindParam(1,$Campo->__GET('IdNoticias'));
		$statement->bindParam(2,$Campo->__GET('TituloNoticia'));
		$statement->bindParam(3,$Campo->__GET('Descripcion'));
		$statement->bindParam(4,$Campo->__GET('Imagen'));
		$statement->bindParam(5,$Campo->__GET('URL'));
		$statement->bindParam(6,$Campo->__GET('Posicion'));
		$statement->bindParam(7,$Campo->__GET('IdUsuario'));
		$statement->bindParam(8,$Campo->__GET('Opcion'));
	echo "hola";
    $statement -> execute();
	echo "hola";
		} catch (Exception $e)
		{
			die($e->getMessage());
				echo "holae";
		}
	}

	public function Listar(Noticias $Campo)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call Pa_Get_Noticias(?)");

			$statement->bindParam(1,$Campo->__GET('Opcion'));
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

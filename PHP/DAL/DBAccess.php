<?php
class DBAccess
{
  private $conn;
  public function __CONSTRUCT()
  {
    try {
      //$this->conn = new PDO('mysql:host=localhost; dbname=pagadmin', 'root', '');
     $this->conn = new PDO('mysql:host=localhost; dbname=pagadmin', 'root', 'root');
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e ) {
      echo "error:" .$e->getMessage();

    }
 }

  public function get_connection()
  {
    return $this->conn;
  }
}
 ?>

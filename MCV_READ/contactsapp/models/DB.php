<?
class DB{

	public function __construct(){
		// try creating new PDO connection to DB - war_dump error in there is a connection issue
		try {

		$dsn  = "mysql:dbname=BDF1403;host=127.0.0.1";
		$db_user = "root";
		$db_pass = "root";

		$this->db = new PDO[$dsn, $db_user, $db_pass];

		} catch (PDOException $error) {
			var_dump($error);
		}
	}


}
?>
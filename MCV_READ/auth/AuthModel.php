<?php



class AuthModel{

	public $db;

	public function __construct($dsn,$user,$pass) {
		$this->db = new \PDO($dsn,$user,$pass);
		$this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);	
	}	

	public function getUserByNamePass($name, $pass) {   //this prepares the SQL statement
		$stmt = $this->db->prepare("
			SELECT user_id AS id, user_name AS name, user_fullname As fullname
			FROM users
			WHERE (user_name = :name)
				AND (user_pass = :pass)

			");

		if ($stmt->execute(array(':name' => $name, ':pass' => $pass))) {
			$rows = $stmt->fetchALL(\PDO::FETCH_ASSOC);  // fetch the rows
				if (count($rows) === 1) {
					return $rows[0];    //only returns the 1st user  (should only be one anyway)
				}

		}
		return FALSE;
	}

}

?>
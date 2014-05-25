<?php 
class DB {
	// class container
	private static $_instance = null;
	private $tablename;
	private $connection;

	// class instantiator
	public static function table($tablename) {
		if(self::$_instance === null) {
			self::$_instance = new self; // object created!
		}
		self::$_instance->tablename = $tablename;
		return self::$_instance;
	}

	public function __construct() {
		try {
			$hostname = Config::getDatabase('hostname');
			$dbname = Config::getDatabase('dbname');
			$username = Config::getDatabase('username');
			$password = Config::getDatabase('password');

			$this->connection = new PDO("mysql:host=$hostname; dbname=$dbname",
					$username, $password);
		} catch(PDOException $e) {
			trigger_error('Database connection failed!', E_USER_ERROR);
		}
	}

	public function get() {
		$query = $this->connection->query('SELECT * FROM ' . $this->tablename);
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

}

 ?>
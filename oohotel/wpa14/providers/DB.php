<?php 
class DB {
	// class container
	private static $_instance = null;
	private $tablename;
	private $connection;
	private $where = false;
	private $whereArray; 

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
					$username, $password, array(
						PDO::ATTR_PERSISTENT => true
				));
		} catch(PDOException $e) {
			trigger_error('Database connection failed!', E_USER_ERROR);
		}
	}

	public function where($array) {
		$this->where = true;
		$this->whereArray = $array;
		return $this;
	}
	
	// SELECT * FROM customers WHERE id = 1 OR name = 'Baung Baung'
	// SELECT * FROM customers WHERE id = :id OR name = :name
	public function get() {
		if($this->where == false) {
			$sql = 'SELECT * FROM ' . $this->tablename;
			$query = $this->connection->query($sql);
			return $query->fetchAll(PDO::FETCH_ASSOC);	
		} else {
			// dump($this->whereArray, true);
			// $sql = "SELECT * FROM customers WHERE name = :name";

			$sql = "SELECT * FROM " . $this->tablename;
			$sql .= ' WHERE ' . array_keys($this->whereArray)[0];
			$sql .= ' = :' . array_keys($this->whereArray)[0];

			$prep = $this->connection->prepare($sql);
			$prep->execute($this->whereArray);
			return $prep->fetch(PDO::FETCH_ASSOC);
		}
		
	}

}

 ?>
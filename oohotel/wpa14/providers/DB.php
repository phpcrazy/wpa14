<?php 
class DB {
	// class container
	private static $_instance = null;

	private $tablename;
	private $connection;

	private $sql; 
	private $execute_array;

	// class instantiator
	public static function table($tablename) {
		if(self::$_instance === null) {
			self::$_instance = new self; // object created!
		}
		self::$_instance->tablename = $tablename;
		self::$_instance->sql = 'SELECT * FROM ' . $tablename;
		self::$_instance->execute_array = array();
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

	public function where($key, $value) {
		$this->sql = 'SELECT * FROM ' . $this->tablename;
		$this->sql .= ' WHERE ' . $key . ' = :' . $key;
		$this->execute_array = array(
			$key => $value
			);
		return $this;
	}

	public function orWhere($key, $value) {
		$this->sql .= ' OR ' . $key .  ' = :' . $key . '2';
		$first_array = serialize($this->execute_array);
		$or_array = array(
			$key . 2 => $value
			);
		$second_array = serialize($or_array);
		$second_count = strlen($second_array);
		$second_array = substr($second_array, 5, $second_count);
		$first_array = str_replace('a:1', 'a:2', $first_array);
		$first_array = substr($first_array, 0, -1);
		$final_array = $first_array . $second_array;
		dump($final_array);
		$this->execute_array = unserialize($final_array);
		dump($this->execute_array);
		return $this;
	}

	public function get() {
		dump($this->sql);
		dump($this->execute_array);
		$prep = $this->connection->prepare($this->sql);
		$prep->execute($this->execute_array);
		return $prep->fetchAll(PDO::FETCH_ASSOC);	
	}

	public function first() {
		$prep = $this->connection->prepare($this->sql);
		$prep->execute($this->execute_array);
		return $prep->fetch(PDO::FETCH_ASSOC);	
	}
}

 ?>
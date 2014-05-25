<?php 

class Config {
	public static function get($key) {
		$config = require DD . '/app/config/app.php';
		return $config[$key];
	}

	public static function getDatabase($key) {
		$config = require DD . '/app/config/database.php';
		return $config[$key];	
	}
}

 ?>
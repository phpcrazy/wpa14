<?php 

function load_config_app($value) {
	$config = require_once DD . '/app/config/app.php';
	return $config[$value];
}

 ?>

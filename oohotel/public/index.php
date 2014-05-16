<?php 

define('DD', __DIR__ . '/../');

require DD . '/vendor/autoload.php';

$base_url = Config::get('base_url');


dump($base_url);

?>
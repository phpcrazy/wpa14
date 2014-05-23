<?php 

define('DD', __DIR__ . '/../');

require DD . '/vendor/autoload.php';

use Wpa14\Application;

$app = new Application();
$app->run();
unset($app);



?>
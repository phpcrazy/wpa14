<?php 
$test1 = memory_get_usage();

define('DD', __DIR__ . '/../');

require DD . '/vendor/autoload.php';

use Wpa14\Application;

$app = new Application();
$app->run();
unset($app);
$test2 = memory_get_usage();
var_dump(($test2 - $test1)/ 1024 . ' K');

?>
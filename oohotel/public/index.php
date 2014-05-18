<?php 

define('DD', __DIR__ . '/../');

require DD . '/vendor/autoload.php';

// Get Request URI
$requestURI = explode('/', $_SERVER['REQUEST_URI']);
// Get Script Name
$scriptName = explode('/',$_SERVER['SCRIPT_NAME']);
// Substract Array
$request_uri = array_diff($requestURI, $scriptName);
// Array Reset
$request_uri = array_values($request_uri);

if(empty($request_uri)) {
	$request_uri[0] = 'home';
}

$route = $request_uri[0];
$passing_variables = array_slice($request_uri, 1);

$routes = array(
	array(
		'route'			=> 'home',
		'controller'	=> 'HomeController@actionIndex'
		),
	array(
		'route'			=> 'blog',
		'controller'	=> 'BlogContoller@actionIndex'
		)
	);

	$i = 0;
	$key_found = false;

	foreach($routes as $r) {
		if($route == $r['route']) {
			$key_found = true;
			$key_index = $i;
		}
		$i++;
	}
	if($key_found == true) {
		$controller = explode('@', $routes[$key_index]['controller']);
		if(class_exists($controller[0])) {
			call_user_func_array(array(new $controller[0], $controller[1]),
				array());
		} else {
			 trigger_error("Controller not found, Idiot!", E_USER_ERROR);
		}
	} else {
		echo "404";
	} 


?>
<?php 


define('DD', __DIR__ . '/../');

require DD . '/src/helpers.php'; 
require DD . '/app/controllers/controller.php'; 


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

$function = $request_uri[0];
$passing_variables = array_slice($request_uri, 1);
dump($passing_variables);

if(function_exists($function)) {
	call_user_func_array($function, array(&$passing_variables));
} else {
	echo "404";
}


// // $epath_info = explode('/', $path_info);
// // var_dump($epath_info);
// die();

// if(isset($_GET['page'])) {
// 	$page = $_GET['page'];
// } else {
// 	$page = 'home';
// }
// if($page == 'blog') {
// 	load_view('blog');
// 	// require DD . '/app/views/blog.php';
// } elseif ($page == 'home') {
// 	load_view('home');
// 	// require DD . '/app/views/home.php';
// } elseif( $page == 'about-us') {
// 	load_view('about');
// } else {
// 	load_view('404');
// }

// // $int = 4;
// // $float = 4.0;

// // if ($int == $float) {
// // 	echo "They are same value";
// // } 

// // if($int === $float) {

// // } else {
// // 	echo "They are not identical!";
// // }


?>
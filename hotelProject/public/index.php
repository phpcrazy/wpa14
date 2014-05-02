<?php 


define('DD', __DIR__ . '/../');

require DD . '/src/helpers.php';  

$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$scriptName = explode('/',$_SERVER['SCRIPT_NAME']);

var_dump($requestURI);
var_dump($scriptName);

$request_uri = array_diff($requestURI, $scriptName);
$request_uri = array_values($request_uri);
var_dump($request_uri);

if($request_uri[0] == 'blog') {
	load_view('blog');
}


// $epath_info = explode('/', $path_info);
// var_dump($epath_info);
die();

if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}
if($page == 'blog') {
	load_view('blog');
	// require DD . '/app/views/blog.php';
} elseif ($page == 'home') {
	load_view('home');
	// require DD . '/app/views/home.php';
} elseif( $page == 'about-us') {
	load_view('about');
} else {
	load_view('404');
}

// $int = 4;
// $float = 4.0;

// if ($int == $float) {
// 	echo "They are same value";
// } 

// if($int === $float) {

// } else {
// 	echo "They are not identical!";
// }


?>
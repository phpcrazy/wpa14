<?php 

define('DD', __DIR__ . '/../');

require DD . '/src/helpers.php';  

if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = '';
}
if($page == 'blog') {
	load_view('blog');
	// require DD . '/app/views/blog.php';
} else {
	load_view('home');
	// require DD . '/app/views/home.php';
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
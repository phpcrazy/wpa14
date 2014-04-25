<?php 

define('DD', __DIR__ . '/../');
if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = '';
}
if($page == 'blog') {
	require DD . '/app/views/blog.php';
} else {
	require DD . '/app/views/home.php';
}

$int = 4;
$float = 4.0;

if ($int == $float) {
	echo "They are same value";
} 

if($int === $float) {

} else {
	echo "They are not identical!";
}


?>
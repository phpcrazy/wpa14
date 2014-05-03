<?php 

function load_view($page) {
	require DD . '/app/views/' . $page . '.php';
}

function dump($dump, $die = false) {
	var_dump($dump);
	if($die == true) {
		die();
	}
}

?>
<?php 

function dump($dump, $die = false) {
	var_dump($dump);
	if($die == true) {
		die();
	}
}
?>
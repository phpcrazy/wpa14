<?php 

function dump($dump, $die = false) {
	var_dump($dump);
	if($die == true) {
		die();
	}
}

function base_url() {
	return load_config_app('base_url');
}

?>
<?php 
// index.php
// $data = array(
// 	'title'	=> 'Myanmar Links',
// 	'site_name'	=> 'Myanmar Tutorials'
// 	);

// View::make('index', $data);

class View {
	public static function make($view, $data) {
		ob_start();
		extract($data);
		require DD . '/app/views/' . $view . '.php';
		ob_end_flush();

	}
}
 ?>
<?php 
// index.php
// $data = array(
// 	'title'	=> 'Myanmar Links',
// 	'site_name'	=> 'Myanmar Tutorials'
// 	);

// View::make('index', $data);

class View {
	public static function make($view, $data = null) {
		ob_start();
		if($data != null) {
			extract($data);
		}
		require DD . '/app/views/' . $view . '.php';
		ob_end_flush();

	}
}
 ?>
<?php 

class HomeController {
	public function __construct() {
		echo "Hi, there!";
	}
	public function actionIndex() {
		$data = array(
			'title'		=> 'Myanmar Links',
			'site_name'	=> 'Myanmar Tutorials'
			);
		View::make('index', $data);
	}
}

 ?>
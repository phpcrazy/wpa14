<?php 

class BlogController {
	public function actionIndex() {	
		$customers = DB::table('customers')->get();
		dump($customers);
	}
}

 ?>
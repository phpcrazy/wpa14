<?php 

class BlogController {
	public function actionIndex() {	
		$customers = DB::table('customers')->get();
		dump($customers);
	}

	public function blog() {
		$customer = DB::table('customers')
					->where(array('id' => '2'))
					->get();
		dump($customer);
		$customers = DB::table('customers')
					->orWhere(array('id' => 2, 'name' => 'Aung Aung'))
					->get();
		dump($customers);
	}
}

 ?>
<?php 

class BlogController {
	public function actionIndex() {	
		$customers = DB::table('customers')->get();
		dump($customers);
	}

	public function blog() {
		// SELECT & FROM customers
		// $customer = DB::table('customers')
		// 			->get();
		// dump($customer);

		// // SELECT * FROM customers limit 1
		// $customer = DB::table('customers')
		// 			->first();
		// dump($customer);

		// // SELECT * FROM customers WHERE name = 'Aung Aung' LIMIT 1
		// $customer = DB::table('customers')
		// 			->where('name', 'Aung Aung')
		// 			->first();
		// dump($customer);

		// SELECT * FROM customers WHERE name = 'Aung Aung' OR name = 'Baung Baung'
		
		$customers = DB::table('customers')
					->where('name', 'Aung Aung')
					->orWhere('name', 'Baung Baung')
					->get();
		dump($customers);
		// $customers = DB::table('customers')
		// 			->orWhere(array('id' => 2, 'name' => 'Aung Aung'))
		// 			->get();
		// dump($customers);
	}
}

 ?>
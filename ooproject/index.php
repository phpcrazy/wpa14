<?php 

class Dog {
	public $leg = 4;
	public $name; 
	public $type;

	public function __construct($name, $type) {
		echo "Constructor Run!";
		$this->name = $name;
		$this->type = $type;
	}
	public function sleep() {
		echo "Dog sleep!";
	}
	public function bark() {
		echo "Woof!";
	}

	public static function deepBark() {
		echo "WOOF! WOOF!";
	}

	public function __destruct() {
		echo "Destruct!";
	}

	public function __call($name, $argument) {
		var_dump($name);
		var_dump($argument);
	}

	public static function __callStatic($name, $arguments) {
		var_dump($name);
		var_dump($arguments);
	}
}

Dog::deepBark(); // scope resolution operator
Dog::beefBark();

$dog = new Dog('Aung Net', 'Terrier');
echo $dog->name;
$dog->leg = 3;
echo $dog->leg;
$dog->bark();
$dog->sleep();
$dog->greed('Hi');
unset($dog); // Object Destroy





?>
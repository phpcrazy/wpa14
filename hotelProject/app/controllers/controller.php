<?php 

function news($array) {
	echo "Your category is news";
	var_dump($array);
}

function home() {
	load_view('home');
}

function blog() {
	load_view('blog');
}

function test() {
	echo "Testing One, Two, Three ";
}

 ?>
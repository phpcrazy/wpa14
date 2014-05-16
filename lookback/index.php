<?php 

$num = 4.0;
$num1 = (integer) $num;
echo gettype($num1);

$mystr = "Jello, world!";
$mystr{0} = 'H';
echo $mystr . "<br />";

// variable variable
$foo = "Myanmar Links <br />";
$bar = "foo";
$wom = "bar";
$bat = "wom";

print $foo;
print $$bar; 
print $$$wom;
print $$$$bat;

// var_dump($GLOBALS);
// var_dump($_POST);
// var_dump($_GET);
// var_dump($_REQUEST);
// var_dump($_ENV); // ***

$a = 10;
$b =& $a;
print $b;
$a = 50;
print $b; // will print 50

define("CURRENT_TIME", time());
echo CURRENT_TIME;

// Pre-set constant

var_dump(__FILE__);
var_dump(__LINE__);
test();
function test() {
	var_dump(__FUNCTION__);
}

// __CLASS__
// __METHOD__

// if($i == 1 AND $i == 4) { // && OR ||

// }

$numa = 56;
$numb = 65;
echo $numa + $numb;
echo $numa % $numb;
$test = "How are you";
$hello = <<<ROR
	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>$test</title>
	</head>
	<body>
		
	</body>
	</html>
ROR;
echo $hello;
 ?>
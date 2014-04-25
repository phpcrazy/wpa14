<?php 
/*
var_dump($GLOBALS);
var_dump($_GET); // $GLOBALS['_GET']
var_dump($_POST);
var_dump($_COOKIE);
var_dump($_FILES);
var_dump($_REQUEST);
var_dump($_SERVER);
var_dump($_ENV);
*/

/*

7 parts of GLOBALS REQUEST ARRAY
1. _GET - URL Request
/ 2. _POST - Header Request
/ 3. _FILES - File Uploading Request
===============
6. _REQUEST - Collactive Request

4. _COOKIE - User State / SESSION - Server State
5. _ENV -

7- _SERVER - User Agent + Server Data

URI Request
*/

ob_start();
$name = $_GET['name'];
echo "Hello World!" . "<br />";
echo "How are you?" . $name;
$temp = ob_get_clean();
echo $temp;


 ?>
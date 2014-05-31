<?php 

return array(
	array(
		'route'			=> 'blog',
		'controller'	=> 'BlogController@actionIndex'
		),
	array(
		'route'		=> '',
		'controller'	=> 'HomeController@actionIndex'
		),
	array(
		'route'			=> 'newblog',
		'controller'	=> 'BlogController@blog'
		)
	
	);
?>
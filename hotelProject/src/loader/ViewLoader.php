<?php 

function load_view($page) {
	require DD . '/app/views/' . $page . '.php';
}

function load_css($link) {
	$html = '<link rel="stylesheet" href="';
	$html .= base_url();
	$html .= $link;
	$html .= '">';
	$html .= "\n";
	echo $html;
}

function load_js($link) {
	$html = '<script src="';
	$html .= base_url(); 
	$html .= $link;
	$html .= '"></script>';
	$html .= "\n";
	echo $html;
}

 ?>
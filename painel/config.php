<?php 
	require 'environment.php';
	define("BASE", "http://localhost/loja/painel");

	global $config;
	$config = array();
	if (ENVIRONMENT == "development") {
		$config['dbname'] = 'loja';
		$config['host']   = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
	}else{
		$config['dbname'] = 'loja';
		$config['host']   = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
	}

 ?>
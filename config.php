<?php
require 'environment.php';



$config = array();


if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/fredyoliveira/");
	$config['dbname']='fredy_db';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}
else{

		define("BASE_URL", "https://fredyoliveira.com.br/");
        $config['dbname']='';
	$config['host']='mysql.hostinger.com.br';
	$config['dbuser']='';
	$config['dbpass']='';
}



<?php 


	// Database 
	define('DB_HOST','localhost');
	define('DB_NAME','msn');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','jordan96');

	try{
		$bd = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST.'', DB_USERNAME, DB_PASSWORD , array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$bd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		die('ERROR '.$e->getMessage()); 
	}
	
?>
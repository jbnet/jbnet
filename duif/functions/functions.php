<?php

function connect_to_database(){
	
	include_once 'config.php';
	$db = null; 
	//$conn = 'mysql:host='. DB_HOST . ';DB_NAME=' . DB_NAME;
	$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	

}


?>
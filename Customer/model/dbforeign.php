<?php

    $dbName = 'foreign_product';
	$host = 'localhost';
	$dbUser = 'root';
	$dbPass = '';
	function getConnection()
	{
		global $host, $dbUser, $dbPass, $dbName; 
		$connection = mysqli_connect($host, $dbUser, $dbPass, $dbName);
		return $connection;
	}
?>
<?php
	// Enable Error Reporting
	//===================================================
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
	
	// Variables
	//===================================================
	$host = "localhost";
	$user = "root";
	$password = "Gold1487$";
	$database = "gwd471";
	
	// Connect to Database Server
	$db = mysqli_connect($host,$user);
	
	if(!$db) {
		die("Failed to connect");
	}
	
	// Select Database
	mysqli_select_db($db, $database);
?>
<?php
	/*
		Nick MacFarland
		CSIS 484-D03
		04/23/20
		Database Connection Page
		Description:
			This is where the database is connected to my "Tennis Hubb" database
			
	Honesty Statement:
		
		- “I promise I wrote this code, line by line, not using any help or any previous code.” 

	*/
	
	require_once 'globals.php';
	
		//Database connection
	$mysqli_link = new mysqli(DATABASE_HOSTNAME, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
	
	if ($mysqli_link->connect_errno) 
		die ("Database connection failed: ".mysqli_connect_error()."<br>");
?>
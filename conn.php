<?php
	$conn = new mysqli("localhost", "root", "", "test");
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>
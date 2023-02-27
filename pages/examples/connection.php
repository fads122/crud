<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "crud";

	$conn = new mysqli ($server, $username, $password, $db);

	if (!$conn){
		echo "Connection failed";
	}else{
		echo "connected succesfully";
	}

?>


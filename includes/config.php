<?php

	

	session_start();



	$server = 'localhost';
	$username ='root';
	$password = '';
	$db = 'myapp';
	// $port = getenv('');

	$con = new mysqli($server, $username, $password, $db );

	if (mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}

?>

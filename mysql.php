<?php

	$servername = "localhost:3307";
	$username = "user";
	$password = "markcoronadocabanes";


	$conn = new mysqli($servername, $username, $password, "blogbuster");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

?>

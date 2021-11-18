<?php

$id =  $_GET["id"];
require './mysql.php';

$sql="DELETE FROM post WHERE id=$id";
	if ($conn->query($sql) === TRUE) {
		header("Location: ./index.php", true, 301);
		exit();
	}
?>

<?php
	$servername = 'localhost';
	$username = "root";
	$password = "";
	$db = "Lab";

	$conn =  mysqli_connect($servername,$username,$password,$db);

	if(!$conn){
		die("Connection failed: ".mysqli_connect_error());
	}
?>

<?php

	$host_ip = "localhost";
	$username = "root";
	$password = "";
	$database = "a03";

	$conn = mysqli_connect($host_ip, $username, $password, $database);

	if(!$conn){
		echo "Debugging error nomber: " . mysqli_connect_errno();
		echo "<br>";
		echo "Debugging error: ". mysqli_connect_error();
		exit;
	}

?>

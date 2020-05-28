<?php
	$host = "localhost";
	$user = "root";
	$pass = "SpaceX175089";
	$db = "DBMS_2020";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Connection Failed [DBMS-2020]:" . $conn->connect_error;
	}
?>

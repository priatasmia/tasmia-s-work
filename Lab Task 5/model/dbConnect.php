<?php

function connect()
{
	$conn = new mysqli("localhost","Tasmia","123456","product_db");
	if($conn->connect_errno){
		die("Connection failed due to " .$conn->connect_error);
	}
	return $conn;
}


?>
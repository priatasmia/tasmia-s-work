<?php 

session_start();

if (isset($_SESSION['username'])) {
	session_destroy();
	header("location:public_home.php");
	
}

else{
	header("location:public_home.php");
}

 ?>
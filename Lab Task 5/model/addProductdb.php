<?php
include'../model/dbConnect.php';
  function addProduct($name,$b_price,$s_price,$display){
	$conn = connect();
	$stmt = $conn->prepare("INSERT INTO products(name,b_price,s_price,display) VALUES(?,?,?,?)");
	$stmt->bind_param("ssss",$name,$b_price,$s_price,$display);
	$res = $stmt->execute();
	return $res;
}
?>
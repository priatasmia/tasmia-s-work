<?php
include'../model/dbConnect.php';
  function updateProduct($name,$b_price,$s_price,$display,$id){
	$conn = connect();
	$stmt = $conn->prepare("UPDATE products SET name= ? , b_price = ? , s_price = ? , display = ?  WHERE id = ?");
	$stmt->bind_param("sssss",$name,$b_price,$s_price,$display,$id);
	$res = $stmt->execute();
	return $res;
}

?>
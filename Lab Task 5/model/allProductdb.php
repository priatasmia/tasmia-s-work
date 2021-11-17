<?php
include '../model/dbConnect.php';
    function getAll(){

	$conn = connect();
	$stmt = $conn->prepare("SELECT * FROM products where display = 1");
	$stmt->execute();
	$record = $stmt->get_result();
	return $record->fetch_all(MYSQLI_ASSOC);
}

function getProduct($id)
{
	$conn = connect();
	$query = $conn->prepare("SELECT * FROM products WHERE id = ?");
	$query->bind_param("s",$id);
	$query->execute();
	$result = $query->get_result();
	return $result->fetch_assoc();
}
function delete($id){

	$conn = connect();
	$stmt = $conn->prepare("DELETE FROM products WHERE id=?");
	$stmt->bind_param("s",$id);
	return $stmt->execute();

}




?>
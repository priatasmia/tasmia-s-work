<?php 
require_once ('../model/view.php');

$tableName = 'product';

if(isset($_POST['submit'])) {
	$data['Name'] = $_POST['name'];
	$data['BuyingPrice'] = $_POST['bprice'];
	$data['SellingPrice'] = $_POST['sprice'];
	if(empty($_POST['display'])){
		$data['display'] = "No";
	}
	else{
		$data['display'] = $_POST['display'];
	}

  if (addProduct($tableName, $data)) {
  	echo '<p>PRODUCT SUCCESSFULLY ADDED !!!</p><br>';
  	echo "<a href='../display.php'>Display Product</a>";
  }
} 
else {
	echo '<p>YOU ARE NOT ALLOWED TO ACCESS THIS PAGE</p>';
}

?>
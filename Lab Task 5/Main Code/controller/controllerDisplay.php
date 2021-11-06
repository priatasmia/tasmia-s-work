<?php 

require_once ('model/view.php');

function fetchAllProducts($tableName){
	return showAllData($tableName);

}

function fetchProduct($tableName, $id){
	return showData($tableName, $id);

}

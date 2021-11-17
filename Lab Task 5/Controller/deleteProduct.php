<?php 

require_once '../model/allProductdb.php';

if (delete($_GET['id'])) {
    echo "Product Deleted";
}

 ?>
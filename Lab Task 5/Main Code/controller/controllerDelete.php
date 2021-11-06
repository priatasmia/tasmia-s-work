<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once '../model/view.php';
$tableName = 'product';


if (deleteProduct($tableName, $_GET['id'])) {
    header('Location: ../display.php');
}
else{
	echo '<p>PRODUCT NOT DELETED!!</p>';
}
 ?>
<?php }
else{
	echo "YOU ARE NOT ALLOWED TO VISIT THIS PAGE";
} ?>
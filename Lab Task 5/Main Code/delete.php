<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once 'controller/controllerDisplay.php';
$tableName = 'product';
$product = fetchProduct($tableName, $_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>DELETE PRODUCT</title>
</head>
<body>
	<fieldset>
<legend><B>DELETE PRODUCT</B></legend> <br>
<form action="controller/controllerDelete.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
<div>Product ID: <?php echo $_GET['id']; ?> <hr>
	Name: <?php echo $product['Name']; ?> <hr>
	Buying Price: <?php echo $product['BuyingPrice']; ?> <hr>
	Selling Price: <?php echo $product['SellingPrice']; ?> <hr>
	Displayable: <?php echo $product['display']; ?>
</div>
<hr>
  <input type="submit" name="submit" value="delete">
</form>
</fieldset>
</body>
</html>
<?php }
else{
	echo "YOU ARE NOT ALLOWED TO VISIT THIS PAGE";
} ?>
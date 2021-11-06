<?php  
require_once 'controller/controllerDisplay.php';
$tableName = 'product';
$products = fetchAllProducts($tableName);

?>
<!DOCTYPE html>
<html>
<head>
	<style>
	table, th, td {
  	border: 2px solid black;
	}
	th, td {
  	padding: 20px;
	}
</style>
	<title>DELETE</title>
</head>
<body>
<fieldset>
<legend><B>DISPLAY</B></legend> <br>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PROFIT</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<?php if($product['display']=='Yes'){ ?>
			<tr>
				<td><?php echo $product['id'] ?></td>
				<td><?php echo $product['Name'] ?></td>
				<td><?php echo $product['SellingPrice']-$product['BuyingPrice'] ?></td>
				<td><a href="editProduct.php?id=<?php echo $product['id'] ?>">Edit</a>&nbsp&nbsp<a href="delete.php?id=<?php echo $product['id'] ?>">Delete</a></td>
			</tr>
		<?php } ?>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</fieldset>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete Product</title>
</head>
<body>
    <?php
include "nav.php";
include '../model/allProductdb.php';
$product = getProduct($_GET['id']);
?>
<fieldset>
    <legend>Delete Product</legend>
    <p>Name : <?php echo $product['name'] ?> </p>
    <p>Buying Price : <?php echo $product['b_price'] ?> </p>
    <p>Selling Price : <?php echo $product['s_price'] ?> </p>
    <?php
    if ($product['display']){
    $dis = 'yes';
} else{
    $dis = 'no';
}

    ?>
    <p>Displayable : <?php echo $dis ?></p>
    <a href="../controller/deleteProduct.php?id=<?php echo $product['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a>
</fieldset>

</body>
</html>


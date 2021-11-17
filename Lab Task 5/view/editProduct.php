<?php 

include '../model/allProductdb.php';
$product = getProduct($_GET['id']);

include "nav.php";

 ?>
<!DOCTYPE html>
<html>
<head>
   <title>Edit Product</title>
</head>
<body>

 <form action="../controller/updateProduct.php" method="POST">
   <fieldset>
   <legend>Edit Profile</legend>
  <label for="name">Name:</label><br>
  <input  type="text" id="name" name="name" value="<?php echo $product['name']; ?>"><br>
  <label for="b_price">Buying Price:</label><br>
  <input  type="text" id="b_price" name="b_price" value="<?php echo $product['b_price']; ?>"><br>
  <label for="s_price">Selling Price:</label><br>
  <input  type="text" id="s_price" name="s_price" value="<?php echo $product['s_price']; ?>"><br> <br>


     <input type="checkbox" id="chk" name="display" <?php if ($product['display']){echo 'checked';} ?> >
     <label for="chk"> Display </label>
     <br><br>

  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

  <input type="submit" name="updateProduct" value="Save">
   
</fieldset>
</form> 

</body>
</html>
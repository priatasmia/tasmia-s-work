<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Show Product</title>
  
</head>
<body>
<?php

  include'../model/allProductdb.php';
  ?> 
  <?php

?>


  <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "GET">
    <fieldset>
      <legend><b>Search Product</b></legend><br>

      <label for="idSearch">Product ID :</label>
      <input type="text" name="idSearch" id="idSearch">
      <span id="idError" style="color: red;"></span>
            <?php echo "&nbsp"; ?>
      <input type="submit" name="search" value="Search" style="height: 20px;width: 110px;background-color: orange;">
    </fieldset>
    <th></th>

  </form>




</body>
</html>
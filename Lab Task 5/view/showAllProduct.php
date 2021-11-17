<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ShowPackage</title>
	
</head>
<body>

<?php
	include '../view/nav.php';
	?>

	<?php
	include'../model/allProductdb.php';
	$userList = getAll();
	?>

    <fieldset>
    <legend >Display</legend><br>
   
	<?php
	echo "<table cellspacing='0' border='1' width='100%' height='auto'>";

		echo "<tr>";
			echo"<th width='25%''>Name</th>";
			echo"<th width='25%''>Profit</th>";
			echo"<th colspan='2' width='50%''>Action</th>";

		echo"</tr>";
		  for ($i=0; $i <count($userList) ; $i++) { 
     	echo"<tr>";
	 echo"<th>" .$userList[$i]["name"] . "</th>";
	 echo"<th>".$userList[$i]["s_price"]-$userList[$i]["b_price"]."</th>";
	 echo"<th><a href='../view/editProduct.php"."?id=".$userList[$i]['id']."'>Edit</a></th>";
	  echo"<th><a href='../view/deleteProductView.php"."?id=".$userList[$i]['id']."'>Delete</a></th>";
     echo"</tr>";

     }
		
	echo"</table>";
	?>
	 </fieldset>
</body>
</html>


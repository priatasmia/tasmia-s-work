    <?php

include'../model/updateProductdb.php';
 $name = $b_price= $s_price= $display=$id= "";
 $nameErr = $b_priceErr = $s_priceErr = "";
$Successfull = $Error = "";
$flag = false;

if($_SERVER['REQUEST_METHOD']==="POST"){
    
    if (empty($_POST['name'])) {
        echo "Name can't be empty";
        $flag = true;
        // code...
    }
    if (empty($_POST['b_price'])) {
     echo "buying price can't be empty";
        $flag = true;
        // code...
    }
    if (empty($_POST['s_price'])) {
        echo "selling pricecan't be empty";
        $flag = true;
        // code...
    }
   

    if(!$flag)
    {
       $name = input_data($_POST['name']);
       $b_price = input_data($_POST['b_price']);
       $s_price = input_data($_POST['s_price']);
       if (isset($_POST['display'])) {
        $display = 1;
    } else {
        $display = 0;
    }
     $id = input_data($_POST['id']);
      
          $result = updateProduct($name,$b_price,$s_price,$display,$id);
          if($result){
            echo " <span style='color: blue;''><b>Product Updated successfully</b> </span>";
          }
          else{
            echo " <span style='color: red;''><b>Can't update the product</b> </span>";
          }
      
      
    }
}

 function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

    ?>
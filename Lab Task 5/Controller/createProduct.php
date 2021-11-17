    <?php

include'../model/addProductdb.php';
 $name = $b_price= $s_price= $display= "";
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
      
          $result = addProduct($name,$b_price,$s_price,$display);
          if($result){
            echo " <span style='color: blue;''><b>Product added successfully</b> </span>";
          }
          else{
            echo " <span style='color: red;''><b>Can't add product</b> </span>";
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
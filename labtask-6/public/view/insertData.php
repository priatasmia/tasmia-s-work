
<?php
// Include config file
require_once "../../model/config.php";

// When form submitted, insert values into the database.
if (isset($_POST['submit'])) {
    // removes backslashes
    $name = $_POST['name'];
   
    $phone   = $_POST['phone'];
   
    $address  = $_POST['address'];
    $age      = $_POST['age'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
   

//insert data into the database table Manager.    
$insert = mysqli_query($dbh,"INSERT INTO `manger`(`name`,`phone`,`address`,`age`,`email`,`PASSWORD`) VALUES ('$name','$phone','$address','$age','$email','$password')");
                 
   
    if ($insert) {
      header('location:login.html');

       
    } else {
       
      echo "Insertion failed"; 
      // alert("Registration Failed");

    }
}
?>  



<scrpt>
   
   </scrpt>
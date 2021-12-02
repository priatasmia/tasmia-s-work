
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

    $num_length =strlen((string)$phone);



 // define variables and set to empty values
 $nameErr = $emailErr = $ageErr  = "";
 $passwordErr = $addressErr = $phoneErr= "";

 

  if (empty($_POST["name"])) {
     $nameErr = "Name is required";
     header('location:addManager.php');
  }else {
     $name = ($_POST["name"]);
  }




 if (empty($_POST["phone"])) {
  $phoneErr = "Phone Number is required";
  header('location:addManager.php');
}

else {
  $phone = ($_POST["phone"]);
}

if( $num_length >= 11){
  header('location:addManager.php');
}
else {
  $phone = ($_POST["phone"]);
}

if (empty($_POST["address"])) {
  $addressErr = "address is required";
  header('location:addManager.php');
}else {
  $address = ($_POST["address"]);
}


if (empty($_POST["age"])) {
  $ageErr = "address is required";
  header('location:addManager.php');
}else {
  $age = ($_POST["age"]);
}


if (empty($_POST["email"])) {
  $emailErr = "Email is required";
}else {
  $email = ($_POST["email"]);
  
  // check if e-mail address is well-formed
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $emailErr = "Invalid email format"; 
  }
}




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




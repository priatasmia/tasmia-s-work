
 <?php
 include_once('insertData.php');
 $nameErr="";
 $phoneErr="";
 $addressErr="";
 $ageErr="";
 $emailErr="";
 $passworrErr="";
 
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


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="login.css">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->



    <!-- Icon -->
    <div class="fadeIn first">
    <h3 style="font-weight: 700;">Add Manager</h3>
    </div>



    <!-- Add Manager Form -->
    <form class="form" action="addManager.php" method="post">
        <input type="text" id="name" class="fadeIn second" name="name" placeholder="Enter your Name ">  
<br>
<span class = "error"> <?php 
  echo $nameErr;
 ?></span>

         <input type="text" id="phone" class="fadeIn second" name="phone" placeholder="Enter your phone number ">
         <br>
<span class = "error"> <?php echo $phoneErr;?></span>

         <input type="text" id="address" class="fadeIn second" name="address" placeholder="Enter your adderss ">
         <br>
<span class = "error"> <?php echo $addressErr;?></span>

         <input type="number" id="age" class="fadeIn second" name="age" placeholder="Enter your age in number ">
         <br>
<span class = "error"> <?php echo $ageErr;?></span>

      <input type="text" id="eamil" class="fadeIn second" name="email" placeholder="Enter your email ">
      <br>
<span class = "error"> <?php echo $emailErr;?></span>

      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Enter your password">
      
      <br>
      <span class = "error"> <?php echo $passworrErr;?></span>

      <input id="submit" type="submit" name="submit" class="fadeIn fourth" value="submit">
    </form>

    <div class="have_account" style="padding-bottom: 20px;">
      <a class="underlineHover" href="login.html">Already have account</a>
    </div>
  </div>
</div>



<style>
    
  .error {color: #FF0000;}
</style>






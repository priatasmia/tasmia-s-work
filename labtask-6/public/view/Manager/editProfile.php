<?php
session_start();
require_once "../../../model/config.php";

$email= $_SESSION['email'];


  //featching data from the data base to check with the user input  
  $select = mysqli_query($dbh,"SELECT * FROM `manger` WHERE `email`='$email' ");
    

  if (mysqli_num_rows($select)>0) {

      $ftch = mysqli_fetch_assoc($select);

    
  
  }

//edit user Information ....................


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $email = $_POST['email'];


    $update = mysqli_query($dbh,"UPDATE `manger` SET `name`='$name',`age`='$age',`phone`='$phone',`email`='$email' WHERE `email`='$email'");
    if($update){

        echo "Updated Successfully";
    }
else{
    echo "Password reset Failed";
}

}
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="../login.css">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    <h3 style="font-weight: 700;"></h3>
    </div>

    <!-- Login Form -->
    <form class="form" action="editProfile.php" method="post">

        <input type="text" id="name" class="fadeIn second" 
        value="<?php echo $ftch['name']; ?>"  name="name">

         <input type="text" value="<?php echo $ftch['phone']; ?>" id="phone" class="fadeIn second" name="phone" placeholder="Enter your phone number ">

         <input type="text" id="address" class="fadeIn second" name="address" value="<?php echo $ftch['address']; ?>" placeholder="Enter your adderss ">


         <input type="number" id="age" class="fadeIn second" name="age"  value="<?php echo $ftch['age']; ?>" placeholder="Enter your age in number ">

      <input type="text" id="eamil"  value="<?php echo $ftch['email']; ?>" class="fadeIn second" name="email" placeholder="Enter your email ">

      

      <input type="submit" name="submit" class="fadeIn fourth" value="edit">
    </form>

  </div>
</div>
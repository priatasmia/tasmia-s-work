<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php 
session_start();
  echo "<div>";include 'basic/header.php';echo "</div>";

 ?>
<table style="width:100%; border: 1px solid black;">
  <tr style="border: 1px solid black;">
    <th style="border: 1px solid black;">
      Account<hr>
      <div style="float: left; text-align: left;">
      * <a href="dashboard.php">Dashboard</a><br><br>
      * <a href="profile.php">View Profile</a><br><br>
      * <a href="changeProfile.php">Edit Profile</a><br><br>
      * <a href="changeProfilePic.php">Change Profile Picture</a><br><br>
      * <a href="changePassword.php">Change Password</a><br><br>
      * <a href="logout.php">Logout</a>
    </div>
    </th>
    <th>
<?php
$flag=1;
$nameErr = $emailErr = $genderErr = $dobErr = $name = $email = $dob = $gender = "";
$userNameErr = "";
$message = '';  
$error = '';
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $flag=0;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) {
      $nameErr = "Only letters white space, period & dash allowed";
      $name ="";
      $flag=0;
    }
    else if (str_word_count($name)<2) {
      $nameErr = "At least two words needed";
      $name ="";
      $flag=0;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email ="";
      $flag=0;
    }
  }

  if (empty($_POST["birthday"])) {
    $dobErr = "DOB is required";
    $flag=0;
  } else {
    $dob = test_input($_POST["birthday"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }

 
  echo "<form method='post' action='". htmlspecialchars($_SERVER['PHP_SELF'])."'>
  <fieldset>
<legend>Edit Profile:</legend><div style='float: left; text-align: right;'>  
  Name: <input type='text' name='name' value='".$name."'>
  <span class='error'>*".  $nameErr."</span>
  <br><hr>
  E-mail: <input type='text' name='email' value='".$email."'>
  <span class='error'>* ". $emailErr."</span>
  <br><hr>
  <fieldset>
  <legend>Gender</legend>
  Gender:
  <input type='radio' name='gender' value='Female' ".$selectf.">Female
  <input type='radio' name='gender' value='Male' ".$selectm.">Male
  <input type='radio' name='gender' value='Other' ".$selecto.">Other
  <span class='error'>* ". $genderErr."</span>
  </fieldset>
  <hr>
  <fieldset>
  <legend>Date Of Birth</legend>
  <input type='date' name='birthday' value='".$dateofbirth."'>
  <span class='error'>* ".$dobErr."</span>
  <br></fieldset><hr>
  <input type='submit' name='submit' value='Change'></div></fieldset>
</form>";

}
?>    
</th>
  </tr>
</table>
<div><?php include 'basic/footer.php';?></div>
</body>
</html>
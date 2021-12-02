<?php
session_start();
require_once "../../../model/config.php";

$email= $_SESSION['email'];


  //featching data from the data base to check with the user input  
  $select = mysqli_query($dbh,"SELECT * FROM `manger` WHERE `email`='$email' ");
    

  if (mysqli_num_rows($select)>0) {

      $ftch = mysqli_fetch_assoc($select);

    
  
  }

$name= $ftch['name'];
$password= $ftch['PASSWORD'];
//edit user Information ....................



?>

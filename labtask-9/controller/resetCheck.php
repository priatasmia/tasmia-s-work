<?php
require_once "../model/config.php";

if (isset($_POST['submit'])) {

    $username = $_POST['email'];
    $password = $_POST['password'];



    $update = mysqli_query($dbh,"UPDATE `manger` SET `PASSWORD`='$password' WHERE `email`='$username'");
    if($update){

        header('location:../public/view/Manager/MchangePassword.php');
    }
else{
    echo "Password reset Failed";
}

}
?>
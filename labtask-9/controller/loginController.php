<?php 
//storing data into the session.................
session_start();
require_once "../model/config.php";
//featching data from the Login from 
if (isset($_POST['submit'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];
//Use of cookie to store login credantial into borowser.
if ($errCount < 1){
    $time = time();
    if (isset($_POST['rmbm'])) {
        setcookie('email', $username, $time + 10);
        setcookie('password', $password, $time + 10);
    }
}
  //featching data from the data base to check with the user input  
    $select = mysqli_query($dbh,"SELECT * FROM `manger` WHERE `email`='$username' and `PASSWORD`='$password'");
    

    if (mysqli_num_rows($select)>0) {

        $ftch = mysqli_fetch_assoc($select);

        if ($ftch['email'] == $username && $ftch['PASSWORD']==$password) {
            $_SESSION['email'] = $ftch['email'];
            header('location:../public/view/Manager/Mdashboard.php');
            echo "Login Successful";
            
        }else{
            echo "Login Failed";
        }
    
    }
}

?>


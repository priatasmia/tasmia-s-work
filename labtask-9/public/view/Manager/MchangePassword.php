<?php
session_start();
require_once "../../../model/config.php";
include_once('Minfo.php');
$email= $_SESSION['email'];


  
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <link rel="stylesheet" href="../login.css">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Manager Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Dashboard</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
   
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
<!-- Sidebar Start from here -->
  <?php
  include_once('sidebar.html');
  ?>
<!-- sidebar end at here -->

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Magager </h1>
          <p>Dashboard</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
         
        </ul>
      </div>

      <div class="row">
  
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Reset Password</h3>
            <div class="tile-body">
              

 <<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->



    <!-- Icon -->
    <div class="fadeIn first">
    <h3 style="font-weight: 700;">Rest Password</h3>
    </div>
    <!-- Login Form -->


    <form  action="../../../controller/resetCheck.php" method="post">
      <input type="text" id="eamil" class="fadeIn second" name="email" placeholder="Enter your account eamil">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Enter a new password">
      <input type="submit" name="submit"class="fadeIn fourth" value="Confirm">
    </form>

   
  </div>
</div>
<!-- Change Password -->
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->



<!-- Script section start from here -->
<script>


  function myFunction() {
    // Get the value of the input field with id="numb"
    let x = document.getElementById("name").value;
    // If x is Not a Number or less than one or greater than 10
    let text;
    if (x =null) {
    
    document.getElementById("numb").placeholder = "please Enter your name!";
      
    } else {
      text = "Input OK";
    }
    document.getElementById("demo").innerHTML = text;
  }


  </script>

  <!-- Script section end  from here -->

  <style>


    ::placeholder {
     color: red;
     
   }
   
   
   </style>


  </body>
</html>



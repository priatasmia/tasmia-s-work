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
            <h3 class="tile-title">Edit Profile</h3>
            <div class="tile-body">
              

 <!-- Edit Info Form -->
 <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    <h3 style="font-weight: 700;"></h3>
    </div>

    <!-- Edit Info Form -->
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
           
        </div>

      </div>
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
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>



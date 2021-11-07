<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
<?php 
session_start();
	echo "<div>";include 'basic/header.php';echo "</div>";

 ?>
<table style="width:90%; border: 2px solid black;">
  <tr style="border: 1px solid black;">
    <th style="border: 2px solid black;">
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
    <th><?php if (isset($_SESSION['username'])) {
	echo "<fieldset>
<legend><B>PROFILE</B></legend><div style= 'margin-right: 900px;float: left; text-align: left;color:black;'> Username: ".$_SESSION['username']."<hr>
	<br>Name: MD EMRUL HASAN EMON<hr>
	<br>Email: imrulhasan003@gmail.com<hr>
	<br>Gender: Male<hr>
	<br>Date Of Birth: 23/09/1998<hr>
	</div>
	<div style= 'float: right;position: absolute;left:600px; top: 240px;color: red;'>
	<fieldset>
	<img src='basic/EMRUL.JPG' alt='Profile Picture' width='250' height='250'>
</fieldset>
	</div></fieldset>";

}?></th>
  </tr>
</table>

<div><?php include 'basic/footer.php';?></div>
</body>
</html>
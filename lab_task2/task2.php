<!DOCTYPE html>
 	<html lang="en">
 	 
 	<head>
 	 
 	<body style="background-color: #fefbd8;">
 	<meta charset="UTF-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Form </title>
 	</head>
 	 
 	<body>
 	 
 	<?php
	

	$nameErr = $mailErr = $dateErr = $genderErr = $degreeErr = 
	$bloodgroupErr = "";
	$fname = $mail = $date = $gender = $bloodgroup =  "";
   
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["fname"])) {
	    $nameErr = "Name is required";
	  } else {
	    $fname = test_input($_POST["fname"]);
	    
	    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
	      $nameErr = "Only letters and white space allowed";
	    }
	  }

	  if (empty($_POST["mail"])) {
	    $emailErr = "Email is required";
	  } else {
	    $mail = test_input($_POST["mail"]);
	   
	    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	      $emailErr = "Invalid email format";
	    }
	  }

	  
	if (empty($_POST["date"])) {
 	$dateErr = "Date is required";
 	} else {
 	$date = test_input($_POST["date"]);
 	 
 	 
 	if (!filter_var($date)) {
 	$dateErr = " Cannot be empty.";
 	}
 	}
 	 



	  if (empty($_POST["gender"])) {
	    $genderErr = "Gender is required";
	  } else {
	    $gender = test_input($_POST["gender"]);
	  }
	}

 	if (empty($_POST["bloodgroup"])) {
 	$bloodgroupErr = "Blood Group is required";
 	} else {
 	$bloodgroup = test_input($_POST["bloodgroup"]);
 	
 	}
 	 
 

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>

 
 	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  <fieldset>
    <legend> <label for="fname">NAME:</label><br></legend>
   
    <input type="text" id="fname" name="fname" value=""><span class="err">*

			<?php 
			if (isset($nameErr)) {
				echo $nameErr; 
			}
			?>
		</span><br>
   <hr>
  </fieldset>

 	<br><br>
 	 <fieldset>
    <legend> <label for="mail">EMAIL:</label><br></legend>
   
    <input type="text" id="mail" name="mail" value=""><span class="err">i
		<?php 
			if (isset($emailErr)) {
				echo $emailErr; 
			}
			?>
		</span><br>
   <hr> 
  </fieldset>
 	<br><br>
 	   <fieldset>
    <legend> <label for="date">DATE OF BIRTH:</label><br></legend>
   
  <input type="date" id="birthday" name="date">
<span class="err">*
		<?php 
			if (isset($dateErr)) {
				echo $dateErr; 
			}
			?>
		</span>
<hr>
    
  </fieldset>
<br><br>
 	
    <fieldset>
    <legend> <label for="gender">GENDER:</label><br></legend>
   
    <input type="radio" id="male" name="gender" value="Male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
 <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><span class="err">*
		<?php 
			if (isset($genderErr)) {
				echo $genderErr; 
			}
			?>
		</span>
<hr>
    
  </fieldset>
 	



 	<fieldset>
    <legend> <label for="degree">DEGREE:</label><br></legend>
 	
 	<input type="checkbox" name="degree[]" value="SSC">
 	<label for="vehicle1"> SSC</label><br>
 	<input type="checkbox" name="degree[]" value="HSC">
 	<label for="vehicle2">HSC</label><br>
 	<input type="checkbox" name="degree[]" value="BSc">
 	<label for="vehicle3">BSC</label><br>
 	<input type="checkbox" name="degree[]" value="MSc">
 	<label for="vehicle3">MSC</label>
 	<span class="error">* <?php echo $degreeErr;?></span>
 	<hr>
 	
 </fieldset>
 	<fieldset>
    <legend> <label for="bloodgroup">BLOOD GROUP:</label><br></legend>
   <input list="bloodgroup" name="bloodgroup">
     <datalist id="bloodgroup">
    <option value="A+">
    <option value="A-">
    <option value="B+">
    <option value="B-">
    <option value="AB+">
    <option value="AB-">
    <option value="O+">
     <option value="O-">	
    	

  </datalist>
<span class="err">*
		<?php 
			if (isset($bloodgroupErr)) {
				echo $bloodgroupErr; 
			}
			?>
  <hr>
   <input type="submit"> 
  </fieldset>

</form>
 
 	 
 	<?php
 echo "<h1>Your Input</h1>";
	echo "Name: ".$fname . "<br>";
	echo"Email: ". $mail . "<br>";
	echo "Dath of Birth: " .$date . "<br>";
	echo "Gender: ". $gender . "<br>";
 	
 	
 	 
 	?>
 	</body>
 	 
 	</html>
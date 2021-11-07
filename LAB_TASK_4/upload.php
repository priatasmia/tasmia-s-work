<!DOCTYPE html>
<html>
<head>
  <title>Uploaded</title>
</head>
<body>
  <?php 
session_start();
  echo "<div>";include 'basic/header.php';echo "</div>";
 ?>
<?php
$target_dir = "basic/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image<br>";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists<br>";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 4000000) {
  echo "Picture size should not be more than 4MB<br>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Sorry, only JPG, JPEG, & PNG files are allowed<br>";
  $uploadOk = 0;
}

 else {
    echo "Sorry, there was a problem uploading your file<br>";
  }
}
?>
<fieldset>
<legend><B>PROFILE PICTURE</B></legend> <br>
<br><img src="<?php echo $target_file; ?>" alt="Profile Picture" width="180" height="200">
</fieldset>
<div><?php include 'basic/footer.php';?></div>
</body>
</html>
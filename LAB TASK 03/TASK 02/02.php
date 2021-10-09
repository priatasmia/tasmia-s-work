<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
   $cpassword=$npassword=$rnpassword="";
   $cpasswordErr=$npasswordErr=$rnpasswordErr="";

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
     if (empty($_POST["cpassword"])) {
       $cpasswordErr = "Current Password is required";
     }
     else {
      $cpassword = test_input($_POST["cpassword"]);

       if (strcmp($cpassword,"Emrul@0000")) {
          $cpasswordErr = "Incorrect Password";
        }

        }

        if (empty($_POST["npassword"])) {
          $npasswordErr = "New Password is required";
        }
        else {
         $npassword = test_input($_POST["npassword"]);

          if (!strcmp($npassword,"Emrul@0000")) {
             $npasswordErr = "Current and New Password can not be same.";
           }

           }

           if (empty($_POST["rnpassword"])) {
             $rnpasswordErr = "Retype New Password is required";
           }
           else {
            $rnpassword = test_input($_POST["rnpassword"]);

             if (strcmp($npassword,$rnpassword)) {
                $rnpasswordErr = "Retype password and New Password need to be same.";
              }

              }
     }





   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }

     ?>

    
    <fieldset align="center">
      <legend><b>CHANGE PASSWORD</b></legend>
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <lebel>Current Password:</lebel> <input type="text" name="cpassword" value="<?php echo $cpassword;?>">
          <span class="error">* <?php echo $cpasswordErr;?></span>
          <br><br>
          <lebel style="color:green">New Password:</lebel>
          <input type="text" name="npassword" value="<?php echo $npassword;?>">
          <span class="error">* <?php echo $npasswordErr;?></span>
          <br><br>
          <lebel style="color:Red">Retype New Password:</lebel>
          <input type="text" name="rnpassword" value="<?php echo $rnpassword;?>">
          <span class="error">* <?php echo $rnpasswordErr;?></span>
          <br><br>
          <hr>
          <input type="submit" name="submit" value="Submit">
          <br><br>

          <span style="color:red">[Current Password is Emrul@0000]</span>

      </form>
    </fieldset>
  </body>
</html>

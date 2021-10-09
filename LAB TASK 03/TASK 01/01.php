<!DOCTYPE html>
<html lang="en">

 
<head>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Form</title>

    

 

<body>
    <?php 
   
    $nameErr = $passwordErr = $newPasswordErr = "";
    $password = $name = $newPassword = "";
    $nc =strlen($name);
    $pc =strlen($password);

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"]))//if that text field is empty
         {
          $nameErr = "Name is required";
        } 
        else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) {
              $nameErr = "Only letters white space, period & dash allowed";
              $name ="";
            }
            else if ($nc<2) {
              $nameErr = "At least two words needed";
              $name ="";
            }
            else if ($nc>2) {
                $nameErr = "ok";
                $name ="";
              }
          }
         

 

          if (empty($_POST["password"])) {
            $passwordErr = "password is required";
          } else {
            $password = test_input($_POST["password"]);
            if ($pc>8)//conditions
             {
              $passwordErr = "must not be less than eight (8) characters.must contain at least one of the special characters (@, #, $,
              %)";
              $password ="";
            }
          }
          if (empty($_POST["newPassword"])) {
            $newPasswordErr = "password is required";
          } else {
            $newPassword = test_input($_POST["password"]);
            if ($password != $newPassword)//conditions
             {
              $newPasswordErr = "New password did not match";
              $newPassword ="";
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
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <!--1st part...-->

 

        <div class="username">
            <h1>Login</h1>
            
            <div class="name">

 

                Name: <input type="text" name="name">
                <span class="error">* <?php echo $nameErr;?></span>
                <br><br>

 

            </div>
            <div class="password">

 

                password: <input type="password" name="password">
                <span class="error">* <?php echo $passwordErr;?></span>
                <br><br>
            </div>
            <hr>
            <input type="checkbox" name="Remember_me"> Remember me <br>

 

            <input type="submit" name="submit" value="Submit"> <a href="http://">Forgot password?</a>

 

        </div>
    </form>
    

 

 

 


</body>

 

</html>
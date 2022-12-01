<?php
require "../../../../Private/Back-End/backendcon.php";

$error = "";
$username = "";
$password = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $username = specialchar($_POST['username']);
  $password = specialchar($_POST['password']);

  $identifier = adminidentifier(60);
  
  // This will check if the email address is already in use and the passwords are matching
  $arr = false;
  $arr['username'] = $username;
  $query = "SELECT * FROM admin_login WHERE username = :username LIMIT 1";
  $statement = $DBCONNECT->prepare($query);
  $checker = $statement->execute($arr);

  if ($checker) {
    $datafound = $statement->fetchALL(PDO::FETCH_OBJ);
    if (is_array($datafound) && count($datafound) > 0) {
      $error = "This username is already being used by another user.";              
    }
  }

  // This will happen if there are no errors and then input the data into the database
  if ($error == "") {

    $arr['identifier'] = $identifier;
    $arr['username'] = $username;
    $arr['password'] = $password;
    
    $adminsignupquery = "INSERT INTO admin_login (identifier, username, password) values (:identifier, :username, :password)";
    $stm = $DBCONNECT->prepare($adminsignupquery);
    $stm->execute($arr);
        
    header("Location: adminlog.php");
    exit;
  }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Health Care Website</title>

        <link rel="stylesheet" href="../../CSS/style.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    </head>

    <body>
        <header>
            <a href="#" class="logo"><img src="../../E-Commerce-Designs/Logos/logo.png" alt=""></a>

            <div class="bx bx-menu" id="menu-icon"></div>

            <ul class="navbar">
                <li><a href="customerlist.php">List Of Customers</a></li>
                <li><a href="customerorder.php">List Of Orders</a></li>

            </ul>

            <div class="header-btn">
                <a href="adminlog.php" class="sign-in" id="sign-in">Sign In</a>
                <a href="">Logout</a>
            </div>
        </header>

    
    <form action="" method="POST">
      <?php 
      if (isset($error) && $error != "") {
        echo $error;
      } ?>

      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
    
        <label for="username"><b>First Name*</b></label>
        <input type="text" placeholder="First Name" name="username" required>
        
        <label for="password"><b>Create Password*</b></label>
        <input type="password" placeholder="Create Password" name="password" required>

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember Me
        </label>
    
        <p>By creating an account you agree to our Terms & Privacy</p>

        <div class="clearfix">
          <button type="submit" value="submit" class="signupbtn">Sign Up</button>
        </div>
      </div>
    </form>
  </body>
</html>
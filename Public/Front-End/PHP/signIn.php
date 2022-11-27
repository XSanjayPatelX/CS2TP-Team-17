<?php
require "../../../Private/Back-End/backendcon.php";

//$error = "";

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION['token']) && isset($_POST['token']) && $_SESSION['token'] == $_POST['token']) {
  
  $email = $_POST['email'];
  if (!preg_match("/^[\w\-]+@[\w\-]+.[\w\-]+$/", $email)) {
    $error = "Please enter a valid email.";
  }

  $password = $_POST['password'];

  if($error == "") {

    $arr['email'] = $email;
    $arr['password'] = $password;

    //read from database
    $query = "SELECT * FROM login_details WHERE email = :email && password = :password LIMIT 1";
    $result = $DBCONNECT->prepare($query);
    $checker = $result->execute($arr);

    if ($checker) {
      $datafound = $result->fetchALL(PDO::FETCH_OBJ);

      if (is_array($datafound) && count($datafound) > 0 ) {
        $datafound = $datafound[0];
        $_SESSION['identifier'] = $datafound->identifier;
        $_SESSION['email'] = $datafound->email;
        
        header("Location: account.php");
        exit;
      }
    }
  }
  $error = "Wrong email or password, please check your login details.";
}
$_SESSION['token'] = individualidentifier(60);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Health Care Website</title>

        <link rel="stylesheet" href="../CSS/style.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    </head>

    <body>
        <header>
            <a href="#" class="logo"><img src="../E-Commerce-Designs/Logos/logo.png" alt=""></a>

            <div class="bx bx-menu" id="menu-icon"></div>

            <ul class="navbar">
                <li><a href="index.php#home">Home</a></li>
                <li><a href="index.php#services">Services</a></li>
                <li><a href="index.php#shopContainer">Products</a></li>
                <li><a href="index.php#about">About</a></li>
                <li><a href="index.php#contactUs">Contact Us</a></li>
                <li><a href="account.php">Account</a></li>
            </ul>

            <div class="header-btn">
                <a href="signUp.php" class="sign-up" id="sign-up">Sign Up</a>
                <a href="signIn.php" class="sign-in" id="sign-in">Sign In</a>
                <a href="">Logout</a>
                <a href="cart.php">Cart</a>                
            </div>
        </header>

    <script src="../JS/main.js"></script>

    <form action="" method="POST">
      <?php 
      if (isset($Error) && $Error != "") {
        echo $Error;
      } ?>

      <div class="container">
        <h1>Sign In</h1>
        <p>Please fill in this form to login to your account.</p>
        <hr>

        <label for="email"><b>Email*</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password*</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <input type="hidden" name="token" value="<?=$_SESSION['token']?>">

        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember Me
        </label>

        <div class="clearfix">
          <button type="submit" value="submit" class="signupbtn">Sign Up</button>
          <a href="index.php#home"><button type="button" class="cancelbtn">Home</button></a>
        </div>
      </div>
    </form>
  </body>
</html>
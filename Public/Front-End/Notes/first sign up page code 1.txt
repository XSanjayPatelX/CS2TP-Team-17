<?php
require "../../../Private/Back-End/backendcon.php";

$error = "";
$email = "";
$password = "";
$passwordrep = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $email = $_POST['email'];
  if (!preg_match("/^[\w\-]+@[\w\-]+.[\w\-]+$/", $email)) {

      $error = "Please enter a valid email.";

  }

  $email = specialchar($_POST['email']);
  $password = specialchar($_POST['password']);
  $passwordrep = specialchar($_POST['passwordrep']);
  
  // Check if username already exists and the passwords are matching
  $arr = false;
  $arr['email'] = $email;
  $query = "SELECT * FROM login_details WHERE email = :email LIMIT 1";
  $statement = $DBCONNECT->prepare($query);
  $checker = $statement->execute($arr);

  if ($checker) {
    $datafound = $statement->fetchALL(PDO::FETCH_OBJ);
    if (is_array($datafound) && count($datafound) > 0) {
      $error = "This email is already being used by another user.";              
    }
    if ($password != $passwordrep) {
      $error = "The passwords are not matching.";
    }
  }

  // Putting the data into the database
  if ($error == "") {

    $arr['email'] = $email;
    $arr['password'] = $password;
    
    $query = "INSERT INTO login_details (email, password) values (:email, :password)";
    $stm = $DBCONNECT->prepare($query);
    $stm->execute($arr);
        
    header("Location: signin.php");
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
    <title>Sign Up</title>

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
      </ul>
      <div class="header-btn">
          <a href="signUp.php" class="sign-up" id="sign-up">Sign Up</a>
          <a href="signIn.php" class="sign-in">Sign In</a>

          <i class='bx bx-shopping-bag' id="cart-icon"></i>
          <div class="cart" id="cart">
              <h2 class="cart-title">Your Cart</h2>
              <div class="cart-content">

              </div>

              <div class="total">
                  <div class="total-title">Total</div>
                  <div class="total-price">£0</div>
              </div>

              <button type="button" class="btn-buy">Buy Now</button>

              <i class='bx bx-x' id="close-cart"></i>
          </div>
      </div>
    </header>

    <script src="../JS/main.js"></script>
    
    <form action="" method="POST">
      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
    
        <label for="email"><b>Email Address*</b></label>
        <input type="text" placeholder="Enter Email Address" name="email" required>
    
        <label for="password"><b>Create Password*</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
    
        <label for="passwordrep"><b>Repeat Password*</b></label>
        <input type="password" placeholder="Repeat Password" name="passwordrep" required>

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember Me
        </label>

        <p id="message"></p>
    
        <p>By creating an account you agree to our Terms & Privacy</p>

        <div class="clearfix">
          <button type="submit" value="submit" class="signupbtn">Sign Up</button>
          <a href="index.php#home"><button type="button" class="cancelbtn">Home</button></a>
        </div>
      </div>
    </form>
  </body>
</html>
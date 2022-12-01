<?php
require "../../../Private/Back-End/backendcon.php";

$error = "";
$name = "";
$email = "";
$password = "";
$passwordrep = "";
$birth = "";
$housenumber = "";
$streetname = "";
$townname = "";
$postcode = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $email = $_POST['email'];
  if (!preg_match("/^[\w\-]+@[\w\-]+.[\w\-]+$/", $email)) {
      $error = "Please enter a valid email.";
  }

  $name = $_POST['name'];
  if (!preg_match("/^(?![\s.]+$)[a-zA-Z\s.]*$/", $name)) {
      $error = "Please enter a valid email.";
  }

  $name = specialchar($_POST['name']);
  $email = specialchar($_POST['email']);
  $password = specialchar($_POST['password']);
  $passwordrep = specialchar($_POST['passwordrep']);
  $birth = specialchar($_POST['birth']);
  $housenumber = specialchar($_POST['housenumber']);
  $streetname = specialchar($_POST['streetname']);
  $townname = specialchar($_POST['townname']);
  $postcode = specialchar($_POST['postcode']);

  $identifier = individualidentifier(60);
  
  // This will check if the email address is already in use and the passwords are matching
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

  // This will happen if there are no errors and then input the data into the database
  if ($error == "") {

    $arr['identifier'] = $identifier;
    $arr['name'] = $name;
    $arr['email'] = $email;
    $arr['password'] = $password;
    $arr['birth'] = $birth;
    $arr['housenumber'] = $housenumber;
    $arr['streetname'] = $streetname;
    $arr['townname'] = $townname;
    $arr['postcode'] = $postcode;
    
    $signupquery = "INSERT INTO login_details (identifier, name, email, password, birth, housenumber, streetname, townname, postcode) values (:identifier, :name, :email, :password, :birth, :housenumber, :streetname, :townname, :postcode)";
    $stm = $DBCONNECT->prepare($signupquery);
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
      if (isset($error) && $error != "") {
        echo $error;
      } ?>

      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
    
        <label for="name"><b>Full Name*</b></label>
        <input type="text" placeholder="Full Name" name="name" required>

        <label for="email"><b>Email Address*</b></label>
        <input type="text" placeholder="Enter Email Address" name="email" required>
        
        <label for="password"><b>Create Password*</b></label>
        <input type="password" placeholder="Create Password" name="password" required>
    
        <label for="passwordrep"><b>Repeat Password*</b></label>
        <input type="password" placeholder="Re-Enter Password" name="passwordrep" required>

        <label for="birth"><b>Date Of Birth*</b></label>
        <input type="date" placeholder="Enter Date Of Birth (DD/MM/YY)" name="birth" required>

        <label for="housenumber"><b>House Number*</b></label>
        <input type="text" placeholder="Enter House Number" name="housenumber" required>

        <label for="streetname"><b>Street Name*</b></label>
        <input type="text" placeholder="Enter Street Name" name="streetname" required>

        <label for="townname"><b>Town Name*</b></label>
        <input type="text" placeholder="Enter Town Name" name="townname" required>

        <label for="postcode"><b>Postcode*</b></label>
        <input type="text" placeholder="Enter Postcode" name="postcode" required>

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember Me
        </label>
    
        <p>By creating an account you agree to our Terms & Privacy</p>

        <div class="clearfix">
          <button type="submit" value="submit" class="signupbtn">Sign Up</button>
          <a href="index.php#home"><button type="button" class="cancelbtn">Home</button></a>
          <a href="signUp.php"><button type="button" class="signinaccbtn">Already got an account. Click here to sign in.</button></a>
        </div>
      </div>
    </form>
  </body>
</html>
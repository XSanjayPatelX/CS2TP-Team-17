<!-- PHP -->
<?php
// Getting files from the private folder
require "../../../Private/Back-End/backendcon.php";

// Using if statement to create a local login save until logout is clicked
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION['token']) && isset($_POST['token']) && $_SESSION['token'] == $_POST['token']) {
  
  // Regex for email input field
  $email = $_POST['email'];
  if (!preg_match("/^[\w\-]+@[\w\-]+.[\w\-]+$/", $email)) {
    $error = "Please enter a valid email.";
  }

  $password = $_POST['password'];
  
  // If statement to continue with sign in process if there are no errors
  if($error == "") {

    $arr['email'] = $email;
    $arr['password'] = $password;

    // Reads from the database to see if the email and password matches the user trying to sign in
    $login_match = "SELECT * FROM login_details WHERE email = :email && password = :password LIMIT 1";
    $login_match_result = $DBCONNECT->prepare($login_match);
    $checker = $login_match_result->execute($arr);

    if ($checker) {
      $datafound = $login_match_result->fetchALL(PDO::FETCH_OBJ);

      if (is_array($datafound) && count($datafound) > 0 ) {
        $datafound = $datafound[0];
        $_SESSION['identifier'] = $datafound->identifier;
        $_SESSION['name'] = $datafound->name;
        $_SESSION['email'] = $datafound->email;
        $_SESSION['birth'] = $datafound->birth;
        $_SESSION['housenumber'] = $datafound->housenumber;
        $_SESSION['streetname'] = $datafound->streetname;
        $_SESSION['townname'] = $datafound->townname;
        $_SESSION['postcode'] = $datafound->postcode;
        
        header("Location: account.php");
        exit;
      }
    }
  }
  // An error to let the user know if their login details are wrong
  $error = "Wrong email or password, please check your login details.";
}
// The token for the current user to keep them logged in
$_SESSION['token'] = individualidentifier(60);
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
  <!-- Headers for the web page -->
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Health Care Website - Sign In</title>

      <link rel="stylesheet" href="../CSS/style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  </head>

  <!-- Body for the web page -->
  <body>
    <!-- Navbar -->
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
            <a href="cart.php">Cart</a>                
        </div>
    </header>

    <!-- Main web page stuff -->
    <!-- Main web page - Sign in form -->
    <form action="" method="POST">
      <?php 
      // This is for any errors to be printed for all users to see
      if (isset($error) && $error != "") {
        echo $error;
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
          <button type="submit" value="submit" class="signupbtn">Sign In</button>
          <a href="index.php#home"><button type="button" class="cancelbtn">Home</button></a>
          <a href="signUp.php"><button type="button" class="createaccbtn">Haven't got an account. Click here to sign up.</button></a>
        </div>
      </div>
    </form>
  </body>
</html>
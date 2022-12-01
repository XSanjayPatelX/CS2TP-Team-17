<!-- PHP -->
<?php
// Getting files from the private folder
require "../../../../Private/Back-End/backendcon.php";

// For the variables to be empty
$error = "";
$username = "";
$password = "";

// Using if statement to creating an account although this page wont be accessable to anyone unless they know the filename and link
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $username = specialchar($_POST['username']);
  $password = specialchar($_POST['password']);

  $identifier = adminidentifier(60);
  
  // Reads from the database to see if the username is already used when signing up
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


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
  <!-- Headers for the web page -->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Website</title>

    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  </head>

  <!-- Body for the web page -->
  <body>
    <!-- Navbar -->
    <header>
      <a href="#" class="logo"><img src="../../E-Commerce-Designs/Logos/logo.png" alt=""></a>
      <div class="bx bx-menu" id="menu-icon"></div>
      <ul class="navbar">
        <li><a href="customerdetails.php">Customers Detials</a></li>
      </ul>

      <div class="header-btn">
        <a href="adminlog.php" class="sign-in" id="sign-in">Sign In</a>
        <a href="">Logout</a>
      </div>
    </header>

    <!-- Main web page stuff -->
    <!-- Main web page - creating an admin account -->
    <form action="" method="POST">
      <?php 
      // This is for any errors to be printed for all users to see
      if (isset($error) && $error != "") {
        echo $error;
      } ?>

      <div class="container">
        <h1>Admin Sign Up</h1>
        <p>Fill this form in for admin users.</p>
        <hr>
    
        <label for="username"><b>First Name*</b></label>
        <input type="text" placeholder="First Name" name="username" required>
        
        <label for="password"><b>Create Password*</b></label>
        <input type="password" placeholder="Create Password" name="password" required>

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember Me
        </label>

        <div class="clearfix">
          <button type="submit" value="submit" class="signupbtn">Sign Up</button>
        </div>
      </div>
    </form>
  </body>
</html>
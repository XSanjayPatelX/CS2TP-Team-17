<!-- PHP -->
<?php
// If statement to continue with sign in process if there are no errors
require "../../../../Private/Back-End/backendcon.php";

// For the variables to be empty
$error = "";

// Using if statement to create a local login save until logout is clicked for admins
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION['admintoken']) && isset($_POST['admintoken']) && $_SESSION['admintoken'] == $_POST['admintoken']) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  if($error == "") {

    $arr['username'] = $username;
    $arr['password'] = $password;

    // Reads from the database to see if the username and password match for the user trying to login
    $ad_query = "SELECT * FROM admin_login WHERE username = :username && password = :password LIMIT 1";
    $adm_result = $DBCONNECT->prepare($ad_query);
    $checker = $adm_result->execute($arr);

    if ($checker) {
      $datafound = $adm_result->fetchALL(PDO::FETCH_OBJ);

      if (is_array($datafound) && count($datafound) > 0 ) {
        $datafound = $datafound[0];
        $_SESSION['identifier'] = $datafound->identifier;
        $_SESSION['username'] = $datafound->username;
        
        header("Location: ../Admin/customerdetails.php");
        exit;
      }
    }
  }
  // An error to let the user know if their login details are wrong
  $error = "Wrong email or password, please check your login details.";
}
// The token for the admin to keep them logged in
$_SESSION['admintoken'] = adminidentifier(60);
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
      <a href="../index.php#home" class="logo"><img src="../../E-Commerce-Designs/Logos/logo.png" alt=""></a>
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
    <!-- Main web page - sign in for admins-->
    <form action="" method="POST">
      <div class="container">
        <h1>Admin Sign In</h1>
        <p>Sign in as an admin.</p>
        <hr>

        <label for="username"><b>First Name*</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="password"><b>Password*</b></label>
        <input type="text" placeholder="Enter Password" name="password" required>

        <input type="hidden" name="admintoken" value="<?=$_SESSION['admintoken']?>">

        <div class="clearfix">
          <button type="submit" value="submit" class="signupbtn">Sign In</button>
        </div>
      </div>
    </form>
  </body>
</html>
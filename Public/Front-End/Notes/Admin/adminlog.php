<?php
require "../../../../Private/Back-End/backendcon.php";

$error = "";

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION['admintoken']) && isset($_POST['admintoken']) && $_SESSION['admintoken'] == $_POST['admintoken']) {

  $password = $_POST['password'];

  if($error == "") {

    $arr['username'] = $username;
    $arr['password'] = $password;

    //read from database
    $ad_query = "SELECT * FROM admin_login WHERE username = :username && password = :password LIMIT 1";
    $adm_result = $DBCONNECT->prepare($ad_query);
    $checker = $adm_result->execute($arr);

    if ($checker) {
      $datafound = $adm_result->fetchALL(PDO::FETCH_OBJ);

      if (is_array($datafound) && count($datafound) > 0 ) {
        $datafound = $datafound[0];
        $_SESSION['identifier'] = $datafound->identifier;
        $_SESSION['username'] = $datafound->username;
        
        header("Location: customerlist.php");
        echo $_SESSION['identifier'];
        echo $_SESSION['username'];
        exit;
      }
    }
  }
  $error = "Wrong email or password, please check your login details.";
}
$_SESSION['admintoken'] = adminidentifier(60);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Health Care Website</title>

        <link rel="stylesheet" href="../../../CSS/style.css">

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
      <div class="container">
        <h1>Sign In</h1>
        <p>Please fill in this form to login to your account.</p>
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
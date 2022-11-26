<?php
require "../../../Private/Back-End/backendcon.php";

$email="";
$password="";

$_SESSION["email"] = $email;

if($_SERVER['REQUEST_METHOD'] == "POST")
{

  print_r($_POST);

  $email = $_POST['email'];
  $password = $_POST['password'];

  if(!empty($email) && !empty($password))
  {

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
          $_SESSION['email'] = $datafound->email;
          $_SESSION['password'] = $datafound->password;
            
          header("Location: index.php");
          echo "Success";
          exit;
              
      }
    }

    echo "Wrong email or password!";

  } else 
  {
    echo "Enter valid information!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    <link rel="stylesheet" href="../CSS/style.css">
  </head>

  <body>
    <form action="" method="post">

      <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember Me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button onclick="history.back()" type="button" class="cancelbtn">Cancel</button>
      </div>

    </form>
  </body>
</html>

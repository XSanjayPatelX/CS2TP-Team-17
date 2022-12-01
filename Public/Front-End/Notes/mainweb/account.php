<?php
require "../../../Private/Back-End/backendcon.php";

$user_data = loginchecker($DBCONNECT);

$name = "";
$email = "";
$birth = "";
$housenumber = "";
$streetname = "";
$townname = "";
$postcode = "";

if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
}

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}

if (isset($_SESSION['birth'])) {
    $birth = $_SESSION['birth'];
}

if (isset($_SESSION['housenumber'])) {
    $housenumber = $_SESSION['housenumber'];
}

if (isset($_SESSION['streetname'])) {
    $streetname = $_SESSION['streetname'];
}

if (isset($_SESSION['townname'])) {
    $townname = $_SESSION['townname'];
}

if (isset($_SESSION['postcode'])) {
    $postcode = $_SESSION['postcode'];
}

//--------------------------------------------------------------

$order_number = "";
$product = "";

if (isset($_SESSION['order_number'])) {
    $order_number = $_SESSION['order_number'];
}

if (isset($_SESSION['product'])) {
    $product = $_SESSION['product'];
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

        <section class="account">
            <div class="acc-card">
                <div class="acc-container">

                    <form class="profile-form" action="" method="" autocomplete="off">
                        <label class="label-txt" for="name">Full Name</label> <br>
                        <label class="label-txt" for="name"><?=$_SESSION['name']?></label> <br><br>

                        <label class="label-txt" for="email">Email</label> <br>
                        <label class="label-txt" for="email"><?=$_SESSION['email']?></label> <br><br>
                        
                        <label class="label-txt" for="birth">Date Of Birth</label> <br>
                        <label class="label-txt" for="birth"><?=$_SESSION['birth']?></label> <br><br>
                        
                        <label class="label-txt" for="housenumber">House Number</label> <br>
                        <label class="label-txt" for="housenumber"><?=$_SESSION['housenumber']?></label> <br><br>
                        
                        <label class="label-txt" for="streetname">Street Name</label> <br>
                        <label class="label-txt" for="streetname"><?=$_SESSION['streetname']?></label> <br><br>
                        
                        <label class="label-txt" for="townname">Town Name</label> <br>
                        <label class="label-txt" for="townname"><?=$_SESSION['townname']?></label> <br><br>
                        
                        <label class="label-txt" for="postcode">Postcode</label> <br>
                        <label class="label-txt" for="postcode"><?=$_SESSION['postcode']?></label> <br><br>
                    </form>
                </div>
            </div>

            <div class="acc-card">
                <div class="acc-container">
                    <?php
                    $custdetail_query = "SELECT * FROM customer_orders LIMIT 1";
                    $custdetail_result = $conn -> query($custdetail_query);

                    while ($row = $custdetail_result -> fetch_assoc()) {
                    ?>

                    <table style="width: 100%;">
                        <div class="input-box">
                            <tr>
                                <label class="label-txt"><?=$_SESSION['name']?></label> <br>
                            </tr>
                            <tr>
                                <label class="label-txt"><?php $_SESSION['order_number'] ?></label> <br>
                            </tr>
                            <tr>
                                <label class="label-txt"><?=$_SESSION['email']?></label> <br>
                            </tr>
                            <tr>
                                <label class="label-txt"><?php echo $product ?></label> <br>
                            </tr>
                        </div>
                    </table>
                    <?php
                    }
                    ?>
                </div>
            </div>
         </section>
    </body>
</html>
<?php
require "../../../Private/Back-End/backendcon.php";

$checkuser = loginchecker($DBCONNECT);

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
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
                <a href="signIn.php" class="sign-in">Sign In</a>
                <a href="logout.php">Logout</a>

                <i class='bx bx-shopping-bag' id="cart-icon"></i>
                <div class="cart" id="cart">
                    <h2 class="cart-title">Your Cart</h2>
                    <div class="cart-content">
                        <?php

                        ?>
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

        <section class="home" id="home">
            <div class="text">
                <h1><span><?=$_SESSION['email']?></span></h1>
            </div>
        </section>        

    </body>
</html>
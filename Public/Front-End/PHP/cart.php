<!-- PHP -->
<?php 
// Getting files from the private folder
require "../../../Private/Back-End/backendcon.php"
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
    <!-- Headers for the web page -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Health Care Website - Cart</title>

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
                <a href="logout.php">Logout</a>
                <a href="cart.php">Cart</a>                
            </div>
        </header>

        <!-- Main web page stuff -->
        <!-- Main web page - Cart -->
        <section>
            <div class="cart" id="cart">
                <h2 class="cart-title">Your Cart</h2>
                <div class="cart-content">
                </div>

                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">£0</div>
                </div>

                <button type="button" class="btn-buy">Buy Now</button>
            </div>
        </section>
    </body>
</html>
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
                        <input class="" type="text" name="housenumber" placeholder="<?php echo $housenumber ?>"> <br><br>
                        
                        <label class="label-txt" for="streetname">Street Name</label> <br>
                        <input class="" type="text" name="streetname" placeholder="<?php echo $streetname ?>"> <br><br>
                        
                        <label class="label-txt" for="townname">Town Name</label> <br>
                        <input class="" type="text" name="townname" placeholder="<?php echo $townname ?>"> <br><br>
                        
                        <label class="label-txt" for="postcode">Postcode</label> <br>
                        <input class="" type="text" name="postcode" placeholder="<?php echo $postcode ?>"> <br><br>

                        <input class="acc-details-btn" type="submit" value="Update">                            
                    </form>
                </div>
            </div>

            <div class="acc-card">
                <div class="acc-container">

                    <?php
                    $custdetail_query = "SELECT order_number, name, email, product FROM customer_orders";
                    $custdetail_result = $conn -> query($custdetail_query);
                    
                    $custdetail_email = "SELECT email FROM customer_orders";
                    $custdetail_email_result = $conn -> query($custdetail_email);

                    $getlog_query = "SELECT email FROM login_details LIMIT 1";
                    $getlog_result = $conn -> query($getlog_query);

                    if ($custdetail_email_result == $getlog_result) {
                        while ($row = $custdetail_result -> fetch_assoc()) {
                    ?>

                    <table style="width: 100%;">
                        <div class="input-box">
                            <tr>
                                <th><img src="../E-Commerce-Designs/Products/<?php echo $row["ordernumber"]; ?>" class="product-img"></th>
                            </tr>
                            <tr>
                                <th><h2 class="product-title-price"><?php ?></h2></th>
                            </tr>
                            <tr>
                                <th><h2 class="product-size">Size/Amount: <?php ?></h2></th>
                            </tr>
                            <tr>
                                <th><h2 class="product-product-desc"><?php  ?></h2></th>
                            </tr>
                        </div>
                    </table>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
         </section>
    </body>
</html>
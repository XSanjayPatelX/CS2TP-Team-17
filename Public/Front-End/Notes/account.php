<?php
require "../../../Private/Back-End/backendcon.php";
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

                    <?php
                    $customer_details = "SELECT name, email, birth, housenumber, streetname, townname, postcode FROM customers LIMIT 1";
                    $result = $conn->query($customer_details);

                    while($row = $result->fetch_assoc()) { 
                    ?>

                    <form class="profile-form" action="" method="" autocomplete="off">
                        <label class="label-txt" for="name">Full Name</label> <br>
                        <label class="label-txt" for="name"><?php echo $row["name"]; ?></label> <br><br>

                        <label class="label-txt" for="email">Email</label> <br>
                        <label class="label-txt" for="email"><?php echo $row["email"]; ?></label> <br><br>
                        
                        <label class="label-txt" for="birth">Date Of Birth</label> <br>
                        <label class="label-txt" for="email"><?php echo $row["birth"]; ?></label> <br><br>
                        
                        <label class="label-txt" for="housenumber">House Number</label> <br>
                        <input class="" type="text" name="housenumber" placeholder="<?php echo $row["housenumber"]; ?>"> <br><br>
                        
                        <label class="label-txt" for="streetname">Street Name</label> <br>
                        <input class="" type="text" name="streetname" placeholder="<?php echo $row["streetname"]; ?>"> <br><br>
                        
                        <label class="label-txt" for="townname">Town Name</label> <br>
                        <input class="" type="text" name="townname" placeholder="<?php echo $row["townname"]; ?>"> <br><br>
                        
                        <label class="label-txt" for="postcode">Postcode</label> <br>
                        <input class="" type="text" name="postcode" placeholder="<?php echo $row["postcode"]; ?>"> <br><br>

                        <input class="acc-details-btn" type="submit" value="Update">                            
                    </form>
                    <?php } ?>
                </div>
            </div>

            <div class="acc-card">
                <div class="acc-container">
                    <form class="profile-form" action="" method="" autocomplete="off">
                        <label class="label-txt" for="name">Full Name</label> <br>

                        <label class="label-txt" for="email">Email</label> <br>
                        
                        <label class="label-txt" for="birth">Date Of Birth</label> <br>

                        <label class="label-txt" for="housenumber">House Number</label> <br>
                        
                        <label class="label-txt" for="streetname">Street Name</label> <br>
                        
                        <label class="label-txt" for="townname">Town Name</label> <br>
                        
                        <label class="label-txt" for="postcode">Postcode</label> <br>
                    </form>
                </div>
            </div>
         </section>
    </body>
</html>
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
                <li><a href="index.php#shopContainer">Products</a></li>
                <li><a href="account.php">Account</a></li>
            </ul>

            <div class="header-btn">
                <a href="signIn.php" class="sign-in" id="sign-in">Sign In</a>
                <a href="cart.php">Cart</a>
            </div>
        </header>

        <section class="shopContainer" id="shopContainer">
            <h2 class="section-title">List Of Stocked Products</h2>

            <div class="shop-content">
                <?php
                $sql = "SELECT product, product_description, size, price, images FROM products";
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()) { ?>
                    <div class="product-box">
                        <table style="width: 100%;">
                            <div class="input-box">
                                    <tr>
                                        <th><img src="../E-Commerce-Designs/Products/<?php echo $row["images"]; ?>" class="product-img"></th>
                                    </tr>
                                    <tr>
                                        <th><h2 class="product-title-price"><?php echo $row["product"] . " - £" . $row["price"]; ?></h2></th>
                                    </tr>
                                    <tr>
                                        <th><h2 class="product-size">Size/Amount: <?php echo $row["size"]; ?></h2></th>
                                    </tr>
                                </div>
                        </table>
                    </div>
                <?php } ?>
            </div>
        </section>

    </body>
</html>
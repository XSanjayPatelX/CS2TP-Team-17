<!-- PHP -->
<?php
// Getting files from the private folder
require "../../../../Private/Back-End/backendcon.php";

// This is to ensure that user stays logged in, if they are not logged in the they will be redirected to the sign in page
$user_data = adminchecker($DBCONNECT);

// For the variables to be empty
$username = "";

// The users details will be used from the database to show them their details
if (isset($_SESSION['username'])) {
    $name = $_SESSION['username'];
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
        <title>Health Care Website Admin - Customer Record</title>

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
                <li><a href="customerdetails.php">Customers Details</a></li>
            </ul>

            <div class="header-btn">
                <a href="logout.php">Logout</a>
            </div>
        </header>

        <!-- Main web page stuff -->
        <!-- Main web page - Customers details, and orders -->
        <section class="account">
            <div class="acc-card">
                <div class="acc-container">

                    <form class="profile-form" action="" method="" autocomplete="off">
                        <?php
                        // Query to select the customers details
                        $admin_customers_details = "SELECT * FROM login_details";
                        $admin_customers_details_result = $conn->query($admin_customers_details);

                        while($row = $admin_customers_details_result->fetch_assoc()) { ?>

                            <div class="admin-product-box-cust-det">
                                <table style="width: 900px; border:1px solid white;">
                                    <div class="input-box">
                                        <tr>
                                            <th><label class="label-txt" for="name">Full Name</label></th>
                                            <th><label class="label-txt" for="email">Email</label></th>
                                            <th><label class="label-txt" for="birth">Date Of Birth</label></th>
                                            <th><label class="label-txt" for="housenumber">House Number</label></th>
                                            <th><label class="label-txt" for="streetname">Street Name</label></th>
                                            <th><label class="label-txt" for="townname">Town Name</label></th>
                                            <th><label class="label-txt" for="postcode">Postcode</label></th>
                                        </tr>

                                        <tr>
                                            <td><label class="label-txt-rec" for="name"><?php echo $row['name'] ?></label></td>
                                            <td><label class="label-txt-rec" for="email"><?php echo $row['email'] ?></label></td>
                                            <td><label class="label-txt-rec" for="birth"><?php echo $row['birth'] ?></label></td>
                                            <td><label class="label-txt-rec" for="housenumber"><?php echo $row['housenumber'] ?></label></td>
                                            <td><label class="label-txt-rec" for="streetname"><?php echo $row['streetname'] ?></label></td>
                                            <td><label class="label-txt-rec" for="townname"><?php echo $row['townname'] ?></label></td>
                                            <td><label class="label-txt-rec" for="postcode"><?php echo $row['postcode'] ?></label></td>
                                        </tr>
                                    </div>
                                </table>
                            </div>
                        <?php } ?>
                    </form>
                </div>
            </div>

            <div class="acc-card">
                <div class="acc-container">
                    <?php
                    // Query to select the customers previous orders
                    $admin_customers_orders = "SELECT * FROM customer_orders";
                    $admin_customers_orders_result = $conn -> query($admin_customers_orders);

                    while ($row = $admin_customers_orders_result -> fetch_assoc()) { ?>
                        <div class="admin-product-box-cust-ord">
                            <table style="width: 100%; border:1px solid white">
                                <div class="input-box">
                                    <tr>
                                        <th><label class="label-txt" for="name">Name</label></th>
                                        <th><label class="label-txt" for="email">Email</label></th>
                                        <th><label class="label-txt" for="order_number">Order Number</label></th>
                                        <th><label class="label-txt" for="product">Product</label></th>
                                    </tr>

                                    <tr>
                                        <td><label class="label-txt-rec" for="name"><?php echo $row['name'] ?></label></td>
                                        <td><label class="label-txt-rec" for="email"><?php echo $row['email'] ?></label></td>
                                        <td><label class="label-txt-rec" for="order_number"><?php echo $row['order_number'] ?></label></td>
                                        <td><label class="label-txt-rec" for="product"><?php echo $row['product'] ?></label></td>
                                    </tr>
                                </div>
                            </table>
                        </div>
                    <?php } ?>
                </div>
            </div>
         </section>
    </body>
</html>
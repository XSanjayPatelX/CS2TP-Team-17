<!-- PHP -->
<?php
// Getting files from the private folder
require "../../../Private/Back-End/backendcon.php";
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
        <!-- Main web page - Home -->
        <section class="home" id="home">
            <div class="text">
                <h1><span>Health Care </span> on <br>your finger tips</h1>
                <p>The best deals and offers<br>Get your desired health care services and products</p>
            </div>
        </section>

        <!-- Main web page - Services -->
        <section class="services" id="services">
            <div class="heading">
                <span>How It Works</span>
                <h1>Health Care In Three Easy Steps</h1>
            </div>

            <div class="services-container">
                <div class="box">
                    <a href="signUp.php" class='bx bx-pen'></a>
                    <h2>Join Us</h2>
                    <p>Join Our Website To always Be A Part Of Us And Take Advantage Of Our ExclusIve Deals And Offers </p>
                </div>
                
                <div class="box">
                    <a href="#shopContainer" class='bx bx-search-alt'></a>
                    <h2>Search For Your Product</h2>
                    <p>Choose across a wide range of healthcare products that best suits your desire and health</p>
                </div>


                <div class="box">
                    <a href="cart.php" class='bx bx-basket'></a>
                    <h2>Make your basket</h2>
                    <p>Create Your Basket Just By Selecting The Products Of Your Need And Checkout</p>
                </div>
            </div>
        </section>

        <!-- Main web page - Shop -->
        <section class="shopContainer" id="shopContainer">
            <h2 class="section-title">Shop Products</h2>

            <div class="shop-content">
                <?php
                // Query to select product information
                $show_products = "SELECT product, product_description, size, price, images FROM products";
                $show_products_result = $conn->query($show_products);

                while($row = $show_products_result->fetch_assoc()) { ?>
                    <!-- Shop - adding products from database to webpage -->
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
                                    <tr>
                                        <th><h2 class="product-product-desc"><?php echo $row["product_description"]; ?></h2></th>
                                    </tr>
                                    <td><button class='bx bx-shopping-bag add-cart'></button></td>
                                </div>
                        </table>
                    </div>
                <?php } ?>
            </div>
        </section>

        <!-- Main web page - About Page -->
        <section class="about" id="about">
            <div class="about-text">
                <span><h1>About Us</h1></span>
                <p>The cause of the business is to sell medicine, supplements and nutritional products to young adults in need.</p>
                <p>The website aims to make the products accessible and affordable for those of age and sell/deliver in a quick manner. All this in order to ensure customers are keeping their health up to standards with the help of <span> WELL HEALTH CARE</span></p>
                <a href="#team" class="btn">Learn More</a>
            </div>
        </section>

        <section class="contactUs" id="contactUs">
            <div class="heading">
                <span>Contact Us</span> <br> <br>
            </div>

            <div class="form-container">
                <table style="width: 100%;">
                    <tr>
                        <div class="input-box">
                            <th><span>Name</span></th>
                            <th><span>Address</span></th>
                            <th><span>Email</span></th>
                            <th><span>Phone Number</span></th>
                        </div>
                    </tr>

                    <tr>
                        <div class="input-box">
                            <td><span>Well Health Care+</span></td>
                            <td><span>Aston St, Birmingham, B4 7ET</span></td>
                            <td><span>thehub@aston.ac.uk</span></td>
                            <td><span>0121 204 3000</span></td>
                        </div>
                    </tr>
                </table>
            </div>
        </section>

        <!-- Main web page - The Team -->
        <section class="team" id="team">
            <div class="heading">
                <span>Team Members</span>
                <h1>Meet The People Behind This Project</h1>
            </div>

            <div class="team-container">
                <div class="box">
                    <div class="team-img">
                        <img src="../E-Commerce-Designs/Images/sanjay.png" alt="">
                    </div>
                    <h2>Sanjay Patel</h2>
                    <p>Team leader and backend developer and helped with frontend too</p>
                </div>

                <div class="box">
                    <div class="team-img">
                        <img src="../E-Commerce-Designs/Images/han.jpg" alt="">
                    </div>
                    <h2>Hans Raj</h2>
                    <p>Front-end developer, worked hard along with the team to create a responsive, easy to use and eye catching website</p>
                </div>

                <div class="box">
                    <div class="team-img">
                        <img src="../E-Commerce-Designs/Images/divean.jpg" alt="">
                    </div>
                    <h2>Dieven Chort</h2>
                    <p>Database developer, responsible for customer's and product's data</p>
                </div>

                <div class="box">
                    <div class="team-img">
                        <img src="../E-Commerce-Designs/Images/zuhaib.jpg" alt="">
                    </div>
                    <h2>Zuhaib Hussain</h2>
                    <p>Front-end developer, helped with front-end and organization of the website</p>
                </div>

                <div class="box">
                    <div class="team-img">
                        <img src="../E-Commerce-Designs/Images/dalvir.jpg" alt="">
                    </div>
                    <h2>Dalvir Janagel</h2>
                    <p>Database developer, responsible to create database for the website</p>
                </div>

                <div class="box">
                    <div class="team-img">
                        <img src="../E-Commerce-Designs/Images/arshi.jpg" alt="">
                    </div>
                    <h2>Arshdeep Kaur</h2>
                    <p>Back-end developer, for connecting css and php files with database </p>
                </div>

                <div class="box">
                    <div class="team-img">
                        <img src="../E-Commerce-Designs/Images/alex.jpg" alt="">
                    </div>
                    <h2>Alexander Onofrio-Mills</h2>
                    <p>Back-end developer, for making the website functional</p>
                </div>

                <div class="box">
                    <div class="team-img">
                        <img src="../E-Commerce-Designs/Images/rav.jpg" alt="">
                    </div>
                    <h2>Ravjot Kaur</h2>
                    <p>Front-end developer, for suggesting and managing the design for the website</p>
                </div>
            </div>
        </section>
    </body>
</html>
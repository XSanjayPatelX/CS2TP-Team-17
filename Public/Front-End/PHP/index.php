<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Health Care Website</title>

        <link rel="stylesheet" href="../CSS/style.css">
        <script src="../JS/main.js"></script>

        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    </head>

    <body>
        <header>
            <a href="#" class="logo"><img src="../E-Commerce-Designs/Logos/logo.png" alt=""></a>

            <div class="bx bx-menu" id="menu-icon"></div>

            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#shopContainer">Products</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contactUs">Contact Us</a></li>
            </ul>
            <div class="header-btn">
                <a href="signUp.php" class="sign-up" id="sign-up">Sign Up</a>
                <a href="signIn.php" class="sign-in">Sign In</a>

                <i class='bx bx-shopping-bag' id="cart-icon"></i>
                <div class="cart" id="cart">
                    <h2 class="cart-title">Your Cart</h2>
                    <div class="cart-content">

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
                <h1><span>Health Care </span> on <br>your finger tips</h1>
                <p>The best deals and offers<br>Get your desired health care services and products</p>
            </div>
        </section>

        <section class="services" id="services">
            <div class="heading">
                <span>How It Works</span>
                <h1>Health Care In Three Easy Steps</h1>
            </div>

            <div class="services-container">
                <div class="box">
                    <a href="#sign-up" class='bx bx-pen'></a>
                    <h2>Join Us</h2>
                    <p>Join Our Website To always Be A Part Of Us And Take Advantage Of Our ExclusIve Deals And Offers </p>
                </div>
                
                <div class="box">
                    <a href="#shopContainer" class='bx bx-search-alt'></a>
                    <h2>Search For Your Product</h2>
                    <p>Choose across a wide range of healthcare products that best suits your desire and health</p>
                </div>


                <div class="box">
                    <a href="#cart" class='bx bx-basket'></a>
                    <h2>Make your basket</h2>
                    <p>Create Your Basket Just By Selecting The Products Of Your Need And Checkout</p>
                </div>

            </div>
        </section>

        <section class="shopContainer" id="shopContainer">
            <h2 class="section-title">Shop Products</h2>

            <div class="shop-content">
                <div class="product-box">
                    <img src="../E-Commerce-Designs/Products/P1.PNG" alt="" class="product-img">
                    <h2 class="product-title-price">Daily Skin Care Kit - £45</h2>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>

                <div class="product-box">
                    <img src="../E-Commerce-Designs/Products/P2.PNG" alt="" class="product-img">
                    <h2 class="product-title-price">Anti Wrinkle Cream - £10</h2>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>

                <div class="product-box">
                    <img src="../E-Commerce-Designs/Products/P3.PNG" alt="" class="product-img">
                    <h2 class="product-title-price">Insulin Pump - £20</h2>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>

                <div class="product-box">
                    <img src="../E-Commerce-Designs/Products/P4.PNG" alt="" class="product-img">
                    <h2 class="product-title-price">After Shave - £14</h2>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>

                <div class="product-box">
                    <img src="../E-Commerce-Designs/Products/P5.PNG" alt="" class="shampoo-img">
                    <h2 class="product-title-price">Shampoo - £6</h2>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>

                <div class="product-box">
                    <img src="../E-Commerce-Designs/Products/P6.jpg" alt="" class="perfume-img">
                    <h2 class="product-title-price">Perfume - £25</h2>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>

                <div class="product-box">
                    <img src="../E-Commerce-Designs/Products/P7.PNG" alt="" class="product-img">
                    <h2 class="product-title-price">Thermometer - £12</h2>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>

                <div class="product-box">
                    <img src="../E-Commerce-Designs/Products/P8.PNG" alt="" class="product-img">
                    <h2 class="product-title-price">White Face Mask - £1</h2>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>
            </div>
        </section>

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
                <span>Contact Us</span>
            </div>

            <div class="form-container">
                <form action="">
                    <div class="input-box">
                        <span>Name</span>
                        <input type="text" name="" id="" placeholder="Customer's Name">
                    </div>

                    <div class="input-box">
                        <span>Email Adress</span>
                        <input type="text" name="" id="" placeholder="Customer's Email">
                    </div>

                    <div class="input-box">
                        <span>Phone Number</span>
                        <input type="text" name="" id="" placeholder="Customer's Phone Number">
                    </div>

                    <div class="input-boxtext">
                        <span>What Can We Help You With ?</span>
                        <input type="text" name="" id="" placeholder="">
                    </div>

                    <li><a input type="submit" href="#database.sql" name="" id="" class="btn">Submit</a></li>
                </form>
            </div>
        </section>


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
                    <p>Team leader and backend developer</p>
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
                    <p>Back-end developer, for makeing the website functional</p>
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
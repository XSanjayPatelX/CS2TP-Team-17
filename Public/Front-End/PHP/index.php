<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Website</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>
<body>
    <header>
        <a href="#" class="logo"><img src="img/logo.png" alt=""></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contactUs">Contact Us</a></li>
        </ul>
        <div class="header-btn">
            <a href="signUp.php" class="sign-up">Sign Up</a>
            <a href="signIn.php" class="sign-in">Sign In</a>
            <a href="basket.php" class="basket"><img src="img/basket.png" alt=""></a>
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
            <a href="#signUp.php" class='bx bx-pen'></a>
            <h2>Join Us</h2>
            <p>Join Our Website To always Be A Part Of Us And Take Advantage Of Our ExclusIve Deals And Offers </p>
        </div>
        
        <div class="box">
            <a href="#products" class='bx bx-search-alt'></a>
            <h2>Search For Your Product</h2>
            <p>Choose across a wide rnge of healthcare products that best suits your desire and health</p>
        </div>


        <div class="box">
            <a href="#basket.php" class='bx bx-basket'></a>
            <h2>Make your basket</h2>
            <p>Create Your Basket Just By Selecting The Products Of Your Need And Checkout</p>
        </div>

    </div>
</section>


<secttion class="products" id="products">
        <div class="heading">
            <span>Best Products</span>
            <h1>Explore Out Top Deals <br> On All Our Health Care Protucts</h1>
        </div>
        <div class="products-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/P1.jpeg" alt="">
                </div>
                <p>Skin Care</p>
                <P>Product ID: P1</P> 
                <h3>Face Foundation</h3>
                <h2> Price: <span>15£</span></h2>
                <h2> Quantity</h2>
                <input type="number" class="inputbox" name="Quantity" id="No" paceholder="No of products" required>
                <a href="#database.sql" class="btn">Add To Cart</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/P2.jpeg" alt="">
                </div>
                <p>Skin Care</p>
                <P>Product ID: P2</P> 
                <h3>Face Mask</h3>
                <h2> Price: <span>8£</span></h2>
                <h2> Quantity</h2>
                <input type="number" class="inputbox" name="Quantity" id="No" paceholder="No of products" required>
                <a href="#database.sql" class="btn">Add To Cart</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/Pr3.jpeg" alt="">
                </div>
                <p>Medicines</p>
                <P>Product ID: P3</P> 
                <h3>Cough Syrup</h3>
                <h2> Price: <span>4£</span></h2>
                <h2> Quantity</h2>
                <input type="number" class="inputbox" name="Quantity" id="No" paceholder="No of products" required>
                <a href="#database.sql" class="btn">Add To Cart</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/P4.jpeg" alt="">
                </div>
                <p>Medicines</p>
                <P>Product ID: P4</P> 
                <h3>Paracetamol</h3>
                <h2> Price: <span>3£</span></h2>
                <h2> Quantity</h2>
                <input type="number" class="inputbox" name="Quantity" id="No" paceholder="No of products" required>
                <a href="#database.sql" class="btn">Add To Cart</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/P5.jpeg" alt="">
                </div>
                <p>Dental Care</p>
                <P>Product ID: P5</P> 
                <h3>Mouth Freshner</h3>
                <h2> Price: <span>5£</span></h2>
                <h2> Quantity</h2>
                <input type="number" class="inputbox" name="Quantity" id="No" paceholder="No of products" required>
                <a href="#database.sql" class="btn">Add To Cart</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/P6.jpeg" alt="">
                </div>
                <p>Dental Care</p>
                <P>Product ID: P6</P> 
                <h3>Electric Toothrush</h3>
                <h2> Price: <span>25£</span></h2>
                <h2> Quantity</h2>
                <input type="number" class="inputbox" name="Quantity" id="No" paceholder="No of products" required>
                <a href="#database.sql" class="btn">Add To Cart</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/P7.jpeg" alt="">
                </div>
                <p>Hair Care</p>
                <P>Product ID: P7</P> 
                <h3>Shampoo & Conditioner</h3>
                <h2> Price: <span>18£</span></h2>
                <h2> Quantity</h2>
                <input type="number" class="inputbox" name="Quantity" id="No" paceholder="No of products" required>
                <a href="#database.sql" class="btn">Add To Cart</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/P8.jpeg" alt="">
                </div>
                <p>Instrumentals</p>
                <P>Product ID: P8</P> 
                <h3>Smart Health Wear</h3>
                <h2> Price: <span>30£</span></h2>
                <h2> Quantity</h2>
                <input type="number" class="inputbox" name="Quantity" id="No" paceholder="No of products" required>
                <a href="#database.sql" class="btn">Add To Cart</a>
            </div>
                   
        </div>
    </secttion>

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
                    <input type="text" name="" id="" placeholder="Customer's Emil">
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
                    <img src="img/sanjay.jpg" alt="">
                </div>
                <h2>Sanjay Patel</h2>
                <p></p>
            </div>

            <div class="box">
                <div class="team-img">
                    <img src="img/han.jpg" alt="">
                </div>
                <h2>Hans Raj</h2>
                <p>Worked hard along with the team to create a responsive, easy to use and eye catching website</p>
            </div>

            <div class="box">
                <div class="team-img">
                    <img src="img/divean.jpg" alt="">
                </div>
                <h2>Dieven Chort</h2>
                <p></p>
            </div>

            <div class="box">
                <div class="team-img">
                    <img src="img/zuhaib.jpg" alt="">
                </div>
                <h2>Zuhaib Hussain</h2>
                <p>Helped with front-end and organization of the website</p>
            </div>

            <div class="box">
                <div class="team-img">
                    <img src="img/dalvir.jpg" alt="">
                </div>
                <h2>Dalvir Janagel</h2>
                <p></p>
            </div>

            <div class="box">
                <div class="team-img">
                    <img src="img/arshi.jpg" alt="">
                </div>
                <h2>Arshdeep Kaur</h2>
                <p></p>
            </div>

            <div class="box">
                <div class="team-img">
                    <img src="img/alex.jpg" alt="">
                </div>
                <h2>Alexander Onofrio-Mills</h2>
                <p></p>
            </div>

            <div class="box">
                <div class="team-img">
                    <img src="img/rav.jpg" alt="">
                </div>
                <h2>Ravjot Kaur</h2>
                <p></p>
            </div>

            
            
        </div>
    </section>

    
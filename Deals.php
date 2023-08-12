<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>LEDGENS PIZZA</title>
  <meta charset="UTF-8" />
  <meta name="language" content="EN" />
  <meta name="keywords" content="HTML,CSS,JavaScript">
  <meta name="author" content="Someshwar J" />
  <meta name="revised" content="April 18th 2021" />
  <meta name="revisted" content="3 days" />
  <meta name="robots" content="index, follow" />
  <meta http-equiv="refresh" content="300" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/x-icon" href="https://static.thenounproject.com/png/30194-200.png">
  <link rel="stylesheet" type="text/css" href="deals.css">
</head>

<body>
  <div class="top" style="height: 550px;">
    <nav>
      <a href="index.php">
        <div class="head">
          <img src="https://seeklogo.com/images/P/pizza-logo-42816D88BE-seeklogo.com.png" alt="no">
          <h2 class="logo">LEGDENS PIZZA</h2>
        </div>
      </a>
      <a href="Menu.php" style="float: left; margin-left: 310px; font-family: Optima, sans-serif;">OUR MENU</a>
      <a href="Enquiry.php" style="float: left; font-family: Optima, sans-serif;">CORPORATE ENQUIRY</a>
      <a href="Contact.php" style="float: left; font-family: Optima, sans-serif;">CONTACT</a>
      <?php
      $mysqli = new mysqli("127.0.0.1:3307","root","","somesh");
      if(isset( $_SESSION['email'])){
        ?>
        <a href="Pizzacart.php"><i class="fa fa-shopping-cart" style="font-size: 50px; padding-top: 0px; padding-left: 0px;"></i></a>
        <a href="Logout.php" style="float: left; font-family: Optima, sans-serif;">LOGOUT</a>
        <?php
      }
      else{
        ?>
        <a href="Login.php" style="float: left; font-family: Optima, sans-serif;">LOGIN TO VIEW CART</a>  
        <?php
      }
      ?>
    </nav>
    <div class="content">
      <h2>Legdens Online Ordering</h2>
      <h3>Yummy pizza delivered fast & fresh</h3>
    </div>
  </div>

  <div class="dealsheader">
    <h1>UPCOMING DEALS & OFFERS</h1>
  </div>
  <br>
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="https://api.dominos.co.in/prod-olo-api/images/amazon_home_20210412.jpg" style="width:100%" alt="no">
    </div>

    <div class="mySlides fade">
      <img src="https://api.dominos.co.in/prod-olo-api/images/Home_Paytm_20210519.jpg" style="width:100%" alt="no">
    </div>

    <div class="mySlides fade">
      <img src="https://api.dominos.co.in/prod-olo-api/images/Home_airtel_30082020.jpg" style="width:100%" alt="no">
    </div>

    <div class="mySlides fade">
      <img src="https://api.dominos.co.in/prod-olo-api/images/Home_Freecharge_20210405.jpg" style="width:100%" alt="no">
    </div>

    <div class="mySlides fade">
      <img src="https://api.dominos.co.in/prod-olo-api/images/Dominos_Mobi_Home_20210503.jpg" style="width:100%" alt="no">
    </div>

    <div class="mySlides fade">
      <img src="https://api.dominos.co.in/prod-olo-api/images/Home_payzapp_20201029.jpg" style="width:100%" alt="no">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
  </div>

  <script type="text/javascript" src="Deals.js"></script>

  <div class="menuhead" style="height: 580px;">
    <div style="height: 430px;float: left;">
      <div class="gallery1">
        <div class="gallery2">
          <img src="https://www.dominos.co.in/great-deals/online-pizza-coupons/images/story_images/evd/evd-99.jpg"
            style="margin-top:30px; margin-left: 70px;margin-bottom: 13px; width: 450px; height: 270px;" alt="no">
          <div class="desc1">
            <b>Flat 50% Discount on Regular Pizza worth of Rs.200 each</b>
          </div>
        </div>
          <button onclick="window.location.href='Menu.php'" class="btn1">ORDER NOW</button>
      </div>
    </div>

    <div style="height: 430px;float: left;">
      <div class="gallery1">
        <div class="gallery2">
          <img src="https://www.dominos.co.in/great-deals/online-pizza-coupons/images/story_images/evd/evd-199.jpg"
            style="margin-top:30px; margin-left: 70px;margin-bottom: 13px; width: 450px; height: 270px;" alt="no">
          <div class="desc1">
            <b>Flat 50% Discount on Medium Pizza worth of Rs.400 each</b>
          </div>
        </div>
          <button onclick="window.location.href='Menu.php'" class="btn1">ORDER NOW</button>
      </div>
    </div>
  </div>

  <div class="menuhead" style="height: 580px;">
    <div style="height: 430px;float: left;">
      <div class="gallery1">
        <div class="gallery2">
          <img
            src="https://api.pizzahut.io/v1/content/en-in/in-1/images/promo/one-plus-one.f2a7f16ef85be01b65c762bc688eeddc.1.jpg"
            style="margin-top:30px; margin-left: 70px;margin-bottom: 13px; width: 450px; height: 270px;" alt="no">
          <div class="desc1">
            <b>Order Large Pizza in One plus+ One offer</b>
          </div>
        </div>
          <button onclick="window.location.href='Menu.php'" class="btn1">ORDER NOW</button>
      </div>
    </div>

    <div style="height: 430px;float: left;">
      <div class="gallery1">
        <div class="gallery2">
          <img src="https://cdn.static-zoutons.com/images/originals/blog/DOMINOS-BANNER-1_1586148787.png"
            style="margin-top:30px; margin-left: 70px;margin-bottom: 13px; width: 450px; height: 270px;" alt="no">
          <div class="desc1">
            <b>Order Combo meals just starting at Rs.199</b>
          </div>
        </div>
          <button onclick="window.location.href='Menu.php'" class="btn1">ORDER NOW</button>
      </div>
    </div>
  </div>

  <div class="copyrights" style="height: 500px;">
    <div class="copycontents">
      LEGDENS PIZZA
    </div>
    <div class="copycontents1">
      Our Legdens Pizza Shop is family-owned that has been<br> proudly serving around the 1940s located in many
      countries.<br>We can make sure our services will satisfy you in delivery!!
    </div>
    <div class="copycontents3">FOR MORE INFO & QUERIES</div>
    <a href="...">
      <div class="copycontents4">CONTACT US</div>
    </a>
    <footer>
      <div class="center" style="padding-left: 350px;">
        <a href="#" class="foot"><i class="fa fa-facebook-official"></i></a>
        <a href="#" class="foot"><i class="fa fa-instagram"></i></a>
        <a href="#" class="foot"><i class="fa fa-youtube-play"></i></a>
        <a href="#" class="foot"><i class="fa fa-twitter"></i></a>
      </div>
    </footer>
    <div class="reserved">
      All rights reserved. Copyright © Legdens FoodWorks Ltd. Disclaimer | T&C | Privacy Policy
    </div>
  </div>
</body>
</html>
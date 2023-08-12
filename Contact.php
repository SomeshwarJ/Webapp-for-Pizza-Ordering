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
  <link rel="stylesheet" type="text/css" href="contact.css">
</head>

<body>
  <div class="top" style="height: 380px;">
    <nav>
      <a href="index.php">
        <div class="head">
          <img src="https://seeklogo.com/images/P/pizza-logo-42816D88BE-seeklogo.com.png" alt="no">
          <h1 class="logo">LEGDENS PIZZA</h1>
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
    <div class="paste">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSngpIFGIR_S16xU17973UKWFKEQvl3l0QlWg&usqp=CAU"
        style="height:41px; width: 42px;" alt="no">
    </div>
    <div class="respond">
      <h3>WE RESPOND AS QUICK</h3>
      <p>AS WE DELIVER!</p>
    </div>
    <div class="content">
      <h2>Contact Us - Legdens Customer Care</h2>
    </div>
  </div>

  <div class="emailbox" style="width: 40%">
    <fieldset>
      <div class="mailheader">
        <p>WRITE TO US</p>
      </div>
      <p class="mailcontent">Have any feedback or queries? <br> We'd love to hear from you. Write to us at</p>
      <a href="mailto:senthilsomeshwar2002@gmail.com" style="margin-left: 15px; color: black; font-family: system-ui;
    font-weight: bold; font-size: 17px;">guestcarelegdenspizza@gmail.com</a>
    </fieldset>
  </div>

  <div class="customercare" style="width:50%; float:right;">
    <div class="numberheader">
      <p>Legdens's Customer Care Number</p>
    </div>
    <div class="number">
      <p>1800-208-1234</p>
    </div>
  </div>

  <div class="companyaddress" style="width:50%; float:right;">
    <div class="addressheader">
      <p>Lesdens's Contact Address</p>
    </div>
    <div class="address">
      <p>Legdens Pizza India,<br>Tower-D, Plot No. 5,<br>5th Floor, Logix Techno Park,<br>Sector 127, Noida - 201304,
        U.P.</p>
    </div>
  </div>

  <div class="socialmedia">
    <p>
    <div class="box1">
      <a href="#" class="foot1"><i style="padding-top: 40px;" class="fa fa-facebook-official"></i></a>
      <div class="mediacontent">
        <p>Visit our page on Facebook</p>
      </div>
    </div>

    <div class="box2">
      <a href="#" class="foot1"><i style="padding-top: 40px;" class="fa fa-instagram"></i></a>
      <div class="mediacontent">
        <p>Visit our page on Instagram</p>
      </div>
    </div>

    <div class="box3">
      <a href="#" class="foot1"><i style="padding-top: 40px;" class="fa fa-google-plus"></i></a>
      <div class="mediacontent">
        <p>Visit our page on Google Plus</p>
      </div>
    </div>

    <div class="box4">
      <a href="#" class="foot1"><i style="padding-top: 40px;" class="fa fa-twitter"></i></a>
      <div class="mediacontent">
        <p>Visit our page on Twitter</p>
      </div>
    </div>
    </p>
  </div>

  <div class="bottombar" style="width: 100%;">
    <div class="footer1">
      <p>All rights reserved. Copyright © Legdens FoodWorks Ltd. Disclaimer | T&C | Privacy Policy</p>
    </div>
  </div>
</body>
</html>
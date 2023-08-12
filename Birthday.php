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
  <link rel="stylesheet" type="text/css" href="birthday.css">
</head>

<body>
  <div class="top" style="height: 550px;">
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
    <div class="content" style="width: 25%; ">
      <h2>=Legdens=<br><span style="font-family: system-ui; font-size: 50px; font-weight: 500;">HAPPIEST</span> <br> 
        <span style="font-family: fantasy; font-size: 50px;">BIRTHDAY</span><br>
        <span style="font-family: fantasy; font-size: 75px;">PARTY</span><br>
        <span style='font-size:30px; color: white;'>&#9733; &#9733; &#9733;</span>
      </h2>
    </div>
  </div>

  <div class="party" style="height: 410px;">
    <div class="partyheader">
      <h2>BIRTHDAY PARTY</h2>
      <p>For bookings and Information, Please fill the details below and submit or contact your nearest Legdens restaurant manager @ 1800-208-1234</p>
    </div>
    <br>

    <div class="partyform">
      <?php
      $mysqli = new mysqli("127.0.0.1:3307", "root", "", "somesh");
      if ($mysqli -> connect_errno) 
      {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }

      if(isset($_POST['sub'])) 
      {
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $alter = $_POST['alternate'];
        $dob = $_POST['dob'];
        $anniver = $_POST['anniversary'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $res = $_POST['restaurant'];
        $pin = $_POST['pincode'];

        $sql = "INSERT INTO `birthday`(`name`,`mobile`,`alternatenumber`,`dob`,`anniversary`,`address`,`city`,`restaurant`,`pincode`) VALUES('$name','$mobile','$alter','$dob','$anniver','$address','$city','$res','$pin')";
        if ($result = $mysqli -> query($sql)) 
        {
          ?>
          <fieldset style="background: #F7FBFF; border: 2px solid white; margin-left: 270px; border-radius: 7px; height: 200px; width: 800px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <h1 style="font-family: system-ui; font-size: 25px; text-align: center; color: black; margin-left: 200px; margin-right: 200px;">We will contact you within 2 working days. Legdens conduct Birthday Parties in select Restaurant and Times. T&C Apply</h1>
          </fieldset>
          <?php
        }      
      }

      else
      {
      ?>
      <form action="Birthday.php" method="post">
        <div style="float: left; margin-left: 200px;">
          <input type="text" name="name" placeholder="Name" required>
          <input type="text" name="mobile" placeholder="Mobile" style="margin-left: 55px; margin-bottom: 40px;" required>
          <input type="text" name="alternate" placeholder="Alternate Number" style="margin-left: 55px;" required>
        </div><br>

        <div style="float: left; margin-left: 200px;">
          <input type="text" name="dob" placeholder="Tentative Order Date" onfocus="(this.type='date')" required>
          <input type="text" name="anniversary" placeholder="Anniversary Date" onfocus="(this.type='date')" style="margin-left: 55px; margin-bottom: 40px;" required>
          <input type="text" name="address" placeholder="Address" style="margin-left: 55px;" required>
        </div><br>

        <div style="float: left; margin-left: 200px;">
          <input type="text" name="city" placeholder="City" required>
          <input type="text" name="restaurant" placeholder="Restaurant Name" style="margin-left: 55px;" required>
          <input type="text" name="pincode" placeholder="Pincode" style="margin-left: 55px;" required>
        </div>
        <button class="btn1" name="sub">Submit</button>
      </form>
      <?php
    }
      ?>
    </div>
  </div>

  <div class="contactyou">
    <p></p>
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
    <a href="Contact.php">
      <div class="copycontents4">CONTACT US</div>
    </a>
    <footer>
      <div class="center" style="padding-left: 170px;">
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
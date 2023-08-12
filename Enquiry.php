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
  <link rel="stylesheet" type="text/css" href="enquiry.css">
</head>

<body>
  <div class="top" style="height: 350px;">
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
    <div class="content">
      <h2>Legdens Virtual Pizza Party</h2>
    </div>
  </div>
  <br>


  <div style="width:60%">
    <div class="work">
      <div class="workheader">WORK TOGETHER, EAT TOGETHER</div>
      <br>
      <div class="workcontent">
        <p>Intoducing Legdens Virtual Feast, a new way to place a bulk order for your virtual <br>celebration and get it
          delivered in specially designed packages.</p>
      </div>
    </div>
    <br><br>

    <div class="together">
      <div class="togetherheader">
        GREAT TASTE, DELIVERED SAFE
      </div>
      <div class="togethercontent">
        <p>At Legdens we understand the growing concerns regarding food safety and hygiene. That’s why we take all the
          necessary precautions and follow strict safety ad hygiene protocols while making delivering your food. So, you
          can enjoy your safe virtual celebrations with the safest ever virtual feast.</p>
      </div>
      <div class="togetherimg">
        <img src="https://www.dominos.co.in/theme2/front/images/corp_query/untouuched@3x.png" alt="no">
      </div>
    </div>
  </div>
  <br>

  <div class="enquiryform" style="float: right; width: 30%; margin-top: -100px;">
    <fieldset>
      <?php
      $mysqli = new mysqli("127.0.0.1:3307", "root", "", "somesh");
      if ($mysqli -> connect_errno) 
      {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }

      if (isset($_POST['sub'])) 
      {
        $name = $_POST['name'];
        $organi = $_POST['organization'];
        $num = $_POST['numbers'];
        $locate = $_POST['locate'];
        $date = $_POST['dates'];
        $query = $_POST['query'];
        $sql = "INSERT INTO `enquiry` (`name`, `organisation`, `numbers`, `locate`, `dates`, `query`) VALUES ('$name', '$organi', '$num', '$locate', '$date', '$query')";
        if ($result = $mysqli -> query($sql)) 
        {
          ?>
          <h1 style="text-align: center; font-family: system-ui; margin-top: 200px;">Thanks for contacting us!!!</h1>
          <?php
   
        }
      }

      else
      {
        ?>
      <form action="Enquiry.php" method="post">
        <div class="formheader"><br>
          <b>Contact Us</b>
          <p>Please let us know your query</p>
        </div>
        <input type="text" name="name" placeholder="Name*" required>
        <br><br><br>
        <input type="text" name="organization" placeholder="Organisation*" required>
        <br><br><br>
        <input type="text" name="numbers" placeholder="Contact Number*" required>
        <br><br><br>
        <input type="text" name="locate" placeholder="Location:Area/City/State" required>
        <br><br><br>
        <input type="text" placeholder="Tentative Order Date" name="dates" onfocus="(this.type='date')" required>
        <br><br><br>
        <textarea name="query" style=" margin-left: 20px; border: 1px solid #ABB5C4; background: white; width: 360px; height: 60px; border-radius: 7px;" placeholder="Query*"></textarea>
        <br><br><br>
        <button class="btn1" name="sub">SUBMIT</button>
      </form>
      <?php
    }
    
      ?>
    </fieldset>
  </div>
  <br><br>


  <div class="work">
    <div class="workheader">CELEBRATIONS MADE EASY</div>
    <br>
    <div class="workcontent1">
      <p>Convert your work from home into party from home with Legdens Virtual Feast. Order some good old favourites
        from Legdens and celebrate with your colleagues in a new and safer way.</p>
    </div>
    <div class="workimg">
      <img src="https://www.dominos.co.in/theme2/front/images/corp_query/celebration@3x.png" alt="no">
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
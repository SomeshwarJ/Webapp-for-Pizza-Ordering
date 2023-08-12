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
  <link rel="stylesheet" href="veg.css" type="text/css">
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
      ?></nav>
    <div class="content">
      <h2>Legdens Online Ordering</h2>
      <h3>Yummy pizza delivered fast & fresh</h3>
      <div class="delivery">
        <img src="https://micdn-13a1c.kxcdn.com/images/sg/content-images/zero_contact_delivery.jpg" alt="no">
      </div>
    </div>
  </div>

  <div class="menuhead" style="height: 2400px;">
    <h1 style="text-align: center; font-family: system-ui;"><a href="Vegpizza.php" style="color:blue;">VEG PIZZA</a> | <a href="Nonvegpizza.php" style="color:black;">NON-VEG PIZZA</a> | <a href="Sides.php" style="color:black;">SIDES</a></h1>
    <?php
      $mysqli = new mysqli("127.0.0.1:3307", "root", "", "somesh");
      if ($mysqli -> connect_error) 
      {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM `pizza`";
      if ($result = $mysqli -> query($sql)) 
      {
        while ($row = $result -> fetch_array()) 
        {
          ?>
          <form method="post" action="Vegpizza.php?image=<?php echo $row['images']?>&name=<?php echo $row['name']?>&prize=<?php echo $row['prize'] ?>&prize=<?php echo $row['prize'] ?>&size=<?php echo $row['size'] ?>">
          <div style="height: 785px;float: left;">
            <div class="gallery1">
              <div class="gallery2">
                <img src="<?php echo $row['images'] ;?>" style="margin-top:50px; margin-left: 60px;margin-bottom: 13px; width: 250px; height: 270px;" alt="no">
                <div class="desc1">
                  <b><?php echo $row['name']; ?></b>
                  <h4>(<?php echo $row['size']; ?>)</h4>
                  <h5>₹<?php echo $row['prize']; ?></h5>
                  <input type="text" name="quantity" placeholder="Enter Quantity" required>
                  <p class="des"><?php echo $row['desc']; ?></p>
                </div>
              </div>
                <button class="btn1" name="addtocart">ADD TO CART</button>
            </div>
          </div>
        </form>
          <?php
        }
      }
    ?>
    <?php
    if (isset($_POST['addtocart'])) 
    {
      $image = $_GET['image'];
      $name = $_GET['name'];
      $quantity = $_POST['quantity'];
      $size = $_GET['size'];
      $prize = $_GET['prize'];
      $totalprize = $quantity* $prize;
      $sql = "INSERT INTO `pizzacart` (`image`, `name`, `quantity`, `size`, `prize`, `totalprize`) VALUES('$image', '$name','$quantity', '$size', '$prize', '$totalprize')";
      if ($result = $mysqli -> query($sql)) 
      {
        echo '<script>alert("Item added to your cart")</script>';
        echo '<script>window.location="Vegpizza.php"</script>';
      }

      else 
      {
        echo '<script>window.alert("Item is already added");</script>';
        echo "<script>location.href='Vegpizza.php'</script>";
      }
    }
    ?>
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
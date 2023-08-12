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
  <link rel="stylesheet" href="Checkout.css" type="text/css">
</head>

<body>
  <div class="shipping">
    <h2>DELIVERY ADDRESS DETAILS</h2>
  </div>
  <div class="prize">
    <h3>Total Price to Pay : </h3>
    <h2>₹
      <?php
    $mysqli = new mysqli("127.0.0.1:3307","root","","somesh");
    if ($mysqli -> connect_errno) 
    {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }

    $sql1="SELECT SUM(totalprize) AS `total` FROM `pizzacart`";
    $result1 = $mysqli -> query($sql1);
    $row1 = $result1 -> fetch_array();
    $total = $row1['total'];
    $subtotal = $total;
    echo $subtotal;
    ?>
    </h2>
  </div>
  <fieldset>
    <form method="post" action="Checkout.php?quantity=<?php $sql2 = "SELECT SUM(quantity) AS `totalquantity` FROM `pizzacart`"; $result2 = $mysqli -> query($sql2); $row2 = $result2 -> fetch_array(); $totalquantity = $row2['totalquantity']; echo $totalquantity;?>&prize=<?php $sql1="SELECT SUM(totalprize) AS `total` FROM `pizzacart`";    $result1 = $mysqli -> query($sql1);$row1 = $result1 -> fetch_array();$total = $row1['total'];$subtotal = $total;echo $subtotal; ?>" style="height: 565px;">
      <input type="text" name="fname" class="fname" placeholder="Enter Your Firstname*" required>
      <br>
      <input type="text" name="lname" placeholder="Enter your Lastname*" required>
      <br>
      <input type="email" name="email" class="email" placeholder="Should be same as login email*" required>
      <br>
      <input type="text" name="mobilenumber" placeholder="Enter your Mobile Number*" class="mobile" required>
      <br>
      <input type="text" name="alternate" placeholder="Enter your Alternate Number*" class="mobile" required>
      <br>
      <textarea  name="address" class="address" placeholder="Enter your Address For Delivery*" required></textarea>
      <br>
      <input type="submit" name="payment" class="payment" style="background-color: #2161E1; height: 50px; width: 180px; float: left; color: white; font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif; font-size: 18px; font-weight: bold; border: 1px solid white; cursor: pointer; border-radius: 7px; margin-top: 30px;margin-left: 280px;
" value="Proceed to Pay">
    </form><br>
    <div class="continueordering">
      <button onclick="window.location.href='Menu.php'" type="submit" name="continueordering" style="background-color: #2161E1; height: 50px; width: 180px; float: right;color: white; font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif; font-size: 18px; font-weight: bold; border: 1px solid white; cursor: pointer;border-radius: 7px; margin-top: -50px; margin-right: 280px;">Continue Ordering</button>
    </div>
  </fieldset>
  <?php
  $mysqli = new mysqli("127.0.0.1:3307","root","","somesh");
    if (isset($_POST['payment'])) 
    {
      $fname = $_POST['fname'];
      $lname =  $_POST['lname'];
      $email = $_POST['email'];
      $mobile = $_POST['mobilenumber'];
      $alternate = $_POST['alternate'];
      $address = $_POST['address'];
      $orderquantity = $_GET['quantity'];
      $ordertotal = $_GET['prize'];
      if($_SESSION['email']==$email)
      {
        $sql = "INSERT INTO `delivery details` (`fname`, `lname`, `email`, `mobilenumber`, `alternate`, `address`) VALUES ('$fname', '$lname', '$email', '$mobile', 
        '$alternate', '$address')";
        $sql1 = "INSERT INTO `orderhistory`(`orderemail`, `orderquantity`, `orderprize`, `orderdate` , `amountpaid`) VALUES ('$email', '$orderquantity', '$ordertotal' ,NOW(),'Paid')";
        $result1 = $mysqli -> query($sql1);
        if($result = $mysqli -> query($sql))
        {
          echo '<script>window.location="Payment.php";</script>';
        }
      }
      else
      {
        echo '<script>alert("Email should be same as Login email");</script>';
      }
    }
  ?>
</body>
</html>
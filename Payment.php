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
  <link rel="stylesheet" href="Payment.css" type="text/css">
</head>

<body>
  <?php
  $mysqli = new mysqli("127.0.0.1:3307", "root", "", "somesh");
  if ($mysqli -> connect_errno) 
  {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

  if(isset($_POST['sub'])) 
  {
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];
    $sql = "INSERT INTO `card details`(`cardname`,`cardnumber`,`expmonth`,`expyear`,`cvv`) VALUES('$cardname','$cardnumber','$expmonth','$expyear','$cvv')";
    if ($result = $mysqli -> query($sql)) 
    {
      $sql1 = "DELETE FROM `pizzacart`";
      $result1 = $mysqli -> query($sql1);
   
      echo '<script>alert("Your Order has been placed Successfully!!!  :)"); </script>';
      echo '<script>window.location="orderhistory.php";</script>';
    }      
  }
  ?>
  <div class="row">
    <div class="col-50">
      <div class="container">
        <form action="Payment.php" method="post">
          <div class="col-50">
            <h3>Payment</h3>
            <label class="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div><br>
            <label>Name on Card</label>
            <input type="text" name="cardname" placeholder="Ankit Roy" required>
            <label>Credit card number</label>
            <input type="text" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label>Exp Month</label>
            <input type="text" name="expmonth" placeholder="October" required>
            <div class="row1">
              <div class="col-50">
                <label>Exp Year</label>
                <input type="text" name="expyear" placeholder="2021" required>
              </div>
              <div class="col-50">
                <label>CVV</label>
                <input type="text" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
        <input type="submit" name="sub" value="Pay  ₹<?php
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
        ?>" class="btn">
         </form>
       
   </div>
    </div>
  </div>
</body>
</html>
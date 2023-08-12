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
  <link rel="stylesheet" href="orderhistory.css" type="text/css">
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
      <a href="Menu.php" style="float: left; margin-left: 320px; font-family: Optima, sans-serif;">OUR MENU</a>
      <a href="Enquiry.php" style="float: left; font-family: Optima, sans-serif;">CORPORATE ENQUIRY</a>
      <a href="Contact.php" style="float: left; font-family: Optima, sans-serif;">CONTACT</a>
      <a href="Pizzacart.php"><i class="fa fa-shopping-cart" style="font-size: 50px; padding-top: 0px; padding-left: 0px;"></i></a>
      <a href="Logout.php" style="float: left; font-family: Optima, sans-serif;">LOGOUT</a>
    </nav>
    <div class="content">
      <h2>Legdens Online Ordering</h2>
      <h3>Yummy pizza delivered fast & fresh</h3>
      <div class="delivery">
        <img src="https://micdn-13a1c.kxcdn.com/images/sg/content-images/zero_contact_delivery.jpg" alt="no">
      </div>
    </div>
  </div>

  <div class="historyheader">
  	<h2>ORDER HISTORY</h2>
  </div>
	<?php
	$mysqli = new mysqli("127.0.0.1:3307", "root", "", "somesh");
	if ($mysqli -> connect_errno) 
	{
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}

	$email = $_SESSION['email'];
	$sql="SELECT COUNT(*) AS `count` FROM `orderhistory` WHERE `orderemail` = '$email'";
	$result = $mysqli -> query($sql);
	$row = $result -> fetch_array();
	$count = $row['count'];
	if($count == 0)
	{
		?>
		<div class="nohistory" style="height: 400px;">
			<h2 style="padding-left:500px;">Nothing Ordered yet before</h2>
			<button onclick="window.location.href='Menu.php'" type="submit" name="addproduct" class="addproduct">Add product to cart</button>
		</div>
		<?php
	}

	else
	{
		$email = $_SESSION['email'];
		$sql = "SELECT * FROM `orderhistory` WHERE `orderemail` = '$email' ORDER BY orderdate DESC";
		if ($result = $mysqli -> query($sql)) 
		{
			?>
			<div style="height: 300px;">
				<table class="history">
				<tr>
					<th>Orderid</th>
					<th>Quantity</th>
					<th>Total Price</th>
					<th>Order date</th>
					<th>Paid Status</th>
				</tr>
				<?php
				while ($row = $result -> fetch_array())
				{
					?>
					<tr>
						<td><?php echo $row['orderid'];?></td>
						<td><?php echo$row['orderquantity'];?></td>
						<td>₹<?php echo$row['orderprize'];?></td>
						<td><?php echo $row['orderdate'];?></td>
						<td><?php echo $row['amountpaid'];?></td>
					</tr>
			<?php
			}
			?>
			</table>
			</div>
			<?php
		}
	}
	?>
	<button onclick="window.location.href='index.php'" type="submit" name="menu" class="backtohome">Back to home</button>

	<div class="bottombar" style="width: 100%;">
    <div class="footer1">
      <p>All rights reserved. Copyright © Legdens FoodWorks Ltd. Disclaimer | T&C | Privacy Policy</p>
    </div>
  </div>
</body>
</html>    
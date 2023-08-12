<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>LEGDENS PIZZA</title>
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
  <link rel="stylesheet" type="text/css" href="cartpizza.css">
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

  <div class="cartheader">
  	<h2>PIZZA CART</h2>
  </div>

	<?php
	$mysqli = new mysqli("127.0.0.1:3307","root","","somesh");
	$sql="SELECT COUNT(*) AS `count` FROM `pizzacart`";
	$result = $mysqli -> query($sql);
	$row = $result -> fetch_array();
	$count = $row['count'];

	if($count == 0)
	{
		?>
		<div class="noproducts" style="height: 400px;">
			<h2 style="padding-left:500px;">No product added in the cart!</h2>
			<button onclick="window.location.href='Menu.php'" type="submit" name="addproduct" class="addproduct">Add product to cart</button>
			<button onclick="window.location.href='Orderhistory.php'" type="submit" name="orderhistory" class="orderhistory">See the Order history</button>
		</div>
		<?php
	}

	else
	{
		if(isset($_POST['delete']))
		{
			$name = $_GET['name'];
			$sql =  "DELETE FROM `pizzacart` WHERE name = '$name'";
			if ($result = $mysqli -> query($sql)) 
			{
				echo '<script>window.location="Pizzacart.php"</script>';
			}
		}

		$sql = "SELECT name, image, quantity, size, prize, totalprize FROM `pizzacart`";
		if($result = $mysqli -> query($sql))
		{
			?>
			<table class ="cart">
				<tr>
					<th>Pizza</th>
					<th>Name</th>
					<th>Quantity</th>
					<th>Size</th>
					<th>Price</th>
					<th>Total Price</th>
					<th>Remove</th>
				</tr>
				<?php
				while ($row = $result -> fetch_array())
				{
				?>
				<tr>
					<td><img src="<?php echo $row['image'];?>" style="width: 150px; height: 150px; margin-left: 65px;" alt="no"></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['quantity']; ?></td>
					<td><?php echo $row['size']; ?></td>
					<td>₹<?php echo $row['prize']; ?></td>
					<td>₹<?php echo $row['totalprize']; ?></td>
					<td>
						<form method="post" action="Pizzacart.php?name=<?php echo $row['name'];?>">
							<input type="submit" name="delete" style="margin: 20px;" class="btn2" value="Remove">
						</form>
					</td>
				</tr>
				<?php
			}
			?>
			<tr>
				<td colspan="4"></td>
				<td>Review Order</td>
				<td colspan="2">₹
					<?php $sql1="SELECT SUM(totalprize) AS `total` FROM `pizzacart`";
					$result1 = $mysqli -> query($sql1);
					$row1 = $result1 -> fetch_array();
					$total = $row1['total'];
					echo $total; 
					?></td>
			</tr>
			</table>
  <br><br><br>
  
  <button onclick="window.location.href='Menu.php'" type="submit" name="continue" class="btn3">Continue Ordering</button>
  <button onclick="window.location.href='Orderhistory.php'" type="submit" name="orderhistory" class="history">See the Order history</button>
  <button onclick="window.location.href='Checkout.php'" type="submit" name="checkout" class="btn4" >Check Out</button>
  <br><br><br><br><br><br>
	<?php
		}
	}
	?>
</body>
</html>
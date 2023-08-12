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
	<link rel="stylesheet" type="text/css" href="index.css">
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
		<div class="content">
			<h2>Legdens Online Ordering</h2>

			<h3>Yummy pizza delivered fast & fresh</h3>
			<br>
				<button onclick="window.location.href='Menu.php'" class="btn1">
					ORDER ONLINE NOW
				</button>
			<div class="delivery">
				<img src="https://micdn-13a1c.kxcdn.com/images/sg/content-images/zero_contact_delivery.jpg" alt="no">
			</div>
		</div>
	</div>

	<div class="explore">
		<h2 class="things">
			EXPLORE
		</h2>
		<div style="height: 430px; float: left;">
			<div class="gallery1" style=" width: 27.5%; background-color: #F2F4F7; border-radius: 10px;">
				<img src="https://image.flaticon.com/icons/png/512/3428/3428655.png" style="margin-top:50px; margin-left: 130px;
				margin-bottom: 13px; width: 120px; height: 120px;" alt="no">
				<div class="desc1">
					<b>OUR MENU</b>
					<br><br>
					<p class="des">Explore our range of delicious Pizzas, delivered in 30 minutes!</p>
					<hr>
					<a href="Menu.php">
						<p class="des1">DISCOVER PIZZA</p>
					</a>
				</div>
			</div>

			<div class="gallery1" style=" width: 27.5%; background-color: #E3E5EA; border-radius: 10px;">
				<img src="https://image.flaticon.com/icons/png/512/1487/1487988.png" style="margin-top:50px; margin-left: 130px;margin-bottom: 13px; width: 120px; height: 120px;" alt="no">
				<div class="desc1">
					<b>OUR DEALS</b>
					<br><br>
					<p class="des">Enjoy our special deals and offers!<br>Make them use of it!</p>
					<hr>
					<a href="Deals.php">
						<p class="des1">VIEW NOW</p>
					</a>
				</div>
			</div>

			<div class="gallery1" style=" width: 27.5%; background-color: #F2F4F7; border-radius: 10px;">
				<img src="https://static.thenounproject.com/png/3185146-200.png" style="margin-top:50px; margin-left: 130px; margin-bottom: 13px; width: 120px; height: 120px;" alt="no">
				<div class="desc1">
					<b>BIRTHDAY PARTY</b>
					<br><br>
					<p class="des">Celebrate the joy of birthday with Fresh & Hot pizza</p>
					<hr>
					<a href="Birthday.php">
						<p class="des1">BOOK NOW</p>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="terms">
		<fieldset style="margin-left: 200px; margin-right: 200px; border: 1px solid #E3E5EA; background-color: #F2F4F7; margin-bottom: 20px; border-radius: 10px;">
			<div class="termsheader">Legdens Pizza: Delivering Happiness</div>
			<p class="termscontent">What’s better than having a crispy melty pizza, you ask?<br><br>Having that crispy and
				melty pizza in the comfort of your own home with the ones you love, we say.<br><br>With Legdens it is always
				“Rishton ka time”. Whether it's a treat for your promotion, a kid topping his class or winning the heart of
				your wife who is too tired to cook after a long day at work! A cheesy slice of the best pizza is all one
				needs to put things into perspective and start any celebration. Plus, you do not even need to rush to the
				restaurant to have one now. A call, a few clicks on our website or a few touches on the mobile screen is all
				you have to do to have that tempting, light-on-the-pocket pizza at your doorstep.<br><br>There is something
				for everyone here. The vegetarians, non-vegetarians, the sides’ lovers and also the ones who love to have
				something sweet by the time they reach the last bite of the last slice of pizza slice.
			</p>
		</fieldset>

		<fieldset style="margin-left: 200px; margin-right: 200px; border: 1px solid #E3E5EA; background-color: #E3E5EA; margin-bottom: 20px; border-radius: 10px;">
			<div class="termsheader">What We Need - More Choice. More Fun.</div>
			<p class="termscontent">No matter what the situation, pizza always helps. Especially a pizza that gives you the
				freedom to choose your toppings - from paneer, crisp capsicum, onion, grilled mushroom, golden corn, black
				olives, fresh tomato, red paprika, jalapeno, paneer tikka and extra cheese to non-veg toppings such as
				pepper barbeque chicken, peri-peri chicken, grilled chicken rasher, chicken sausage or chicken tikka- the
				options are almost endless, anything and everything you can think of that too on top of the crust of your
				choice - New hand-tossed crust, wheat thin crust, cheese burst crust, classic hand-tossed crust or a fresh
				pan pizza. Because just like a pizza, Legdens understands you.
			</p>
		</fieldset>

		<fieldset style="margin-left: 200px; margin-right: 200px; border: 1px solid #E3E5EA; background-color: #F2F4F7; margin-bottom: 20px; border-radius: 10px;">
			<div class="termsheader">Franchise Information</div>
			<p class="termscontent">Jubilant FoodWorks Limited is the Master Franchisee of Legdens Pizza in India,
				Bangladesh, Sri Lanka and Nepal with sole and exclusive rights to own and operate Domino’s Pizza restaurants
				in these territories. For any franchise-related queries, kindly email us directly at
				legdens.franchise@jublfood.com<br><br>We have come across a few instances of fraudsters posing as Jubilant
				FoodWorks and asking for payment from gullible investors against the promise of a Legdens franchise. We
				therefore caution and urge all interested parties to be careful and vigilant and interact only with the
				email id mentioned above. Anyone dealing with such fraudsters shall be doing so on their own peril, risk and
				consequences.<br><br>Neither Jubilant FoodWorks nor its Directors/Officers shall be responsible for any
				loss, harm, damage or fraud that occurs or may occur or arise to any person who decides to access such fake
				websites, or deal with them.
			</p>
		</fieldset>
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
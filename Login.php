<?php
	session_start();

	$mysqli = new mysqli("127.0.0.1:3307", "root", "", "somesh");
	if ($mysqli -> connect_errno) 
	{
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}

	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$url = "index.php";
		$sql = "SELECT * FROM registration WHERE email = '$email' && password = '$pass'";
		$result = $mysqli -> query($sql);
		$num = $result -> num_rows;

		if ($num == 1) 
		{
			$_SESSION['email'] = $_POST['email'];
			echo '<script>window.alert("Login Successful");</script>';
			echo "<script>location.href='$url'</script>";
		}

		else 
		{
			echo '<script>alert("Account does not exits!Please create an account for pizza ordering");</script>';
			echo '<script>window.location="Signup.php"</script>';
		}
	}
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
    <link rel="icon" type="image/x-icon" href="https://i.pinimg.com/originals/2c/fc/93/2cfc93d7665f5d7728782700e50596e3.png">
    <link rel="stylesheet" type="text/css" href="Login.css">
     <link rel="icon" type="image/x-icon" href="https://static.thenounproject.com/png/30194-200.png">
</head>

<body>
	<div class="header" style="float: left; width: 40%;">
		<h1>LEGDENS PIZZA</h1>
		<div class="welcome">
			<h2>Welcome Back</h2>
			<div class="headercontent">
				<h3>Sign in with your email address & password</h3>
				<form action="Login.php" method="post">
					<input type="email" name="email" placeholder="Email Address" required><br><br>
					<input type="password" name="pass" id="myInput" placeholder="Password"  required><br>
					<input type="checkbox" onclick="myFunction()"><h4>Show Password</h4>
					<script>
						function myFunction()
						{
							var x = document.getElementById("myInput");
							if (x.type === "password")
							{
								x.type = "text";
							}

							else
							{
								x.type = "password";
							}
						}
					</script>
					<button type="submit" class="btn1" name="login">Login</button>
					<div class="account">
						<p>Don't have an account?</p><h4><a href="Signup.php">Sign Up</a></h4>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="background" style="float: right; width: 57%;">
		<img src="https://wallpaperaccess.com/full/866649.jpg" alt="no">
	</div>
</body>
</html>
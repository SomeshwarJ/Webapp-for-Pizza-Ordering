<?php
session_start();
session_destroy();
$mysqli = new mysqli("127.0.0.1:3307", "root", "", "somesh");
	if ($mysqli -> connect_errno) 
	{
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}
$sql = "DELETE FROM `pizzacart`"; 
$result = $mysqli -> query($sql);
header('location:index.php')
?>
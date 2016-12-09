<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
		<title>Sign Up</title>
	</head>

<body>


<div class="container-fluid">
		<div class="text-center">

			<nav class="navbar-default navbar-static top" margin-top="30px" role="navigation">
			<div class="container-fluid ">  
				<a class="navbar-brand " href="index.html">RobotsStore</a>
					<div class="collapse navbar-collapse navbar-right">  
						<ul class="nav navbar-nav nav-tabs">
							<li><a href="index.html">Home</a></li>
							<li><a href="products.html">Products</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="contactus.php">Contact Us</a></li>
							<li><a href="login.html">Login</a></li>
							<li><a href="users.html">Users</a></li>
							
						</ul>
			</div>
			</div>
			</nav>
</div>
<div class="container">

<?php

extract($_POST);

		if(!$firstname || !$lastname || !$email || !$address || !$landline || !$mobile || !$gender){
			echo '<p align="center">';
			echo "You have not filled all the details.<br>Please fill all the fields.</p>";
		}
		else{

			$host = 'robotsstore.co';
			$user='sidharth11';
			$pass = 'sidharth11';
			$db='RobotsStore';

			$con = mysqli_connect($host,$user,$pass,$db);
			if(!$con){
				echo '<p align="center">Connection to the database could not be made.<br>Please try after some time.</p>';
			}
			else{
				$sql = "INSERT INTO `Users`(`FirstName`, `LastName`, `Email`, `HomeAddress`, `LandlineNumber`, `MobileNumber`, `Gender`) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[address]',$_POST[landline],$_POST[mobile],'$_POST[gender]')";

				$query = mysqli_query($con, $sql);

				if($query){
					echo '<p align="center">You have signed up successfully.<br>Welcome to RobotsStore.</p>';
				}
				else{
					echo '<p align="center">There was an error while executing your query.<br>Please try after some time.</p>'; 

				}
			}
		}
?>

</div>

<footer class="site-footer">
	<div class="container">
	<div class="collapse navbar-collapse navbar-center">  
		<ul class="nav navbar-nav">
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
			<li><a href="recentlyviewed.php">Recently Viewed Products</a></li>
			<li><a href="mostviewed.php">Most Viewed Products</a></li>
		</ul>
	</div>
	</div>

</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
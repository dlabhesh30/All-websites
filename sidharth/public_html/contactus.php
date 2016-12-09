<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
		<title>Contact Us</title>
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
<h2 align="center">Contact Us</h2>
<p align="center">
<?php
$myfile = fopen("Contacts.txt", "r") or die("Unable to open file!");
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
fclose($myfile);
?>
</p>
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

<!--

<nav class="navbar-default navbar-static top" margin-top="30px" role="navigation">
			
-->
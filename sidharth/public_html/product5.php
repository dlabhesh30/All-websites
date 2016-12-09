<?php

$cookie_name = 'product5';
$cookie_name2 = 'time5';
$today = date("His");
setcookie($cookie_name2, $today, time()+86400);

if(isset($_COOKIE[$cookie_name])){
	$val = $_COOKIE[$cookie_name];
	setcookie($cookie_name, $val+1, time()+86400);
}
else{
	setcookie($cookie_name, 1, time() + 86400);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
 rel="stylesheet"integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
 crossorigin="anonymous">

		<title>Welding Robot</title>
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
</div>


<div class="container" >
  <div class="row">
   <div class="col-md-6">
    
   	<img src="img/5.jpg" alt="Image not available" class="image-responsive"/>

   </div>
   <div class="col-md-6">
    <h2>Welding Robot</h2>
    <p>
    	<dl>
    		<dd>Capable of welding in manufacturing factories</dd>
    		<dd>Can work for 24 hours at a stretch</dd>
    		<dd>Counts number of defects to monitor effeciency</dd>
    		<dd>50000mAh Battery</dd>
    		<dd>Price: $999</dd>
    		<dd><a class ="btn btn-primary btn-lg" role="button" href="#learn_more">Buy Now</a></dd>
    	</dl>
    </p>
   </div>
  </div><!-- end row -->
 </div><!-- end container -->



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
<script src="https://code.jquery.com/jquery-2.2.2.min.js" 
     integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" 
     crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
     integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" 
     crossorigin="anonymous"></script>
</body>
</html>
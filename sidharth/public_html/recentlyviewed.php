<?php

$time = array(
	"product1.php" => $_COOKIE['time1'],
	"product2.php" => $_COOKIE['time2'],
	"product3.php" => $_COOKIE['time3'],
	"product4.php" => $_COOKIE['time4'],
	"product5.php" => $_COOKIE['time5'],
	"product6.php" => $_COOKIE['time6'],
	"product7.php" => $_COOKIE['time7'],
	"product8.php" => $_COOKIE['time8'],
	"product9.php" => $_COOKIE['time9'],
	"product10.php" => $_COOKIE['time10']
);

arsort($time);

$arr = array(
	"product1.php" => "Robot X2", 
	"product2.php" => "Robot X", 
	"product3.php" => "Robot Army", 
	"product4.php" => "Robot Professional X1", 
	"product5.php" => "Welding Robot", 
	"product6.php" => "Robot Vaccum", 
	"product7.php" => "Robot Pet Feeder", 
	"product8.php" => "Robot Golf Cart", 
	"product9.php" => "Robot Lawn Mower", 
	"product10.php" => "Robot Delivery Boy"
);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
		<title>Recently Viewed Items</title>
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

					echo "<p align='center'><font size='10'>Recently visited products:</font></p>";
					echo '<table align = "center" width="60%">';
					echo '<tr>
							<th>S No.</th>
							<th>Product Name</th>
							<th>Product Link</th>
						  </tr>';		
					$i=1;

					foreach($time as $x => $x_value) {
						if($x_value != 0){
						echo '<tr>';
						echo '<td>'.$i.'</td>';
						echo '<td>'.$arr[$x].'</td>';
						echo '<td><a href ='.$x.'>View Product</a></td>';
						$i=$i+1;
						if($i==6) break;
						}
					}

					

					echo "</table>";

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
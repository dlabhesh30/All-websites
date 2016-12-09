<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
		<title>All Users</title>
	</head>

<body>


<div class="container-fluid text-center">
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

<div class="container">
<?php>
		$sql = "SELECT * FROM Users;";
		fetch($sql);
	

		function fetch($sql){
			$host = 'robotsstore.co';
			$user='sidharth11';
			$pass = 'sidharth11';
			$db='RobotsStore';

			$con = mysqli_connect($host,$user,$pass,$db);
			if(!$con){
				echo '<p align="center">Connection to the database could not be made.<br>Please try after some time.</p>';
			}
			else{
				$query = mysqli_query($con, $sql);
				$v = mysqli_num_rows($query);
				if(!$v){
					echo '<p align="center">No records found for the given search criteria.<br>You can try again with some other input.</p>';
				}
				else{
					echo "<p align='center'><font size='10'>Records found:</font></p>";
					echo '<table align = "center" width="80%">';
					echo '<tr align = "center">
							<th align = "center">S No.</th>
							<th align = "center">First-Name</th>
							<th align = "center">Last Name</th>
							<th align = "center">Email</th>
					                <th align = "center">Home Address</th>
						        <th align = "center">Landline Number</th>
					                <th align = "center">Mobile Number</th>
						        <th align = "center">Gender</th>
						  </tr>';		
					$i=1;

					while($itt=mysqli_fetch_assoc($query)){
						echo '<tr align="center">';
						echo '<td>'.$i.'</td>';
						echo '<td>'.$itt['FirstName'].'</td>';
						echo '<td>'.$itt['LastName'].'</td>';
						echo '<td>'.$itt['Email'].'</td>';
						echo '<td>'.$itt['HomeAddress'].'</td>';
						echo '<td>'.$itt['LandlineNumber'].'</td>';
						echo '<td>'.$itt['MobileNumber'].'</td>';
						echo '<td>'.$itt['Gender'].'</td>';
						echo '</tr>';
						$i=$i+1;
					}

					echo "</table>";
				}
			}
		} //funcytion fetch -->
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
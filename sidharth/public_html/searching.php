<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
		<title>Search Result</title>
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
<?php
		extract($_POST);

		if(!$nameinput){
			echo '<p align="center">You have not entered a search value. Please try again and enter a value.</p>';
		}
		else{
			$search = $_POST['field'];
			if($search == "firstname"){
				$sql = "SELECT * FROM Users	 WHERE binary FirstName='$_POST[nameinput]'";
				fetch($sql);
			}
			if($search == "lastname"){
				$sql = "SELECT * FROM Users	 WHERE binary LastName='$_POST[nameinput]'";
				fetch($sql);
			}
			if($search == "email"){
				$sql = "SELECT * FROM Users WHERE binary Email='$_POST[nameinput]'";
				fetch($sql);
			}
			if($search == "address"){
				$sql = "SELECT * FROM Users WHERE binary HomeAddress='$_POST[nameinput]'";
				fetch($sql);
			}
			if($search == "landline"){
				$sql = "SELECT * FROM Users WHERE binary LandlineNumber='$_POST[nameinput]'";
				fetch($sql);
			}
			if($search == "mobile"){
				$sql = "SELECT * FROM Users WHERE binary MobileNumber='$_POST[nameinput]'";
				fetch($sql);
			}
		}

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
					echo '<table align = "center" width="60%">';
					echo '<tr>
							<th>S No.</th>
							<th>First-Name</th>
							<th>Last Name</th>
							<th>Email</th>
					        <th>Home Address</th>
						    <th>Landline Number</th>
					        <th>Mobile Number</th>
						    <th>Gender</th>
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
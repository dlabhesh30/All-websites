
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
		<title>Login Details</title>
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

		if(!$username || !$password){

			missing();
		}
		else{
			if(isset($NewUser)){

				if(!($file=fopen("cred.txt", "a"))){
					echo "Could not open file.";
				}
				else{
					fputs($file,"$username,$password\n");
					userAdded($username);
				}
			}
			else{

				if(!($file=fopen("cred.txt","r"))){
					echo "Could not open file.";
				}
				else{
					$userverified=0;

					if($username == "admin"){
						while(!feof($file) and !$userverified){
							$line = fgets($file,255);
							$line = chop($line);
							
							$field = explode(",", $line);

							if($field[0] == $username){
								$userverified=1;
								if($field[1] == $password){
									fclose($file);
									showData();
								}
								else{
									wrongPassword();
								}
							}
						}
					}
					else{
						while(!feof($file) and !$userverified){
							$line = fgets($file,255);
							$line = chop($line);
							
							$field = explode(",", $line);

							if($field[0] == $username){
								$userverified=1;
								if($field[1] == $password){
									accessGranted($username);
									
								}
								else{
									wrongPassword();
								}
							}
						}
					}
					if($userverified==0) accessDenied();
				}
			}
		}

		function showData(){
			$myfile = fopen("cred.txt", "r") or die("Unable to open file!");
			echo "<table align='center'><tr><th>Name</th><th>Password</th></tr>";
				$myfile=fopen("cred.txt","r");
				while(!feof($myfile)){
					$line = fgets($myfile,255);
					$line = chop($line);
					$field = explode(",", $line);

					echo "<tr>";
					echo "<td>".$field[0]."</td>";
					echo "<td>".$field[1]."</td>";
					echo "</tr>";
				}
				echo "</table>";
				
		}

		function accessGranted($name){
			echo '<p align="center">';
			echo "Permission has been granted.";
			echo "<br>";
			echo "Welcome ".$name;
		}

		function wrongPassword(){
			echo '<p align="center">';
			echo "You have entered invalid credentials.<br>Please try again.";
			
		}

		function accessDenied(){
			echo '<p align="center">';
			echo "The entered username was not found.<br>You were denied access to the server.";
		}

		function missing(){
			echo '<p align="center">';
			echo "You have not filled all the details.<br>Please fill all the fields.";
			echo '</p>';
		}

		function userAdded($name){
			echo '<p align="center">';
			echo "You have signed up successfully";
			echo "<br>";
			echo "Welcome ".$name;

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
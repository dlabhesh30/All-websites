<html>
<head width=100%>
	<title>SignUp</title>

	<table bgcolor="###DA9259" width=100% height="100">
		<tr>
			<th><font color = "#0F6D97" size=10>RobotsStore</font></th>
			<th><a href="index.html"><font color = "#0F6D97">Home</font></a></th>
			<th><a href="Products.html"><font color = "#0F6D97">Products</a></th>
			<th><a href="News.html"><font color = "#0F6D97">News</font></a></th>
			<th><a href="  About.html"><font color = "#0F6D97">About</font></a></th>
			<th><a href="ContactUs.php"><font color = "#0F6D97">Contact Us</font></a></th>
			<th><a href="login.html"><font color = "#0F6D97">Login</font></a></th>
			<th><a href="users.html"><font color = "#0F6D97">Users</font></a></th>
		</tr>
	</table>
</head>
<body bgcolor="#000000">
	<img src=1.jpg width="200" height="100">	<img src=2.jpg width="200" height="100">	<img src=3.jpg width="200" height="100">	<img src=4.jpg width="200" height="100"> <img src=5.jpg width="200" height="100">	<img src=6.jpg width="226" height="100">

<?php

extract($_POST);

		if(!$firstname || !$lastname || !$email || !$address || !$landline || !$mobile || !$gender){
			missing();
			die();
		}


		$host = 'www.robotsstore.co';
		$user='sidharth11';
		$pass = 'sidharth11';
		$db='RobotsStore';

		$con = mysqli_connect($host,$user,$pass,$db);
		if($con){
			//echo "<font color='white'>connected successfully";
		}
		else{
			echo '<p align="center"><font color = "white"> Connection to the database could not be made.<br>Please try after some time.</p>';
			die();
		}

		$sql = "INSERT INTO `Users`(`FirstName`, `LastName`, `Email`, `HomeAddress`, `LandlineNumber`, `MobileNumber`, `Gender`) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[address]',$_POST[landline],$_POST[mobile],'$_POST[gender]')";

		$query = mysqli_query($con, $sql);

		if($query){
			echo '<p align="center"><font color = "white"> You have signed up successfully.<br>Welcome to RobotsStore.</p>';
			die();
		}
		else{
			echo '<p align="center"><font color = "white"> There was an error while executing your query.<br>Please try after some time.</p>'; 
			die();
		}

		function missing(){
			echo '<p align="center"><font color = "white">';
			echo "You have not filled all the details.<br>Please fill all the fields.</p>";
		}
?>

</body>
</html>
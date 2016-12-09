<html>
<head width=100%>
	<title>Search Results</title>

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

		if(!$nameinput){
			echo '<p align="center"><font color = "white"> You have not entered a search value. Please try again and enter a value.</p>';
				die();
		}
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

		function fetch($sql){
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

			$query = mysqli_query($con, $sql);
			$v = mysqli_num_rows($query);
			if(!$v){
				echo '<p align="center"><font color = "white"> No records found for the given search criteria.<br>You can try again with some other input.</p>';
				die();
			}

			if($query){

				echo "<p align='center'><font color='white' size='10'>Records found:";
				echo '<table align = "center" width="60%">';
				echo '<tr><th><font color="white">S No.</th><th><font color="white">First Name</th><th><font color="white">Last Name</th><th><font color="white">Email</th>';
				echo '<th><font color="white">Home Address</th><th><font color="white">Landline Number</th>';
				echo '<th><font color="white">Mobile Number</th><th><font color="white">Gender</th></tr>';				
				$i=1;
				while($itt=mysqli_fetch_assoc($query)){
					echo '<tr align="center">';
					echo '<td><font color="white">'.$i.'</td>';
					echo '<td><font color="white">'.$itt['FirstName'].'</td>';
					echo '<td><font color="white">'.$itt['LastName'].'</td>';
					echo '<td><font color="white">'.$itt['Email'].'</td>';
					echo '<td><font color="white">'.$itt['HomeAddress'].'</td>';
					echo '<td><font color="white">'.$itt['LandlineNumber'].'</td>';
					echo '<td><font color="white">'.$itt['MobileNumber'].'</td>';
					echo '<td><font color="white">'.$itt['Gender'].'</td>';
					echo '<tr>';
					$i=$i+1;
				}
			}
			else{
				echo "<font color='white'>There was an error while executing your query.<br>Please try after some time."; 
			die();
			}
		}
?>

</body>
</html>
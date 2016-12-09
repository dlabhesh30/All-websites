<html>
<head width=100%>
	<title>Home</title>

	<table bgcolor="###DA9259" width=100% height="100">
		<tr>
			<th><font color = "#0F6D97" size=10>RobotsStore</font></th>
			<th><a href="index.html"><font color = "#0F6D97">Home</font></a></th>
			<th><a href="Products.html"><font color = "#0F6D97">Products</a></th>
			<th><a href="News.html"><font color = "#0F6D97">News</font></a></th>
			<th><a href="About.html"><font color = "#0F6D97">About</font></a></th>
			<th><a href="ContactUs.php"><font color = "#0F6D97">Contact Us</font></a></th>
			<th><a href="login.html"><font color = "#0F6D97">Login</font></a></th>
			<th><a href="users.html"><font color = "#0F6D97">Users</font></a></th>
		</tr>
	</table>
</head>

<body bgcolor="#000000">
	<?php
		extract($_POST);

		if(!$username || !$password){
			missing();
			die();
		}
	
		if(isset($NewUser)){

			if(!($file=fopen("cred.txt", "a"))){
				echo "<font color='white'>";
				echo "Could not open file.";
				die();
			}

			fputs($file,"$username,$password\n");
			userAdded($username);
		}
		else{

			if(!($file=fopen("cred.txt","r"))){
				echo "<font color='white'>";
				echo "Could not open file.";
				die();
			}

			$userverified=0;

			if($username == "admin"){
				while(!feof($file) && !$userverified){
					$line = fgets($file,255);
					$line = chop($line);
					
					$field = explode(",", $line);

					if($field[0] == $username){
						$userverified=1;
						if($field[1] == $password){
							fclose($file);
							showData();
							die();
						}
						else{
							wrongPassword();
							die();
						}
					}
				}
			}

			else{
				while(!feof($file) && !$userverified){
					$line = fgets($file,255);
					$line = chop($line);
					
					$field = explode(",", $line);

					if($field[0] == $username){
						$userverified=1;
						if($field[1] == $password){
							accessGranted($username);
							die();
						}
						else{
							wrongPassword();
							die();
						}
					}
				}
			}
			if($userverified==0) accessDenied();
		}

		function showData(){
			$myfile = fopen("cred.txt", "r") or die("<font color='white'>Unable to open file!");
			echo "<table><tr><th><font color='white'>Name</th><th><font color='white'>Password</th></tr>";
				$myfile=fopen("cred.txt","r");
				while(!feof($myfile)){
					$line = fgets($myfile,255);
					$line = chop($line);
					$field = explode(",", $line);

					echo "<tr>";
					echo "<td><font color='white'>".$field[0]."</td>";
					echo "<td><font color='white'>".$field[1]."</td>";
					echo "</tr>";
				}
				echo "</table>";
				die();
		}

		function accessGranted($name){
			echo "<font color='white'>";
			echo "Permission has been granted.";
			echo "<br>";
			echo "Welcome ".$name;
		}

		function wrongPassword(){
			echo "<font color='white'>";
			echo "You have entered invalid credentials.";
			
		}

		function accessDenied(){
			echo "<font color='white'>";
			echo "The entered username was not found.<br>You were denied access to the server.";
		}

		function missing(){
			echo "<font color='white'>";
			echo "You have not filled all the details.<br>Please fill all the fields.";
		}

		function userAdded($name){
			echo "<font color='white'>";
			echo "You have signed up successfully";
			echo "<br>";
			echo "Welcome ".$name;

		}
	?>
</body>
</html>
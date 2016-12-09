<?php
	$sql = "SELECT firstname,lastname FROM Users";
	$host = 'robotsstore.co';
	$user='sidharth11';
	$pass = 'sidharth11';
	$db='RobotsStore';
	$str="";
	$con = mysqli_connect($host,$user,$pass,$db);
	if(!$con){
		echo '<p align="center">Connection to the database could not be made.<br>Please try after some time.</p>';
	}
	else{
		$query = mysqli_query($con, $sql);
		$v = mysqli_num_rows($query);
	
		while($itt=mysqli_fetch_assoc($query)){
			$str=$str.$itt['firstname'];
			$str=$str.",";
			$str=$str.$itt['lastname'];
			$str=$str.";";
		}
	}
$arr = explode(";", $str);

echo '<table align = "center" width="60%">';
	echo '<tr>
			<th>First Name</th>
			<th>Last Name</th>
		  </tr>';		

foreach ($arr as $x){
	$temp = explode(",", $x);
	echo '<tr align="center">';
		echo '<td>'.$temp[0].'</td>';
		echo '<td>'.$temp[1].'</td>';
	echo '</tr>';
}
?>
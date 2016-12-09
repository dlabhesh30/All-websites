<?php
		extract($_POST);

		if(!$nameinput){
			echo '<p align="center">You have not entered a search value. Please try again and enter a value.</p>';
		}
		else{
			$sql = "SELECT fistname,lastname FROM Users;
			fetch($sql);
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
				str="";
				while($itt=mysqli_fetch_assoc($query)){
					str=str+$itt['FirstName'];
					str=str+$itt['LastName'];
				}	
			}
		} 
?>
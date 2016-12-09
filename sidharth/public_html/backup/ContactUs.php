<html>
<head width=100%>
	<title>Contact Us</title>

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
<?php
$myfile = fopen("Contacts.txt", "r") or die("Unable to open file!");
echo "<font color='white'> ";
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
echo fgets($myfile);
echo "<br>";
fclose($myfile);
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if(!isset($_COOKIE[1])){
	setcookie(1,"gearS3");
}else{
	echo "$_COOKIE[1]";
}

 ?>
</body>
</html>
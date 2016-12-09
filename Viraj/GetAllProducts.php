<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
<?php 
  $ch = curl_init();


curl_setopt($ch, CURLOPT_URL, "http://myhelpinghandonline.com/GetProducts.php");


curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


$contents = curl_exec ($ch);
//$row=$contents->fetch_assoc();
print($contents);
?>
</body>
</html>

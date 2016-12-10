<html>
<body>
<?php 
  $username = "arun";
  $server = "localhost";
  $user = "arunkuma_user";
  $pass = "arunkuma_user";
  $db = "arunkuma_user";
  $conn = new mysqli($server, $user, $pass, $db);
  $total = 0;
  
  $Name = $_POST["Name"];
  $Description = $_POST["Description"];
  $Price = intval($_POST["Price"]);
  $Image = $_POST["Image"];
  $sql = "select  Name, Price, Image, Description, count(*) as Quantity from cart where Username = '$username' group by  Name, Price, Image, Description";

$result = $conn->query($sql);
while($row = $result->fetch_array())
  {
  	$row['Price'] = $row['Price'] * $row['Quantity'];
  	$total = $total + $row['Price'];
  echo $row['Name'] . " " . $row['Quantity'] . " " . $row['Price'] . " " . $row['Image'] . " ". $row['Description'];
  echo "<br />";
  }



$conn->commit();
$conn->close();

echo '$total';

?>

<form action = "checkout2.php" method = "post">
<input type = "submit" value = "checkout" />
</form>
</body>
</html>
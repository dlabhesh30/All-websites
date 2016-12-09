<html>
<body>
<?php 
  $username = "arun";
  $server = "localhost";
  $user = "arunkuma_user";
  $pass = "arunkuma_user";
  $db = "arunkuma_user";
  $conn = new mysqli($server, $user, $pass, $db);
  
  
  $Name = $_POST["Name"];
  $Description = $_POST["Description"];
  $Price = intval($_POST["Price"]);
  $Image = $_POST["Image"];
  $sql = "INSERT INTO cart (Username,Name,Description,Price,Image) VALUES ('$username','$Name','$Description', $Price ,'$Image');";

$result = $conn->query($sql);
$conn->commit();
$conn->close();

#echo $conn;
echo gettype($Price);

?>
</body>
</html>
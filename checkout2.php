<html>
<body>
<?php 
  $username = "arun";
  $server = "localhost";
  $user = "arunkuma_user";
  $pass = "arunkuma_user";
  $db = "arunkuma_user";
  $conn = new mysqli($server, $user, $pass, $db);
  $i = 0
  
  $Name = $_POST["Name"];
  $Description = $_POST["Description"];
  $Price = intval($_POST["Price"]);
  $Image = $_POST["Image"];
  $sql = "Delete from cart where username = '$username'";

$result = $conn->query($sql);

$conn->commit();

  $sql = "select * from cart";
  $result = $conn->query($sql);
while($row = $result->fetch_array())
  {
  	$row['Price'] = $row['Price'] * $row['Quantity'];
  echo $row['Name'] . " " . $row['Quantity'] . " " . $row['Price'] . " " . $row['Image'] . " ". $row['Description'];
  $post[i] = "Name=".&row['Name']. " quantity =".&row['Quantity']."";
  echo "<br />";
  }
echo $post

$conn->commit();
$conn->close();

               #$ch = curl_init();


                #curl_setopt($ch, CURLOPT_URL, "http://myhelpinghandonline.com/buyproduct.php");
                #curl_setopt($ch, CURLOPT_POST, true);
                #curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

                /*curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);



                $contents = curl_exec ($ch);
*/





#echo $conn;


?>


</body>
</html>
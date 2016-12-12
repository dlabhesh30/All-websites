<html>
<script>
function cart() {
  alert ("Your Order has been Placed :)");
}
</script>
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
<script>
        cart();
</script>

</body>
</html>
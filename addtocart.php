<?php
if (session_status() == PHP_SESSION_NONE){
  session_start();
}
?>
<html>
<body>
<?php
  $username = null;
  if($_SESSION !== NULL && $_SESSION['Username'] != null ){
    $username = $_SESSION['Username'];
  }else{
    $current_url_parent = "http://$_SERVER[HTTP_HOST]".dirname($_SERVER['PHP_SELF']);
    //TODO: check for root dir
    $login_page = $current_url_parent."/login.html";
    header("Location: ".$login_page);
    die();
  }
  // $username = "arun";
  $server = "localhost";
  $user = "dlabhesh30";
  $pass = "nyc1788";
  $db = "labhesh_db";
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
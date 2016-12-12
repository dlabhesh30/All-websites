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
  // $username = "arun";\

  $server = "localhost";
  $user = "myhelpi3_root";
  $pass = "chachi420";
  $db = "myhelpi3_Users";
  /*
  $server = "localhost";
  $user = "gurnoor";
  $pass = "gurnoor";
  $db = "RobotsStore";
  */
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
header("Location: http://www.myhelpinghandonline.com/272/index.php");

?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/584b0a8ee2def07b70ab53ce/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
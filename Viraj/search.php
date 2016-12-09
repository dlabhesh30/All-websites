<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>My Helping Hand Online | If you need a hand, we got them</title>
     <link rel="stylesheet" type="text/css" href="style.css" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="header">
  <h1>MyHelpingHand</h1>
  <div class="nav">
    <ul>
      <li><a href="default.html">Home</a></li>
      <li><a href="register.php">Users</a></li>
      <li><a href="secure.html">Secure Section</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="news.html">News</a></li>
      <li><a href="contacts.php">contacts</a></li>
    </ul>
  </div>
</div>
<article><section>
  <?php 
  extract($_POST);
  $server = "localhost";
  $user = "myhelpi3_root";
  $pass = "chachi420";
  $db = "myhelpi3_Users";


$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Users WHERE ".$type."='$where'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
   while($row = $result->fetch_assoc()) {
        echo "firstname: " . $row["fname"]. " <br>lastname: " . $row["lname"]."<br>email: " . $row["email"]. " <br>address: " . $row["address"]. "<br>home phone: " . $row["hphone"]. "<br> cell phone: " . $row["cphone"]."<br>";
    }
    
}
$conn->close();
  /*
  $query="SELECT " . $type . " FROM USERS WHERE " .$type. "=" .$input;
  $database=mysql_connect("localhost","httpd","");
  if(!(mysql_select_db("USERS",$database))){
    die("COuld not connect");
  }
  if(!($result=mysql_query($query,$database))){
    print("Could not xecute query");
    die(mysql_error());
  } 
  echo "<h1>".mysql_fetch_row($result)."</h1>";
  mysql_close($database);*/
  ?>
</section></article>

<div class="footer"><h4>email:virajnilakh220@gmail.com<br/>*All rights reserved &copy; 2016 MyHelpingHand</h4> </div>

</body>
</html>

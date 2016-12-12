<?php 
  $server = "localhost";
  $user = "gurnoors_admin";
  $pass = "gurnoors_admin";
  $db = "gurnoors_users";


$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Products";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
print('<ul id="flexiselDemo3">');
   while($row = $result->fetch_assoc()) {
    
        print('
			<li><img src="'.$row["Image"].'" height="100"/><div class="grid-flex"><a href="#">'.$row["Name"].'</a><p>$'.$row["Price"].'</p></div></li>
			
	    ');
    }
    print('</ul>');

    
}


$conn->close();
?>




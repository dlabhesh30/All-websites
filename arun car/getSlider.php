<?php 
  $server = "localhost";
  $user = "myhelpi3_root";
  $pass = "chachi420";
  $db = "myhelpi3_Users";


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




	<?php 
  $server = "localhost";
  $user = "myhelpi3_root";
  $pass = "chachi420";
  $db = "myhelpi3_Users";

extract($_POST);
$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Products WHERE Name='$name'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  /*if($row["Quantity"]==0){
    $quant=$row["Quantity"];
  }else{
    $quant=$row["Quantity"]-1;
  }*/
  $num=$row['Views'];
  $num=$num+1;
  
$sql = "UPDATE Products SET Views='$num' WHERE Name='$name'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
  

}
$file = 'track.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "\n$name";
// Write the contents back to the file
file_put_contents($file, $current);
$conn->close();
?>



							







									
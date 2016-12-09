<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<title>All User</title></head>
<body>
<br><br>
<?php
 



   $dbhost = 'localhost';
   $dbuser = 'dlabhesh30';
   $dbpass = 'nyc1788';
   $dbname = 'labhesh_db';  
   $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
   // Check connection   
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   } 
   print("<br><br><br><p>Users of Labheshs Website</p> <br><br><div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 \">                 
              <table border = '1' cellpadding = '3' cellspacing = '2' >               
                <tr><td>First Name</td><td>Last Name</td><td>Email</td><td>Address</td><td>Phone</td></tr>              
        ");
   
     $sql = "SELECT * FROM user ";
     $result = $conn->query($sql);
    // output data of each row        
      if ($result->num_rows>0) {        
        while($row = $result->fetch_assoc()) { 
          print ("<tr>");
          foreach ($row as $key => $value ) 
          print ("<td>$value</td>");
          print ("</tr>");                                     
         }
        print("</table></div></div></div><hr>");
     }
     else {     
          print("                
                 <h3> Invalid Search!</h3>
            ");
       } 
   
$conn->close();  
print ("Users of siddharths website</p> <br><br>");
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "http://robotsstore.co/expose.php");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
$output1 = curl_exec($ch);
curl_close($ch);
print ("$output1");

   
print ("Users of shauryas website");
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "www.shauryamittal.info/cmpe272/allusers.php");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
print ("$output");

?>

</body>
</html>

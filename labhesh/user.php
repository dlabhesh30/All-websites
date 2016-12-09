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

<?php
  extract($_POST);
  
   $dbhost = '127.0.0.1';
   $dbuser = 'root';
   $dbpass = 'abcd';
   $dbname = 'my_db';   
   $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
   // Check connection   
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   } 

   if(isset($signup)){
     
     $sql = "INSERT INTO user (fname, lname, address, email,phone) VALUES ('$fname','$lname','$address','$email','$phone')";     
     if ($conn->query($sql) === TRUE) {
      print("<title>Registration successfull</title></head><body> <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 \">                 
                 <h3>Thank You... You have been addded to our record ! </h3>
                 <p><strong><a href=\"index.html\"> Go to Home<strong></a></p>
            </div></div></div><hr>");

     } else {
     $error="Error: " . $sql . "<br>" . $conn->error;
     print("<title>Error in registration</title></head><body> <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 \">                 
                 <h3>$error </h3>
            </div></div></div><hr>");
     }
   }
   else if(isset($search)){
     
     $sql = "SELECT * FROM user WHERE $searchUser='".$searchParam."'";
     $result = $conn->query($sql);
    // output data of each row        
      if ($result->num_rows>0) {        
        while($row = $result->fetch_assoc()) {          
           $FName="First Name : ".$row["fname"];
           $LName="Last Name : ".$row["lname"];
           $Address="Address : ".$row["address"];
           $Email="Email : ".$row["email"];
           $Phone="Phone : ".$row["phone"];
           print("<title>Found User</title></head><body> <div class=\"container\">
                <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 \">                 
                <h3>Record found</h3>");
           print("<p> $FName</br> 
                      $LName</br>
                      $Address</br>
                      $Email</br>
                      $Phone </p>
                <hr>");
         }
        print("</div></div></div><hr>");
     }
     else {     
          print("<title>User Not Found</title></head><body> <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 \">                 
                 <h3>User not Found !</h3>
            </div></div></div><hr>");
       } 
   }
$conn->close();  

?>

</body>
</html>

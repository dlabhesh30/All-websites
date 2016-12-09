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
  //check if username and password is left blank 
  if(!$uname & !$password){
    leftBlank();
    die();
  }  
  //check if sign up is occuring
  if(isset($signup)){
    if(!$file=fopen("password.txt","a")){
      print("<title>Error</title></head><body><strong>Could not open the file !</strong></body></html>");
      die();
    }
    $data="$uname,$password";
    fputs($file,$data.PHP_EOL);
    userAdded($uname);    
  }
  elseif(isset($signin)){
    if(!$file=fopen("password.txt","r+")){
      print("<title>Error</title></head><body><strong>Could not open the file !</strong></body></html>");
      die();
    }
    $userVerified=0;
    while(!feof($file) && !$userVerified){
      $line=fgets($file,255);
      $line=chop($line);
      $field=explode(',',$line);   
      if($field[0]==$uname){
        $userVerified=1;        
        if(checkPassword($password,$field[1])==true)
          accessGranted($uname);
        else
          wrongPassword($uname);        
      }
    }
    fclose($file);
    if(!$userVerified)
        accessDenied();
  }
  function checkPassword($password,$fileData){
    if($password==$fileData)
      return true;
    else
      return false;
  }
  function userAdded($uname){
      print("<title>Thank you </title></head><body><strong>You have been added to the list, $uname</strong>");
  }  
  function accessGranted($uname){
      print("<title>Thank you</title></head><body>");      
      if($uname=="admin"){
        print("<div class=\"container\" >
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 \">
                 <h1>Login Successful !! Welcome, $uname :)</h1>
                 </br><strong>Username | Password</strong></br>
            </div></div></div><hr>");        
        $file_handle = fopen("password.txt", "rb");
        while (!feof($file_handle) ) {
        $line_of_text = fgets($file_handle);
        $parts = explode(',', $line_of_text);
        print("<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                 </br>$parts[0] , $parts[1] </br>
            </div></div></div><hr>");
        }
        fclose($file_handle);
      }
      else{
        print("<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 \">
                 <h1>Login Successful !! Welcome, $uname :)</h1></br>
                 <hr>
                 <p><strong><a href=\"index.html\"> Go to Home<strong></a></p>
            </div></div></div><hr>");
      }
  }
  function wrongPassword($uname){
      print("<title>Incorrect Password</title></head><body> <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 \">
                 <h1>Login Failed !! :/ </h1>
                 <h3>Incorrect Password, $uname... Please try again !</h3>
            </div></div></div><hr>" );
  }
  function accessDenied(){
      print("<title>Invalid user</title></head><body> <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 \">
                 <h1> :/ </h1>
                 <h2>Invalid user,Access Denied!</h3>
            </div></div></div><hr>");
  }
  function leftBlank(){
      print("<title>Empty Fileds</title></head><body> <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 \">
                 <h1>Oops.. something went wrong </h1>
                 <h3>Please fill all the fileds and try again !</h3>
            </div></div></div><hr>");
  }
?>
</body>
</html>
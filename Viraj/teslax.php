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
      
      <li><a href="forms.html">Users</a></li>
      <li><a href="secure.html">Secure Section</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="news.html">News</a></li>
      <li><a href="contacts.php">contacts</a></li>
    </ul>
  </div>
</div>
<article><section>
<img src="./images/teslax.jpg" height="300" width="400">
<?php
print("<h1><a href='services.html'>BACK</a></h1>");
  if(isset($_COOKIE["teslax"])){
    $val=$_COOKIE["teslax"]+1;
    print("new value is $val");
    setcookie("teslax",$val);
  }else{
    print("Setting cookie in count");
    setcookie("teslax",1);
  }
  for ($i=1; $i <=5 ; $i++) { 
    if (!isset($_COOKIE[$i])){
      setcookie($i,"teslax");
      print("Setting cookie $i");
      die();
    }

  }
  

    for ($i=5; $i >1; $i--) { 
      setcookie($i,$_COOKIE[$i-1]);
    }
    print("Setting cookie 1 in all set");
    setcookie(1,"teslax");
  
?>


</section></article>


<div class="footer"><h4>email:virajnilakh220@gmail.com<br/>*All rights reserved &copy; 2016 MyHelpingHand</h4> </div>

</body>
</html>

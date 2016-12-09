<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>My Helping Hand Online | If you need a hand, we got them</title>
     <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="header">
  <h1>MyHelpingHand</h1>
  <div class="nav">
    <ul><li><a href="secure.html">Secure Section</a></li>
      <li><a href="default.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="news.html">News</a></li>
      <li><a href="contacts.php">Contacts</a></li>
    </ul>
  </div>
</div>
<article><section>
  <?php 
  extract($_POST);
  $file=fopen("passwords.txt", "r");
  $line=fgets($file,255);
  $line=chop($line);
  $field=explode(",", $line);
  if($name==$field[0]){
    if($password==$field[1]){
      $cfile = fopen("users.txt", "r") or die("Unable to open");
      while(!feof($cfile)) {
      echo fgets($cfile) . "<br>";
      }
      fclose($cfile);
    }else{
      echo $field[1] . "<h1>Incorrect password</h1>" . $password;
    }
  }else{
      echo "<h1>Incorrect Username</h1>";
    }
  
  fclose($file);
  ?>
</section></article>

<div class="footer"><h4>email:virajnilakh220@gmail.com<br/>*All rights reserved &copy; 2016 MyHelpingHand</h4> </div>

</body>
</html>

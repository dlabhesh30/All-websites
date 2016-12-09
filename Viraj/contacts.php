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
<div class="content" >
<article><section>
<?php

$cfile = fopen("contacts.txt", "r") or die("Unable to open");
while(!feof($cfile)) {
  echo fgets($cfile) . "<br>";
}
fclose($cfile);
?>
</section></article>
</div>
<div class="footer"><h4>email:virajnilakh220@gmail.com<br/>*All rights reserved &copy; 2016 MyHelpingHand</h4> </div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8"> </meta>
<title>Contact us</title>
<style>

article {
	  margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 250px;
    margin-left: 300px;
    float : left;
    
}

aside {
  margin-top : 150px;
  margin-bottom: 100px;
}


section {
position: fixed;
  top: 50%;
  left: 25%;
  margin-top: -50px;
  margin-left: -100px;
}

p {
	font-style : "Verdana";
	font-size : 25px;
	color : #ffffff;
}

header {
	text-align : center;
	font-size: 30px;
	color: white;
}

body {
    margin : 0;
    padding : 0;
    font-size: 15px;
    background: url("images/bg.jpg"); 
    
}

h1 {
    font-size : 50px;
}


nav {
  text-align: center;
  
}
nav ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
nav a {
  display: block; 
  padding: 10px 15px;
  color: #ffffff;
  text-decoration: none;
}
nav ul li {
    display: inline-block;
    list-style-type: none;
    font-size : 30px;
}

nav > ul > li > a {
    display: bloack;
    background-color : #202020;
    line-height: 2em;
    padding : 0.5em 0.5em;
    text-decoration: none;
}


</style>
</head>
<body>
<?php
echo "hi";
?>
<header>
<h1>Arun Transport Services</h1>
<!--<p>A responsive website tutorial</p> -->
<nav>
<ul>
<li><a href = "index.html">Home</a></li>
<li><a href = "about.html">About</a></li>
<li><a href = "services.php">Services</a></li>
<li><a href = "news.html">News</a></li>
<li><a href = "contacts.php">Contact</a></li>
<li><a href = "drivers.html">Drivers</a></li>
<li><a href = "latest.php">Latest Cars </a></li>
<li><a href = "visited.php">Most Visited </a></li></ul></nav></header>

<article>
<p> Contact us : <br />
<?php 
  $handle = fopen("contacts.txt", "r");
  if ($handle) {
    while (($line = fgets($handle)) !== false) {
        echo $line;
        echo "<br />\n"; ;
    }

    fclose($handle);
} else {
    echo "error opening the file";
} 

?></p> </article>
<aside>
<figure>
   <img src="images/contact.jpeg" alt="contact us" width="300" height="150">
</figure>

</aside>




<!--  picture 
   foreach ($contacts as $line)
 {
    $line = str_replace("\n", "", $line);
    $line = explode("\t",$line);
    echo $line

  }
<section>
  <svg width="300px" height="200px">

  <img src= "california.jpg" alt = "California" style = "width:304px;height:228px;">

  </svg>

  <footer> </footer>
  
</section>
-->

</body>
</html>

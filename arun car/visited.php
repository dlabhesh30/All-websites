<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8"> </meta>
<title>Most Visited Cars</title>
<style>

article {
	margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 250px;
    margin-left: 300px;
    color : white;
    padding-left: 300px;
}
marquee {
  font-size:25px;
  color: yellow;
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
<marquee><h2>Most Visited Cars</h2></marquee>

<?php
  

  $visited = array(
      "Alto 800" => $_COOKIE["key0"],
      "Omni" => $_COOKIE["key1"],
      "Alto K10" => $_COOKIE["key2"],
      "Eeco" => $_COOKIE["key3"],
      "Celerio" => $_COOKIE["key4"],
      "Wagon R 1.0" => $_COOKIE["key5"],
      "Ritz" => $_COOKIE["key6"],
      "Sting Ray" => $_COOKIE["key7"],
      "Swift" => $_COOKIE["key8"],
      "Baleno" => $_COOKIE["key9"],
      "Swift Dzire" => $_COOKIE["key10"],
      "Gypsy" => $_COOKIE["key11"],

  );

  arsort($visited);

  $visited_final = array_keys($visited);
  
  for ($i=0;$i<5;$i++){
    print ("<h2>".$visited_final[$i]."</h2>");

  }


?>
</article>

<!--  picture 
<section>
  <svg width="300px" height="200px">

  <img src= "california.jpg" alt = "California" style = "width:304px;height:228px;">

  </svg>

  <footer> </footer>
  
</section>
-->

</body>
</html>

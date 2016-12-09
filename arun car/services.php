<!DOCTYPE html>

<?php
  
  for ($i = 0; $i<5;$i++){
    if (!isset($_COOKIE["prod$i"]))
    setcookie("prod$i","$i",time()+86400,"/");
  }


  for($i = 0;$i<12;$i++){
    if(!isset($_COOKIE["key$i"])){
      setcookie("key$i","0",time()+86400,"/");
    }
  }


?>


<html>
<head>
<meta charset = "UTF-8"> </meta>
<title>Services </title>


<style>

article {
	  margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 250px;
    margin-left: 300px;
    
}

figcaption {
  text-align : center;
  font-size : 20px;
  color : #ffffff;

}
figure {
  float : left;
 
}
section {

  top: 50%;
  left: 20%;
  margin-top: 50px;
  margin-left: 150px;
  
  overflow : auto;

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
<section>
<figure>
   <a href = "1.php" onclick = "setcookie('hi','hello')"><img src="images/1.jpg" alt="Economy cars" width="250" height="100"></a>
   <figcaption>Alto 800 - $5/hr</figcaption>
</figure>
<figure>
   <a href = "2.php"><img src="images/2.jpg" alt="Premium cars" width="250" height="100"></a>
   <figcaption>Omni - $6/hr</figcaption>
</figure>
<figure>
   <a href = "3.php"><img src="images/3.jpg" alt="Accessibility cars" width="250" height="100"></a>
   <figcaption>Alto K10 - $7/hr</figcaption>
</figure>
</br></br></br></br>
<figure>
   <a href = "4.php"><img src="images/4.jpg" alt="Economy cars" width="250" height="100"></a>
   <figcaption>Eeco - $8/hr</figcaption>
</figure>
<figure>
   <a href = "5.php"><img src="images/5.jpg" alt="Premium cars" width="250" height="100"></a>
   <figcaption>Celerio - $9/hr</figcaption>
</figure>
<figure>
   <a href = "6.php"><img src="images/6.jpg" alt="Accessibility cars" width="250" height="100"></a>
   <figcaption>Wagon R 1.0 - $10/hr</figcaption>
</figure>
</br></br></br></br>
<figure>
   <a href = "7.php"><img src="images/7.jpg" alt="Economy cars" width="250" height="100"></a>
   <figcaption>Ritz - $11/hr</figcaption>
</figure>
<figure>
   <a href = "8.php"><img src="images/8.jpg" alt="Premium cars" width="250" height="100"></a>
   <figcaption>Stingray - $12/hr</figcaption>
</figure>
<figure>
   <a href = "9.php"><img src="images/9.jpg" alt="Accessibility cars" width="250" height="100"></a>
   <figcaption>Swift - $13/hr</figcaption>
</figure>
</br></br></br></br>
<figure>
   <a href = "10.php"><img src="images/10.jpg" alt="Economy cars" width="250" height="100"></a>
   <figcaption>Baleno - $14/hr</figcaption>
</figure>
<figure>
   <a href = "11.php"><img src="images/11.jpg" alt="Premium cars" width="250" height="100"></a>
   <figcaption>Swift Dzire - $15/hr</figcaption>
</figure>
<figure>
   <a href = "12.php"><img src="images/12.jpg" alt="Accessibility cars" width="250" height="100"></a>
   <figcaption>Gypsy - $16/hr</figcaption>
</figure>


</section>

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

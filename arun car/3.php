<!DOCTYPE html>
<?php
    $x = $_COOKIE["key2"];
    $x = $x+1;
    setcookie("key2",$x,time()+86400,"/");
  if($_COOKIE["prod4"]!= "Alto K10"){
    for ($i = 4; $i>0;$i--){
      $temp = $_COOKIE["prod$i"];
      $j = $i-1;
      if ($_COOKIE["prod$j"]!="Alto K10")
        setcookie("prod$j","$temp",time()+86400,"/");
      else {
        setcookie("prod$j","$temp",time()+86400,"/");
        break;
      }
  }
  setcookie("prod4","Alto K10",time()+86400,"/");
     
  }
    

?>
<html>
<head>
<meta charset = "UTF-8"> </meta>
<title>Alto K10</title>
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
  margin-left : 175px;
 
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
  margin-right : 100px;
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
<img src="images/3.jpg" alt="Alto K10" width="450" height="250"></br></br>
</figure>
<p>Maruti Suzuki Alto K10 comes in following 10 versions with 1 engine and 2 transmission and 2 fuel options.</p>
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
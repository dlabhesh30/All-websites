<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8"> </meta>
<title>Search Driver</title>
<style>

article {
    margin-top: 50px;
    margin-bottom: 100px;
    margin-right: 10px;
    margin-left: 500px;
    color : white;
    font-size: 25px;

}



form {
  margin-left : 50px;
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
<?php

  extract ($_POST);


  
  if (!$username || !$password) {
    print ("</br>Username and Password should not be empty</br>");
  }
  elseif ($username != 'admin' and $password != 'admin'){
    print ("</br>username or password is incorrect.</br>");
  }
  else {

      
      print('<form action="search_results.php" method="post">');
      print('First name');
      print('<input type="text" name="fname">');
      print('</br></br>');
      print('Last name'); 
      print('<input type="text" name="lname">');
      print('</br></br>');
      print('Email');
      print('&nbsp&nbsp&nbsp&nbsp');
      print('<input type="text" name="email">');
      print('</br></br>');
      print('Cell Phone');
      print('<input type="text" name="cellphone">');
      print('</br></br>');
      print('Home Phone');
      print('<input type="text" name="homephone">');
      print('</br></br>');


      print('&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Search" style="height:75px; width:75px">');
      print('</form>');
      
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

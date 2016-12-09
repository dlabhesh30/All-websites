<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8"> </meta>
<title>Driver Registration</title>
<style>

article {
	 margin-top: -200px;
    margin-bottom: 100px;
    margin-right: 250px;
    margin-left: 275px;
    color : white;
}



section {
position: fixed;
  top: 50%;
  left: 25%;
  margin-top: -50px;
  margin-left: -100px;
}
form {
  margin-left : 250px;
  font-size : 20px;
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

<form action="user_add.php" method="post">
<table>
  <tr>
  <td>First name</td> 
  <td><input type="text" name="fname"></td></tr>
  </br></br>
  <td>Last name </td>
  <td><input type="text" name="lname"></td></tr>
  </br></br>
  <td>Email</td>
  <td><input type = "text" name = "email"></td></tr>
  </br></br>
  <td>Home Address</td>
  <td><input type = "text" name = "homeaddr"></td></tr>
  </br></br>
  <td>Home Phone</td>
  <td><input type = "number" name = "homephone"></td></tr>
  </br></br>
  <td>Cell Phone</td>
  <td><input type = "number" name = "cellphone"></td>
  </br></br></br>
</table>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Register" style="height:75px; width:75px">

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

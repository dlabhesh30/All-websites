<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8"> </meta>
<title>Search Results </title>
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





 extract($_POST);

$query = 'select * from user where fname is not null';
if($fname){
    $query .= ' and fname="'.$fname.'"';
}
if($lname){
    $query .=  ' and lname="'.$lname.'"';
}
if($email){
    $query .=  ' and email="'.$email.'"';
}
if($cellphone){
    $query .= ' and cell="'.$cellphone.'"';
}
if($homephone){
    $query .= ' and phone="'.$homephone.'"';
}
$query .=';';
    #$query = 'select * from user where fname = "'.$fname.'" and lname = "'.$lname.'"';
    #$query = "select * from user where fname = 'ashok'";
   
    
    # checking whether db is connecting
    $database = mysql_connect ('localhost','arunkuma_user','arunkuma_user');
    
    if (!$database)
    	print "could not connect to the database";

    # open User fbsql_database(AQ)

    if (!mysql_select_db("arunkuma_user", $database))
      print ("Could not open User Database");


    # query user database

  	$result = mysql_query($query,$database);

    if (!$result) {
      print ("Could not execute query! </br>");
    }

    print ("<table border = '1' cellpadding = '3' cellspacing = '2' style = 'color:white'>");
    print ("<h2> Search Results </h2>");

    $row = mysql_fetch_assoc($result);

    if(!($row)) {
      print ("Search Criteria doesnt match");

    }
    else {
    
  	while ($row) {

  		foreach ($row as $key => $value ) {
  			print ("<tr>");
  			print ("<td>$key</td><td> $value</td>");
  			print ("</tr>");
  		}
      $row = mysql_fetch_assoc($result);
    
  		
  	}
  }
  	print ("</table>");
  
    

    mysql_close($database);
   
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

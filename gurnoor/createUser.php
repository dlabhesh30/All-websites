<?php
    extract($_POST);
    $database = mysql_connect("localhost", "gurnoors_admin", "gurnoors_admin");
    if(!$database){
        die('Could not connect to database');
    }
    if(!(mysql_select_db("gurnoors_users", $database))){
        die("Could not open database, $database");
    }

    #TODO sanitize inputs
    $query = "insert into User VALUES ('$fname', '$lname', '$address', '$email', '$phone', '$cell');";
    if(!($result=mysql_query($query, $database))){
        print("Unable to execute query, $query");
    }else{
        print("<h3>SUCCESS!!!</h3>");
    }
    mysql_close($database);
    
?>
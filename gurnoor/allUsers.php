<?php 
$query = 'select * from User where fname is not null;';
$database = mysql_connect("localhost", "gurnoors_admin", "gurnoors_admin");
if(!$database){
    die('Could not connect to database');
}
if(!(mysql_select_db("gurnoors_users", $database))){
    die("Could not open database, $database");
}

$result = mysql_query($query,$database);
if (!$result) {
    print ("Could not execute query, $query </br>");
}

print ("<table>");
    $row = mysql_fetch_assoc($result);
    if(!($row)) {
      print ("No results");
    }
    else {
        print('<tr style="font-weight:bold">');
        print('     <td>First Name</td>     <td>Last Name</td>      <td>Address</td>
        <td>Email</td>      <td>Home phone</td>     <td>Cell</td>');
        print('</tr>');

        //TODO: check if really required:
        $headings = array('fname', 'lname', 'address', 'email', 'hphone', 'cell');
        while ($row) {
            print ("<tr>");
            $i=0;
            foreach ($row as $key => $value ) {
                if($key == $headings[$i]){
    			    print ("<td> $value</td>");
                }else{
                    print("<td> </td>");
                }
                $i++;
            }
            print ("</tr>");
        $row = mysql_fetch_assoc($result);    
        }
  }
  	print ("</table>");
    mysql_close($database);

?>
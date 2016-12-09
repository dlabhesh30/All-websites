<html>
<head>
<!--
<style>
body{
    background-color : black; 
    color : white
}
</style>
-->
</head>
<body>
<div>

<?php
$website = "http://arunkumarweb.com/users.php";


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
        //print('<tr style="font-weight:bold">');
        //print('     <td>First Name</td>     <td>Last Name</td>      <td>Address</td>
        //<td>Email</td>      <td>Home phone</td>     <td>Cell</td>');
        //print('</tr>');

        printTables($website);

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



function printTables($website){
    $ch = curl_init($website);
    $fp = fopen("GoogleHome.txt", "w");

    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    curl_exec($ch);
    curl_close($ch);
    fclose($fp);


    $dom = new DOMDocument();
    $arun = file_get_contents("GoogleHome.txt");
    //print($arun);
    $dom->loadHTML($arun);
    $images = $dom->getElementsByTagName('tr');
    //print($table[0]);
    $newDoc = new DOMDocument();

    print('<table>');
    foreach ($images as $row) {
        print('<tr>');
        $cells = $row->getElementsByTagName('td');
        foreach($cells as $cell){
            print('<td>');
            print($cell->nodeValue);
            print('</td>');
        }
        print('</tr>');
    }
    print('</table');
}
/*
$html = $newDoc->saveHTML();
echo "------------<br/>foo<br/>";
echo $html;
*/
?>
</div>
</body>
</html>
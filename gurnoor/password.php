<html>
<?php
$host = "localhost";
$db = "gurnoors_users";
$table = "User";
$username = "gurnoors_admin";
$password = "123";

extract($_POST);

if(!$USERNAME || !$PASSWORD){
    fieldsBlank();
    die();
}

if( isset( $NewUser)){
    if(!($file = fopen(__DIR__."/userpassword.txt", "a"))){
        error("unable to open userpasswords file");
        die();
    }
    #TODO: check if user already exists
    fputs($file, "\n$USERNAME,$PASSWORD");
    print("<title>User Added</title><body><h3>User added. Hello $USERNAME. Please login now.</h3>");
    fclose($file);
}else{

    if( !($file=fopen(__DIR__."/userpassword.txt", "r") )){
        error("unable to open userpasswords file");
        die();
    }

    $userVerified=0;
    while(!feof($file) && !$userVerified){
        $line = fgets($file, 255);
        $line = chop($line);
        $fields = split(",", $line, 2);

        //verify username
        if($fields[0] == $USERNAME){
            if($fields[1] == $PASSWORD){
                $userVerified=1;
                print("<title>User Authenticated</title><body><h1>User authenticated. Welcome $USERNAME</h1>");
                /*
                $users = file_get_contents(__DIR__."/companyUsers.txt");
                if(!$users){
                print("Unable to open companyUsers.txt");
                }
                #echo nl2br($users);
                */
                #print("<br/><h3>Here are the users of this website:</h3><br/>");
				
				print('<a href="createUser.html">Create New User</a><br/>');
				print('<a href="searchUser.html">Search User</a>');
				#displayForms();
                #doDatabaseStuff();
				break;
            }else{
                print("<title>Authentication Failed</title><body>Incorrect password.</body></html>");
                die();
            }
        }else{
            continue;
        }
    }
    if(!$userVerified){
        print("<title>Authentication Failed</title><body>User $USERNAME does not exist.</body></html>");
    }
    
}
function fieldsBlank(){
    print("Fields blank</html>");
}

function error($msg){
    print($msg."</html>");
}

function displayForms(){

}

function doDatabaseStuff(){
    #$query = "SELECT * from $table";

    $database = mysql_connect("localhost", "gurnoors_admin", "gurnoors_admin");
    
    if(!$database){
        die('Could not connect to database');
    }



    if(!(mysql_select_db("gurnoors_users", $database))){
        die("Could not open database, $database");
    }
    

    $query = 'select * from '.$table.' where fname = "'.$fname.'" and lname = "'.$lname.'"';
	//print($query);
  	$result = mysql_query($query,$database);
    if (!$result) {
      print ("Could not execute query </br>");
    }

    print ("<table>");
    $row = mysql_fetch_assoc($result);
    if(!($row)) {
      print ("No results");
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

}
?>
</html>
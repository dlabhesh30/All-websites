<?php
//print("page 3 alive<br/>");
$cookies = $_COOKIE;
 if($cookies == NULL || ! array_key_exists('history', $cookies)){
     print("You are a new user. Welcome :D");
 }else{
    $arr = unserialize($cookies['history']);

    if(sizeof($arr)==0){
        print("Empty Array!!!!");
    }
    if(!is_array($arr)){
        print("Not an array u Idiot!!!<br/>");
        print( gettype($arr) );
    }

    print("Here are the last 5 pages visited in order (latest one being in the end):<br/>");
    foreach($arr as $key => $val){
        print('<a href="http://gurnoors.com/' .$key. '">' .preg_replace("/[.]php/",'',$key). '</a><br/>');
        //print("$key --- $val times<br/>");
    }
}
?>
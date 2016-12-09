<?php
$cookies = $_COOKIE;
 if($cookies == NULL || ! array_key_exists('fav', $cookies)){
     print("You are a new user. Welcome :D");
 }
 else{
    $fav = unserialize($cookies['fav']);
    if(sizeof($fav)==0){
        print("Empty Array!!!!");
    }
    if(!is_array($fav)){
        print("Not an array u Idiot!!!<br/>");
        print( gettype($fav) );
    }

    asort($fav);
    //TODO: find a better implementation
    $fav = array_reverse($fav, true);
    print("Here are the 5 most visited pages:<br/>");
    $i=0;
    foreach($fav as $key => $val){
        if($i ==5){
            break;
        }
        print('<a href="http://gurnoors.com/' .$key. '">' .preg_replace("/[.]php/",'',$key). '</a>');
        print(" --- $val times<br/>");
        $i++;
    }
}
?>
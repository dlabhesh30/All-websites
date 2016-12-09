<?php
function addVisited($inpPage){
    $cookies = $_COOKIE;
    if($cookies == NULL || !array_key_exists('history', $cookies)){
        $blankArray = array();
        setcookie('history', serialize($blankArray), time()+60*60*24*5 );
    }
    if(!array_key_exists('fav', $cookies)){
        $blankArray = array();
        setcookie('fav', serialize($blankArray), time()+60*60*24*5 );
    }

    //handle recent 5 pages
    $history = unserialize($cookies['history']);
    //history associative array always has (max 5) recent pages in visited order.
    if(array_key_exists($inpPage, $history)){
        $history[$inpPage] = $history[$inpPage] + 1;
        //maintain visited order
        $tempVal = $history[$inpPage];
        unset($history[$inpPage]);//TODO: try unset($tempVal)
        $history[$inpPage] = $tempVal;
    }else{
        if(sizeof($history) == 5){
            $keys = array_keys($history);
            unset($history[$keys[0]]);
        }
        $history[$inpPage] = 1;
    }
    setcookie('history', serialize($history) );

    //handle most visited
    $fav = unserialize($cookies['fav']);
    if(array_key_exists($inpPage, $fav)){
        $fav[$inpPage] = $fav[$inpPage] + 1;
    }else{
        $fav[$inpPage] = 1; 
    }
    setcookie('fav', serialize($fav));    
}
?>
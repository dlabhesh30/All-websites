<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<title>Set Cookies</title></head><body> 
		                
<h3>Following are the 5 recently visited products !</h3>        
<?php
	error_reporting(E_ERROR | E_PARSE);
	
	    $visited_pages=array();
    	$visited_count=array();
    	$count=0;
        foreach( $_COOKIE as $key=>$value){
            $visited_pages[$count]=$key;
            $visited_count[$key]=$value;                   
            $count++;            
        }
        asort($visited_count);
        $visited_count=array_reverse($visited_count);
		for($x = 4; $x >=0; $x--) {    	
    	if($visited_pages[$x] == "product1")
    		print("<a href=\"products/prod1.php\">
              <p> Black,orange accoustic masterpiece.. Cost -$499</p>
              </a> <hr>");	
		elseif($visited_pages[$x] == "product2")
    		print("<a href=\"products/prod2.php\">
              <p> Pure Wood,polished Accoustic Guitar.. Cost -$599</p></a><hr>");
        elseif($visited_pages[$x] == "product3")
    		print("<a href=\"products/prod3.php\">
              <p> Classic Accoustic Guitar.. Cost -$399</p></a> <hr>");
      elseif($visited_pages[$x] == "product4")
    		print("<a href=\"products/prod4.php\">
              Electric monster, black/orange with amplifier.. Cost -$699</p></a> <hr>");    	    	
		  elseif($visited_pages[$x] == "product5")
    		print("<a href=\"products/prod5.php\">
              <p> Black Accoustic Guitar.. Cost -$199</p></a> <hr>");
    	elseif($visited_pages[$x] == "product6")
    		print("<a href=\"products/prod2.php\">
              <p> Blue-black classic guitar.. Cost -$130</p></a>");
      elseif($visited_pages[$x] == "product7")
        print("<a href=\"products/prod7.php\">
              <p> Black electric guitar with amplifier..Cost -$630</p></a>");
      elseif($visited_pages[$x] == "product8")
        print("<a href=\"products/prod8.php\">
              <p> Blue-black electric without amplifier..Cost -$430</p></a>");
      elseif($visited_pages[$x] == "product9")
        print("<a href=\"products/prod9.php\">
              <p> Classic semi-electric guitar, pure wood..Cost -$730</p></a>");
      elseif($visited_pages[$x] == "product10")
        print("<a href=\"products/prod10.php\">
              <p> Electric beast with ampliier and pedal..Cost -$1030</p></a>");
       
		}
		 print("</br></br><h3>Following are top 5 visited products !</h3>");
		$x=0;
		foreach ($visited_count as $key => $val) {
			if($x<5){
    		if($key == "product1")
    		print("<a href=\"products/prod1.php\">
              <p> Black,orange accoustic masterpiece.. Cost -$499</p>
              </a>Number of hits = $val<hr>");	
		elseif($key == "product2")
    		print("<a href=\"products/prod2.php\">
              <p> Pure Wood,polished Accoustic Guitar.. Cost -$599</p></a><p>Number of hits = $val</p><hr>");
        elseif($key == "product3")
    		print("<a href=\"products/prod3.php\">
              <p> Classic Accoustic Guitar.. Cost -$399</p></a> <p>Number of hits = $val</p><hr>");
        elseif($key == "product4")
    		print("<a href=\"products/prod4.php\">
              Electric monster, black/orange with amplifier.. Cost -$699</p></a> <p>Number of hits = $val</p><hr>");    	   	
		elseif($key == "product5")
    		print("<a href=\"products/prod5.php\">
              <p> Black Accoustic Guitar.. Cost -$199</p><p>Number of hits = $val</p> </a><hr>");
    	elseif($key== "product6")
    		print("<a href=\"products/prod2.php\">
              <p> Blue-black classic guitar.. Cost -$130</p> <p>Number of hits = $val</p></a><hr>");      
      elseif($key == "product7")
        print("<a href=\"products/prod7.php\">
              <p> Black electric guitar with amplifier..Cost -$630</p><p>Number of hits = $val</p></a><hr>");
      elseif($key == "product8")
        print("<a href=\"products/prod8.php\">
              <p> Blue-black electric without amplifier..Cost -$430</p><p>Number of hits = $val</p></a><hr>");
      elseif($key == "product9")
        print("<a href=\"products/prod9.php\">
              <p> Classic semi-electric guitar, pure wood..Cost -$730</p><p>Number of hits = $val</p></a><hr>");
      elseif($key == "product10")
        print("<a href=\"products/prod10.php\">
              <p> Electric beast with ampliier and pedal..Cost -$1030</p><p>Number of hits = $val</p></a><hr>");
       
    		$x++;
    		}
		}
        
          
?>

</body>
</html>


    

<!DOCTYPE html>
<?php
    error_reporting(E_ERROR | E_PARSE);

    $cookie_name = "product4";
    $cookie_value = isset($_COOKIE[$cookie_name]) ? ++$_COOKIE[$cookie_name] : 1;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");    
    $visitCount = $_COOKIE[$cookie_name];
?>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Products</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--Gallery CSS-->
    <link href="../css/normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/gallery.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    
    <style type="text/css">
        #product{
        width:55%; 
        height:45%; 
        margin:50px 0px 50px 150px;  
    }
    </style>
    <!-- Main Content -->
    <div id="wrapper">
        <section id= "product">    
          <h1> Electric monster, black/orange with amplifier </h1>      
          <img src= ../img/g4.jpg alt=" 01" >
          <h2>Cost - $699</h2>
          <p> Best for instrumental music lovers... sit in peace and play this brand new guitar... click add to cart or click express check out for puchasing this gitar !!! </p> 
          <inline><button> Add to cart</button>  <button> Express checkout</button></inline>
          </br>
          </br>
          </br>
          <p><a href="../index.html"> Go to Home</a></p>    
    
      </section>
    </div>

  
    <!-- jQuery -->
    <!-- <script src="..vendor/jquery/jquery.min.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/clean-blog.min.js"></script>


</body>
</html>

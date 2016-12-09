<!DOCTYPE html>
<?php

session_start();
$cookie_value= $_GET['id'];
if(!isset($_COOKIE["frequent"])){

    $frequent_products = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
    $frequent_products[$cookie_value] = 1;
    $json = json_encode($frequent_products);
    setcookie("frequent",$json, time() + (86400 * 30), '/');}
else{
    $frequent_products = $_COOKIE["frequent"];
    $frequent_products = stripslashes($frequent_products);
    $frequent_products = json_decode($frequent_products, true);
    $frequent_products[$cookie_value] += 1;
    $json = json_encode($frequent_products);
    setcookie("frequent",$json, time() + (86400 * 30), '/');
}

if( !isset($_COOKIE["current_value"]) || ($_COOKIE["current_value"] == 5) ){
    $current_val = 1;
    setcookie("current_value",$current_val, time() + (86400 * 30), '/');
}

else{
    $current_val = $_COOKIE["current_value"];
    $current_val += 1;
    setcookie("current_value",$current_val, time() + (86400 * 30), '/');
}
setcookie($current_val,$cookie_value, time() + (86400 * 30), '/');
/*
if (!(isset($_SESSION['login_user']) && $_SESSION['login_user'] != '')) {

    header ("Location: login.php");

}*/
?>
<html lang="en">
<head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="ui/images/favicon.ico">
    <link rel="shortcut icon" href="${pageContext.request.contextPath}/ui/images/favicon.ico" />
    <link rel="stylesheet" href="ui/css/style.css"/>
    <link rel="stylesheet" href="css/style.css"/>

    <script type="application/javascript"  src="js/jquery-1.11.0.min.js"></script>


    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
</head>

<body>
<?php

?>

<header>

    <section id="stuck_container">

        <div class="container">
            <div class="row">
                <div class="grid_12 ">
                    <div class="navigation ">
                        <nav>
                            <ul class="sf-menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="events.php">Events</a></li>
                                <li><a href="products.php">Products</a></li>
                                <li><a href="user.php">Users</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>
</header>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <h3>Product Description</h3>

            </div>
            <div class="grid_5" style="height: 500px; width: 1200px;">
                <img id="dyn_img" height="500px" width="300px" style="float:right;" />

                <div class="h1">
                    <br/>
                    <?php
                    $name = $_GET['id'];
                    $filename = 'images/'.$name . '.txt';
                    $myfile = fopen($filename, "r") or die("Unable to open file!");
                    echo fread($myfile,filesize("address.txt"));
                    fclose($myfile);
                    ?>
                </div>
            </div>


        </div>
    </div>
</section>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div class="copyright"><span class="brand">Alpha Toastmasters</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
                </div>
            </div>
        </div>
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
<script type="application/javascript">
    var name=<?php echo $_GET['id'] ?>;
    var filename = 'images/' + name + '.jpg';

    $("#dyn_img").attr("src", filename);
</script
</body>
</html>
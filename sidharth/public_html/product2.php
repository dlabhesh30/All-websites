<?php

$cookie_name = 'product2';

$cookie_name2 = 'time2';
$today = date("His");
setcookie($cookie_name2, $today, time()+86400);

if(isset($_COOKIE[$cookie_name])){
	$val = $_COOKIE[$cookie_name];
	setcookie($cookie_name, $val+1, time()+86400);
}
else{
	setcookie($cookie_name, 1, time() + 86400);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
 rel="stylesheet"integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
 crossorigin="anonymous">

		<title>Robot X</title>
	</head>

<body>
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=578122012396261";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container-fluid">
		<div class="text-center">

			<nav class="navbar-default navbar-static top" margin-top="30px" role="navigation">
			<div class="container-fluid ">  
				<a class="navbar-brand " href="index.html">RobotsStore</a>
					<div class="collapse navbar-collapse navbar-right">  
						<ul class="nav navbar-nav nav-tabs">

<li>

<a class="twitter-share-button"
  href="https://twitter.com/intent/tweet">
Tweet</a>
</li>
<li>
<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-annotation="none"></div>
</li>
<li>
<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/Share" data-url="http://robotsstore.co/product2.php"></script>

</li>
<li>
<div class="fb-share-button" data-href="http://robotsstore.co/product2.php" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Frobotsstore.co%2Fproduct2.php&amp;src=sdkpreparse">Share</a></div>

</li>
<li>
<a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site http://www.website.com."
   title="Share by Email">
  <img src="http://png-2.findicons.com/files/icons/573/must_have/48/mail.png">
</a>
</li>

							<li><a href="index.html">Home</a></li>
							<li><a href="products.html">Products</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="contactus.php">Contact Us</a></li>
							<li><a href="login.html">Login</a></li>
							<li><a href="users.html">Users</a></li>
						</ul>
					</div>
			</div>
			</nav>
		</div>
</div>


<div class="container" >
  <div class="row">
   <div class="col-md-6">
    
   	<img src="img/2.jpg" alt="Image not available" class="image-responsive"/>
   	
   </div>
   <div class="col-md-6">
    <h2>Robot X</h2>
    <p>
    	<dl>
    		<dd>Tracks daily activity</dd>
    		<dd>Can fetch simple tasks</dd>
    		<dd>Can Call police in emergency</dd>
    		<dd>28000mAh Battery</dd>
    		<dd>Price: $299</dd>
    		<dd><a class ="btn btn-primary btn-lg" role="button" href="#learn_more">Buy Now</a></dd>
    	</dl>
    </p>

<div class="fb-like" data-href="http://robotsstore.co/product2.php" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

<div class="fb-comments" data-href="http://robotsstore.co/product2.php" data-numposts="5"></div>
  </div>
   </div>
<!-- end row -->
 </div><!-- end container -->



<footer class="site-footer">
	<div class="container">
	<div class="collapse navbar-collapse navbar-center">  
		<ul class="nav navbar-nav">
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
			<li><a href="recentlyviewed.php">Recently Viewed Products</a></li>
			<li><a href="mostviewed.php">Most Viewed Products</a></li>
		</ul>
	</div>
	</div>

</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.2.min.js" 
     integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" 
     crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
     integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" 
     crossorigin="anonymous"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
</body>
</html>
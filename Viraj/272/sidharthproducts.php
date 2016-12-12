<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppers stop</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
<!-- start menu -->     
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<!-- top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
  <div class="header-top">
	 <div class="wrap"> 
		<div class="logo">
			<a href="index.php"><img src="images/logo1.jpg" alt=""/></a>
	    </div>
	    <div class="cssmenu">
		   <ul>
			 <li class="active"><a href="register.html">Sign up</a></li> 			 
			 <li><a href="login.html">My Account</a></li> 
			 <li><a href="checkout.html">CheckOut</a></li>
			  
			 <li><a href="index.php">Logout</a></li>
		   </ul>
		</div>
		
		<div class="clear"></div>
 	</div>
   </div>
   <div class="header-bottom">
   	<div class="wrap">
   		<!-- start header menu -->
		<ul class="megamenu skyblue">
		    <li><a class="color1" href="index.php">Home</a></li>
			<li class="grid"><a class="color2" href="labheshproducts.php">Guitar's</a>
				<div class="megapanel">
				<p><b>Want to buy Guitars ?</b></p>
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Popular</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">login</a></li>
								</ul>	
							</div>
							<div class="h_nav">
								<h4 class="top">New Arrivals</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>All Products</h4>
								<?php 
								 $ch = curl_init();


								curl_setopt($ch, CURLOPT_URL, "http://labheshdeshpande.com/getList.php");


								curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


								$contents = curl_exec ($ch);
								print("$contents");
			
							?>
							</div>							
						</div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						
					</div>
				</div>
				</li>
  			   <li class="grid"><a class="color2" href="sidharthproducts.php">Robot's</a>
				<div class="megapanel">
				<p><b>Want to buy Robots ?</b></p>
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Popular</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">login</a></li>
								</ul>	
							</div>
							<div class="h_nav">
								<h4 class="top">New Arrivals</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>All Products</h4><?php
								 $ch = curl_init();


			curl_setopt($ch, CURLOPT_URL, "http://robotsstore.co/getList.php");


			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


			$contents = curl_exec ($ch);
			print("$contents"); ?>
							</div>							
						</div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						
					</div>
				</div>
				</li>
				<li class="grid"><a class="color2" href="gurnoorproducts.php">Mystical</a>
				<div class="megapanel">
				<p><b>Want to buy Magic stuff ?</b></p>
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Popular</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">login</a></li>
								</ul>	
							</div>
							<div class="h_nav">
								<h4 class="top">New Arrivals</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>All Products</h4>
								<?php 
								 $ch = curl_init();


								curl_setopt($ch, CURLOPT_URL, "http://gurnoors.com/getList.php");


								curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


								$contents = curl_exec ($ch);
								print("$contents");
			
							?>		
							</div>							
						</div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						
					</div>
				</div>
				</li>
				<li class="grid"><a class="color2" href="virajproducts.php">Second hand goods</a>
				<div class="megapanel">
				<p><b>Want to buy something ?</b></p>
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Popular</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">login</a></li>
								</ul>	
							</div>
							<div class="h_nav">
								<h4 class="top">New Arrivals</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>All Products</h4>
								<?php 
								 $ch = curl_init();


								curl_setopt($ch, CURLOPT_URL, "http://myhelpinghandonline.com/getList.php");


								curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


								$contents = curl_exec ($ch);
								print("$contents");
			
							?>		
							</div>							
						</div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						
					</div>
				</div>
				</li>
				<li class="grid"><a class="color2" href="arunproducts.php">Car's</a>
				<div class="megapanel">
				<p><b>Want to buy cars ?</b></p>
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Popular</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">login</a></li>
								</ul>	
							</div>
							<div class="h_nav">
								<h4 class="top">New Arrivals</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>All Products</h4>
								<?php 
								 $ch = curl_init();


								curl_setopt($ch, CURLOPT_URL, "http://arunkumarweb.com/getList.php");


								curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


								$contents = curl_exec ($ch);
								print("$contents");
			
							?>		
							</div>							
						</div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						
					</div>
				</div>
				</li>
				<li class="grid"><a class="color2" href="#">All shops</a>
				<div class="megapanel">
				<p><b>Want to visit individual sellers ? ?</b></p>
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Labhesh</h4>
								<ul>
								<li><a href="http://www.labheshdeshpande.com">Go to Soul Guitars</a></li>		
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Sidharth</h4>
								<ul>
								<li><a href="http://www.robotsstore.co">Go to Robots Store</a></li>		
								</ul>	
							</div>
						</div>	
							<div class="col1">
							<div class="h_nav">
								<h4>Gurnoor</h4>
								<ul>
								<li><a href="http://www.gurnoors.com">Go to Gurnoors.com</a></li>		
								</ul>	
							</div>
						</div>
							<div class="col1">
							<div class="h_nav">
								<h4>Viraj</h4>
								<ul>
								<li><a href="http://www.myhelpinghandonline.com">Go to My helping hand.com</a></li>		
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Arun	</h4>
								<ul>
								<li><a href="http://www.arunkumarweb.com">Go to Arunkumar.com</a></li>		
								</ul>	
							</div>
						</div>
					</div>
				</div>
				</li>
		   </ul>
		   <div class="clear"></div>
     	</div>
       </div>
       <div class="main">
       	<div class="wrap">	  
       	<div class="mens-toolbar">
              <div class="sort">
               	<div class="sort-by">
		            <label>Sort By : </label>
		             <inline> &nbsp;&nbsp;&nbsp;<a href="sidharthviews.php">MostVisited</a>
		             &nbsp;&nbsp;&nbsp;<a href="sidharthratings.php">Ratings </a>
		              &nbsp;&nbsp;&nbsp;<a href="sidharthproducts.php">Popularity</a>&nbsp;&nbsp;&nbsp;<a href="cookies.php">Recently Visited</a></inline>	        
               </div>
    		  </div>	         
     	    <div class="clear"></div>
	       </div>    
         <div class="content-bottom">
             <?php 
			 $ch = curl_init();


			curl_setopt($ch, CURLOPT_URL, "http://robotsstore.co/GetProducts.php");


			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


			$contents = curl_exec ($ch);
			print("$contents");
			$conn->close();
			?>
			</div></div></div>
             <div class="footer">
       	  <div class="footer-top">
       		<div class="wrap">
       			   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	 <ul class="f_list">
				  	 	<li><img src="images/f_icon.png" alt=""/><span class="delivery">Free delivery on all orders over £100*</span></li>
				  	 </ul>
				   </div>
				   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	<ul class="f_list">
				  	 	<li><img src="images/f_icon1.png" alt=""/><span class="delivery">Customer Service :<span class="orange"> (800) 000-2587 (freephone)</span></span></li>
				  	 </ul>
				   </div>
				   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	<ul class="f_list">
				  	 	<li><img src="images/f_icon2.png" alt=""/><span class="delivery">Fast delivery & free returns</span></li>
				  	 </ul>
				   </div>
				  <div class="clear"></div>
			 </div>
       	 </div>
       	 <div class="footer-middle">
       	 	
             		<div class="lsidebar span_1_of_c1">
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Like and share us</p>
					</div>
					<div class="cont span_2_of_c1">
					  <div class="social">	
					     <ul>	
						  <li class="facebook"><div class="fb-follow" data-href="https://www.facebook.com/CMPE272CommonPlace/?skip_nax_wizard=true" data-layout="button" data-size="small" data-show-faces="true"></div>
						 </li>
						 </ul>
			   		   </div>
					   <div class="social">	
						   <ul>	
							  <li class="twitter"><div><a class="twitter-follow-button" href="https://twitter.com/marketplace2721" data-size="small" data-show-count="false" data-show-screen-name="false">Follow us</a></div></li>
						  </ul>
			     		</div>
						 <div class="social">	
						   <ul>	
							  <li class="google"><div class="g-follow" data-annotation="none" data-height="20" data-href="//plus.google.com/u/0/100326371872033153064" data-rel="author"></li>
						   </ul>
			    		 </div>
						 <div class="social">	
						   <ul>	
							  <li class="dot"><script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/FollowCompany" data-id="1337"></script></li>
						  </ul>
			     		</div>
						<div class="clear"> </div>
					  </div>
					  <div class="clear"></div>				
				   
       	 </div>
       	 
       	 <style>
       #hide{
       	color: black;
       }
       </style>
       	 <div class="copy" id="hide" style="#hide{color: black;}">
       	   <div class="wrap">
       	   	  <p>© All rights reserved <a href="http://w3layouts.com/">W3Layouts</a></p>
       	   </div>
       	 </div>
       </div>

       <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=578122012396261";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=578122012396261";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="https://apis.google.com/js/platform.js" async defer></script>
</body>
</html>
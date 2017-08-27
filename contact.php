<?php
require 'core.inc.php';
require 'connect.inc.php';

if (!loggedin()) 
{
	include 'signup.php';
}
else
{



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>contact</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
		

	</head>
    <div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<a href="index.php" class="logo pull-left"><img src="themes/images/Screenshot (46).png" class="site_logo" alt="" width="250"></a>
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="profile.php">My Account</a></li>						
							<li><a href="contact.php">contact Us</a></li>
							<li><a href="logout.php">LogOut</a></li>								
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="myProducts.php"> Your uploaded Products</a>					
								
							</li>															
							<li><a href="totalproducts.php">See New Products In Campus</a>	
							
						</ul>
					</nav>
				</div>
			</section>							
			
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/secure-connection.png" alt="New products" >
				<h4><span>Contact Us</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">				
					<div class="span5">
						
							<div>
							<h5>ADDITIONAL INFORMATION</h5><br>
							<p>
							<strong>Name:</strong>&nbsp;<b>Abhishek Puri</b><br><br>
							<strong>Phone:</strong>&nbsp;8805313993<br><br>
							<strong>Email:</strong>&nbsp;<a href="#">abhishekpurisit@gmail.com</a>	<br>							
							</p>
							<br/>
							
						</div>
					</div>
				
			
			<div class="span7">					
						<h4 class="title"><span class="text"><strong></strong></span></h4>
						<br><br><br><br><br><br><br><br><br><br>
							<h5><b>Links To Contact Us</h5><br>
							<img src="themes/images/44515547-Male-avatar-profile-picture-icon-Stock-Vector.jpg" height="20px" width="20px";><a href="www.facebook.com/Abhishek Puri" target="_blank">Facebook.com</a>	<br><br>
							<img src="themes/images/44515547-Male-avatar-profile-picture-icon-Stock-Vector.jpg" height="20px" width="20px";>Instagram/mr.Abhishek.puri	
					</div>				
				</div>
			</section>			
			<section id="copyright">
				<span>Developed by <b>Abhishek Puri.</b>  All copyright &#169; reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>	
    </body>
</html>

<?php
}
?>
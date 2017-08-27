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
<html>
	<head>
		
		<title>MyCampusDeal</title>
		
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="theme/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<style>
						#aa
						{
							text-align: center;
							margin-top: -40px;
							margin-left: 500px;
							height: 40px;
							width: 200px;
							background-color: white;
							font-style: italic;
						}
						</style>
		

		</style>

		
		
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					
						<a href="index.php" class="logo pull-left"><img src="themes/images/Screenshot (46).png" class="site_logo" alt="" width="250"  />
						
							<div id="aa">

							<?php


								$email=$_SESSION['email'];
								$sql  = "SELECT * FROM user_registration where email = '$email'";
								$result1 = mysqli_query($con,$sql);
								$rows = mysqli_affected_rows($con);

								if($rows == 1)
									{
										//$_SESSION['email'] = $email;
										while($row = mysqli_fetch_assoc($result1))
											{
												$username = $row['username'];
												 echo $username;
   								 				 echo "<br>";
											}
								
											
									}
									else
									{
										echo "error";
									}
							

							?>


							<?php echo 'You have successfully Log In. ' ?>





						</div>
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
								
							</li>
														
							
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/IMG_20170726_143841new.jpg" alt="" height="300" width="500"/>
							<div class="intro">
								<h1>MyCampusDeal</h1>
								<p><span>Buy or Sell.</span></p>
								<p><span><b>BARGAINING</b> is here.</span></p>
								<p><span>within the campus only.</span></p>
								<h1>click a photo and just upload it.</h1>
							</div>
						</li>
						<li>
							<img src="themes/images/carousel/IMG_20170726_142142.jpg" alt="" height="300" width="500" />
							<div class="intro">
								<h1>MyCampusDeal</h1>
								<p><span>Buy or Sell.</span></p>
								<p><span><b>BARGAINING</b> is here.</span></p>
								<p><span>Within the campus only.</span></p>
								<h1>click a photo and just upload it.</h1>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
				Take a snap of your product.upload here.earn money.
				<br/>also buy from here.with Bargaining.
			
			
			<section id="copyright">
				<span>Developed by <b>Abhishek Puri</b> All copyright &#169; reserved.</span>
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



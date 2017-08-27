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
		<title>OwnProducts</title>
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

		

		<style>
			
			#aa
			{	

				height: 500px;
				width: 500px;
				border: 5px solid black;
			}
			#name
			{
				font-size: 20px;
				color: red;
			}
			#from
			{
				font-size: 20px;
				color: blue;
			}
			#room
			{
				font-size: 20px;
				color: green;
			}
			#detail
			{
				font-size: 20px;
				color: black;
			}
			#price
			{
				font-size: 20px;
				color: green;
			}
			#mobile
			{
				font-size: 20px;
				color: blue;
			}
		</style>
		</style>

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
							
							<li><a href="rajgad.php"> Your uploaded Products</a>					
								
							</li>															
							<li><a href="totalproducts.php">See New Products In Campus</a>	
								
							</li>
														
							
									
							
						</ul>
					</nav>
				</div>
			</section>							
			
			<section class="header_text sub">


<?php
		echo "your Products";
		echo "<br>";
		echo "<br>";
		echo "<br>";

	$email=$_SESSION['email'];

	$sql = "SELECT * FROM user_post_upload where email = '$email'";
				$result = mysqli_query($con,$sql);
				$row = mysqli_affected_rows($con);

				if($row == 1)
				{
					while($rows = mysqli_fetch_assoc($result))
					{
						$image = $rows['filename'];
						 echo "<img src='$image'  id='aa' >";
   			 			 echo "<br>";
   			 			 $name = $rows['name'];
   			 			 $hostel = $rows['hostel'];
   			 			 $Room_No = $rows['Room_No'];
   			 			 $price = $rows['price'];
   			 			 $aboutProduct = $rows['aboutProduct'];
   			 			 $mobile = $rows['mobile'];


   			 			
   			 				     echo "<div id='name'>Name-";
   								 echo $name;
   								 echo "<br> </div>";
   								 echo "<div id='from'>From-";
   								 echo $hostel;
   								 echo "<br></div>";
   								 echo "<div id='room'> Room no-";
   								 echo $Room_No;
   								 echo "<br></div>";
   								 echo "<div id='detail'> Details-";
   								 echo $aboutProduct;
   								 echo "<br></div>";
   								 echo "<div id='price'> price-";
   								 echo $price;
   								 echo "<br> </div>";
   								  echo "<div id='mobile'> Contact Details-";
   								 echo $mobile;
   								 echo "<br> </div>";
   								



   		

   			echo "************************************************************";
   			echo "<br>";
					}
				}
			else
			{

			}   								
   								
   							
	   

   		

   	
   





   		
		



			?>

			
			
			
			
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
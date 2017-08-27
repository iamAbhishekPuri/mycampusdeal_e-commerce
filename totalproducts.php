
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
		<title>TotalProducts</title>
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
				height: 300px;
				width: 300px;
				border: 2px solid black;
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
				color: blue;
			}
			#detail
			{
				font-size: 20px;
				color: blue;
			}
			#price
			{
				font-size: 20px;
				color: blue;
			}
			#mobile
			{
				font-size: 20px;
				color: blue;
			}
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
							<li><a href="myProducts.php"> Your uploaded Products</a>					
								
							</li>															
							<li><a href="totalproducts.php">See New Products In Campus</a>	
						</ul>
					</nav>
				</div>
			</section>							
			
			<section class="header_text sub">


<?php

		echo "PRODUCTS FOR SELLING";
		echo "<br>";
		echo "<br>";
		echo "<br>";

	

	$sqlimage  = "SELECT filename FROM user_post_upload ";
	$result = mysqli_query($con,$sqlimage);
	$row = mysqli_affected_rows($con);

			while($rows=mysqli_fetch_assoc($result))
				{
   							 $image = $rows['filename'];
   							 //echo "<img src='$image' id='aa'>";
   			 				 echo "<br>";
   			 				 $sql  = "SELECT * FROM user_post_upload where filename = '$image'";
   			  					 $res = mysqli_query($con,$sql);
								 $roww = mysqli_affected_rows($con);
								 	if($roww == 1)
								 	{
								 		while($rows1=mysqli_fetch_assoc($res))
								 		{
								 			 $name = $rows1['name'];
								 			 $hostel = $rows1['hostel'];
								 			 $Room_No = $rows1['Room_No'];
								 			 $price = $rows1['price'];
								 			 $aboutProduct = $rows1['aboutProduct'];
								 			 $mobile = $rows1['mobile'];
?>

								<table border="5px solid blue" id="table1" align="center">

   			 			<tr>
   			 				<th>Product Picture</th>
						    <td> <?php echo "<img src='$image' id='aa'>"; ?> </td>
						</tr>
   			 			
   			 			


   			 			
   			 				  <tr> 
   			 				 	 <th id="name">Name -</th>   
   							 	 <td id="name"> <?php echo $name;  ?></td> 
   							  </tr>
								 
   						      <tr> 
   							      <th id="from">From -</th>
   							      <td id="from"> <?php echo $hostel; ?></td> 
   							  </tr>
   						
  
   							   <tr>
   									<th id="room">Room no -</td>
   									<td id="room"><?php echo $Room_No  ?></td>
   							   </tr>


   							   <tr>
   								 	<th id="detail"> Details - </th>
   								 	<td id="detail"> <?php echo $aboutProduct; ?> </td>
   							   </tr>

   							   <tr>
   								 	<th id="price"> price - </th>
   								    <td id="price"> <?php echo $price  ?> </td>
   							   </tr>

   							   <tr>
   								 	 <th id="mobile"> Contact Details -</td>
   								 	 <td id="mobile"> <?php echo $mobile; ?> </td>
   							   </tr>
   						</table>
  <?php
							
   							
								 		}
								 	}
   			
   			 
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
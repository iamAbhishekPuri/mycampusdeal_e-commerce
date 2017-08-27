<?php
require 'core.inc.php';
require 'connect.inc.php';

if (!loggedin()) 
{
	include 'signup.php';
}
else
{


$target_dir = "image/";
$target_file = $target_dir . basename(@$_FILES["image"]["name"]);

   	if (move_uploaded_file(@$_FILES["image"]["tmp_name"], $target_file)) 
   		{
         $addrimg = "image/".basename( $_FILES["image"]["name"]);

		
        		$con = mysqli_connect('localhost','root','','mycampusdeal');

        		 $email = $_SESSION['email'];
        		 $sql  = "SELECT * FROM user_registration where email = '$email'";
        		 $result = mysqli_query($con,$sql);
        		 $rows = mysqli_affected_rows($con);

								if($rows == 1)
									{
										while($row = mysqli_fetch_assoc($result))
											{
												$username = $row['username'];
												$hostel = $row['hostel'];
												$Room_No = $row['room'];
												$mobile = $row['mobile'];
												$aboutProduct = $_POST['aboutProduct'];
   											    $price = $_POST['price'];
   											 }
   									}
   								else
   								{
   									$msg="error while uploading file";
   								}

   		 $sql1  = "SELECT filename FROM user_post_upload where filename= '$addrimg'";
   			  					 $res2 = mysqli_query($con,$sql1);
								 $roww2 = mysqli_affected_rows($con);
								 	
								 		
								 	 if ($roww2>0) 
								 			 {
								 				$abc="the similar image name is exist in the database.please edit your image name ";
								 			 }
								 		else
								 		{



								
 	    $sq = "INSERT INTO user_post_upload (
 	    name,filename,aboutProduct,price,hostel,Room_No,Mobile,email) VALUES ('$username','$addrimg','$aboutProduct','$price','$hostel','$Room_No','$mobile','$email')";
               	 $check = mysqli_query($con, $sq);
                    if(! $check)
                    {
                        $msg1= "something went wrong";
                        
                     }
                     else
                     {
                     	$msg2="File uploaded successfully";
                     }
       
   		 	 }
   		 	}

    	     else 
    		{

       		 
   		 	}
		

       
              
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Profile</title>
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
		

		<style>
		#aa
		{
			margin-left: 50px;
		}

		#aaaa
						{
							text-align: center;
							margin-top: -40px;
							margin-left: 500px;
							height: 40px;
							width: 200px;
							background-color: white;
							font-style: italic;
						}

		#info
		{
			color:red;
		}
		</style>
		

		
	</head>
    <body>		
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
							<li><a href="contact.php">Contact Us</a></li>
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
			</section>			
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/31219679-Silhouette-avatar-profile-picture-icon-set-Stock-Vector.jpg" alt="New products" >
				<h4><span>YOUR ACCOUNT</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">	
						<div id=aa>				
								<h4 class="title"><span class="text"><strong>UPLOAD YOUR</strong> PRODUCT</span></h4>
								<div id="info">
								<?php
								echo @$abc;
								echo @$msg;
								echo @$msg1;
								echo @$msg2;
								
								
								echo "<br>";
								echo "<br>";
								?>
								</div>
								<form action=" " method="post" enctype="multipart/form-data">
							
									<fieldset>
							
										<div class="control-group">
											<label class="control-label"><b>SELECT FILE</b></label><label class="control-label"><b>File size should be less than 500KB</b></label>
											
											<div class="controls">
												<input type="file" action="image/jpg" name="image" required />
											</div><br>
											<label class="control-label"><b>ABOUT UR PRODUCT <br/>(Example .Techmax book Set Of 3rd Year 1st Semister Or Samsung Galaxy Note)</b></label>
											

											<div class="controls">
												<input type="text" name="aboutProduct" required/>
											</div><br>
											<label class="control-label"><b>PRICE OF PRODUCT (Maximum price)</b></label>
											<div class="controls">
												<input type="number" name="price" required/>
											</div><br>
										</div>
											
									
											<div class="control-group">
												<input tabindex="3" class="btn btn-inverse large" type="submit" value="UPLOAD">
												<hr>
												<p class="reset"> <a tabindex="4" href="#" title=""></a></p>
											</div>
											
									</fieldset>
								</form>				
						</div>
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong></strong></span></h4>
							<img src="themes/images/shopping-cart.png" height="400px" width="400px";>
					</div>							
				</div>
			</section>			
			
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
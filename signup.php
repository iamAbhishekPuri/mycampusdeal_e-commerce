<?php
//require "core.inc.php";
require "connect.inc.php";

if(isset($_POST['email']) && isset($_POST['password']))
{
	$email =$_POST['email'];
	$password =$_POST['password'];


	if(!empty($email) &&!empty($password))
	{
		
		$query = "SELECT email FROM user_registration WHERE email='$email' AND password='$password' ";

		$result = mysqli_query($con,$query);
		$rows = mysqli_affected_rows($con);

		if($rows==0)
						{

							$msg1="INVALID EMAIL ID OR PASSWORD !!";
						}
		else if($rows == 1)

						{
							$_SESSION['email']=$email;
							header('Location: index.php');					
						}
						
							
						
			}
			else{
				echo "query died";
				echo "<br>error is".mysqli_error();
			}
	}
			else
				{
					
					$msg2='YOU MUST ENTER EMAIL ID AND PASSWORD FIRST';
				}



?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SignUp</title>
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
		<style >
			#aaa
		{
			margin-top:-50px;
			position:center;
		}

		#aa
		{
			margin-top:10px;
			margin-left: 0px;
			color:red;
		}

		#sideimage
		{
			margin-top:60px;
		}
		

		</style>

			
						


			
	</head>
    <body>		
		
		<div id="wrapper" class="container">
		
		<section id="copyright">
				<span><b>Welcome to MyCampusDeal.</b></span>
			</section>
			
						
			<section class="header_text sub">

			<img class="site_logo" src="themes/images/Screenshot (46).png" alt="New products">
				
			</section>			
			<section class="main-content">				
				<div class="row" >
				
				
					<div id="aaa">
					<div class="span5">	
						<h4 class="title" align="center" style="margin-left:60px"><span ><strong>Log In /</strong>Sign Up </span></h4>
					
						
						<div id=aa>
						<?php
						echo @$msg1;
						echo @$msg2;
						echo"<br>";
						?>
						</div>
						<form action="<?php echo $current_file; ?>" method="POST" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label"><b>EMAIL ID:</b></label>
									<div class="controls">
										<input type="text" placeholder="Enter Email Id" name="email" class="input-xlarge" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"><b>PASSWORD:</b></label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" name="password" class="input-xlarge" required >
									</div>

								</div>
								<hr>
								<div class="actions">
								<input type="submit" tabindex="9" class="btn btn-inverse large" name="sub"
								 value="Log In" id="btn">
								 </div>
									<hr>

								 
							</fieldset>
						</form>	
						<form action="registernew.php" method="POST" class="form-stacked">
								 <div class="actions" style="margin-left:150px; margin-top:-90px">
								<input type="submit" class="btn btn-inverse large" value="Register">
								 </div>
								 </form>				
						</div>
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong></strong></span></h4>
						<div id=sideimage>

							<img src="themes/images/shopping-cart.png" height="150px" width="350px";>
						</div>
					</div>	
											
				</div>
			</section>			
			
			<section id="copyright">
				<span>Developed by <b>Abhishek Puri</b>  All copyright &#169; reserved.</span>
			</section>
			
		</div>
			
    </body>
</html>



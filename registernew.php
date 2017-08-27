<?php
	require 'core.inc.php';
	require 'connect.inc.php';
	if (!loggedin()) 
		{

		if(isset($_POST['username'])&&isset($_POST['mobile'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['hostel'])&&isset($_POST['room'])&&isset($_POST['College']))
		{
			 	$username = $_POST['username'];
				$mobile = $_POST['mobile'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$hostel = $_POST['hostel'];
				$room = $_POST['room'];
				$College = $_POST['College'];


				 $sql  = "SELECT email FROM user_registration where email= '$email'";
   			  					 $res = mysqli_query($con,$sql);
								 $roww = mysqli_affected_rows($con);

				 $sql1  = "SELECT mobile FROM user_registration where mobile= '$mobile'";
   			  					 $res1 = mysqli_query($con,$sql1);
								 $roww1 = mysqli_affected_rows($con);
								 	
								 		
								 	 if ($roww>0) 
								 			 {
								 				$abc="Email id is already in use";
								 			 }

								 	
								 		
								 	else if ($roww1>0) 
								 			 {
								 				$abc1="Mobile number is already in use";
								 			 }
								 			
								 			 else
								 			 {

								 			 
	  		
					$query = " INSERT INTO user_registration (id, username, mobile, email, password, hostel, room, college) VALUES ('', '$username','$mobile','$email','$password','$hostel','$room','$College')";
					
					if($query_run = mysqli_query($con,$query))
					{
						$abc2="Successfully registered";
						header('Location: index.php');
					}
					else
					{
						$abc3='sorry we could not registered.try again leter!';

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
		<title>Regristration</title>
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
		<style type="text/css">
		#aa
						{
							text-align: center;
							margin-left: -400px;
							height: 40px;
							width: 200px;
							background-color: white;
							font-style: italic;
						}

		#aaa
		{
			
			margin-top:-80px;
			
		}
		#sideimage
		{
			margin-top:-60px;
		}
		#notification
		{
			text-align: center;
			color: red;
			font-style: italic;
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
			<div id="aa">
			<?php echo 'all fields are required.'; ?>

			</div>
				
			</section>			
			<section class="main-content">				
				<div class="row">
					
					<div id="aaa">
					<div class="span5">	
					<div id="notification">
					<?php echo @$abc;  
							echo @$abc1;

							echo @$abc2;
							echo @$abc3;
							 ?>
					</div>
					
						<h4 class="title" style="margin-left:60px"><span class=""><strong>Register</strong> Form</span></h4>

						<form action="<?php echo $current_file; ?>" method="POST" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label"><b>Username: (First and Last name)</b></label>
									<div class="controls">
										<input type="text" placeholder="Enter your username" name="username" class="input-xlarge" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"><b>Mobile Number:</b></label>
									<div class="controls">
										<input type="tel" placeholder="Enter your Mobile Number" name="mobile" class="input-xlarge" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"><b>Email address:</b></label>
									<div class="controls">
										<input type="email" placeholder="Enter your email Id" name="email" class="input-xlarge" required>
									</div>
									
								</div>
								<div class="control-group">
									<label class="control-label"><b>Password:</b></label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" name="password" class="input-xlarge" required>
									</div>
								</div>
								

		

								<div class="control-group">
									<label class="control-label"><b> Select Your Hostel:&nbsp&nbsp (if not please select "other")</b></label>
									<div class="user-menu" border="2px solid black">
										<select name="hostel" placeholder="select your hostel"  class="input-xlarge" required>
										<option><b>rajgad</b></option><option>pratapgad</option><option>Vishalgad</option>
										<option>Panhalgad</option><option>Tornagad</option><option>Lohagad</option>
										<option>Purandargad</option><option>Visapurgad</option><option>Bramhagiri-1</option>
										<option>Bramhagiri-2</option><option>Bramhagiri-3</option><option>Sahyandri-1</option><option>Sahyandri-2</option><option>Sahyandri-3</option>
										<option>Deogiri</option><option>Kaveri</option><option>Indrayani</option><option>Godavari</option><option>Other</option>
										</select>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label"><b> Select Room No: &nbsp&nbsp(if not please select "other")</b></label>
									<div class="controls">
										<select name="room" placeholder="select your hostel" class="input-xlarge" required>
										<option>1</option><option>2</option><option>3</option>
										<option>4</option><option>5</option><option>6</option>
										<option>7</option><option>8</option><option>9</option>
										<option>10</option><option>11</option><option>12</option>
										<option>13</option><option>14</option><option>15</option>
										<option>16</option><option>17</option><option>18</option>
										<option>19</option><option>20</option><option>21</option>
										<option>22</option><option>23</option><option>24</option>
										<option>25</option><option>26</option><option>27</option>
										<option>28</option><option>29</option><option>30</option>
										<option>31</option><option>32</option><option>33</option>
										<option>34</option><option>35</option><option>36</option>
										<option>37</option><option>38</option><option>39</option>
										<option>40</option><option>41</option><option>42</option>
										<option>43</option><option>44</option><option>45</option>
										<option>46</option><option>47</option><option>48</option>
										<option>49</option><option>50</option><option>51</option>
										<option>52</option><option>53</option><option>54</option>
										<option>55</option><option>56</option><option>57</option>
										<option>58</option><option>59</option><option>60</option>
										<option>61</option><option>62</option><option>63</option>
										<option>64</option><option>65</option><option>66</option>
										<option>67</option><option>68</option><option>69</option>
										<option>70</option><option>71</option><option>72</option>
										<option>73</option><option>74</option><option>75</option>
										<option>76</option><option>77</option><option>78</option>
										<option>79</option><option>80</option><option>81</option>
										<option>82</option><option>83</option><option>84</option>
										<option>85</option><option>86</option><option>87</option>
										<option>88</option><option>89</option><option>90</option>
										<option>91</option><option>92</option><option>93</option>
										<option>94</option><option>95</option><option>96</option>
										<option>97</option><option>98</option><option>99</option>
										<option>100</option><option>101</option><option>102</option><option>other</option>
										
										
										</select>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label"> Select Your College:</label>
									<div class="controls">
										<select name="College" placeholder="select your hostel" class="input-xlarge" required>
										<option>SIT</option><option>SKNSIT</option><option>HOTEL MANAGEMENT</option>
										<option>SIBACA</option><option>SIPS</option><option>COMMERCE COLLEGE</option>
										<option>PUBLIC SCHOOL</option>
										
										</select>
									</div>
								</div>
								<hr>
								<div class="actions">
								<input type="submit" tabindex="9" class="btn btn-inverse large" name="sub"
								 value="Create your account" style="margin-left: 50px" >
								 </div>
								 
							</fieldset>
						</form>	
						<div>				
					</div>
					</div>
				<div class="span7">					
						<h4 class="title"><span class="text"><strong></strong></span></h4>
						<div id=sideimage>

							<img src="themes/images/shopping-cart.png" height="200px" width="400px";>
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


<?php
		}

else if (loggedin())
 {
	echo 'you are already regrister';
 }

?>
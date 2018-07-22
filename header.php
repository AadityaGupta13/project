<?php 
require_once "assets.php";
?>
<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Dev Vagon</title>
	    <!-- Web Fonts -->
		<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'> -->
	    <!-- Flaticon CSS -->
	    <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
	    <!-- font-awesome CSS -->
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <!-- Offcanvas CSS -->
	    <link href="css/hippo-off-canvas.css" rel="stylesheet">
	    <!-- animate CSS -->
	    <link href="css/animate.css" rel="stylesheet">
	    <!-- owl.carousel CSS -->
	    <link href="css/owl.theme.css" rel="stylesheet">
	    <link href="css/owl.carousel.css" rel="stylesheet">
	    <!-- Bootstrap Core CSS -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link href="css/style.css" rel="stylesheet">
	    <!-- Responsive CSS -->
	    <link href="css/responsive.css" rel="stylesheet">

	    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
	    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
		    <script src="js/vendor/html5shim.js"></script>
		    <script src="js/vendor/respond.min.js"></script>
	    <![endif]-->
	</head>


<body id="page-top" data-spy="scroll"  data-target=".navbar">

  <div id="st-container" class="st-container">
    <div class="st-pusher">
        <div class="st-content">
            <div class="st-content-inner">

			  	<header class="header">
					<nav class="navbar navbar-default" role="navigation">
						<div class="container">
							<div class="navbar-header">
		                        <button type="button" class="navbar-toggle collapsed" >
		                          <span class="sr-only">Toggle navigation</span>
		                          <i class="fa fa-bars"></i>
		                        </button>
							    <!-- offcanvas-trigger-effects -->
								<h1 class="logo"><a class="navbar-brand" href="index.php">Dev Vagon</a></h1>
							</div>

							<!-- Collect the nav links, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-collapse">
								<ul class="nav navbar-nav navbar-right">
									<?php 
									if(isset($_SESSION['username']))
									{
									?>
									<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown"href="#">Dropdown</a>
									   	<div class="dropdown-menu">
									      <a class="dropdown-item" href="#">Link 1</a>
									      <a class="dropdown-item" href="#">Link 2</a>
									      <a class="dropdown-item" href="logout.php">Logout</a>
									    </div>
									</li>
									<?php
									}
									else
									{
									?>
									<li><a class="page-scroll" href="#home">Home</a></li>
									<li><a class="page-scroll" href="#services">Services</a></li>
									<li><a class="page-scroll" href="#work">Works</a></li>
									<li><a class="page-scroll" href="#about">About</a></li>
									<li><a class="page-scroll" href="#blog">Blog</a></li>
									<li><a class="page-scroll" href="#contact">Contact</a></li> 
									<li><a class="modal-map" data-toggle="modal" data-target="#loginModal" href="#">Login</a></li>
									<li><a class="modal-map" data-toggle="modal" data-target="#signUpModal" href="#">Sign up</a></li>
									<?php 
									 }
									 ?>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container -->
					</nav>
				</header>

				<!-- Login Modal -->
				<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="mainLoginModal" aria-hidden="true">
				  <div class="modal-dialog modal-md">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="mainLoginModal">Login to access your account</h4>
				      </div>
				      <div class="modal-body">
						<?php 
							if(isset($_POST['login']))
							{
								$name = $_POST['uname'];
								$pass = md5($_POST['pass']);

								$result = mysqli_query($con,"SELECT * FROM user_tb WHERE name='$name'");
								
								if(mysqli_num_rows($result)==1)
								{

									$user = mysqli_fetch_assoc($result);
									if($pass==$user['password'])
									{
										if($user['status']=='Active')
										{
											$_SESSION['user_login'] = "true";
											$_SESSION['id'] = $user['id'];
											$_SESSION['username'] = $user['name'];
											$_SESSION['email'] = $user['email'];
											
											#redirect to home after verifying user
											header("location:home.php");
										}
										else
										{
											?>
											<div class="alert alert-warning">Account is not active.Please Activate Account to access</div>
											<?php
										}
									}
								}
								else
								{
									?>
									<div class="alert alert-danger">Username and Password combination is incorrect!</div>
									<?php
								}
							}
						?>
						<form id="loginForm" action="" method="POST">	
							<div class="col-md-12">
								<div class="form-group">
								    <label for="uname">Username or Email</label>
								    <input id="uname" name="uname" type="text" class="form-control"  required="" placeholder="Username or Email">
								</div>
							</div>
							<div class="col-md-12">
							    <div class="form-group">
								    <label for="pass">Password</label>
								    <input id="pass" name="pass" type="password" class="form-control" required="" placeholder="Password">
							    </div>
							</div>
							<div class="text-center">	
								<input type="submit" class="btn btn-primary" value="Login" name="login">
								<p><a href="">forgot email or password</a></p>
								<p><a href="">Do not have a account.Sign up</a></p>								
							</div>
					    </form>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- End Modal -->

				<!-- Sign Up Modal -->
				<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="mainSignUpModal" aria-hidden="true">
				  <div class="modal-dialog modal-md">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="mainSignUpModal">Create an account</h4>
				      </div>
				      <div class="modal-body">
						<form id="signUpForm" action="" method="POST">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									    <label for="name">Name</label>
									    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6">
								  <div class="form-group">
								    <label for="email">Email address</label>
								    <input id="email" name="email" type="email" class="form-control" required="" placeholder="Email">
								  </div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
								  <div class="form-group">
								    <label for="password">Password</label>
								    <input id="password" name="password" type="text" class="form-control" placeholder="Create a password">
								  </div>
								</div>
								<div class="col-md-6">
								  <div class="form-group">
								    <label for="cpassword">Confirm Password</label>
								    <input id="cpassword" name="cpassword" type="text" class="form-control" placeholder="Confirm Password">
								  </div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
								  <div class="form-group">
								    <label for="phone">Phone</label>
								    <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone">
								  </div>
								</div>
								<div class="col-md-6">
								  <div class="form-group">
								    <label for="dob">Date of Birth</label>
								    <input id="dob" name="dob" type="date" class="form-control" required="" placeholder="Subject">
								  </div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
								  <div class="form-group">
								    <label for="gender">Gender </label>
								    <select id="gender" name="gender" class="form-control" required="">
										<option value="M">Male</option>
										<option value="F">Female</option>
										<option value="O">Other</option>
								    </select>
								  </div>
								</div>
								<div class="col-md-4">
								  <div class="form-group">
								    <label for="city">City </label>
								    <select id="city" name="city" class="form-control" required="">
										<option value="DEL">Delhi</option>
										<option value="MUM">Mumbai</option>
										<option value="CHE">Chennai</option>
										<option value="KOL">Kolkata</option>
								    </select>
								  </div>
								</div>
								<div class="col-md-4">
								  <div class="form-group">
								    <label for="state">State </label>
								    <select id="state" name="state" class="form-control" required="">
										<option value="MP">Madhya Pradesh</option>
										<option value="DL">Delhi</option>
										<option value="TL">Telangana</option>
								    </select>
								  </div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="sm-4 text-center">
										<input type="checkbox" name="terms" id="terms" class="" required="">
										<label for="terms"><p>I have read and agree to the Terms</p></label>
									</div>
								</div>
							</div>
							<div class="row text-center">
								<button type="submit" class="btn btn-primary">Sign Up</button>
								<button type="cancel" class="btn btn-danger">Cancel</button>
							</div>
						</form>
				      </div>
				    </div>
				  </div>
				</div>
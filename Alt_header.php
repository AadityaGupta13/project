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
									<li>
										<div class="dropdown">
											<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown button</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Link 1</a>
												<a class="dropdown-item" href="#">Link 2</a>
												<a class="dropdown-item" href="#">Link 3</a>
												<a class="dropdown-item" href="logout.php">Logout</a>
											</div>
										</div>
									</li>
									<?php
									}
									else
									{
									?>
									<li><a class="page-scroll" href="index.php">Home</a></li>
									<li><a class="page-scroll" href="#services">Services</a></li>
									<li><a class="page-scroll" href="#work">Works</a></li>
									<li><a class="page-scroll" href="#about">About</a></li>
									<li><a class="page-scroll" href="#blog">Blog</a></li>
									<li><a class="page-scroll" href="#contact">Contact</a></li> 
									<li><a class="" href="login.php">Login</a></li>
									<li><a class="" href="register.php">Sign up</a></li>
									<?php 
									 }
									 ?>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container -->
					</nav>
				</header>

				
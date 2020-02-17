<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Career Guidance</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		.visit{
			color: white;
		}
	</style>

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="index.php">CareerGuide</a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="events.php">Events</a></li>
								<li><a href="news2.php">News</a></li>
                                <li><a href="locations.html">Locations</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
					<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<?php echo'<h1>';$Sname =  $_GET['schoolName']; echo"$Sname"; echo ' FACULTIES</h1>';?>
				   					<?php echo'<h2><span><a href="index.php">Home</a> |'; echo"$Sname"; echo'</span></h2>';?>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
					<?php 
					$servername = "localhost";
			        $username = "root";
			        $password = "";
			        $dbname = "currier";
					try {
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						
				        $query="select * from faculty WHERE school='$Sname'";
						$step = $conn->prepare($query);
						$step->bindParam(':name', $name,PDO::PARAM_STR,50);
						$step->execute();
						$step = $step->fetchAll();
						if($step){?>
			   		
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div class="colorlib-trainers">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Faculty List</h2>
					</div>
				</div>
				<div class="row">
					<?php
							foreach ($step as $row) {
					?>
					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(qq.jpg)"></div>
							<div class="desc">
								<h3> <?php echo "$row[code]"; ?></h3>
								<a href="courses.php?code=<?php echo $row['code']; ?>&name=<?php echo $row['school']; ?>" class="visit">Visit</a>
							</div>
							<p> <?php echo "$row[name]"; ?></p>
							<p class="social">
								<a href="apply.php?id=<?php echo $row['code']; ?>">Applications</a>
								<a href="contactform.php">Contact</a> <a href="#">Email</a>
							</p>
						</div>
					</div>
				<?php }
			}
			else{
				echo "No faculties found";
			}
				
		} catch(PDOException $e){
				echo $e . "<br>" . $e->getMessage();
			}
			$conn = null;
		?>
				</div>
			</div>
		</div>
	
		<div id="colorlib-subscribe" class="subs-img" style="background-image: url(qq.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Subscribe Computer Lessons</h2>
						<p>Subscribe our lessons and get latest updates</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<div class="col-md-12">
							<form class="form-inline qbstp-header-subscribe">
								<div class="col-three-forth">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter email">
									</div>
								</div>
								<div class="col-one-third">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Subscribe Now</button>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p><br> <br> 
                                <small class="block">&copy;
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Design by : by Tsekiso
                                </small>
                                <br> 
							</p>
						</div>
					</div>
				</div>
			</div>
	</div><br> <br> 
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Currier guidance</title>
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

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="row">
                            <div class="col-md-2">
                                <div id="colorlib-logo"><a href="">CurrierGuide</a></div>
                            </div>
                            <div class="col-md-10 text-right menu-1">
                                <ul>
                                    <li class="active"><a href="requirements.php">Requirements</a></li>
									<li><a href="news.php">News</a></li>
									<li><a href="event.php">Events</a></li>
									<li><a href="profile.php">My Profile</a></li>
									<li><a href="logout.php">Logout</a></li>
                                </ul>
                            </div>
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
				   					<h1>News</h1>
									<h2><span>News | <a href="addnews.php">Add</a></span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		
		<div class="colorlib-blog colorlib-light-grey">
			<div class="container">
				<div class="row">
					<?php 
					$servername = "localhost";
			        $username = "root";
			        $password = "";
			        $dbname = "currier";
					try {
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				        $query="select * from news";
						$step = $conn->prepare($query);
						$step->bindParam(':name', $name,PDO::PARAM_STR,50);
						$step->execute();
						$step = $step->fetchAll();
						if($step){
							foreach ($step as $row) {
								echo'	
								<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);">
								<p class="meta"><span class="day">';echo "$row[day]";
								echo'</span><span class="month">';echo "$row[month]";
								echo'</span></p>
							</a>
							<div class="desc">
								<h2><a href="blog.html">';echo "$row[heading]";
								echo'</a></h2>
								<p class="admin"><span>Posted by:</span> <span>';echo "$row[user]";
								echo'</span></p>
								<p>';echo "$row[content]";echo'</p>
							</div>
						</article>
					</div>';
				}
			}
			else{
				echo "No results found";
			}
				
		} catch(PDOException $e){
				echo $e . "<br>" . $e->getMessage();
			}
			$conn = null;
		?>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer">
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p><br><br>
								<small class="block">&copy;Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Design by : by Tsekiso
                                </small><br><br> 
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

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


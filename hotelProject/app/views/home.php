<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic PHP Course</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-carousel.js"></script>
</head>
<body>
	<div class="container">
		<div id="header" class="row">
			<div id="logo" class="span3">
				<h1><a href="#">Myanmar Tutorials</a></h1>
			</div> <!-- end of logo -->
			<div id="menu" class="span9">
				<div id="nav" class="navbar">
					<div class="navbar-inner">
						<ul class="nav">
							<li class="active"><a href="#">About Us</a></li>
							<li><a href="#">Doctors</a></li>
							<li><a href="#">Treatments</a></li>
							<li><a href="#">Hospitals</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div> <!-- end of menu -->
		</div> <!-- end of header -->
		<div id="content" class="row">
			<div id="left_content" class="span9">
				<div id="slider">
					<div id="myCarousel" class="carousel slide">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
						<!-- Carousel items -->
						<div class="carousel-inner">
							<div class="active item">
								<img src="img/slide1.png" alt="Slider 1" />
								<div class="carousel-caption">
									<h4>Test Caption</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</div>
							<div class="item">
								<img src="img/slide2.png" alt="Slider 2" />
								<div class="carousel-caption">
									<h4>Test Caption 2</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</div>
							<div class="item"><img src="img/slide3.png" alt="Slider 3" /></div>
						</div>
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
					</div>
				</div> <!-- end of slider -->
				<div id="post-container">
					<div class="post">
						<img src="img/blog_image.png" width="200px" height="200px" class="img-polaroid" alt="Blog Image" />
						<h2>Blog Title 1</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, aspernatur, dolores consequatur sapiente sed sequi in nam quaerat fugiat ipsam delectus commodi totam sunt quia alias necessitatibus illo saepe temporibus!</p>
						<a href="#" class="btn btn-info">Read More</a>
					</div> <!-- end of post -->
					<div class="post">
						<img src="img/blog_image.png" width="200px" height="200px" class="img-polaroid" alt="Blog Image" />
						<h2>Blog Title 1</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, aspernatur, dolores consequatur sapiente sed sequi in nam quaerat fugiat ipsam delectus commodi totam sunt quia alias necessitatibus illo saepe temporibus!</p>
						<a href="#" class="btn btn-info">Read More</a>
					</div> <!-- end of post -->
					<div class="post">
						<img src="img/blog_image.png" width="200px" height="200px" class="img-polaroid" alt="Blog Image" />
						<h2>Blog Title 1</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, aspernatur, dolores consequatur sapiente sed sequi in nam quaerat fugiat ipsam delectus commodi totam sunt quia alias necessitatibus illo saepe temporibus!</p>
						<a href="#" class="btn btn-info">Read More</a>
					</div> <!-- end of post -->
				</div> <!-- end of post-container -->
			</div> <!-- end of left_content -->
			<div id="right_content" class="span3">
				    <ul class="nav nav-pills nav-stacked">
   						<li class="active"><a href="#">Section 1</a></li>
   						<li><a href="#">Section 2</a></li>
   						<li><a href="#">Section 3</a></li>
   						<li><a href="#">Section 4</a></li>
   						<li><a href="#">Section 5</a></li>
   						<li><a href="#">Section 2</a></li>
   						<li><a href="#">Section 3</a></li>
   						<li><a href="#">Section 4</a></li>
   						<li><a href="#">Section 5</a></li>
   						<li><a href="#">Section 2</a></li>
   						<li><a href="#">Section 3</a></li>
   						<li><a href="#">Section 4</a></li>
   						<li><a href="#">Section 5</a></li>
    				</ul>
			</div> <!-- end of right_content -->
			
		</div> <!-- end of content -->
		<div id="footer" class="row">
			<div class="span4">
				<ul>
					<li><a href="#">List Item</a></li>
					<li><a href="#">List Item</a></li>
					<li><a href="#">List Item</a></li>
					<li><a href="#">List Item</a></li>
					<li><a href="#">List Item</a></li>
				</ul>
			</div>
			<div class="span4">
				<ul>
					<li><a href="#">List Item</a></li>
					<li><a href="#">List Item</a></li>
					<li><a href="#">List Item</a></li>
					<li><a href="#">List Item</a></li>
					<li><a href="#">List Item</a></li>
				</ul>
			</div>
			<div class="span4">
				<ul>
					<li><a href="#">List Item</a></li>
					<li><a href="#">List Item</a></li>
					<li><a href="#">List Item</a></li>
					<li><a href="#">List Item</a></li>
					<li><a href="#">List Item</a></li>
				</ul>
			</div>
		</div> <!-- end of footer -->
		<div id="bottom-footer" class="row">
			<div class="span12">
				<p>Copyright 2013, Myanmar Tutorials</p>
			</div>
		</div>
	</div> <!-- end of container -->
</body>
</html>
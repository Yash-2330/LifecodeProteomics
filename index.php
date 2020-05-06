<?php
	$con = mysqli_connect('localhost','root','','iwp');
	if (!$con)
	{
		die("Connection failed:".mysqli_connect_error());
	}
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$sql = "insert into query(name,email,phno,msg) values(?,?,?,?)";
		$stmt = mysqli_prepare($con,$sql);
		$stmt->bind_param("ssis", $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message']);
		$stmt->execute();
		header("location: index.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Lifecode Proteomics</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="New Party Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- animation -->

<link href="css/aos.css" rel="stylesheet" type="text/css" media="all" /><!-- //animation effects-css-->
<!-- //animation -->
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.js"></script>

<script type="text/javascript">
	function validate()
	{
		var phno = document.forms["submitquery"]["phone"].value;
		var msg = document.forms["submitquery"]["message"].value;
		if (msg.length > 250)
		{
			alert("Message length exceeds 250 characters");
			return false;
		}
		else if (phno.length != 10 || isNaN(phno))
		{
			alert("Incorrect phone number");
			return false;
		}
		else
		{
			return true;
		}
	}
</script>
</head>
<body>
	<!-- w3-banner -->
	<div class="w3-banner jarallax">
		<div class="wthree-different-dot">
			<div class="head">
				<div class="container">
					<div class="navbar-top">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
								 <div class="navbar-brand logo ">
								 <style>
								 h1 {font-size: 32px} 
								 </style>
									<h1><a href="index.php">Lifecode Proteomics</a></h1>
									<!-- <p class="pa"  style="color: white ">Your Vision,Our Innovation.</p>
									 --><h3 class="heading-agileinfo" style = "color : white" ><span>Your Vision,Our Innovation.</span></h3>


								</div>

							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
								<li class="active first-list"><a href="index.php">Home</a></li>
								
								<li><a href="#about" class="scroll">About</a></li>
								
								<li><a href="#gallery" class="scroll">Gallery</a></li>

								<li><a href="static2/web/index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">Our Products</span><span class="caret"></span></a>
									<ul class="dropdown-menu">

										<li><a href="static1/index.html">Immunoassay Range</a></li>
										<li><a href="static2/index.html">Biochemistry Range</a></li>
									</ul>
								</li>

								<li><a href="#book" class="scroll">Send Query</a></li>

								<li><a href="alogin/adminlogin.php">Admin Login</a></li>

								<li><a href="#contact" class="scroll">Contact Us</a></li>
							</ul>
							</div><!-- /.navbar-collapse -->
						</div>
				</div>
			</div>
			<!-- banner -->
			<div class="banner">
				<div class="container">
					<div class="slider">

						<script src="js/responsiveslides.min.js"></script>
						<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								// Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: true,
										nav: true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
											$('.events').append("<li>before event fired.</li>");
										},
										after: function () {
											$('.events').append("<li>after event fired.</li>");
										}
									 });
								});
						</script>
						<div  id="top" class="callbacks_container-wrap">
							<ul class="rslides" id="slider3">
								<li>
									<div class="slider-info" data-aos="fade-left">
									<h6>WELCOME TO THE</h6>
										<h3>WORLD OF DIAGNOSTICS</h3>

									</div>
								</li>
								<li>
									<div class="slider-info" data-aos="fade-left">
									<h6>LIFECODE PROTEOMICS OFFERS</h6>
										<h3>COMPLETE DIAGNOSTIC SOLUTIONS</h3>

									</div>
								</li>
								<li>
									<div class="slider-info" data-aos="fade-left">
									<h6>SPECIALIZED SERVICES IN</h6>
										<h3>IMMUNOASSAY-CLIA & ELISA</h3>

									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- //banner -->
		</div>
	</div>
	<!-- //w3-banner -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

						<h4 class="modal-title">Lifecode Proteomics</h4>
					</div>
					<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/g1.jpg" alt="" />

						<p>We,Lifecode Proteomics offer turnkey solutions for Pathology Laboratory,Diagnostic centre setup.Having experiece of 25+ years in the field of Indian Diagnostics Lifecode Proteomics intends to provide Highly Specialized and Professional Services in Immunoassay Platforms,Bio-Chemistry Automation,Point Of Care Systems,Blood Gas & Electrolyte Analyzers,HPLC Systems,Haematology Range,Molecular Platforms,Kits & Consumables for the same. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<div class="banner-bottom" id="about">
		<div class="container">
			<h3 class="heading-agileinfo" data-aos="zoom-in">About Us</h3>
			<!-- <div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agileits_services_grid" data-aos="fade-right">
					<div class="w3_agile_services_grid1">
<!-- 						<img src="images/g1.jpg" alt=" " class="img-responsive">
 -->						<!-- <div class="w3_blur"></div> -->
					<!-- </div> -->


					<h4 class="about" >We, Lifecode Proteomics offer turnkey solutions for Pathology Laboratory & Diagnostic centre setup.Having experience of 25+ years in the field of Indian Diagnostics, Lifecode Proteomics intends to provide Highly Specialized and Professional Services in Immunoassay Platforms,Bio-Chemistry Automation,Point Of Care Systems,Blood Gas & Electrolyte Analyzers,HPLC Systems,Haematology Range,Molecular Platforms,Kits & Consumables for the same.</h4>


				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- services -->
<div class="services jarallax" id="services">
		<h3 class="heading-agileinfo" data-aos="zoom-in">Our Principal Companies<span class="thr"></span></h3>
	<div class="container">

			<div class="col-md-4 ser-1" data-aos="fade-right">
				<div class="grid1">

					<h4>DIASORIN INDIA</h4>
					<img src="images/diasorin.png" class="img-responsive">

				</div>
			</div>
			<div class="col-md-4 ser-1" data-aos="fade-down">
				<div class="grid1">

					<h4>MINDRAY</h4>
					<img src="images/mindray.png">
				</div>
			</div>
			<div class="col-md-4 ser-1" data-aos="fade-left">
				<div class="grid1">

					<h4>SUYOG DIAGNOSTICS</h4>
					<img src="images/sd.png">
				</div>
			</div>


			<div class="col-md-4 ser-1" data-aos="fade-right">
				<div class="grid1">

					<h4>WELDON BIOMEDICALS</h4>
					<img src="images/wd.png">
				</div>
			</div>
			<div class="col-md-4 ser-1" data-aos="fade-up">
				<div class="grid1">

					<h4>S.D.BIOSENSOR</h4>
					<img src="images/sd2.png">
				</div>
			</div>
			<div class="col-md-4 ser-1" data-aos="fade-left">
				<div class="grid1">

					<h4>IRIS HEALTHCARE PVT</h4>
					<img src="images/iris.png">
				</div>
			</div>
			<div class="clearfix"></div>

	</div>
</div>
<!-- //services -->

	<!-- Portfolio section -->
	<section class="portfolio-agileinfo" id="gallery">
		<div class="container">
			<h3 class="heading-agileinfo" data-aos="zoom-in">Gallery<span>Snippets of our product range</span></h3>
				<div class="gallery-grids">
					<div class="tab_img">

						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/aia.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="images/aia.jpg" class="img-responsive" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>

								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/cl1200i.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="images/cl1200i.jpg" class="img-responsive" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>

								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/gx.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="images/gx.jpg" class="img-responsive" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>

								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/liasion.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="images/liasion.jpg" class="img-responsive" alt="w3ls"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>

								</div>
							</a>
						</div>


						<div class="clearfix"> </div>
					</div>

			</div>
		</div>
</section>

<!-- register -->
	<div class="register-sec-w3l jarallax" id="book">
		<div class="container">
		<h3 class="heading-agileinfo" data-aos="zoom-in">Send a Query<span class="thr">We will get back to you as soon as possible</span></h3>
			<div class="book-appointment" data-aos="zoom-in">
				<form name="submitquery" action="" onsubmit="return validate()" method="post">
					<div class="gaps">
						<p></p>
						<input type="text" name="name" placeholder="Name" required="" />
						<p></p>
						<input type="email" name="email" placeholder="Email" required="" />
						<p></p>
						<input type="text" name="phone" placeholder="Phone Number" required="" />
						<textarea name="message" placeholder="Your query... " required=""></textarea>
					</div>
					<input type="submit" value="Submit">
				</form>
			</div>

		</div>
	</div>

<br>



	<!-- footer -->
<div class="footer" id="contact">
	<div class="container">
		<div class="f-bg-w3l">
				<div class="col-md-4 w3layouts_footer_grid" data-aos="fade-right">					
						<div class="clearfix"> </div>
				</div>
		
			
				<div class="col-md-5 w3layouts_footer_grid" data-aos="fade-right">
						<h2 style="margin-left: 55px;">Contact Information</h2>
							<ul class="con_inner_text" style="margin-left: 55px;">
								<li><span class="fa fa-map-marker" aria-hidden="true"></span> Flat No:A-1,Ashwini Co-op. Hsg. Soc.,<label>S.No.147,Plot No 10,Lane No A- 17,Garmal,Dhayari,Pune-411041</label></li>
								<li><span class="fa fa-envelope-o" aria-hidden="true"></span> lifecodeproteomics@gmail.com</li>
								<li><span class="fa fa-phone" aria-hidden="true"></span> +91 9371236345</li>
							</ul>

						</div>
								<div class="clearfix"> </div>
						</div>

				<hr>
				<p class="copyright"><i class="fa fa-copyright" aria-hidden="true"></i> Copyright 2019 | LifeCode Proteomics | All rights reserved.
				</p>
				</hr>
		</div>
	</div>
</div>
	<!-- //footer -->

<!-- js for portfolio lightbox -->
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for portfolio lightbox -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
<!-- //flexSlider -->

<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>

	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script><!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //scrolling script -->
<!-- animation effects-js files-->
	<script src="js/aos.js"></script><!-- //animation effects-js-->
	<script src="js/aos1.js"></script><!-- //animation effects-js-->
<!-- animation effects-js files-->

</body>
</html>

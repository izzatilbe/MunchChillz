<?php session_start(); ?>
<html lang="en">
<head>
<title>Munch & Chillz | Check Out</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Staple Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body> 
	<!-- banner -->
	<div class="banner about-w3bnr">
		<!-- header -->
		<div class="header">
			<div class="w3ls-header"><!-- header-one --> 
				<div class="container">
					<div class="w3ls-header-left">
						<p>Free home delivery at your doorstep For Above ₱200</p>
					</div>
					<div class="w3ls-header-right">
						<ul> 
							<li class="head-dpdn">
								<i class="fa fa-phone" aria-hidden="true"></i> Call us: +02 222 3456 
							</li> 
							<?php
								if(isset($_SESSION['user'])) {
									?>
									<li class="head-dpdn">
										Hi, <?php echo $_SESSION['user'] ?>
									</li> 
									<li class="head-dpdn">
										<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
									</li> 
									<?php
								} else {
									?>
									<li class="head-dpdn">
										<a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
									</li> 
									<li class="head-dpdn">
										<a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
									</li> 
									<?php
								}
							?>
														
						</ul>
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div>
			<!-- //header-one -->     
			<!-- navigation -->
			<div class="navigation agiletop-nav">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header w3l_logo">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>  
							<h1><a href="index.php">Munch & Chillz<span>Pandog is lyf</span></a></h1>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php">Home</a></li>
								<li><a href="menu.php">Menu</a></li>
								<li><a href="about.php">About</a></li> 								
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</div>
						<div class="cart cart box_1"> 
							<form action="#" method="post" class="last"> 
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="display" value="1" />
								<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
							</form>   
						</div> 
					</nav>
				</div>
			</div>
			<!-- //navigation -->
		</div>
		<!-- //header-end --> 
		<!-- banner-text -->
		<div class="banner-text">	
			<div class="container">
				<h2>Delicious and affordable food <br> <span>Tawid gutom everyday.</span></h2> 
			</div>
		</div>
	</div>
	<!-- //banner -->   
	<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Sign Up</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- sign up-page -->
	<div class="login-page about">
		<img class="login-w3img" src="images/img3.jpg" alt="">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Delivery Details</h3>  
			<div class="login-agileinfo"> 
				<form action="#" method="post"> 
					<input class="agile-ltext" type="text" name="house" placeholder="House No/Unit No/Bulding" required="">
					<input class="agile-ltext" type="text" name="street" placeholder="Street name" required="">
					<input class="agile-ltext" type="text" name="barangay" placeholder="Barangay / Village / Subdivision" required="">
					<input class="agile-ltext" type="text" name="city" placeholder="City" required="">
					<div class="wthreelogin-text">    
					<input type="submit" name="register" value="Confirm Check Out">
				</form>
			</div>	 
		</div>
	</div>

<?php
	if (isset($_POST['register'])) {
		$house = $_POST['house'];
		$street = $_POST['street'];
		$barangay = $_POST['barangay'];
		$city = $_POST['city'];

		?>
		<script src="js/minicart.js"></script>
		<script>
			var items = w3ls.cart.items();
			
			window.location.href = "somepage.php?w1=" + "hello" + "&w2=" + items.toString();
			
		</script>
<!--
		<?php

		//include "dbcon.php"; // database connection

		//$sql = "INSERT INTO user( username, password,email)
		//			VALUES('$uname', '$pass', '$email')";
		//$result = mysqli_query($conn, $sql);

		//if($result){
			?>
			<div id="snackbar">Thank you registering</div>
			<script>

        	 
			    var x = document.getElementById("snackbar")
			    x.className = "show";
			    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
			</script>
			<?php
		//} else {
			?>
			<div id="snackbar">Connection error. Try again later.</div>
			<script>
			    var x = document.getElementById("snackbar")
			    x.className = "show";
			    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
			</script>
			<?php
		}

	

?>
-->



	<!-- //sign up-page -->  
	<!-- footer -->
	<div class="footer agileits-w3layouts">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
					<h3>company</h3>
					<ul>
						<li><a href="about.php">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>	
						<li><a href="contact.php">Partner With Us</a></li>   
					</ul>
				</div> 				
				<div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
					<h3>policy info</h3>
					<ul>  
						<li><a href="terms.php">Terms & Conditions</a></li>  
						<li><a href="privacy.php">Privacy Policy</a></li>
						<li><a href="login.php">Return Policy</a></li> 
					</ul>   
				</div>
				<div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
					<h3>Menu</h3> 
					<ul>
						<li><a href="menu.php">All Day Menu</a></li>  
					</ul>  
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div> 
	</div>
	<div class="copyw3-agile"> 
		<div class="container">
			<p>&copy; 2019 Munch & Chillz. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
	<!-- //footer --> 
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        			
        		}
        	}


        });
    </script>  
	<!-- //cart-js -->	
	<!-- start-smooth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>  
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	  
	<!-- smooth-scrolling-of-move-up -->
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
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
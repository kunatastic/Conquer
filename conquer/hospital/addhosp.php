<?php
    require '../config.php';
    session_start();
?>
<!DOCTYPE html>
<html>
<style>

#mainwrapper{
	width:600px;
	margin:0 auto;
	background: white;
	padding: 10px;
	border-radius: 10px;
	border: 1px solid #2c3e50;
}

.myform{
	width:450px;
	margin: 0 auto;
	padding: 5px;
}

.inputvalues{
	margin-top: 10px;
	width: 415px ;
	margin:5px;
	padding: 5px;
	height: 33px;
	font-size: 20px;
	border:1.2px solid #ccc;
}

.login_btn{
	margin-left: 50px;
	margin-top:0px;
	margin-bottom:10px;
	background-color: #283655;
	padding:5px;
	color:white;
	width:30%;
	text-align:center;
	font-size:18px;
	font-weight:bold;
	border-radius:5px;
	height: 40px;		
}

.signout_btn{
	margin-top:0px;
	margin-bottom:10px;
	background-color: #283655;
	padding:5px;
	color:white;
	width:34%;
	text-align:center;
	font-size:18px;
	font-weight:bold;
	border-radius:5px;
	height: 40px;		
}


</style>
<head>
	<title>Add new Hospital </title>
<!--
Conquer Template
http://www.templatemo.com/tm-476-conquer
-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>   
			<div class="single-page-nav sticky-wrapper" id="tmNavbar">
				<ul class="nav navbar-nav">
					<li><a href="#section1">Homepage</a></li>
					<li><a href="#section3">Services</a></li>
					<li><a href="#section2">About Us</a></li>
                    <li><a href="#section4">Contact</a></li>
                    <li><a href="../index.php">Logout</a></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
					<li><a href="#">
                        <?php 
                            $user = $_SESSION['username'];
                            echo 'Welcome: '."<strong>".$user."<br></strong>";
                        ?>
                        </a>
                    </li>
				</ul>
			</div>   
		</div>
    </nav>
    <div id="section1">
		<header id="header-area" class="intro-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<div class="header-content">
							<h1>Emergency</h1>
							<h4>Online <span style="color: red;">Ambulance</span> Allotment Management</h4>
						</div>
					</div>
				</div>
			</div>
		</header>
    </div>
    <div id="mainwrapper">
			<center>
				<h1>Add new Hospital</h1>
            </center>
            
			<form method="post" class="myform">
				<!-- Name-->
				<input type="text" placeholder="Name" name="name" id="name" class="inputvalues" required autocomplete="off"/><br/>
				<br/>

				<!-- RegNo-->
				<input type="text" placeholder="Location" name="loc" id="loc" class="inputvalues" autocomplete="off" required/ ><br/>
				<br/>

				<!-- Phone no.-->
				<input type="text" placeholder="Phone Number" name="phno" id="phno" class="inputvalues" autocomplete="off" required/><br/>
				<br/>

				<!-- X Co-ordinates-->
				<input type="text" placeholder="Longitude" name="xco" id="xco" class="inputvalues" autocomplete="off" required/><br/>
				<br/>

				<!-- Y Co-ordinates-->
				<input type="text" placeholder="Latitude" name="yco" id="yco" class="inputvalues" autocomplete="off" required/><br/>
				<br/>

                <hr>
                <center><input type="submit" title="Get Started" value="Register" class="signout_btn" name="submit_btn" id="signout_btn"/></center>
                <hr>
			</form>
				
			<?php
				if (isset($_POST['submit_btn'])){
					//echo '<script>alert("submit button clicked")</script>';

					$name=$_POST['name'];
					$loc=$_POST['loc'];
					$phoneno=$_POST['phno'];
					$x_coor=$_POST['xco'];
					$y_coor=$_POST['yco'];
					
                    $query = "INSERT INTO hospital(name, location, phno, x_coor, y_coor) VALUES ('$name','$loc',$phoneno,$x_coor,$y_coor);";
					$query_run=mysqli_query($con,$query);

					if ($query_run){
                        echo '<script type="text/javascript">alert("Hospital added.. ")</script>'; 
                    }
                    else{
						echo '<script type="text/javascript">alert("Error!")</script>';
					}
				}
			?>
		</div>

    <!-- Start Footer Area -->
    <footer id="footer-area">
						<div class="container">
							<div class="row text-center">
								<div class="col-sm-12">
									<div class="footer-content">
										<h1>Use it free!</h1>
										<p>“Conquer is free Bootstrap template from templatemo website. 
											<br>No backlink is required to use this layout.”</p>
										</div>                
									</div>
								</div>
							</div>
							<hr>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">             
										<p class="copy">Copyright © 2020 Kunal	 
                                        
                                        | Design: templatemo</p>
									</div>
								</div>
							</div>
						</footer>
						<!-- End Footer Area -->
    <script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script> <!-- https://github.com/markgoodyear/scrollup -->
	<script src="js/jquery.singlePageNav.min.js"></script> <!-- https://github.com/ChrisWojcik/single-page-nav -->
	<script src="js/parallax.js-1.3.1/parallax.js"></script> <!-- http://pixelcog.github.io/parallax.js/ -->
	<script>

    // HTML document is loaded. DOM is ready.
    $(function() {  

    // Parallax
        $('.intro-section').parallax({
        	imageSrc: 'img/top2.jpg',
        	speed: 0.2
        });
        $('.services-section').parallax({
        	imageSrc: 'img/bg-2.jpg',
        	speed: 0.2
    	});
        $('.contact-section').parallax({
        	imageSrc: 'img/bg-3.jpg',
        	speed: 0.2
        });    

        // jQuery Scroll Up / Back To Top Image
        $.scrollUp({
                scrollName: 'scrollUp',      // Element ID
		        scrollDistance: 300,         // Distance from top/bottom before showing element (px)
		        scrollFrom: 'top',           // 'top' or 'bottom'
		        scrollSpeed: 1000,            // Speed back to top (ms)
		        easingType: 'linear',        // Scroll to top easing (see http://easings.net/)
		        animation: 'fade',           // Fade, slide, none
		        animationSpeed: 300,         // Animation speed (ms)		        
		        scrollText: '', // Text for element, can contain HTML		        
		        scrollImg: true            // Set true to use image		        
            });

        // ScrollUp Placement
        $( window ).on( 'scroll', function() {

            // If the height of the document less the height of the document is the same as the
            // distance the window has scrolled from the top...
            if ( $( document ).height() - $( window ).height() === $( window ).scrollTop() ) {

                // Adjust the scrollUp image so that it's a few pixels above the footer
                $('#scrollUp').css( 'bottom', '80px' );

            } else {      
                // Otherwise, leave set it to its default value.
                $('#scrollUp').css( 'bottom', '30px' );        
            }
        });

        $('.single-page-nav').singlePageNav({
        	offset: $('.single-page-nav').outerHeight(),
        	speed: 1500,
        	filter: ':not(.external)',
        	updateHash: true
        });

        $('.navbar-toggle').click(function(){
        	$('.single-page-nav').toggleClass('show');
        });

        $('.single-page-nav a').click(function(){
        	$('.single-page-nav').removeClass('show');
        });
        
    });
</script>
</body>
</html>
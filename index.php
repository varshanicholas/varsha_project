<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>FASHION WROLD</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bridal Dress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />  <!-- flexslider-CSS --> 
<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->  
<link rel="stylesheet" href="css/swipebox.css">
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //Custom Theme files -->  
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
</head>
  
	<!-- banner -->
	<div class="agileits-banner jarallax">
		<div class="bnr-agileinfo"> 
			<!-- navigation -->
			<div class="top-nav w3-agiletop">
				<div class="container">
					<div class="navbar-header w3llogo">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>  
						<h1><a href="index.html">FASION WORLD</a></h1> 
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="w3menu navbar-right">
							<ul class="nav navbar">
								<li><a href="index.html" class="active">Home</a></li> 
								<li><a href="dashboard.php" class="active">Gallery</a></li> 
								<li><a href="#blog" class="scroll">Blog</a></li>
								
								<li><a href="#about" class="scroll">About Us</a></li>
								
								<li><a href="#contact" class="scroll">Contact Us</a></li> 
								<li><a href="#registeration" class="scroll">Register</a></li>
								<li><button class="btn btn-primary"><a href="login.php" class="active">Sign In</a></button></li>


							</ul>
						</div> 
						<div class="clearfix"> </div>  
					</div>
				</div>	
			</div>	
			<!-- //navigation -->
			<!-- banner-text -->
			<div class="banner-text agileinfo"> 
				<div class="container">
					<div class="flexslider">
						<ul class="slides">
							<li> 
								<div class="banner-w3lstext">   
									<h3>Dresses  <br> for Party and Functions </h3> 
									<h4>Elevate your festive wardrobe with our<br> "Celebrate in Style" collection,<br> curated to seamlessly transition <br>between glamorous party occasions and <br>traditional festivities. <br></h4>  
								</div>
							</li> 
							<li>
								<div class="banner-w3lstext">   
									<h3>Exclusive & <br>Branded collections</h3>
									<h4>Indulge in the epitome of luxury and refinement <br>with our "Elite Elegance" collection, <br>where every dress is a masterpiece of<br> exquisite craftsmanship and timeless allure. </h4>  
								</div>
							</li>
							<li>
								<div class="banner-w3lstext">   
									<h3>Ethereal Elegance &<br> Affordable Collection</h3>  
									<h4>Discover fashion-forward styles at unbeatable <br>prices, curated for those who seek chic<br> sophistication without breaking the bank."</h4>  
								</div>
							</li>
						</ul> 
					</div> 	 
				</div>
			</div>
			<!-- //banner-text -->  
			<!-- arrow bounce --> 
			<div class="agileits-arrow bounce animated"><a href="#about" class="scroll"><i class="fa fa-angle-down" aria-hidden="true"></i></a></div>
			<!-- //arrow bounce -->  
		</div>
	</div>
	<!-- //banner --> 
	
<!-- gallery -->
<div id="gallery" class="gallery wthree">
    <div class="container">
        <h4 class="w3ls_head"><i>OUR PRODUCTS</i></h4>
       
        <div class="gallery-agileinfo">
            <div class="row">

			<?php
                    require("admin/connection.php");

                    $res = $con->query("SELECT * FROM `form`");
                    $count = $res->num_rows;

                    if ($count > 0) {
                        while ($row = $res->fetch_assoc()) {
                    ?>
                <div class="col-md-6 col-xs-6 gallery-w3lstop">
				
                            <figure class="effect-bubba">
                                <a href="<?php echo "admin/pic/" . $row["Image"]; ?>" class="swipebox">
                                    <img src="<?php echo "admin/pic/" . $row["Image"]; ?>" alt="Product Image" class="img-responsive"  style="width:580px; height:450px;">
                                    <div class="figcaption">
                                       
                                       
                                       <h4><?php echo $row["Proname"]; ?></h4>
                                        <p><?php echo $row["Proprice"];?></p>
										<p><?php echo $row["Type"]; ?></p>
                                        <p><?php echo $row["Discount"]; ?></p>
										
                                    </div>
                                </a>
                            </figure><br><br>
							<center><a href="login.php" class="btn btn-primary">BUY</a></center><br><br><br>
							
						
                </div>
				<?php
                        }
                    
                    }
                    ?>
            </div>
        </div>
    </div>
</div>
	
	
	<!-- //about-w3agile --> 
	<!-- services -->
	<div id="services" class="services">  
		<div class="services-grids"> 
			<div class="col-md-3 col-xs-3 serv-agileinfo view view-ninth">
				<img src="images/g1.jpg" class="img-responsive" alt=""/>
				<div class="mask mask-1"></div>
				<div class="mask mask-2"></div>
				<div class="content">
					<h5>Our Services</h5>
					<p>A wonderful serenity has taken possession of my entire soul</p>
				</div>
			</div> 
			<div class="col-md-3 col-xs-3 serv-agileinfo serv-w3text">
				<h3>300+</h3>
				<p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis placerat ipsum nisl.</p>
			</div> 
			<div class="col-md-3 col-xs-3 serv-agileinfo view view-ninth agileits-w3layouts">
				<img src="images/g2.jpg" class="img-responsive" alt=""/>
				<div class="mask mask-1"></div>
				<div class="mask mask-2"></div>
				<div class="content">
					<h5>Our Services</h5>
					<p>A wonderful serenity has taken possession of my entire soul</p>
				</div>
			</div>
			<div class="col-md-3 col-xs-3 serv-agileinfo serv-w3text">
				<h3 class="works ser-wthreetext">Here's some of my latest works</h3>
			</div>
			<div class="clearfix"> </div>
		</div>	
		<div class="services-grids agileits-w3layouts">	 
			<div class="col-md-3 col-xs-3 serv-agileinfo serv-w3text">
				<h3 class="ser-wthreetext">200+</h3>
				<h4>SERVICES</h4>
			</div>
			<div class="col-md-3 col-xs-3 serv-agileinfo view view-ninth">
				<img src="images/g3.jpg" class="img-responsive" alt=""/>
				<div class="mask mask-1"></div>
				<div class="mask mask-2"></div>
				<div class="content">
					<h5>Our Services</h5>
					<p>A wonderful serenity has taken possession of my entire soul</p>
				</div>
			</div> 
			<div class="col-md-3 col-xs-3 serv-agileinfo serv-w3text">
				<h3>LATEST PROJECTS</h3>
			</div>
			<div class="col-md-3 col-xs-3 serv-agileinfo view view-ninth">
				<img src="images/g4.jpg" class="img-responsive" alt=""/>
				<div class="mask mask-1"></div>
				<div class="mask mask-2"></div>
				<div class="content">
					<h5>Our Services</h5>
					<p>A wonderful serenity has taken possession of my entire soul</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //services -->
	
	<!-- //team -->
	<!-- about-slid -->
	<div class="about-w3slid jarallax">
		<div class="subscribe-agileinfo about-w3agile"> 
			<div class="container">  
				<h3>Flat 50% <span>Offer</span></h3>
				<p>Curabitur nec purus eget urna pulvinar placerat. Integer varius est vitae iaculis suscipit. Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio </p> 
			</div>
		</div>
	</div>
	<!-- //about-slid --> 
	
	<!-- blog -->
	<div id="blog" class="blog services agile-blog">
		<div class="container"> 
			<h3 class="w3ls_head">Our Blog</h3>
			<p class="w3agile">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
				corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
			<div class="col-md-6 w3lsblog-grid">
				<div class="blog-w3top">
					<h5>4th November 2023 </h5>
				</div>
				<div class="blog-left"> 
					<a href="#myModal" data-toggle="modal" class="wthree-almub">  
					</a>
				</div>
				<div class="blog-right">
					<h4><a href="#myModal" data-toggle="modal">Dolor Sit</a></h4>
					<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
					<a class="w3more" href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 w3lsblog-grid">
				<div class="blog-w3top">
					<h5>10th November 2023 </h5>
				</div>
				<div class="blog-left">  
					<a href="#myModal" data-toggle="modal" class="wthree-almub wthree-almub2">  
					</a>	
				</div>
				<div class="blog-right">
					<h4><a href="#myModal" data-toggle="modal">Consequat</a></h4>
					<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
					<a class="w3more" href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
				</div>
				<div class="clearfix"></div>
			</div>  
			<div class="col-md-6 w3lsblog-grid">
				<div class="blog-w3top">
					<h5>14th November 2023</h5>
				</div>
				<div class="blog-left"> 
					<a href="#myModal" data-toggle="modal" class="wthree-almub wthree-almub3">  
					</a>
				</div>
				<div class="blog-right">
					<h4><a href="#myModal" data-toggle="modal">Dolor Sit</a></h4>
					<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
					<a class="w3more" href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 w3lsblog-grid">
				<div class="blog-w3top">
					<h5>19th November 2023 </h5>
				</div>
				<div class="blog-left">  
					<a href="#myModal" data-toggle="modal" class="wthree-almub wthree-almub4">  
					</a>	
				</div>
				<div class="blog-right">
					<h4><a href="#myModal" data-toggle="modal">Consequat</a></h4>
					<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
					<a class="w3more" href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
				</div>
				<div class="clearfix"></div>
			</div>  
			<div class="clearfix"></div>  
		</div>
	</div>
	<!--- //blog -->  
	<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body">
					<img src="images/g5.jpg" alt=""> 
					<h5>Cras rutrum iaculis enim</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate. </p>
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal -->  
	<!-- contact -->
	<div id="contact" class="contact">
		<div class="container"> 
			<h3 class="w3ls_head">Contact Us</h3>
			<p class="w3agile">"Easily find our shop's contact information for any inquiries. We're here to assist you promptly. Connect with us hassle-free!"</p>
	
		
			<div class="contact-info">
				<div class="col-md-4 contact-grids">
					<div class="cnt-address">
						<h3>Address</h3>
						<h4>Main Branch</h4>
						<p>t-Nager chennai
						
							Tamil nadu, Chennai.
						</p>
						<h4>Get In Touch</h4>
						<p>phone no:8220535019
							
							E-mail: <a href="varshanicholas14@gmail.com">mail@example.com</a>
						</p>
					</div>
				</div>
				<div class="col-md-8 contact-grids">
					<h4 class="cnt-text">Questions? Contact Us! All Our Shop Info in One Place!"</h4>
					<p>"For any inquiries or assistance, please don't hesitate to contact us via email. Our dedicated team is here to address your questions promptly and provide the support you need. Reach out to us at [insert email address] for any product queries, order assistance, or general inquiries. Your satisfaction is our priority, and we're committed to ensuring a seamless shopping experience for you. We look forward to hearing from you soon!"




					</p>		
					<div class="contact-form">
						<h3>Drop Your Quries</h3>
						<form action="#" method="post">
							<textarea placeholder="Message" required=""></textarea>
							<input type="text" placeholder="Name" required="">
							<input type="email" placeholder="Email" required="">
							<input type="submit" value="SEND">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
	<!--registration-->
	<div id="registeration" class="contact">
		<div class="container"> 
			<h3 class="w3ls_head">User Registration</h3>
			<p class="w3agile">"Create your account to enjoy a seamless shopping experience and access exclusive dress collections."</p>
	
		
			<div class="contact-info">
				<div class="col-md-4 contact-grids">
					
				</div>
				
					<div class="contact-form">
						<h3>Register Here</h3>
						<center>
						<form action="reg_conn.php" method="post" enctype="multipart/form-data">
					
							
							<input type="text" placeholder="Name"  name="a" required=""><br>
							<input type="email" placeholder="Email" name="b" required=""><br>
							<input type ="text" placeholder="password" name="c" required=""><br>
							<input type="text"placeholder="Address" name="d" required="">
							<br><br>
		
		<label for="dropdown">Select the country:</label>
		<select  id="country" class="form-control dropdown" name="e"> 
			<?php 
			  require("admin/connection.php");
			
			$res = $con->query("SELECT * FROM `countries`");
            $count = $res->num_rows;
			if ($count > 0) {
				while ($row = $res->fetch_assoc()) {
			?>

			<option value= "<?php echo $row["cont_id"];?>"><?php echo $row["name"];?></option>
				<?php
				}
			}
			?>
		
		
		</select>
		<label for="dropdown">Select the state:</label>
		<select  id="state" class="form-control dropdown" name="f"> 
			<option> Select the State</option>
		</select>
    
  
							
							<input type="submit" value="SEND">
				</center>
						</form>
					</div>
			
				</div>
				
			
			
		</div>
	</div>
	<script type="text/javascript">
$(document).ready(function() {
    $('#country').change(function() {
        var country = $('#country').val();
      

        $.ajax({
            url: 'search_state.php',
            type: 'POST',
            data: { country: country },
            success: function(result) {
                //alert(result);return false;
                $('#state').html(result);
            }
        });
    });
});
</script>
		
	<!-- subscribe -->
	<div class="subscribe jarallax">    
		<div class="subscribe-agileinfo">    
			<div class="container"> 
				<h3>SignUp Newsletter</h3>  
				<form action="#" method="post"> 
					<input type="text" name="name" placeholder="Your Name" required="">
					<input type="email" name="email" placeholder="Your Email" required="">
					<input type="submit" value="Submit">
					<div class="clearfix"> </div>
				</form> 
			</div> 
		</div>
	</div>
	<!-- //subscribe -->
	<!-- footer -->
	<div class="w3l-footer">
		<div class="container">
			<div class="footer-w3logo"> 
				<a href="index.html">FASHION WORLD</a>
			</div>
			<div class="right-social">
				<div class="social-icon">
					<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
					<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
					<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
				</div> 	
			</div>
			<div class="clearfix"></div>
			<div class="footer-nav"> 
				<ul>
					<li><a href="index.html" class="active">Home</a></li> 
					<li><a href="#about" class="scroll">About Us</a></li>
					
					<li><a href="#gallery" class="scroll">Gallery</a></li> 
					<li><a href="#blog" class="scroll">Blog</a></li>
					<li><a href="#contact" class="scroll">Contact Us</a></li> 
					<li><a href="#registeration" class="scroll">Register</a></li>
				</ul>
			</div>
			<div class="copyright-agile">
				<p>&copy; 2017 Fashion World. All rights reserved | Design by varshanicholas14@gmail.com </p>
			</div>
		</div>
	</div>
	<!-- //footer --> 
	<!-- js --> 
	
	<script src="js/SmoothScroll.min.js"></script> 
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //js --> 
	<!-- FlexSlider --> 
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
	<!-- //End-FlexSlider -->  
	<!-- swipe box js -->
	<script src="js/jquery.swipebox.min.js"></script> 
		<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
	<!-- //swipe box js -->
	<!-- start-smooth-scrolling --> 
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
<!--<p class="w3agile">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
				corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>-->
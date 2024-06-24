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
                        <?php
require("admin/connection.php");
$id1=$_REQUEST["var"];
$res1=$con->query("select * from register where reg_id=$id1"); 
$count1=mysqli_affected_rows($con);
$count1=$res1->num_rows;
if($count1>0)
{
  $row1=$res1->fetch_assoc();
}?>
						<center>
						<form action="reg_update.php" method="post" enctype="multipart/form-data">
					
							 <input type= "hidden" name="reg_id" value= "<?php echo $row1["reg_id"];?>">
							<input type="text" placeholder="Name"  name="a"value=" <?php echo $row1["cust_name"];?>"required=""><br>
							<input type="email" placeholder="Email" name="b"value=" <?php echo $row1["email"];?>" required=""><br>
							<input type ="text" placeholder="password" name="c" value="<?php echo $row1["password"];?>"required=""><br>
							<input type="text"placeholder="Address" name="d" value="<?php echo $row1 ["Address"];?>"required="">
							<br><br>
		
                            <?php
                                   require("admin/connection.php");
                                   $edit=$row1["country"]; 
                                   $ress=$con->query("select * from `countries` where  `cont_id`='$edit'" );
							       $counts = $ress->num_rows;
                                   if($counts>0)
                                   {
                                      $rows=$ress->fetch_assoc();
                                   }
                                ?>
                                
                                       <label for="dropdown"> select the Country</label>
                                        <select id="country" name ="country" class="form-control dropdown">
									    <option value ="<?php echo $rows['cont_id'];?>"><?php echo $rows['name'];?></option>
		

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
								<?php
                                    require("admin/connection.php");
                                    $st1=$row1["state"];
                                    $res2=$con->query("select * from `states` where  `stat_id`='$st1'" );
							        $count2 = $res2->num_rows;
                                    if($count2>0)
                                      {
                                         $row2=$res2->fetch_assoc();
                                      }
                                ?>
		<label for="dropdown">Select the state:</label>
		<select  id="state" class="form-control dropdown" name="State" >value= "<?php echo $row1["state"];?>">> 
			<option value="<?php echo $row2 ['stat_id'];?>"> <?php echo $row2['sname'];?></option>
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
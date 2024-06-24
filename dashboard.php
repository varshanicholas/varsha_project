
<?php 
session_start();
if(empty($_SESSION["email"]))
{
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>FASHION WORLD</title>
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
						<h1><a href="index.html">FASHION WORLD</a></h1> 
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="w3menu navbar-right">
							<ul class="nav navbar">
								<li><a href="index.html" class="active">Home</a></li> 
								<li><a href="#gallery" class="scroll">Gallery</a></li> 
								<li><a href="#blog" class="scroll">Blog</a></li>
								<li><a href="#about" class="scroll">About Us</a></li>
								<li><a href="#contact" class="scroll">Contact Us</a></li> 
								<li><button class="btn btn-primary"><a href="user_logout.php" class="active">log out</a></button></li>

							</ul>
						</div> 
					</div>
				</div>	
			</div>	
		</div>  
	</div>
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
							<center><a href="product.php ? var=<?php echo $row["cust_id"];?>" class="btn btn-primary">BUY</a></center><br><br><br>
							
						
                </div>
				<?php
                        }
                    
                    }
                    ?>
            </div>
        </div>
    </div>
</div>
</html>
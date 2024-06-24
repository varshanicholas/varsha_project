<?php
session_start(); 

if (empty($_SESSION['email']))
 {
    header("location:login.php");
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
								<li><a href="#registeration" class="scroll">Register</a></li>
							</ul>
						</div> 
					</div>
				</div>	
			</div>	
		</div>  
	</div>

<div id="services" class="services">  
	<div class="services-grids"> 
		<?php 
			require("admin/connection.php");
			$id=$_REQUEST["var"];
			$res=$con->query("select * from form where cust_id = $id");
			$count =$res->num_rows;
			if($count>0) {
				$row=$res->fetch_assoc();
			}
		?>
		<div class="col-md-6 col-xs-6 serv-agileinfo view view-ninth">
			<img src="<?php echo "admin/pic/". $row["Image"]; ?>" alt="Product Image" style="width: 400px; height:500px; margin:20px;">
		</div>
		<div class="col-md-6 col-xs-6 serv-agileinfo serv-w3text">
			<div class="contact-form">
				<form action="order_insert.php" method="post" enctype="multipart/form-data">
				<h3>PRODUCT INFO</h3>
				<b>PRODUCT NAME: </b>  <br>
				<input type="text" id="name" placeholder="name" name="a" value="<?php echo $row["Proname"];?>" readonly> <br>
				<b>PRODUCT TYPE: </b>  <br>
				<input type="text" id="type" placeholder="type" name="b" value="<?php echo $row["Type"];?>" ><br>
				<b>PRODUCT PRICE:  </b> <br> 
				<input type="text" id="product-price" placeholder="Price" name="c" value="<?php echo $row["Proprice"];?>"  readonly><br>
				<b>DISCOUNT: </b> <br>   
				<input type="text" placeholder="Discount" name="d" value="<?php echo $row["Discount"];?>" readonly><br>
				<b>QUANTITY: </b>  <br>
				<input type="text" id="quantity" placeholder="Quantity" name="e" ><br>
				<b>TOTAL:  </b> <br> 
				<input type="text" id="total" placeholder="total" name="f"  readonly><br>
				<input type="submit" class="btn btn-success">
				<br><br>
		</form>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function() {
    $('#quantity').on('input', function() {
        var price = parseFloat($('#product-price').val());
        var quantity = ($(this).val());
        var total = price * quantity;
        $('#total').val(total.toFixed(2));
    });
});
</script>

</html>

<?php include "checker.php"; ?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>Product Details</title>
	
	<?php include "top.php" ?>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">

	<?php include "adminheader.php"  ?>
	
<div id="fh5co-product">
	  <div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				  <h2>Lenovo y50-70</h2>
				  <h4><span class="price">PRICE: $999</span></h4>
				  <form action=server.php method="POST"> 
				  	
				  	<input type="number" name="quantity" placeholder="Enter quantity here" required>
				  	<input type="hidden" name="choice" value="lenovo">
				  	<input type="submit" name=submit  class="btn btn-primary" value="Add to Cart"> 

				  </form>
				  <?php
				  if (isset($_GET["message"])) 
				  {
				  	$message=$_GET['message'];
				  	echo "<h4><font color='blue'>&#10004 LENOVO Y50-70 has been successfully added to cart</font></h4>";					  
				  }
				  else $message="";

				  ?>
			  </div>
			 
<div class="col-md-10 col-md-offset-1 animate-box">
		  <div class="owl-carousel owl-carousel-fullwidth product-carousel">
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/lenovo/lenovo-2.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/lenovo/lenovo-3.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/lenovo/lenovo-4.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/lenovo/lenovo-5.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/lenovo/lenovo-6.jpg" alt="user">
								</figure>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="col-md-10 col-md-offset-1"><span class="price">PRICE: $999</span>
			  <h2>Lenovo Y50-70</h2>
			  <p>Processor - 4th Generation Intel Core i7-4720HQ (2.60GHz 1600MHz 6MB)Operating System - Windows 10 Home 64Memory - 16.0GB PC3L-12800 DDR3L SDRAM 1600 MHzGraphics Card - NVIDIA GeForce GTX 960M 4GB Hard Drive - 512GB SSD SATA</p>
			
			  <p>Screen Size:15.6 inches Processor:2.6 GHz Intel Core i7 RAM:16 GB DDR3 SDRAM Hard Drive:512 GB flash_memory_solid_state Graphics:Coprocessor	geforce gtx 960m Chipset Brand:nvidia Card Description	dedicated Other Technical Details Brand Name:Lenovo Series	Y50-70 Item model number: 59445933 Operating System:Windows 10 Home 64 Item Weight:5.3 pounds Package Dimensions:21.7 x 12.9 x 3 inches Processor Brand:Intel</p>
	    </div>
			<div class="row">
			  <div class="col-md-10 col-md-offset-1"> </div>
	    </div>
</div>
	</div>
<?php	include "footer.php"  ?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<?php	include "bottom.php"  ?>

	</body>
</html>


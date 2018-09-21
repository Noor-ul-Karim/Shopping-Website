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
				  <h2>SAMSUNG GALAXY J5 PRIME</h2>
				  <h4><span class="price">PRICE: $217</span></h4>
				  <form action=server.php method="POST"> 
				  	
				  	<input type="number" name="quantity" placeholder="Enter quantity here" required>
				  	<input type="hidden" name="choice" value="samsung">
				  	<input type="submit" name=submit  class="btn btn-primary" value="Add to Cart"> 

				  </form>
				  <?php
				  if (isset($_GET["message"])) 
				  {
				  	$message=$_GET['message'];
				  	echo "<h4><font color='blue'>&#10004 SAMSUNG GALAXY J5 PRIME has been successfully added to cart</font></h4>";					  
				  }
				  else $message="";

				  ?>
			  </div>
			 
<div class="col-md-10 col-md-offset-1 animate-box">
		  <div class="owl-carousel owl-carousel-fullwidth product-carousel">
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/samsung/samsung-2.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/samsung/samsung-3.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/samsung/samsung-4.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/samsung/samsung-5.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/samsung/samsung-6.jpg" alt="user">
								</figure>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="col-md-10 col-md-offset-1"><span class="price">PRICE: $217</span>
			  <h2>SAMSUNG GALAXY J5 PRIME</h2>
			  <p>5.0-inch HD 720x1280 pixels (~294 ppi pixel density) IPS LCD16 GB ROM, 2 GB RAM, microSD, up to 256 GB (dedicated slot), Android 6.0.1 Marshmallow, Finger Print Scanner, All Metal Body13 MP Main Camera f/1.9, 28mm, 5MP Front Camera w/ Flash, Quad-core 1.4 GHz Cortex-A53 Compare with similar items</p>

			  <p>5.0-inch HD 720 x 1280 pixels (~294 ppi pixel density) IPS LCD. Android 6.0.1 Marshmallow, Finger Print Scanner, All Metal Body. 16 GB ROM, 2 GB RAM, microSD, up to 256 GB (dedicated slot) , Exynos Quad-core 1.4 GHz Cortex-A53 13 MP Main Camera f/1.9, 28mm, 5MP Front Camera w/ Flash. 3G HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100, 4G LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 17(700), 28(700) - Compatible with Most U.S. GSM SIM Card Carriers. International model phone, will work with Most GSM SIM cards in U.S. and world Including AT&T, T-Mobile, MetroPCS, Etc. Does not have US warranty. Will NOT work with CDMA Carriers Such as Verizon, Sprint, Boost. 2G: GSM 850 / 900 / 1800 / 1900 (SIM 1 & SIM 2), This phone will not work with CDMA Networks like Verizon, Sprint, Etc. WHATS INCLUDED? 1 PHONE w/ Built in Battery 1 ADAPTER 1 USB CABLE 1 MANUAL 1 HEADSET</p>
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


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
				  <h2>WESTERN DIGITAL 1TB HDD</h2>
				  <h4><span class="price">PRICE: $57</span></h4>
				  <form action=server.php method="POST"> 
				  	
				  	<input type="number" name="quantity" placeholder="Enter quantity here" required>
				  	<input type="hidden" name="choice" value="wd">
				  	<input type="submit" name=submit  class="btn btn-primary" value="Add to Cart"> 

				  </form>
				  <?php
				  if (isset($_GET["message"])) 
				  {
				  	$message=$_GET['message'];
				  	echo "<h4><font color='blue'>&#10004 WESTERN DIGITAL 1TB HDD has been successfully added to cart</font></h4>";					  
				  }
				  else $message="";

				  ?>
			  </div>
			 
<div class="col-md-10 col-md-offset-1 animate-box">
		  <div class="owl-carousel owl-carousel-fullwidth product-carousel">
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/wd/wd-2.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/wd/wd-3.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/wd/wd-4.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/wd/wd-5.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/wd/wd-6.jpg" alt="user">
								</figure>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="col-md-10 col-md-offset-1"><span class="price">PRICE: $57</span>
			  <h2>WESTERN DIGITAL 1TB HDD</h2>
			  <p>Store and share data with this Western Digital 1TB My Passport Ultra hard drive. Use the drive to quickly back up important files on your home or work computer, then secure the information with a password for extra peace of mind. This Western Digital 1TB My Passport Ultra hard drive ensures you total control over files.</p>

			  <p>USB 3.0 interface Offers an easy-to-use connection to devices. Backward compatible with USB 2.0 for simple connection to your computer.Data transfer rates up to 5 Gbps with USB 3.0 Enable a rapid response when updating files. Automatic backup options Allow you to use compatible software to back up your files to the server.Password protection and 256-bit AES hardware encryption Help keep your files secure. Portable design Lets you take your data on the go. *500GB of WD2go® cloud storage PLUS FILERECOVERY® software included FREE! Only @ BBY One year cloud storage & Filerecovery license with included WD Discovery software..</p>
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


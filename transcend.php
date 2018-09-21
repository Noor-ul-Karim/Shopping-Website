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
				  <h2>TRANSCEND 32GB FLASH DRIVE</h2>
				  <h4><span class="price">PRICE: $15</span></h4>
				  <form action=server.php method="POST"> 
				  	
				  	<input type="number" name="quantity" placeholder="Enter quantity here" required>
				  	<input type="hidden" name="choice" value="transcend">
				  	<input type="submit" name=submit  class="btn btn-primary" value="Add to Cart"> 

				  </form>
				  <?php
				  if (isset($_GET["message"])) 
				  {
				  	$message=$_GET['message'];
				  	echo "<h4><font color='blue'>&#10004 TRANSCEND 32GB FLASH DRIVE has been successfully added to cart</font></h4>";					  
				  }
				  else $message="";

				  ?>
			  </div>
			 
<div class="col-md-10 col-md-offset-1 animate-box">
		  <div class="owl-carousel owl-carousel-fullwidth product-carousel">
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/transcend/transcend-2.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/transcend/transcend-3.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/transcend/transcend-4.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/transcend/transcend-5.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/transcend/transcend-6.jpg" alt="user">
								</figure>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="col-md-10 col-md-offset-1"><span class="price">PRICE: $15</span>
			  <h2>TRANSCEND 32GB FLASH DRIVE</h2>
			  <p>Unparalleled USB 3.0 data transfer performance (backwards compatible with USB 2.0)Capless design with slide-out USB connectorLightweight and compact Exclusive Transcend Elite data management software Easy Plug and Play installation USB powered. No external power or battery needed LED usage status indicator</p>

			  <p>The JetFlash 790 features a lightweight, capless design with a USB connector that extends and retracts to provide extra hardware protection against dusts and liquid spills. The flash drive comes in a durable body so compact that it will not block adjacent ports on your device.Simple File Management :Using the JetFlash 790 couldn’t be easier. Simply connect the drive to a SuperSpeed USB 3.0 port and drag and drop desired files to and from the device. The JetFlash 790 supports Microsoft Windows 7/8/8.1 (32-bit and 64-bit), Windows Vista, Windows XP, Mac OS X, and Linux systems, and is backwards compatible with USB 2.0 and older USB 1.1 ports.Free Download – Transcend Elite Data Management Software :For added value, the JetFlash 790 includes the exclusive Transcend Elite data management tools. The software can be downloaded and installed from the Transcend website for free after purchase of the JetFlash drive. With this convenient software, you can easily perform incremental backups, compress files with 256-bit AES Encryption, and much more.</p>
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


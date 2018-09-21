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
				  <h2>CANON EOS REBEL SL2</h2>
				  <h4><span class="price">PRICE: $700</span></h4>
				  <form action=server.php method="POST"> 
				  	
				  	<input type="number" name="quantity" placeholder="Enter quantity here" required>
				  	<input type="hidden" name="choice" value="canon">
				  	<input type="submit" name=submit  class="btn btn-primary" value="Add to Cart"> 

				  </form>
				  <?php
				  if (isset($_GET["message"])) 
				  {
				  	$message=$_GET['message'];
				  	echo "<h4><font color='blue'>&#10004 Canon EOS REBEL SL2 has been successfully added to cart</font></h4>";					  
				  }
				  else $message="";

				  ?>
			  </div>
			 
<div class="col-md-10 col-md-offset-1 animate-box">
		  <div class="owl-carousel owl-carousel-fullwidth product-carousel">
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/canon/canon-2.png" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/canon/canon-3.png" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/canon/canon-4.png" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/canon/canon-5.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/canon/canon-6.png" alt="user">
								</figure>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="col-md-10 col-md-offset-1"><span class="price">PRICE: $700</span>
<h2>CANON EOS REBEL SL2</h2>
<p>EF-S 18–55mm f4.5-5.6 STM zoom lens provides versatilityThis focal range is great for everyday shots, including everything from gorgeous landscapes to exceptional close-ups.24.2 megapixels resolution delivers incredible detail and gorgeous enlargementsThe APS-C sensor and DIGIC 7 processor combine to produce high-resolution, low-noise photos even at speeds up to 25,600 ISO.100 - 25,600 ISO range (expandable to 51,200) for crisp, clear photos even in low lightShoot confidently without sacrificing detail, even in extremely low light.Nine-point autofocus quickly tracks and locks onto your subjectImpressive autofocus performance with accurate results.Capture spectacular movies in full 1080p HD
Full HD video with multiple frame rates up to 60p.PictBridge compatibility lets you print photos without a PCCompatible printer required (not included).</p>

<p>3.0" LCD monitor makes it easy to frame the shotRenders bright, crisp images, and lets you accurately preview the shot before taking it.
DIGIC 7 image processor delivers blazing speed and performanceHigh image quality and fast operation, even in low light. Sharp and detailed results in virtually any lighting situation.Optical viewfinder helps you frame the shotProvides 95% coverage and approximately 0.87x magnification.White balance controls deliver accurate, natural tones, regardless of lighting conditionsSettings include auto, preset (daylight, shade, cloudy, tungsten light, white fluorescent light, flash) and custom.Built-in pop-up flash for proper illuminationEnsures properly illuminated photos, and features integrated hot shoe for addition of an external flash, sold separately.Memory slot for storing or transferring dataAccepts SD, SDHC, SDXC. Memory cards not included.</p>
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


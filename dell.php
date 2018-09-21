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
				  <h2>Dell Inspiron 11</h2>
				  <h4><span class="price">PRICE: $150</span></h4>
				  <form action=server.php method="POST"> 
				  	
				  	<input type="number" name="quantity" placeholder="Enter quantity here" required>
				  	<input type="hidden" name="choice" value="dell">
				  	<input type="submit" name=submit  class="btn btn-primary" value="Add to Cart"> 

				  </form>
				  <?php
				  if (isset($_GET["message"])) 
				  {
				  	$message=$_GET['message'];
				  	echo "<h4><font color='blue'>&#10004 DELL INSPIRON 11 has been successfully added to cart</font></h4>";					  
				  }
				  else $message="";

				  ?>
			  </div>
			 
<div class="col-md-10 col-md-offset-1 animate-box">
		  <div class="owl-carousel owl-carousel-fullwidth product-carousel">
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/dell/dell-2.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/dell/dell-3.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/dell/dell-4.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/dell/dell-5.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/dell/dell-6.jpg" alt="user">
								</figure>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="col-md-10 col-md-offset-1"><span class="price">PRICE: $150</span>
			  <h2>DELL Inspiron 11</h2>
			  <p>Cool blue: Debuting in Bali Blue, this vibrant blue laptop will make everything you do feel cooler.Adventure-ready: At less than ¾-inch thin, this sleek laptop is easy to take with you anywhere.Accurate touchpad: With precise pointing and gesture recognition, the touchpad is less error-prone and your delete button gets a break.</p>
			  <p>We want you to love your new PC for years to come. That's why we test Inspiron laptops for reliability not just in the places where you expect it, but for the open road ahead.Turn up the heat: From locker rooms to locked cars, we test Inspiron laptops for survival in harsh short-term heat conditions of up to 65°C/149°F.Everything hinges on it: We test Inspiron laptop hinges to ensure they still feel tight, even after opening and closing the lid 20,000 times.Keys to success: We test commonly used keys for 10 million keystrokes and touch pad buttons 1 million times with no failure. So go ahead, finish your novel.Buttoned up: No matter what you set your power and multimedia buttons to do, we've tested them all to survive up to 40,000 pushes with no problems.Twist and turn: Call us excessive, but after twisting an Inspiron laptop's base and lid more than 25,000 times, we can assure you the parts inside are well protected.In for the long haul: Systems undergo at least 10,000 hours of highly accelerated life testing to ensure it’s ready for the real world. </p>
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


<!DOCTYPE HTML>
<html>
	<head>
	<title>Registration Page</title>
	
	<?php include "top.php" ?>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">

<?php include "header.php"  ?>

<div id="fh5co-contact">
	  <div class="container">
			<div class="row">
<div class="col-md-6 animate-box">
	<?php
	if(isset($_GET["message"])) $message=$_GET["message"]; else $message="";

	if($message=="success")
	{
		echo "<h4><font color='blue'>&#10004 Your account has been created successfully</font><h4>";
	}
	?>
  <h3>New Customer Registration</h3>
  <form action="server.php" method=POST>
  <input type="hidden" name="choice" value="register">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" name="firstname" class="form-control" placeholder="First Name" required>
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="email" name="email" class="form-control" placeholder="Email Address" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="password" name="password" class="form-control" placeholder="Password" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Register" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
<div></div>

	

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<?php	include "bottom.php"  ?>

	</body>
</html>


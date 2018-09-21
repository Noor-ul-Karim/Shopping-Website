<!DOCTYPE HTML>
<html>
	<head>
	<title>Login Page</title>
	
	<?php include "top.php" ?>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">

<?php include "header.php" ?>

<div id="fh5co-contact">
	  <div class="container">
			<div class="row">
<div class="col-md-6 animate-box">

<?php

if(isset($_GET["message"])) 
{
	$message=$_GET["message"];
	if ($message=="fail") 
	{
		echo "<h4><font color='red'>&#10060 INVALID EMAIL OR PASSWORD!</font><h4>";
	}
	else if ($message=="empty") 
	{
		echo "<h4><font color='red'>&#10060 Please log in to continue!</font><h4>";
	}

	
}
else $message="";

?>
  <h3>Customer Login</h3>
  <form action="checker.php" method="POST">
  
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
<div class="form-group">
				<input type="submit" value="Login" name="submit" class="btn btn-primary">
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


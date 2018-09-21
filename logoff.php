<!DOCTYPE HTML>
<html>
	<head>

	<title>Home Page</title>
	
	<?php include "top.php" ?>
	
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/buttonstyle.css">
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	<div id="page">

<?php	include "header.php"  ?>


<center>
  <a href="login.php" class="action-button shadow animate blue">LOGIN</a>
  <a href="register.php" class="action-button shadow animate red">REGISTER</a>
 </center>
 
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
<?php
echo "<br/><br/><br/>";
error_reporting(0);
if(isset($_GET["message"])) 
{
	$message=$_GET['message'];
	if ($message=="timeout") 
	{
		echo "<h4><font color='red'>&#10060 Session timed out due to 10 seconds of inactivity</font><h4>";
	}
	else if ($message=="logout") 
	{
		session_start();
	    session_unset();
		session_destroy();
		session_write_close();

		echo "<h4><font color='blue'>&#10004 You have successfully logged out of your account</font><h4>";
	}
	
}
else $message="";
?>
<?php	include "bottom.php"  ?>
	</body>
</html>


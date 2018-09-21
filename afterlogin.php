<?php include "checker.php"; ?>
<!DOCTYPE HTML>
<html>
	<head>

	<title>Welcome User</title>
	
	<?php include "top.php" ?>
	

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	<div id="page">

<?php	include "adminheader.php"  ?>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
<!-------------------------------------------------------------------------------->
<?php


echo "<center><h3>CUSTOMER INFORMATION:</h3>";
echo <<<END
<table style="width:50%; border: 1px solid black;">
  <tr style="border: 1px solid black;">
    <th><h4>Customer ID<h4></th>
    <th><h4>First Name<h4></th> 
    <th><h4>Last Name<h4></th>
    <th><h4>Email<h4></th>
    <th><h4>Password<h4></th>
  </tr>
  <tr>
END;
echo "
    <td ><h4>".$_SESSION['id']."<h4></td>
    <td><h4>".$_SESSION['firstname']."<h4></td> 
    <td><h4>".$_SESSION['lastname']."<h4></td>
    <td><h4>".$_SESSION['email']."<h4></td>
    <td><h4>".$_SESSION['password']."<h4></td>
  </tr>
</table></center>";


echo "<center><h3><br/>SESSION INFORMATION</h3>";
echo <<<END
<table style="width:50%; border: 1px solid black;">
  <tr style="border: 1px solid black;">
    <th><h4>Session ID<h4></th>
    <th><h4>Session Time<h4></th> 
    
  </tr>
  <tr>
END;
echo "
    <td ><h4>".$_SESSION['sessionid']."<h4></td>
    <td><h4>".$_SESSION['last_time']."<h4></td> 
    
  </tr>
</table></center>";



?>
<!-------------------------------------------------------------------------------->
<?php include "footer.php" ?>
<?php	include "bottom.php"  ?>
	</body>
</html>


<?php include "checker.php"; ?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>Shopping Cart</title>
	<?php include "top.php" ?>
	<link rel="stylesheet" type="text/css" href="css/tablestyle.css">
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	<div id="page">

<?php	include "adminheader.php"  ?>


<center>
	<h1>Shopping Cart</h1>
  <table>
  <tr>
    <th>Item Name</th>
    <th>Item Price</th>
    <th>Item Quantity</th>
    <th>Item Total</th>
    <th>Remove Items</th>
  </tr>
  
<?php

	include "connection.php";
	$query='SELECT * FROM cart where cust_id="'.$_SESSION['id'].'"';
	$fetch=mysqli_query($dbc,$query) OR DIE ("QUERY ERROR".mysqli_error($dbc));
	
	
      if (isset($_GET['message'])) 
      	{
        	$message=$_GET['message'];
        	echo "<h4><font color='blue'>&#10004 Item has been deleted from the cart</font></h4>";
        }  
        else $message="";


	while($result=mysqli_fetch_assoc($fetch))
	{
		$id=$result['item_id'];
		$sum=$result['item_quantity']*$result['item_price'];
		echo "<form action='server2.php' method='POST'>";
		echo "<tr><td><h5>".$result['item_name']."</h5></td>
				  <td><h5>$".$result['item_price']."</h5></td>
				  <td><h5>".$result['item_quantity']."</h5></td>
				  <td><h5>$ $sum</td>";
		echo "<td><input type='submit' value='DELETE'></td></tr>";
		echo "<input type='hidden' name='itemid' value='".$id."'>";
		echo "</form>";

		$totalq=$totalq+$result['item_quantity'];
		$total=$total+$sum;
		$grand=round(($total*1.08875),2);
	}	
	mysqli_close($dbc);

?>

</table>
<?php
echo <<<END

<table >
  <tr>
    <th>PRODUCTS TOTAL PRICES</th>
    <th>New York State TAX</th> 
    <th>Total Quantity</th> 
    <th>GRAND TOTAL WITH TAX</th>
  </tr>
  <tr>
    <td><b><h4>$ $total </h4><b></td>
    <td><b><h4> 8.875 % </h4><b></td> 
    <td><b><h4> $totalq </h4><b></td> 
    <td><b><h4>$ $grand </h4><b></td>
  </tr>
</table>
END;

?>
<a href="thankyou.php"><h3><b><button>PLACE ORDER</button></b></h3></a>
</center>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
<?php include "footer.php" ?>
<?php	include "bottom.php"  ?>
	</body>
</html>


<?php
if(isset($_POST["choice"])) $choice=$_POST["choice"]; else $choice="";
if(isset($_POST["itemid"])) $itemid=$_POST["itemid"]; else $itemid="";
if(isset($_POST["itemdelete"])) $itemdelete=$_POST["itemdelete"]; else $itemdelete="";

include "connection.php";


if($choice=="register")
{
	$query='SELECT * FROM customer Where email="'.$email.'" and cust_pass="'.$password.'"';

  $firstname=(isset($_POST['firstname']) ? $_POST['firstname']:null);  
  $lastname=(isset($_POST['lastname']) ? $_POST['lastname']:null);
  $email=(isset($_POST['email']) ? $_POST['email']:null);
  $password=(isset($_POST['password']) ? $_POST['password']:null);

  $query='insert into customer(first_name,last_name,cust_pass,email) values ("'.$firstname.'","'.$lastname.'","'.$password.'","'.$email.'")';
  $fetch=mysqli_query($dbc,$query) OR DIE("ERROR:QUERY NOT RETRIEVED.".mysqli_error($dbc));
  header('Location: register.php?message=success'); 
}


 if($choice=="dell")
{
	include "checker.php";
	$quantity=$_POST['quantity'];
	$q='INSERT INTO cart(cust_id,item_name,item_price,item_quantity) VALUES ("'.$_SESSION['id'].'","DELL INSPIRON 11","150","'.$quantity.'")';
	$fetch=mysqli_query($dbc,$q) OR DIE("ERROR:QUERY NOT RETRIEVED.".mysqli_error($dbc));
	header('Location: dell.php?message=added'); 
}

//---------------------------------------------------------------------------------------------------------------------------------------

if($choice=="lenovo")
{
  include "checker.php";
  $quantity=$_POST['quantity'];
  $q='INSERT INTO cart(cust_id,item_name,item_price,item_quantity) VALUES ("'.$_SESSION['id'].'","LENOVO Y50-70","999","'.$quantity.'")';
  $fetch=mysqli_query($dbc,$q) OR DIE("ERROR:QUERY NOT RETRIEVED.".mysqli_error($dbc));
  header('Location: lenovo.php?message=added'); 
}

//---------------------------------------------------------------------------------------------------------------------------------------
if($choice=="canon")
{
  include "checker.php";
  $quantity=$_POST['quantity'];
  $q='INSERT INTO cart(cust_id,item_name,item_price,item_quantity) VALUES ("'.$_SESSION['id'].'","CANON EOS REBEL SL2","700","'.$quantity.'")';
  $fetch=mysqli_query($dbc,$q) OR DIE("ERROR:QUERY NOT RETRIEVED.".mysqli_error($dbc));
  header('Location: canon.php?message=added'); 
}

//---------------------------------------------------------------------------------------------------------------------------------------
if($choice=="transcend")
{
  include "checker.php";
  $quantity=$_POST['quantity'];
  $q='INSERT INTO cart(cust_id,item_name,item_price,item_quantity) VALUES ("'.$_SESSION['id'].'","TRANSCEND 32GB FLASH DRIVE","15","'.$quantity.'")';
  $fetch=mysqli_query($dbc,$q) OR DIE("ERROR:QUERY NOT RETRIEVED.".mysqli_error($dbc));
  header('Location: transcend.php?message=added'); 
}

//---------------------------------------------------------------------------------------------------------------------------------------
if($choice=="samsung")
{
  include "checker.php";
  $quantity=$_POST['quantity'];
  $q='INSERT INTO cart(cust_id,item_name,item_price,item_quantity) VALUES ("'.$_SESSION['id'].'","SAMSUNG GALAXY J5 PRIME","217","'.$quantity.'")';
  $fetch=mysqli_query($dbc,$q) OR DIE("ERROR:QUERY NOT RETRIEVED.".mysqli_error($dbc));
  header('Location: samsung.php?message=added'); 
}

//---------------------------------------------------------------------------------------------------------------------------------------
if($choice=="wd")
{
  include "checker.php";
  $quantity=$_POST['quantity'];
  $q='INSERT INTO cart(cust_id,item_name,item_price,item_quantity) VALUES ("'.$_SESSION['id'].'","WESTERN DIGITAL 1TB HDD","57","'.$quantity.'")';
  $fetch=mysqli_query($dbc,$q) OR DIE("ERROR:QUERY NOT RETRIEVED.".mysqli_error($dbc));
  header('Location: wd.php?message=added'); 
}

//---------------------------------------------------------------------------------------------------------------------------------------































if($itemdelete=="Delete this item")
{
  $query='SELECT * FROM cart';
  $fetch=mysqli_query($dbc,$query) OR DIE ("QUERY ERROR".mysqli_error($dbc));
  $result=mysqli_fetch_array($fetch);

  $id=$result['item_id'];
  
  if ($itemid==$id) 
  {
      $query='DELETE FROM cart where item_id="'.$id.'"';
      $fetch=mysqli_query($dbc,$query) OR DIE ("QUERY ERROR".mysqli_error($dbc));
      $result=mysqli_fetch_array($fetch);
      header("Location:cart.php?message=deleted");
  }

}
?>
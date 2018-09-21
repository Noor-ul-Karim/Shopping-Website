<?php
error_reporting(0);
session_start();


if (isset($_POST['submit'])) 
{
	
	
	$email=$_POST['email'];
    $password=$_POST['password'];
	
    require "connection.php";
	
	$query='SELECT * FROM customer where email="'.$email.'" and cust_pass="'.$password.'"';   
  
	$fetch=mysqli_query($dbc,$query) OR DIE("ERROR:NO USER FOUND".mysqli_error());

	$row=mysqli_num_rows($fetch);
	$result=mysqli_fetch_array($fetch);
	
	if ($row==1) 
	{
		header ("Location:afterlogin.php?message=success");	
		
		$_SESSION['id']=$result['cust_id'];
		$_SESSION['firstname']=$result['first_name'];
		$_SESSION['lastname']=$result['last_name'];
		$_SESSION['password']=$result['cust_pass'];
		$_SESSION['email']=$result['email'];
		$_SESSION['sessionid']=session_id();
		$_SESSION['last_time']=time();
	}
	else
	{	
		header ("Location:login.php?message=fail");
	}
}
else if (!(isset($_SESSION['email']) && $_SESSION['password'])) 
{ 
    header ("Location:login.php?message=empty");
    exit(); 

}

if (isset($_SESSION['email'])) 
{
	if ((time()-$_SESSION['last_time'])>1000) 
	{
		header("Location:logoff.php?message=timeout");

		unset($_SESSION['id']);
	    unset($_SESSION['firstname']);
	    unset($_SESSION['lastname']);
	    unset($_SESSION['password']);
	    unset($_SESSION['email']);
	    unset($_SESSION['sessionid']);
	    unset($_SESSION['last_time']);
	    session_unset();
		session_destroy();

	}
	else
	{
		$_SESSION['last_time']=time();
	}

}



?>
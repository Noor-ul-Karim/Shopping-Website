<?php
session_start();

if (!isset($_SESSION['email']) || $_SESSION['cust_pass'] != 1337) 

{ //not logged in

    //redirect to homepage
    header("Location: index.php");
    exit(); // NOT DIE :P

}


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
	$message="";
	if(!empty($_POST["login"])) 
	{
		include "connection.php";

	$email=(isset($_POST['email']) ? $_POST['email']:null);
	$password=(isset($_POST['password']) ?$_POST['password']:null);

	$q='SELECT * FROM customer WHERE email="'.$email.'" AND cust_pass="'.$password.'"';

	$fetch=mysqli_query($dbc,$q) OR DIE("ERROR:NO USER FOUND".mysqli_error());
	$result=mysqli_fetch_array($fetch);
	
	if(is_array($result)) 
	{
		$_SESSION["email"] = $row['email'];
		$_SESSION["password"] = $row['cust_pass'];
	} 
	else 
	{
		$message = "Invalid Email or Password!";
	}
}


}








?>
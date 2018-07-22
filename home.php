<?php
session_start();
if(isset($_SESSION['user_login']))
{

	include "header.php";
	if(isset($_COOKIE['message']))
	{
		echo $_COOKIE['message'];
	}
	include "footer.php";
}
else
{	
	echo $_COOKIE['message'];
	setcookie("message","<p class='alert alert-danger'>Login</p>",time()+2);
	header("location:login.php");
}

?>
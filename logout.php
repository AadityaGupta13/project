<?php 
session_start();
if(isset($_SESSION['user_login']))
{
	session_destroy();
	setcookie("message","<p class='alert alert-info text-center'>Logged out successfully</p>",time()+3);
	header("location:login.php");
}
else
{
	setcookie("message","<p class='alert alert-danger text-center'>Login First</p>",time()+3);
	header("location:login.php");
}
?>
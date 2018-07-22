<?php 
session_start();
if(isset($_SESSION['user_login']))
{
	session_destroy();
	setcookie("message","<p class='alert alert-info'>Logged out successfully</p>",time()+2);
	header("location:index.php");
}
else
{
	setcookie("message","<p class='alert alert-danger'>Login First</p>",time()+2);
	header("location:index.php");
}
?>
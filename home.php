<?php
session_start();
if(isset($_SESSION['user_login']))
{
	include "header.php";
	$email=$_SESSION['email'];
?>
<div class="container" style="margin-top:2rem;">
	<?php include "sidemenu.php"; ?>
	<div class="col-lg-9 col-md-8 col-sm-6">
		<div class="container-fluid">
			<div class="row">
				<ol class="breadcrumb">
				  <li class="breadcrumb-item active"><a href="">Home</a></li>
				</ol>
			</div>
			<div class="container">	
				<table >
					<?php 
						$result = mysqli_query($con,"SELECT * FROM user_tb WHERE email='$email'");
						$user = mysqli_fetch_assoc($result);
					?>
					<tr>
						<td>Name: </td>
						<td><?php echo $user['name']; ?> </td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><?php echo $user['email']; ?> </td>
					</tr>
					<tr>
						<td>Phone: </td>
						<td><?php echo $user['mobile']; ?> </td>
					</tr>
					<tr>
						<td>Date Of Birth: </td>
						<td><?php echo $user['dob']; ?> </td>
					</tr>
					<tr>
						<td>Gender: </td>
						<td><?php echo $user['gender']; ?> </td>
					</tr>
					<tr>
						<td>City: </td>
						<td><?php echo $user['city']; ?> </td>
					</tr>
					<tr>
						<td>State: </td>
						<td><?php echo $user['state']; ?> </td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<?php
	if(isset($_COOKIE['message']))
	{
		echo $_COOKIE['message'];
	}
}
else
{	
	echo $_COOKIE['message'];
	setcookie("message","<p class='alert alert-danger'>Login</p>",time()+2);
	header("location:login.php");
}

?>
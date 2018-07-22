<?php
session_start();
if(isset($_SESSION['user_login']))
{
	include "header.php";
	$email = $_SESSION['email'];
?>
<div class="container" style="margin-top:2rem;">
	<?php include "sidemenu.php"; ?>
	<div class="col-lg-9 col-md-8 col-sm-6">
		<div class="container-fluid">
			<div class="row">
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="home.php">Home</a></li>
				  <li class="breadcrumb-item active">Edit Profile Data</li>
				</ol>
			</div>
			<div class="row">
				<?php
					if(isset($_COOKIE['message']))
					{
						echo $_COOKIE['message'];
					}
					$result = mysqli_query($con,"SELECT * FROM user_tb WHERE email='$email'");
					$user = mysqli_fetch_assoc($result);
					if(isset($_POST['update']))
					{
						$id = $_SESSION['id'];
						extract($_POST);
						mysqli_query($con,"UPDATE user_tb SET name='$name',email='$email',mobile=$mobile,city='$city',state='$state' WHERE id=$id");
						if(mysqli_affected_rows($con)==1)
						{
							$_SESSION['username'] = $name;
							echo "<p class='alert alert-success text-center'>Details updated successfully</p>";
						}
						else
						{
							echo "<p class='alert alert-danger text-center'>Details could not be updated.</p>";
							mysqli_error($con);
						}
					}
				?>
			</div>
			<div class="container-fluid">
				<form class="form" method="POST" action="">
					<div class="form-group">
						<label>Name: </label>
						<input class="form-control" type="text" name="name" value="<?php echo $user['name'];?>">
					</div>
					<div class="form-group">
						<label>Phone: </label>
						<input class="form-control" type="number" name="mobile" value="<?php echo $user['mobile'];?>">
					</div>
					<div class="form-group">
						<label>Email: </label>
						<input class="form-control" type="text" name="email" value="<?php echo $user['email'];?>">
					</div>
					<div class="form-group">
						<label>City: </label>
						<input class="form-control" type="text" name="city" value="<?php echo $user['city'];?>">
					</div>
					<div class="form-group">
						<label>State: </label>
						<input class="form-control" type="text" name="state" value="<?php echo $user['state'];?>">
					</div>
					<div class="form-group">
						<input type="submit" name="update" value="update" class="btn btn-info">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
}
else
{	
	echo $_COOKIE['message'];
	setcookie("message","<p class='alert alert-danger'>Login</p>",time()+2);
	header("location:login.php");
}

?>
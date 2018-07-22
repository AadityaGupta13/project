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
				  <li class="breadcrumb-item active">Change Profile Picture</li>
				</ol>
			</div>
			<div class="row">
				<?php 
					if (isset($_POST['update'])) 
					{
						$ufile = $_FILES['upimage']['name'];
						$usize =  $_FILES['upimage']['size'];
						$utype = $_FILES['upimage']['type'];
						$upath = $_FILES['upimage']['tmp_name'];
						$valid_type = array("image/jpeg","image/jpg","image/png","image/gif");						

						if(in_array($utype,$valid_type))
						{
							if(move_uploaded_file($upath, "avatars/$ufile"))
							{
								mysqli_query($con,"UPDATE user_tb SET avatar='$ufile' where email='$email'");
								if(mysqli_affected_rows($con)==1)
								{
									echo '<p class="alert alert-success">The image is uploaded successfully!!</p>';
									$_SESSION['avatar']=$ufile;
								}
							}
							else{
								echo '<p class="alert alert-danger">The image could not be uploaded.
								Please try again.</p>';
							}
						}
						else{
							echo '<p class="alert alert-danger">The selected file is not a valid image file. Please try again.</p>';
						}
					}
				?>
			</div>
			<div class="container-fluid">
				<img src="avatars/<?php echo $_SESSION['avatar']; ?>" width="100px" height="100px" align="center">
				<form class="form" method="POST" action="" enctype="multipart/form-data">
					<div class="form-group">
						<input multiple type="file" name="upimage" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="update" value="Upload" class="btn btn-info">
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
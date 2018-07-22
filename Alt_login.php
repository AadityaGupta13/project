<?php 
session_start();
require_once "header.php";
require_once "assets.php";
?>

<div class="container" style="width:40%; margin-top:2rem;">

<?php 
if(isset($_COOKIE['message']))
{
	echo $_COOKIE['message'];
}
if(isset($_POST['login']))
{
	
	$name = $_POST['uname'];
	$pass = md5($_POST['pass']);

	$result = mysqli_query($con,"SELECT * FROM user_tb WHERE name='$name'");
	if(mysqli_num_rows($result)==1)
	{
		
		$user = mysqli_fetch_assoc($result);
		if($pass==$user['password'])
		{
			if($user['status']=='Active')
			{
				$_SESSION['user_login'] = "1";
				$_SESSION['id'] = $user['id'];
				$_SESSION['username'] = $user['name'];
				$_SESSION['email'] = $user['email'];
					
				#redirect to home after verifying user
				setcookie("message","<p class='alert alert-info'>Logged In</p>",time()+2);
				header("location:home.php");
			}	
			else
			{
				?>
				<div class="alert alert-warning">Account is not active.Please Activate Account to access</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="alert alert-danger">Incorrect password</div>
			<?php

		}
	}
	else
	{
		?>
		<div class="alert alert-danger">Username and Password combination is incorrect!</div>
		<?php
	}
}
?>	
	<div class="well my-2">
		<form id="loginForm" action="" method="POST">	
			<div class="col-md-12">
				<div class="form-group">
				    <label for="uname">Username or Email</label>
				    <input id="uname" name="uname" type="text" class="form-control"  required="" placeholder="Username or Email">
				</div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				    <label for="pass">Password</label>
				    <input id="pass" name="pass" type="password" class="form-control" required="" placeholder="Password">
			    </div>
			</div>
			<div class="text-center">	
				<input type="submit" class="btn btn-primary mx-auto" value="Login" name="login">	
			</div>
			<div class="row text-center my-2">
				<p><a href="">forgot email or password</a></p>
				<p><a href="">Do not have a account.Sign up</a></p>
			</div>
		</form>
	</div>
</div>
<?php require_once "footer.php"; ?>
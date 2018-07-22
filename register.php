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
if(isset($_POST['signup']))
{
	$uname = $_POST['name'];
	$email = $_POST['email'];
	$mob = $_POST['phone'];
	$pass = md5($_POST['password']);
	$dob = date("Y-m-d",strtotime($_POST['dob']));
	$gender = (isset($_POST['gender'])) ? $_POST['gender'] : "";
	$city = $_POST['city'];
	$state = $_POST['state'];
	$terms = (isset($_POST['terms'])) ? $_POST['terms'] : "";
	$ip = $_SERVER['REMOTE_ADDR'];


	mysqli_query($con,"INSERT INTO user_tb(	name,email,password,mobile,gender,dob,city,state,terms,ip) VALUES('$uname','$email','$pass',$mob,'$gender','$dob','$city','$state','$terms','$ip')");

	if(mysqli_affected_rows($con)==1){
		setcookie("message","<p class='alert alert-success text-center'>User Registered Successfully!!</p>",time()+3);
		echo $_COOKIE['message'];
		echo "success";

		$to = $email;
		$subject="Dev Vagon - Activation Link";
		$message=?>
		Hello ,<?php echo $uname ?><br><br>
		Thank you for creating an account with us. <br>
		Click here to activate your account- <br>
		<?php
	}
	else{
		setcookie("message","<p class='alert alert-warning text-center'>Sorry User could not be Registered.</p>",time()+3);
		echo $_COOKIE['message'];
	}

}
?>
	<div class="well my-2">
		<div class="text-center">
			<h3>Register Here</h2>
		</div>
		<form id="signUpForm" action="" method="POST">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					    <label for="name">Name</label>
					    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="Name">
					</div>
				</div>
				<div class="col-md-6">
				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input id="email" name="email" type="email" class="form-control" required="" placeholder="Email">
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input id="password" name="password" type="text" class="form-control" placeholder="Create a password">
				  </div>
				</div>
				<div class="col-md-6">
				  <div class="form-group">
				    <label for="cpassword">Confirm Password</label>
				    <input id="cpassword" name="cpassword" type="text" class="form-control" placeholder="Confirm Password">
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
				  <div class="form-group">
				    <label for="phone">Phone</label>
				    <input id="phone" name="phone" type="number" class="form-control" placeholder="Phone">
				  </div>
				</div>
				<div class="col-md-6">
				  <div class="form-group">
				    <label for="dob">Date of Birth</label>
				    <input id="dob" name="dob" type="date" class="form-control" required="" placeholder="Subject">
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="gender">Gender </label>
				    <select id="gender" name="gender" class="form-control" required="">
						<option value="M">Male</option>
						<option value="F">Female</option>
						<option value="O">Other</option>
				    </select>
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="city">City </label>
				    <select id="city" name="city" class="form-control" required="">
						<option value="DEL">Delhi</option>
						<option value="MUM">Mumbai</option>
						<option value="CHE">Chennai</option>
						<option value="KOL">Kolkata</option>
				    </select>
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="state">State </label>
				    <select id="state" name="state" class="form-control" required="">
						<option value="MP">Madhya Pradesh</option>
						<option value="DL">Delhi</option>
						<option value="TL">Telangana</option>
				    </select>
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="sm-4 text-center">
						<input type="checkbox" name="terms" id="terms" class="" required="">
						<label for="terms"><p>I have read and agree to the Terms</p></label>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<button type="submit" class="btn" name="signup">Sign Up</button>
				<button type="cancel" class="btn btn-danger">Cancel</button>
			</div>
		</form>
	</div>
</div>
<?php require_once "footer.php"; ?>
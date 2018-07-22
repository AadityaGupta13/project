<div class="col-lg-3 col-md-4 col-sm-6 well">
	<div class="sidebar-wrapper">
		<aside class="widget">
			<div class="row text-center">
				<img class="widget-title img-circle" src="avatars/<?php echo $_SESSION['avatar'];?>" height="80px" width="80px" style="border: 2px solid darkcyan; padding:2px;"></img>
				<h2 class="widget-title"> Hello <?php echo $_SESSION['username']; ?> </h2>
				<ul>
					<li><a href="edit.php">Edit Profile</a></li>
					<li><a href="blog.php">View Posts</a></li>
					<li><a href="change_pwd.php">Change Password</a></li>
					<li><a href="upload_pic.php">Change Picture</a></li>
					<li><a href="logout.php">Logout</a></li>
	            </ul>
			</div>
		</aside>
	</div>
</div>
<?php 
	//Includes the function.php page, this page executed before the code within this page executes.
	include('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user_profile.png"  >

			<div>
				<!-- Chacks that the session created is for the user -->
				<?php  if (isset($_SESSION['user'])) : ?>
					<!-- Displays the username and the user type of user -->
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<!-- Displays the username and the user type of user -->
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<!-- Redirects to the index.php file when logout is pressed -->
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>
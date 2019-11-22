<?php 
//Includes the function.php page that is located within the multi_login folder, this page executed before the code within this page executes.
	include('../functions.php');

	//Checks if the admin isnt logged in
	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		//Prevents the page from being loaded and redirects to the login.php page located within the multi_login folder
		header('location: ../login.php');
	}

	//Checks if logout has been pressed
	if (isset($_GET['logout'])) {
		//Destroys the current session that is open
		session_destroy();
		unset($_SESSION['user']);
		//Redirects to the login.php page that is located within the multi_login folder
		header("location: ../login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>

<body>
	<div class="header">
		<h2>Admin - Home Page</h2>
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
			<img src="../images/user_profile.png"  >

			<div>
				<!-- Chacks that the session created is for the user -->
				<?php  if (isset($_SESSION['user'])) : ?>
				<!-- Displays the username and the user type of admin -->
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<!-- Displays the username and the user type of admin -->
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<!-- Redirects to the index.php file when logout is pressed -->
						<a href="home.php?logout='1'" style="color: red;">logout</a>
						<!-- Redirects to the create_user.php page when add user is pressed -->
                       &nbsp; <a href="create_user.php"> + add user</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>
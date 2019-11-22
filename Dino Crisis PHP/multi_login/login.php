<?php
	//Includes the function.php page, this page executed before the code within this page executes.
	include('functions.php') 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<!--Display Error-->
		<?php 
			echo display_error(); 
		?>

		<!-- Creates the input for the username -->
		<div class="input-group">
			<label>Username</label>
			<!-- Creates the text box for the user to enter the username -->
			<input type="text" name="username" >
		</div>

		<!-- Creates the input for the password -->
		<div class="input-group">
			<label>Password</label>
			<!-- Creates the text box for the user to enter the password -->
			<input type="password" name="password">
		</div>

		<!-- Creates the login button -->
		<div class="input-group">
		<!-- Creates the button that will login the user or the admin -->
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>

		<!-- Provides a link to the login page if the user isn't already registered -->
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>
<?php 
	//Includes the function.php page located within the multi_login folder, this page executed before the code within this page executes.
	include('../functions.php') 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
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
		<h2>Admin - create user</h2>
	</div>
	
	<form method="post" action="create_user.php">
		<!--Display Error-->
		<?php 
			echo display_error(); 
		?>

		<!-- Creates the input for the username -->
		<div class="input-group">
			<label>Username</label>
			<!-- Creates the text box for the user to enter the username -->
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>

		<!-- Creates the input for the email -->
		<div class="input-group">
			<label>Email</label>
			<!-- Creates the text box for the user to enter the email -->
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>

		<!-- Creates the drop down user type select -->
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>

		<!-- Creates the input for the password -->
		<div class="input-group">
			<label>Password</label>
			<!-- Creates the text box for the user to enter the password -->
			<input type="password" name="password_1">
		</div>

		<!-- Creates the input for the password confirmation -->
		<div class="input-group">
			<label>Confirm password</label>
			<!-- Creates the text box for the user to enter the password confirmation -->
			<input type="password" name="password_2">
		</div>
		
		<!-- Creates the register button -->
		<div class="input-group">
			<!-- Creates the button that will register the user -->
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
		</div>

		<!-- Redirects to the login.php page located within the multi_login folder, when logout is pressed -->
        <a href="../login.php?logout='1'" style="color: red;">logout</a>
	</form>
</body>
</html>

<?php
//Includes the function.php page, this page executed before the code within this page executes.
    include('functions.php')
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>

    <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form method="post" action="register.php">
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

        <!-- Creates the input for the password -->
        <div class="input-group">
            <label>Password</label>
            <!-- Creates the text box for the user to enter the password -->
            <input type="password" name="password_1" value="">
        </div>

        <!-- Creates the input for the password confirmation -->
        <div class="input-group">
            <label>Confirm Password</label>
            <!-- Creates the text box for the user to enter the password confirmation -->
            <input type="password" name="password_2" value="">
        </div> 

        <!-- Creates the register button -->
        <div class="input-group">
            <!-- Creates the button that will register the user -->
            <button type="submit" class="btn" name="register_btn">Register</button>
        </div>

        <!-- Provides a link to the login page if the user is already registered -->
        <p> Already a member? <a href="login.php">Sign In</a></p>
    </form>
</body>
</html>  
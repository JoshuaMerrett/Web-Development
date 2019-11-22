<!-- PHP connection -->
<?php
//Includes the function.php page that is stored in the multi_login folder, page executed before the code within this page executes.
include('multi_login/functions.php');
//Checks if the the users isnt logged in
if (!isLoggedIn()) {
    //Displays the message
    $_SESSION['msg'] = "You must log in first";
    //The login.php page that is stored in the multi_login folder is loaded and displayed first
	header('location: multi_login/login.php');
}
?>

<!-- HTML Section -->
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="assets/script.js"></script>
</head>
<body style="background: url('images/dc3_not_exist.jpg') no-repeat 0px -250px; background-size: cover;">

    <!-- Navigaation Bar -->
    <nav>

        <div class="topnav" id="myTopnav">

            <!-- Name displayed in the navigation bar -->
            <div class="name">Dino Crisis</div>

            <!-- Links within the navigation bar -->
            <ul>
                <li><a href="index.php">Dino Crisis</a></li>
                <li><a href="dino_crisis_2.php">Dino Crisis 2</a></li>
                <li><a class="active" href="dino_crisis_3.php">Dino Crisis 3</a></li>
                <li><a href="multi_login/index.php">Logout</a></li>
                <li><a href="upload/upload.php">Upload an images</a></li>

                <!-- Displays the current date and time -->
                <div id="date">

                    <p class="date"></p>

                </div>

                <div id="time">

                    <p class="time"></p>

                </div>

            </ul>
        </div>
    </nav>

    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Main Contents of the webpage -->
    <div class="container">
        <h1>Dino Crisis 3</h1>

        <p>Error: This game does not exist in the eyes of the original Dino Crisis fans</p>
    </div>

</body>
</html>
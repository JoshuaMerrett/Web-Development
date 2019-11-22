<?php 

//Creates the session
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'multi_login');

// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Error Logged: Username is required"); 
		//Creates the error message to be stored in the database
		userError($db, "Attempted to complete registraion without entering a username");
	}
	if (empty($email)) { 
		array_push($errors, "Error Logged: Email is required"); 
		//Creates the error message to be stored in the database
		userError($db, "Attempted to complete registraion without entering an email");
	}
	if (empty($password_1)) { 
		array_push($errors, "Error Logged: Password is required"); 
		//Creates the error message to be stored in the database
		userError($db, "Attempted to complete registraion without entering a password");
	}
	if ($password_1 != $password_2) {
		array_push($errors, "Error Logged: The two passwords do not match");
		//Creates the error message to be stored in the database
		userError($db, "Attempted to complete registraion without entering a matching password");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (username, email, user_type, password) 
					  VALUES('$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			//Displays the home.php file
			header('location: home.php');
		}else{
			$query = "INSERT INTO users (username, email, user_type, password) 
					  VALUES('$username', '$email', 'user', '$password')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			//Displays the index.php page that is located within the assignment folder
			header('location: ../index.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

//Creates the function display_error()
function display_error() {
	//Sets the variable $errors to global
	global $errors;

	//Statement that checks if there has been any errors encounterd
	if (count($errors) > 0){
		echo '<div class="error">';
			//Loop that displays each error that has occured within the page
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	

//user login
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Error Logged: Username is required");
		//Creates the error message to be stored in the database
		userError($db, "Attempted to complete login without entering a username");
	}
	if (empty($password)) {
		array_push($errors, "Error Logged: Password is required");
		//Creates the error message to be stored in the database
		userError($db, "Attempted to complete login without entering a password");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {
				//If the user type is admin then this statement will execute
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				//Stores the data in the login_log table within the database
				login_log($db, $username, "admin", getIP(), returnBrowser(), getOS());
				//Display the home.php page located within the admin folder
				header('location: admin/home.php');		  
			}else{
				//If the user type is user then this statement will execute
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				//Stores the data in the login_log table within the database
				login_log($db, $username, "user", getIP(), returnBrowser(), getOS());	
				//Displays the index.php page located within the assignment folder				
				header('location: ../index.php');
			}
		}else {
			array_push($errors, "Error Logged: Wrong username/password combination");
			//Creates the error message to be stored in the database
			userError($db, "Attempted to complete login without entering the correct username and password");
		}
	}
}

//Admin function
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

//Error function
function userError($db, $error)
{
	$sql = "INSERT INTO `error_log` VALUES(NULL, NOW(), NOW(), '$error')";
	mysqli_query($db, $sql);
}

//Login log function
function login_log($db, $username, $user_type, $ip, $browser, $os)
{
	$sql = "INSERT INTO `login_log` VALUES(NULL, '$username', '$user_type', NOW(), NOW(), '$ip', '$browser', '$os')";
	mysqli_query($db, $sql); 
}

//Get the clients IP address function
function getIP()
{
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

//Get the clients browser function
function returnBrowser()
{
	//Gets the name of the web browser the user is using from the web server
	$u_agent = $_SERVER['HTTP_USER_AGENT'];
	//Declares variable
	$ub = "";

	//Checks if the web browser name matches the name '/MSIE/i'
	if (preg_match('/MSIE/i',$u_agent))
	{
		//Stores the browser name
		$ub = "Internet Explorer";
	}

	//Checks if the web browser name matches the name '/Edge/i'
	elseif (preg_match('/Edge/i',$u_agent))
	{
		//Stores the browser name
		$ub = "Microsoft Edge";
	}

	//Checks if the web browser name matches the name '/WOW64/i'
	elseif (preg_match('/WOW64/i',$u_agent))
	{
		//Stores the browser name
		$ub = "Internet Eplorer 11+";
	}

	//Checks if the web browser name matches the name '/Firefox/i'
	elseif (preg_match('/Firefox/i',$u_agent))
	{
		//Stores the browser name
		$ub = "Mozilla Firefox";
	}

	//Checks if the web browser name matches the name '/Chrome/i'
	elseif (preg_match('/Chrome/i',$u_agent))
	{
		//Stores the browser name
		$ub = "Google Chrome";
	}

	//Checks if the web browser name matches the name '/Safari/i'
	elseif (preg_match('/Safari/i',$u_agent))
	{
		//Stores the browser name
		$ub = "Safari";
	}

	//Returns and displays the name of the browser stored in the variable $ub
	return $ub;
}

//Get the clients operating system function
function getOS()
{
	//Gets the name of the web browser the user is using from the web server
	$user_agent = $_SERVER['HTTP_USER_AGENT'];

	//Declares variable
	$os = "";
	
	//Array of the Operating systems that the user could be using
	$os_array = array(
		'/windows nt 10/i'      =>  'Windows 10',
		'/windows nt 6.3/i'     =>  'Windows 8.1',
		'/windows nt 6.2/i'     =>  'Windows 8',
		'/windows nt 6.1/i'     =>  'Windows 7',
		'/windows nt 6.0/i'     =>  'Windows Vista',
		'/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
		'/windows nt 5.1/i'     =>  'Windows XP',
		'/windows xp/i'         =>  'Windows XP',
		'/windows nt 5.0/i'     =>  'Windows 2000',
		'/windows me/i'         =>  'Windows ME',
		'/win98/i'              =>  'Windows 98',
		'/win95/i'              =>  'Windows 95',
		'/win16/i'              =>  'Windows 3.11',
		'/macintosh|mac os x/i' =>  'Mac OS X',
		'/mac_powerpc/i'        =>  'Mac OS 9',
		'/linux/i'              =>  'Linux',
		'/ubuntu/i'             =>  'Ubuntu',
		'/iphone/i'             =>  'iPhone',
		'/ipod/i'               =>  'iPod',
		'/ipad/i'               =>  'iPad',
		'/android/i'            =>  'Android',
		'/blackberry/i'         =>  'BlackBerry',
		'/webos/i'              =>  'Mobile'
	);

	//Searches for the operating system in the array above
	foreach ($os_array as $regex => $value) {
		//Checks if the operating system matches the clients operating system
		if (preg_match($regex, $user_agent)) {

			//Stores the operating system in the variable 
			$os = $value;
		}
	}

	//Returns that value stored in the $os variable
	return $os;
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['admin']);
	header("location: login.php");
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}
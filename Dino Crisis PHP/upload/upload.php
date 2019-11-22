<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Learn PHP</title>
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/script.js"></script>
    <style type="text/css">
        td {
        padding: 0 0 50px;
        text-align: center;
        font: 10px sans-serif;
        }

        table {
        width: 100%;
        }

        img {
        display: block;
        margin: 20px auto 10px;
        max-width: 900px;
        outline: none;
        }

        img:active {
        max-width: 100%;
        }

        a:focus {
        outline: none;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav>

        <div class="topnav" id="myTopnav">

            <!-- Name displayed in the navigation bar -->
            <div class="name">Dino Crisis</div>

            <!-- Links within the navigation bar -->
            <ul>
                <li><a href="../index.php">Dino Crisis</a></li>
                <li><a href="../dino_crisis_2.php">Dino Crisis 2</a></li>
                <li><a href="../dino_crisis_3.php">Dino Crisis 3</a></li>
                <li><a href="../multi_login/index.php">Logout</a></li>
                <li><a class="active" href="upload.php">Upload an images</a></li>

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

    <h1>PHP File Upload</h1>

        <div class="white">

        <?php

        //Includes the file form.php which exectues before the code within this file
        include ('form.php');

        /* When the file was uploaded, PHP created a temporary copy of the file, and built the superglobal $_FILES array containing information about the file. For each file, there are five pieces of data:
        $_FILES["uploaded_file"]["name"] the original name of the file uploaded from the user's machine
        $_FILES["uploaded_file"]["type"] the MIME type of the uploaded file (if the browser provided the type)
        $_FILES["uploaded_file"]["size"] the size of the uploaded file in bytes
        $_FILES["uploaded_file"]["tmp_name"] the location in which the file is temporarily stored on the server
        $_FILES["uploaded_file"]["error"] an error code resulting from the file upload
        */
        //check that we have a file...
        if((!empty($_FILES['uploaded_file'])) && ($_FILES['uploaded_file']['error'] == 0)) {
            //Check if the file is JPEG or PNG image and it's size is less than 35Mb...
            $filename = basename($_FILES['uploaded_file']['name']);
            $ext = substr($filename, strrpos($filename, '.') + 1);
            if (($ext == "jpg" || $ext == "png") && ($_FILES["uploaded_file"]["type"] == "image/jpeg" || $_FILES["uploaded_file"]["type"] == "image/png") &&
            ($_FILES["uploaded_file"]["size"] < 3500000)) {
                //Determine the path where the image file will be stored.
                $newname = dirname(__FILE__).'/images/'.$filename;
                //Check if the file with the same name already exists on the server.
            if (!file_exists($newname)) {
                //Attempt to move the uploaded file to the path that has been previously determined.
                if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
                    //Displays tis message if the file has been successfully uploaded.
                    echo "Upload Complete! The file has been saved as: ".$newname;
                } else {
                    //Displays the error message if there was an error encountered
                    echo "Error: A problem occurred during file upload!";
                }
            } else {
                //Displays this error message if the file being uploaded already exists in the location
                echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
                }
            } else {
                //Displays this error message if the file being uploaded is a .jpg or a .png image and the file size is below 35Mb
                echo "Error: Only .jpg and .png images under 35Mb can be upload!";
                }
            } else {
                //Displays this error message if there hasnt been a file selected for upload.
                echo "Error: No file uploaded";
            }

            //this will read the contents of the upload folder...
            //glob() returns an array containing files/folder names or an empty
            //array if no file found..
            $folder = "images/";
            $filetype = "*.*";
            $files = glob($folder.$filetype);
            echo "<table>";
            //loop through the array and display the contents for each image
            for ($i=0; $i<count($files); $i++) {
                echo "<tr><td>";
                echo '<a name="'.$i.'" href="#'.$i.'"><img src="'.$files[$i].'" /></a>';
                echo substr($files[$i],strlen($folder),strpos($files[$i],'.')-strlen($folder));
                echo "</tr></td>";
            }
            echo "</table>";
        ?>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
    
        <!-- PHP Section -->
        <?php

            //Gets the name of the web browser the user is using from the web server
            $u_agent = $_SERVER['HTTP_USER_AGENT'];
            //Displays the web browser the user is currently using
            echo "<style='color: #fff'> </style><b>Browser Information:</b> " . getBrowser() . " <br />";

            //Starts the function getBrowser() 
            function getBrowser()
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

        ?>

        <!-- JavaScript Section -->
        <script language="javascript">
            //Statement that checks the screen resolution of the users device
            if (window.location.search == "") {
                window.location.href = window.location + "?width=" + screen.width + "&height=" + screen.height;
                
            }
        </script>

        <!-- PHP Section -->
        <?php
            //Gets the screen width from the JavaScript function
            $width = $_GET['width'];
            //Gets the screen height from the JavaScript function
            $height = $_GET['height'];
            //Displays the screen resolution of the users device
            echo "<b>Screen Resolution:</b> " . $width . " x " . $height . ".";
        ?>
        
        <p>&copy; Joshua Merrett</p>
        
    </footer>

</body>
</html>
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
<body>

    <!-- Navigaation Bar -->
    <nav>

        <div class="topnav" id="myTopnav">
        
            <!-- Name displayed in the navigation bar -->
            <div class="name">Dino Crisis</div>

            <!-- Links within the navigation bar -->
            <ul>
                <li><a class="active" href="index.php">Dino Crisis</a></li>
                <li><a href="dino_crisis_2.php">Dino Crisis 2</a></li>
                <li><a href="dino_crisis_3.php">Dino Crisis 3</a></li>
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
        <h1>Dino Crisis</h1>

        <p>Dino Crisis is a 1999 video game developed by Capcom Production Studio 4 and released in 1999. Produced by Shinji Mikami, the game took inspirations from Resident Evil's RPG features such as item management and exploration. However, unlike other so-called "Resident Evil clones" that had been released since 1997, Dino Crisis instead relied on 3D environments as opposed to pre-rendered backgrounds, and a greater focus on physical puzzles to advance in the game. As horror-themed action-adventure gaming was still in its infancy, Dino Crisis rejected the label of "Survival Horror" in Japan, which was seen as merely a tagline for Resident Evil. Instead it was marketed as "Panic Horror" to demonstrate its uniqueness. However, due to the dominance of Resident Evil over similarly-styled horror games oversees, "Survival Horror" became accepted as the general name for the genre.</p>

        <h2>Plot</h2>

        <p></br>The game centres around a special forces team who must find a way to survive in a secret government facility that is being infested by time-displaced dinosaurs. While Dino Crisis did not achieve the same level of success Resident Evil did, it was popular enough to gain two sequels: (Dino Crisis 2 and Dino Crisis 3) and a light gun-based spin-off in Capcom's Gun Survivor series, known as Dino Stalker in America and Gun Survivor 3 : Dino Crisis in Japan.</p>

        <h2>Characters</h2>

        <ul>
            <li>Regina (Stephanie Morgenstern) - The protagonist and the sole female member of the team. She is an intelligence agent and weapons expert, specializing in weapons maintenance.</li>
            <li>Rick (Richard Yearwood) - The African-American second member of the team and an expert computer hacker. He carries an FN FAL in the North American version of the game and a scoped G3 in the PAL version. He seems to be much more easy-going than Gail, providing most of the comic relief. </li>
            <li>Gail (Adrian Truss) - A veteran spy, and the leader of the team. He is well known for his cold demeanour and seems to have a heart of stone. He carries an M4A1 carbine with a red dot sight, the butt stock removed, and the front sight removed, and his field of expertise seems to be combat. He cares a lot about his mission.</li>
            <li>Edward Kirk (Alex Karzis) - The genius behind the Third Energy Theory. He was approached by the Borginian Republic who were interested in the properties of Third Energy as a weapon, and promised him all the funding, facilities, researchers and equipment he needed. To that end, he staged his death and moved to Ibis Island, to where a Third Energy research facility had been set up for him and killed most of his workers with the help of the dinosaurs.</li>
            <li>Tom (Robert Tinkler & Bino Tautorrez) - An agent of S.O.R.T., who has infiltrated the Ibis Island facility to investigate the reports of new-type weapons being researched. He is wounded by a dinosaur, and later dies.</li>
            <li>Cooper (Robert Tinkler) - The fourth member of the extraction team. He's blown off course at the start of the mission and ends up being eaten by a T. Rex. The rest of the team never learns this, and he is declared M.I.A. He carried the only outsourcing radio on the team, and his death puts the rest of the members in a bind.</li>
        </ul>

        <h2>Dinosaurs</h2>

        <p>There are only a small number of dinosaurs featured in the game, however some species have different forms that provide different levels of resistance to being killed, and do varying levels of damage.</p>

        <ul>
            <li>Velociraptor: The first species encountered in the game, and the most common throughout. Velociraptors lurk in the corridors and rooms of the facilities and can ambush the player on occasion, helping to give the game a suspenseful atmosphere.</li>
            <li>Compsognathus: A small, bird sized dinosaur found in the corridors of the facility, around decomposing bodies. There can be a number of them in a group, and can damage the player in the game.</li>
            <li>Pteranodon: A large pterosaur that frequently attacks in open, outdoor areas. Due to their ability to fly, they can pose a problem to kill, and cause serious damage when they attack, on occasion picking Regina up and dropping her again.</li>
            <li>Therizinosaurus: A large sloth like carnivourous dinosaur with huge claws. These are found in the latter part of the game, and are quite hard to kill, especially when there are more than one of them. They are found in more open areas generally.</li>
            <li>Blue Raptor: There is more than one color model for the raptors, with animals encountered later in the game harder to kill.</li>
            <li>Tyrannosaurus: The single, large tyrannosaur is one of the main aggrivators in the game, taking out a misguided team member in the beginning, and continually harassing Regina throughout the course of the storyline. It should be noted that the Tyrannosaurus can't be killed with any weapon Regina possesses.</li>
        </ul>

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
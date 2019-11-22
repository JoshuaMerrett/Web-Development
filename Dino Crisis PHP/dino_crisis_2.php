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
<body style="background: url('images/background2.gif') no-repeat center fixed; 	background-size: cover;">

    <!-- Navigaation Bar -->
    <nav>

        <div class="topnav" id="myTopnav">
        
            <!-- Name displayed in the navigation bar -->
            <div class="name">Dino Crisis</div>

            <!-- Links within the navigation bar -->
            <ul>
                <li><a href="index.php">Dino Crisis</a></li>
                <li><a class="active" href="dino_crisis_2.php">Dino Crisis 2</a></li>
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
        <h1>Dino Crisis 2</h1>

        <p>Dino Crisis 2 is a third-person action-adventure game and sequel to Dino Crisis. The game was developed and published by Capcom and Virgin Interactive, respectively and was released for the PlayStation on September 30, 2000. The game received mixed to positive reviews and was followed by another sequel, Dino Crisis 3, which was released in 2003 for the Xbox. However, the official story-arc sequel to Dino Crisis 2 is actually Dino Stalker.</p>

        <h2>Plot</h2>

        <p></br>Over the course of a year after the 2009 raid on Ibis Island, Dr. Kirk's Third Energy research has prospered at a government-run research outpost. In March 2010, however, another runaway reaction has occurred, and an area encompassing the laboratory complex; the reactor facility; a military barracks; a missile silo and Edward City - a small town for the lab workers and their families - has been temporally displaced. In its place stands a jungle populated by Cretaceous-era fauna.</p>

        <p></br>On 10 May 2010, the accident is re-created on a smaller scale to send a hovercraft carrying a platoon of the Tactical Reconnoitering and Acquisition Team (TRAT) in a rescue operation, carrying among them SORT agent Regina, owing to her prior experience fighting temporally-displaced dinosaurs on Ibis Island. Shortly after their arrival, the camp is attacked by a pack of Velociraptors, resulting in the deaths of the entire team sans Lt. Dylan Morton, David Falk and Regina. Falk is separated from Morton and Regina, who jump down a cliff to escape a Tyrannosaurus. The two also decide to split up in order to cover more ground.</p>

        <p></br>As the two struggle to stay alive, they encounter leather-clad helmeted inhabitants who are hostile towards them, but their female leader, a girl named Paula is easily captured (saved, really). Though the girl is hostile towards Regina, she acts differently towards Dylan, almost as though she knows something about him. After constantly fleeing from the two heroes, she eventually leads Dylan into a large base complex where she shows him a recording that reveals the truth.</p>

        <p></br>In the future, it is discovered that the 2009 overload in the Borginian Republic had consequently caused time alterations to the Cretaceous Era that would lead to disastrous results. The space-time skew would take its effect on all living organisms and would alter the Earth's history dramatically; preventing the human race from ever existing. To fix this, the international organization WAPP decided to transport all the creatures to a similar environment, 3 million years into the future, where they could thrive. They would then be sent back to their own time (bef.65 million years ago) when the crisis passed. This was called the "Noah's Ark Plan". However, the team suffered another overload when they were about to go back, and their Time Gate was destroyed. Thus, the team was trapped with the dinosaurs. All the survivors were killed, but their children were saved and brought to the safety of the Habitat Support Facility, where they were kept in life support chambers. However, the machines were meant for dinosaurs, and long habitation caused them to lose their ability of speech (although they could regain it) and internalize instinct to protect the dinosaurs. These children are the mysterious helmet-wearing teenagers Regina and Dylan encountered throughout the game. Apparently, one of the members of the team that came to the future was Dylan himself, older. His daughter, Paula, is the blonde haired mystery girl. It appears that in the overloading incident, Edward City itself had been transported to the same future.</p>

        <h2>Gameplay</h2>

        <p>In a change from the survival horror theme of the first game, Dino Crisis 2 is more shoot 'em up oriented. The character always runs, thus removing the need for the run button from the first game, a second gun (machete, stun gun, firewall, chain mine and shock gun) can be carried and more weapons were added to the game (hand gun, shotgun, solid cannon, flame launcher, sub-machine gun, heavy machine gun, anti-tank rifle, missile pod, rocket launcher, needle gun, aqua grenade). Besides changes to the gameplay, the game also introduces new species of dinosaurs and lizards, such as the Triceratops, Giganotosaurus, Allosaurus, Pteranodon, Mosasaurus,Plesiosaurus, Inostrancevia and Oviraptor. The game also adds "extinction points" and "combo points" which help you to buy ammo (which is no longer scarce) and weapons and to unlock hidden features when the game is finished. Some of the features include Extra Crisis mode, which has two minigames: "Dino Colosseum" where the player faces a procession of dinosaurs in turn, (similar to the Survival mode seen in many fighting games) and "Dino Duel", a battle mode where players were able to play as certain dinosaurs, much like the video game Warpath: Jurassic Park.</p>

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
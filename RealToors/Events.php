<?php
//This establishes connection to the database
include 'database.php';
mysql_connect('localhost', 'root', '');
mysql_select_db('realtoors');

//This gives the MySQL command to retrieve all UPCOMING (meaning in the future AND status approved) events 
$events_query = 'SELECT * FROM events WHERE Status = "Approved" AND Date >= CURDATE() ORDER BY id';
$events_display = mysql_query($events_query);
?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Real Toors</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./style.css">
        <link rel="icon" href="pics/RT.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        
        <script src="scripts.js"></script>
        
        <div class="wrapper">
            
            <header class="header"><a href="./Homepage.html"><img src="pics/RealToors.jpg" alt="RealToor"></a>
                <div> 
                    <button id="button" type="button" name="login" value="register" onclick="openNav()">&#9977; Admin Login &#9977;</button>
                    <div id="TheSideBar" class="SideBar">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <form class="" name="login" action="login.php" method="GET">
                        <h1>Login: </h1>
                        User Name: <br><input type="text" name="UN"> <br>
                        Password: <br><input type="password" name="PW"> <br>
                        <button id="login" type="button" name="login" onsubmit="login.php">Login.</button> <br>
                    </div>
                </div>
            </header>
            
            <ul class="navigation"> 
                <li><a href="./AboutUs.html">About Us</a></li>  
                <li><a href="./Events.php"> Events</a></li>  
                <li><a href="./AddEvents.html"> Create an Event</a></li>  
                <li><a href="./ContactUs.html"> Contact Us</a></li>
            </ul>
            
            <article class="main">
                
                <center><u>Upcoming Events</u></center> <br> 
                
                <!--This sets up an unordered list of the items(events) found in the MySQL command-->
                <ul style="list-style-type:none">
                <?php
                //This is a loop that returns all rows of the MySQL command on line 8
                while ($events = mysql_fetch_assoc($events_display)){
                    //Each item (event) in the loop is represented with an image based on their id
                    //Inside each image is a link to a custom generated page with more details of the event
                    echo "<li><a href='EventDetails.php?ID=".$events['ID']."' class='darken'>"
                            . "<img src='pics/".$events['ID'].".jpg' width='480'></>"
                            . "<span=" .$events['Description']. "></span>"
                            . "</a></li><br>";
                }
                ?>
                </ul>
                
            </article> 
            
            <aside class="aside aside-1"></aside>
            <aside class="aside aside-2"></aside>
            
            <footer class="footer">Created By: <br> JEKSAR</footer>        
        
        </div>        
    
    </body>

</html>
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
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="./jquery-3.1.1.min.js"></script>
    </head>
    
    <body>
        
        <script src="scripts.js"></script>
        
        <div class="wrapper">
            
            <header class="header"><a href="./Homepage.html"><img src="pics/RealToors.jpg" alt="RealToor"></a>
            </header>
            
            <ul class="navigation"> 
                <li><a href="./AboutUs.html">About Us</a></li>  
                <li><a href="./Events.php"> Events</a></li>  
                <li><a href="./AddEvents.html"> Create an Event</a></li>  
                <li><a href="./ContactUs.html"> Contact Us</a></li>
            </ul>
            
            <article class="main">
                
                <center><u><h1>Upcoming Events</h1></u></center> 
                
                <!--This sets up an unordered list of the items(events) found in the MySQL command-->
                <ul class="Events" style="list-style: none;">
                    <?php
                    //This is a loop that returns all rows of the MySQL command on line 8
                    while ($events = mysql_fetch_assoc($events_display)){
                        //Each item (event) in the loop is represented with an image based on their id
                        //Inside each image is a link to a custom generated page with more details of the event
                        echo "<br><div ID=".$events['ID'].">".
                            "<li class='details'> <h4>" .$events['Name']. " </h4></li><li class='Eimg'><a href='EventDetails.php?ID=".$events['ID']."' class='darken'>"
                            . "<img src='pics/".$events['ID'].".jpg' width='600'></></a></li>"
                            . "</div><br>";
                    }
                    ?>
                </ul>
                
            </article> 
            
            <aside class="aside aside-1"></aside>
            <aside class="aside aside-2"></aside>
            
            <footer class="footer">
                <div> 
                    <button id="button" type="button" name="login" value="register" onclick="openNav()">Created By: <br> JEKSAR</button>
                    <div id="TheSideBar" class="SideBar">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <form class="" name="login" action="LoginAction.php" method="POST">
                        <h1>Login: </h1>
                        User Name: <br><input type="text" name="UN"> <br>
                        Password: <br><input type="password" name="PW"> <br>
                        <input id="login" type="submit" name="login" onsubmit="LoginAction.php"><br>
                        </form>
                    </div>
                </div>
            </footer>        
        
        </div>        
    
    </body>

</html>
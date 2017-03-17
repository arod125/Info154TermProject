<?php
//This establishes connection to the database
include 'database.php';
mysql_connect('localhost', 'root', '');
mysql_select_db('realtoors');

//This uses the ID of the selected image link from previous page to create the URL
$main_event = filter_input(INPUT_GET, 'ID');

//Using the ID from previous variable, this gets all the information from the ID's specific row(event)
$mainevent_query = "SELECT * FROM events WHERE ID = '".$main_event."'";
$mainevent_display = mysql_query($mainevent_query);
$eventdetails = mysql_fetch_assoc($mainevent_display);
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
        
        <div class="wrapper">
            
            <header class='header'><a href="./Homepage.html"><img src="pics/RealToors.jpg" alt="RealToor"></a>
                <div>
                </div>
            </header>
            
            <ul class="navigation"> 
                <li><a href="./AboutUs.html">About Us</a></li>  
                <li><a href="./Events.php"> Events</a></li>  
                <li><a href="./AddEvents.html"> Create an Event</a></li>  
                <li><a href="./ContactUs.html"> Contact Us</a></li>
            </ul>
            
            <article class="main">
                <!--Here, page delivers details based on specific row(event) information from MySQL command on lines 11-13-->
                <div class="EventDetails">
                    <h1><?php echo "<center><i>".$eventdetails['Name']."</i></center>" ?></h1>
                    <?php 
                    echo "<center><img src='pics/" .$eventdetails['ID']. ".jpg'></></center><br><br>";
                    echo "<center><b>Date:</b> " .$eventdetails['Date']. "</center><br><br>";
                    echo "<center><b>Time:</b> " .$eventdetails['Start Time']. "- " .$eventdetails['End Time'] . "</center><br><br>";
                    echo "<center><b>Description:</b> ".$eventdetails['Description']."</center><br><br>";
                    ?>
                </div>
            </article> 
            
            <aside class="aside aside-1"></aside>
            <aside class="aside aside-2"></aside>
            
            <footer class="footer">
                <div> 
                    <button id="button" type="button" name="login" value="register" onclick="openNav()">Created By: <br> JEKSAR</button>
                    <div id="TheSideBar" class="SideBar">
                        <div id="TheSideBar" class="SideBar">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <form name="login" action="LoginAction.php" method="POST">
                        <h1>Login: </h1>
                        <input type="text" name="UN">User Name: <br> <br>
                        <input type="password" name="PW">Password: <br> <br>
                        <input type="submit" id="login" name="login" onsubmit="LoginAction.php"><br>
                        </form>
                    </div>
                    </div>
                </div>
            </footer>
            
        </div>
        
    </body>
    
</html>

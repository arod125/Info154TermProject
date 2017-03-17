<?php 
session_start();

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
            <header class='header'><a href="./Homepage.html"><img src="pics/RealToors.jpg" alt="RealToor"></a>
            </header>
            
            <ul class="navigation"> 
                <li><a href="./AboutUs.html">About Us</a></li>  
                <li><a href="./Events.php"> Events</a></li>  
                <li><a href="./AddEvents.html"> Create an Event</a></li>  
                <li><a href="./ContactUs.html"> Contact Us</a></li>
            </ul>
            
            <article class="main">
                <?php 
                if (isset($_SESSION['Error'])){
                    echo '<h1>'.$_SESSION['Error'].'</h1><br>';
                    }
                elseif (isset ($_SESSION['Success'])) {
                    echo '<h1>'.$_SESSION['Success'].'</h1><br>';
                }
                ?>
                <h1>Event Request Form</h1>
                <p>Jot down the details for the event you'd like to have, and we will review and decide as soon as possible.</p>
                <form action="AddEventAction.php" method='POST'>
                    Name: <input type="text" name="title"></><br>
                    <br>Date: <input type="date" name="date"></><br>
                    <br>Start Time: <input type="time" name="start"></><br>
                    <br>End Time: <input type="time" name="end"></><br>
                    <br>Your email: <input type="text" name="email"></><br>
                    <br>Event Description: <br><textarea name="description" rows="10" cols="50"></textarea><br>
                    <br><center><input type="submit" name="submit" value="Submit"></></center>
                </form>
            </article>
            
            <aside class="aside aside-1"></aside>
            <aside class="aside aside-2"></aside>
            <footer class="footer">
                <div> 
                    <button id="button" type="button" name="login" value="register" onclick="openNav()">Created By: <br> JEKSAR</button>
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
            </footer>     
        </div>
    </body>
</html>

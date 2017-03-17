<?php 
session_start();
if (!isset($_SESSION['user'])){
    header('Location: Homepage.html');
}

//This establishes connection to the database
include 'database.php';
mysql_connect('localhost', 'root', '');
mysql_select_db('realtoors');

//This gives the MySQL command to retrieve all PENDING (meaning not approved or denied AND in the future) events 
$events_query = 'SELECT * FROM events WHERE Status = "Pending" AND Date >= CURDATE() ORDER BY id';
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
        <div class="wrapper">
            <header class='header'><a href="./Homepage.html"><img src="pics/RealToors.jpg" alt="RealToor"></a>
                <div> 
                    
                    <div id="TheSideBar" class="SideBar">
                        
                    </div>
                </div>
            </header>
            
            <article class="main">
                
                <u><h1>Admin Mode</h1></u>
                <p>Here are all current pending events in the RealToors system.
                Select all events you'd like to make to approve or deny and click
                the appropriate submit button.</p>
                
                <!--This is a checklist of all pending events-->
                <form name="Pending" action="PendingAction.php" method="POST">
                <?php
                    //This is a loop that displays all pending events as a checklist
                    while ($events = mysql_fetch_assoc($events_display)){
                        //For each event, the 
                        echo '<br><label><input type="checkbox" value="'
                                .$events['ID'].'" name= "name[]"></><a href="EventDetails.php?ID='.$events['ID'].'">'
                                .$events['Name'].'</a> </label><br>';
                    }
                    ?>
                    
                    <!--User clicks the appropriate button to approve or deny the selection of events-->
                    <br>
                    <label>
                        <input type="submit" name="Approve" value="Approve"></>
                        <input type="submit" name="Deny" value="Deny"></>
                    </label>
                </form>
                    
            </article> 
            <aside class="aside aside-1"></aside>
            <aside class="aside aside-2"></aside>
            <footer class="footer"><a href="LogoutAction.php">Logout</a><br><br></footer>
        
        </div>
        
    </body>
</html>

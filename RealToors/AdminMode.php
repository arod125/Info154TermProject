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
                    <button id="button" type="button" name="login" value="register" onclick="openNav()">&#9977; Log in/Register &#9977;</button>
                    <div id="TheSideBar" class="SideBar">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <form class="" name="login" action="login.php" method="GET">
                        <h1>Login: </h1>
                        User Name: <br><input type="text" name="UN"> <br>
                        Password: <br><input type="password" name="PW"> <br>
                        <button id="login" type="button" name="login" onsubmit="login.php">Login.</button> <br>
                        <button id="login" type="button" name="register" onclick="register.php">Need to register?</button>
                    </div>
                </div>
            </header>
            <ul class="navigation"> 
                <li><a href="./AboutUs.html">About Us</a></li>  
                <li><a href="./Events.html"> Events</a></li>  
                <li><a href="./AddEvents.html"> Add Events</a></li>  
                <li><a href="./ContactUs.html"> Contact Us</a></li>
            </ul>
            <article class="main">
                Blah blah blah blah blahahah? blah blah blah blah. Blah blah blah, blah blah's blah blah. blah blah.
                blah blah.
            </article> 
            <aside class="aside aside-1"></aside>
            <aside class="aside aside-2"></aside>
            <footer class="footer">Created By: <br> JEKSAR</footer>
        
        </div>
        
    </body>
</html>

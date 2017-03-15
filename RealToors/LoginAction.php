<?php
//reference database
    mysql_connect("localhost", "root", "");
    mysql_select_db("realtoors");
    session_start();

    //take it login inputs
    $loginusername= mysql_real_escape_string($_POST['UN']);
    $loginpassword= mysql_real_escape_string($_POST['PW']);
    
    //checks database for matching rows 
    $query ="SELECT * FROM admins WHERE user= '$loginusername' AND password= '$loginpassword'";
    $result = mysql_query($query);
    
    //check to make sure credentials match one and only one account
    $usercount = mysql_num_rows($result);
    
    if ($usercount == 1){
        echo "Successful login!";
        header('Location: AdminMode.php');
        $_SESSION['user'] = $loginusername;
    }
    else {
        echo "Incorrect credentials. Please try again";
    }

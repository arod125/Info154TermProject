<?php
//reference database
    mysql_connect("localhost", "root", "");
    mysql_select_db("realtoors");
    session_start();

    //take it login inputs
    $loginusername= $_POST['UN'];
    $loginpassword= $_POST['PW'];
    
    //checks database for matching rows 
    $query ='SELECT * FROM admins WHERE (username="'.$loginusername.'" AND password="'.$loginpassword.'")';
    $result = mysql_query($query);
    
    //check to make sure credentials match one and only one account
    $usercount = mysql_num_rows($result);
    
    if ($usercount == 1){
        echo "Successful login!";
        $_SESSION['user'] = $loginusername;
        header('Location: AdminMode.php');
    }
    else {
        echo "Incorrect credentials. Please try again";
        header('Location: Homepage.html');
    }
?>

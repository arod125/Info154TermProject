<?php
mysql_connect("localhost", "root", "");
mysql_select_db("realtoors");
session_start();

//Updates selected pending events to APPROVED
if (isset($_POST['Approve'])){
    $altered_events = $_POST['name'];
    $events_ready = implode(",", $altered_events);
    $update_query = 'UPDATE events SET Status = "Approved" WHERE ID ='.$events_ready.'';
    $update = mysql_query($update_query);
    header('Location: AdminMode.php');
    echo "<meta http-equiv='refresh' content='0'>";
    echo "<h3>approved</h3>";
}

//Updates selected pending events to DENIED
elseif (isset($_POST['Deny'])) {
    $altered_events = $_POST['name'];
    $events_ready = implode(",", $altered_events);
    $update_query = 'UPDATE events SET Status = "Denied" WHERE ID ='.$events_ready.'';
    $update = mysql_query($update_query);
    header('Location: AdminMode.php');
    echo "<meta http-equiv='refresh' content='0'>";
    echo "denied";
}
?>
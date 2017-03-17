<?php
//This establishes connection to the database


$error_message = 'Error: Please fill out ALL fields';
$success_message = 'Success! Your event has been requested.';

foreach($_POST as $fields => $value) {
  if(empty($value)) {
      header('Location: AddEvents.php');
      $_SESSION['Error'] = $error_message;
  }
}
if (isset($_POST['submit'])){
$name = mysql_real_escape_string($_POST['title']);
$date = mysql_real_escape_string($_POST['date']);
$start = mysql_real_escape_string($_POST['start']);
$end = mysql_real_escape_string($_POST['end']);
$email = mysql_real_escape_string($_POST['email']);
$description = mysql_real_escape_string($_POST['description']); 
include 'database.php';
mysql_connect('localhost', 'root', '');
mysql_select_db('realtoors');
$query ="INSERT INTO events (`Name`, `Date`, `Start Time`, `End Time`, `Description`, `Host Email`) VALUES ('$name', '$date', '$start', '$end', '$description', '$email')";
$query_insert = mysql_query($query);
header('Location: AddEvents.php');
$_SESSION['Success'] = $success_message;
}
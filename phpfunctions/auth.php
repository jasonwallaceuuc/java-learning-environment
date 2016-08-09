<?php	

//PHP script to authenticate user

//Start the session 
session_start();

//If there is no valid session redirect to login page
if(!isset($_SESSION["username"])){
header("Location: login.php");

//exit the session
exit(); }
?>


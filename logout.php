
<?php
//Logout Script that logs the user out and redirects user to the login page
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}
?>
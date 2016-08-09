<?php
//php script that opens a connection to register database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$connection = mysql_connect($servername, $username,$password,$dbname );


if (!$connection){
    die("Database Connection Failed" . mysql_error());
}


$select_db = mysql_select_db('register');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}

?>
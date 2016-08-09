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


// Fetching Values From URL
$question2 = $_POST['question1'];
$activeQuestion2 = $_POST['is_active1'];
$questionGroup2 = $_POST['question_group1'];

$query1 = ("INSERT INTO question(question, is_active, question_group) VALUES ('$question2', '$activeQuestion2','$questionGroup2')"); //Insert Query
$result=mysql_query($query1);


if($result){
    echo "The question has been added to the database";
} else {
    echo '<h1>System Error</h1>';
}
//if (!$mysql_query($result)) { // add this check.
//die('Invalid query: ' . mysql_error());}
mysql_close($connection);
?>
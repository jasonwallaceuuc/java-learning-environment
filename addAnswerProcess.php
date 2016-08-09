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
$answer2 = $_POST['answer1'];
$questionGroup2 = $_POST['question_group1'];
$isCorrect2 = $_POST['is_correct1'];

$query = ("INSERT INTO question_answers(answer, question_group, is_correct) VALUES ('$answer2', '$questionGroup2','$isCorrect2')"); //Insert Query
$result=mysql_query($query);



//if (!$mysql_query($result)) { // add this check.
//die('Invalid query: ' . mysql_error());}
mysql_close($connection);
?>

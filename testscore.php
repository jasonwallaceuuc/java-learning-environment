<html>
<head>
<title>Test One</title>
<link rel="stylesheet" href="css/intostyle.css" />
<style>p.indent{ padding-bottom: 0.75cm }</style>
</head>
<body>
<?php 
include '/phpfunctions/testindex.php';
require('/phpfunctions/db.php');//connect to the database
include("/phpfunctions/auth.php"); //auth user
?>
<?php
$query="SELECT question FROM question WHERE question_id=1";
$result=mysql_query($query);
if (!$result) { // add this check.
die('Invalid query: ' . mysql_error());}
$row = mysql_fetch_array($result);
echo $row['question']; 
?>
<p class="indent"></p> 
<?php
//selects random simulations from variables table 
$query="SELECT * FROM question_answers WHERE question_group=1";
$result=mysql_query($query);
if (!$result) { // add this check.
die('Invalid query: ' . mysql_error());}
$row = mysql_fetch_array($result); 
    while($row = mysql_fetch_array($result)) {
         echo "<br>Answer: ". $row["answer"]. "<br>";       
} 
?>

<div class="container">
<p class="indent"></p> 
 
</div>






</body>
</html>
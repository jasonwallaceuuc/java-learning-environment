<?php 
$id = $_SESSION['username'];

//selects random simulations from variables table 
$query="SELECT sim FROM variablessims ORDER BY RAND() LIMIT 1";
$result=mysql_query($query);
if (!$result) { // add this check.
die('Invalid query: ' . mysql_error());}
$row = mysql_fetch_array($result);

?>
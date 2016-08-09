<?php


//Random tip from jtips table
$query="SELECT tip FROM jtpis ORDER BY RAND() LIMIT 1";
$result=mysql_query($query);
if (!$result) { // add this check.
die('Invalid query: ' . mysql_error());}
$row = mysql_fetch_array($result);
?>
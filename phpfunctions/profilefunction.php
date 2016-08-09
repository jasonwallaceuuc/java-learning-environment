<?php
require ("db.php");
include ("auth.php");
?>
<?php
$id = $_SESSION['username'];
$query="SELECT email, b_no, username, trn_date FROM users WHERE username ='$id'";
$result=mysql_query($query);
if (!$result) { // add this check.
die('Invalid query: ' . mysql_error());}
$row = mysql_fetch_array($result);

		echo $row['email']; 
		echo $row['username']; 
		echo $row['b_no'];
		echo $row['trn_date']; 
?>

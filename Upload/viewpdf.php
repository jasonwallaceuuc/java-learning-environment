<?php
session_start();
if(!isset($_SESSION["username"])){
header("location: ../login.php");
}
else{
if (isset($_GET['file'])) {
$file = $_GET['file'];
if (file_exists($file) && is_readable($file) && preg_match('/\.pdf$/',$file)) {
header('Content-Type: application/pdf');
header("Content-Disposition: inline; filename=\"$file\"");
readfile($file);
}
} else {
header("Location: ../index.php");
}
}
?>
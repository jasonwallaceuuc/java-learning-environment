<?php 
//Script that allows a user to upload a file. At the moment only saves file locally to the upload folder.
//The script also saves a record into the database of filenames being saved and at what date it was submitted 



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
$uploadstatus = "";
if(isset($_REQUEST['filetitle']))
{
$trn_date = date("Y-m-d H:i:s");
$filetitle =$_REQUEST['filetitle'];
$target_dir = "upload/"; // Where the file is going to be placed. Mean time use upload folder
$path = pathinfo($_FILES['upload_file']['name']);
$filename = $path['filename'];
$ext = $path['extension'];
$temp_name = $_FILES['upload_file']['tmp_name'];
$pathfilenameext= $target_dir.$filename.".".$ext;

// Check if file name already exists
if (file_exists($pathfilenameext)) {
    $uploadstatus = "Sorry, file already exists.";
	}
else 
	{
	move_uploaded_file($temp_name,$pathfilenameext);
	$uploadstatus = "File Uploaded Successfully.";
	$ins_query="insert into filetable(`trn_date`,`filetitle`,`filename`)values('$trn_date', '$filetitle', '$filename')";
	mysql_query($ins_query) or die(mysql_error());
	}
}
}
?>
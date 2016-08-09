<?php 
//include ("/phpfunctions/uploadFunction.inc.php"); //page layout
require('/phpfunctions/db.php'); //db info
include("/phpfunctions/auth.php"); //include user auth
include ("/sitelayouts/newlayout.html"); //page layout
?>
<?php 
//Script that allows a user to upload a file. At the moment only saves file locally to the upload folder.
//The script also saves a record into the database of filenames being saved and at what date it was submitted 
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

?>
<html>
<style>p.indent{ padding-bottom: 0.50cm }</style>
<head>
<title>Upload File</title>
</head>
<body>
<p class="indent"></p>
<p class="indent"></p>
<p class="indent"></p>
<p class="indent"></p>


<div class="container">
        
   
          

<center><h1>Upload File</h1>
<form name="form" method="post" action="" enctype="multipart/form-data" >
<input type="text" name="filetitle" placeholder="Enter File Title:" required /><br /><br />
<input type="file" name="upload_file" id="upload_file" /><br /><br />
<p id="error" style="display:none; color:#FF0000;">File format should be PDF, Word or Java Format.</p>
<input type="submit" name="submit" value="Upload" />
</form>
<p style="color:#FF0000;"> 
<div class="clear"></div>
        </div></center>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
$('input[type="submit"]').prop("disabled", true);
$('#upload_file').bind('change', function() {
var ext = $('#upload_file').val().split('.').pop().toLowerCase();
if($.inArray(ext, ['pdf','PDF', 'docx', 'DOCX', 'doc', 'DOC', 'java', 'JAVA']) == -1) //various documents to accept
{ $('#error').slideDown("slow"); } else
{$('#error').slideUp("slow"); $('input:submit').attr('disabled',false);}
});
</script>
</body>
</html>
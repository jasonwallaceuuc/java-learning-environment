<?php
//allows user to view a list of uploaded files. Need to expand on this and the database table to only show files submitted by that user. 
//only the lecturer should be able to view all uploaded files

require('/phpfunctions/db.php'); //db info
include("/phpfunctions/auth.php"); //auth user
include ("/phpfunctions/indexl.php"); //layout

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Uploaded Files</title>
</head>
<body>
<div class="form">
<h2>This is a list of uploaded code </h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>Number</strong></th><th><strong>File Title</strong></th><th><strong>Delete</strong></th></tr>
<?php
include ("/phpfunctions/viewuploadedfiles.php")?>
</thead>
<tbody>

</tbody>
</table>
</div>
</body>
</html>
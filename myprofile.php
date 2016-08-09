<?php
//Allows user to view their personal details that they registered with
//Still needs work done on test scores and will be implemented once the work on tests is done

require('/phpfunctions/db.php');
include("/phpfunctions/auth.php");
include ("/phpfunctions/indexl.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>Num</strong></th><th><strong>Reg Num</strong></th><th><strong>Username</strong></th><th><strong>Reg Date</strong></th><th><strong>Email</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
include ("/phpfunctions/table.php");
?>
</tbody>
</table>
</div>
</body>
</html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('/phpfunctions/db.php');
require '/phpfunctions/reg.php';?>
<div class="form">
<h1>Registration</h1>

<!-- Registration Form -->
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type ="b_no" name="b_no" placeholder="Student Registration Number" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
</body>
</html>
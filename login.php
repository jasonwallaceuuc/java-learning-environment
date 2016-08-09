<html>
<head>
  <title>Java Syntax Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>p.indent{ padding-bottom: 0.50cm }</style>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('/phpfunctions/db.php');
require '/phpfunctions/loginreg.inc.php';?>


<div class ="container">
 <div class="pageContent">
    <div id="main">
    <div class="form">
<center><h3>Java Syntax Learning Tool</h3>
<img src="images/java.png" style="width:304px;height:228px;">
<h4>Please open login menu to login or click to register</h4>
<a href="registration.php">Register</a>
<p class="indent"></p>
</div>
</div>
</div>

	
	<!-- data-toggle lets you display modal without any JavaScript -->
    <center><button type="button" class="btn btn-success" data-toggle="modal" data-target="#popUpWindow">Open Login</button></center>
	

<div class="modal fade" id="popUpWindow">
	<div class="modal-dialog">
        <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Log In</h3>
                </div>

                <!-- body (form) -->
<div class="modal-body">
	<form action="" method="post" name="login">
		<center><input type="text" name="username" placeholder="Username" required /></center>
			<p class="indent"></p>
				<center><input type="password" name="password" placeholder="Password" required /></center>
					<p class="indent"></p>
						<center><input name="submit" type="submit" value="Login" /></center>
	</form> 
	<div class="modal-footer">
    <center> If you have any issues or questions please contact Wallace-J15@email.ulster.ac.uk</a></center>
		</div>
		
 </div>
 </div>
 </div>
 </div>
 </div>

 <div class ="container">
This website is deisnged to assist students learning Java programming as part of the MSc Professional Software Development. There are 11 modules to complete
along with 4 tests in which a pass mark of 60% must be achieved. Under each topic there is a practice test to help prepare for the main tests.
 </div>
 </div>
</body>
</html>

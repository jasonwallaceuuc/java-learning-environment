<?php 
//Index screen that redirects user to the dashboard interface once they have been sucessefully logged in

include("/phpfunctions/auth.php"); //auth user ?>

<!-- JavaScript that Automatically redirects user after 5 seconds -->
<script>setTimeout(function () {
   window.location.href= 'section1.php'; // redirects the user to the dashboard after certain period of time

},5000); // Set in milliseconds 5 seconds
</script>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Website Redirect</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<center><p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<img src="images/unilogo.jpg" style="width:304px;height:228px;">
<p>You have been securely logged in</p>

<p> Redirecting in 5 Seconds... </p></center>
</div>
</body>
</html>

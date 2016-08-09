<?php
include("/sitelayouts/newlayout.html");
require ("/phpfunctions/db.php");
include ("/phpfunctions/auth.php");
?>
<?php
$id = $_SESSION['username'];
$query="SELECT email, b_no, username, trn_date FROM users WHERE username ='$id'";
$result=mysql_query($query);
if (!$result) { // add this check.
die('Invalid query: ' . mysql_error());}
$row = mysql_fetch_array($result);
?>
<html>
<style>p.indent{ padding-bottom: 0.50cm }</style>
<body>
<p class="indent"></p>
<p class="indent"></p>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <center>Your Details</center>
        </a>
      </h4>
	  
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
         <center>Account Details</center>
		<p>Email- <?php echo $row['email']; ?></p>
		<p>Username- <?php echo $row['username']; ?></p>
		<p>Student Reg Number- <?php echo $row['b_no']; ?></p>
		<p>Join Date- <?php echo $row['trn_date']; ?></p></center>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         <center> Test Scores </center>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
       <p>Module 1- </p>
		<p>Module 2- </p>
		<p>Module 3- </p>
		
		</center>
      </div>
    </div>
  </div>
  


</body>
</html>
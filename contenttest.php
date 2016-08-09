<html>
<head>
<title>Test One</title>
<link rel="stylesheet" href="css/intostyle.css" />
<style>p.indent{ padding-bottom: 0.75cm }</style>
</head>
<body>
<?php 
require('/phpfunctions/db.php');//connect to the database
include("/phpfunctions/auth.php"); //auth user
include '/phpfunctions/indexl.php';?>

<div class="container">
  This is the first test of three and is based on the three previous learning modules 
Intro to Java, Variables and Data Input. There is a mixture of true/false, multiple choice
and syntax checking questions. <p class="indent"></p> 
<ul>
  <li>Intro to Java - 5 Questions</li>
  <li>Variables - 5 Questions</li>
  <li>Data Input - 5 Questions</li>
</ul>

<style>
button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
myModal {
	background-color: #4CAF50;
	
}
</style>
<script>
$(document).ready(function() {
	
// Support for AJAX loaded modal window.
// Focuses on first input textbox after it loads the window.
$('[data-toggle="modal"]').click(function(e) {
	e.preventDefault();
	var url = $(this).attr('href');
	if (url.indexOf('#') == 0) {
		$(url).modal('open');
	} else {
		$.get(url, function(data) {
			$('<div class="modal hide fade">' + data + '</div>').modal();
		}).success(function() { $('input:text:visible:first').focus(); });
	}
});
	
});
</script>

<!-- Trigger the modal with a button -->
<p class="indent"></p>
<p class="indent"></p>
 <center> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Begin Test</button></center>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Test 1: Introduction, Variables and Data Input</h4>
        </div>
        <div class="modal-body">
         <?php
$query="SELECT question FROM question WHERE question_id=1";
$result=mysql_query($query);
if (!$result) { // add this check.
die('Invalid query: ' . mysql_error());}
$row = mysql_fetch_array($result);
//echo $row['question']; 
?>
<p class="indent"></p> 
<?php
//selects random simulations from variables table 
$query="SELECT * FROM question_answers WHERE question_group=1";
$result=mysql_query($query);
if (!$result) { // add this check.
die('Invalid query: ' . mysql_error());}
$row = mysql_fetch_array($result); 
    while($row = mysql_fetch_array($result)) {
         echo "<br>Answer: ". $row["answer"]. "<br>";       
} 
?>

<ul class="pager">
  <li class="previous"><a href="#">Previous</a></li>
  <li class="next"><a href="#">Next</a></li>
</ul>
        </div>
        <div class="modal-footer">
	<a class="btn btn-primary" onclick="$('.modal-body > form').submit();">Save Changes</a>
	<a class="btn" data-dismiss="modal">Close</a>
</div>
      </div>
      
    </div>
  </div>
  
</div>
</body>
</html>

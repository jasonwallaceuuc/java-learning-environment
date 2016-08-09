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
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
div#test{ border:#000 1px solid; padding:10px 40px 40px 40px; }
</style>
<script>
var pos = 0, test, introTotal =0, variableTotal, dataInputTotal, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
    [ "Who first developed Java?", "Intel", "Sun MicroSystems", "IBM", "B", "1" ],
	[ "Java is Object Orientated", "False", "True", "Cannot Say", "B", "1" ],
	[ "Java has a case sensitive syntax?", "True", "False", "Cannot Say", "A", "1" ],
	[ "Java is currently on version ___", "9", "2", "8", "C", "1" ],
	[ "What is the correct way to declare a variable representing length of piece of string", "char length = 3;", "int Length = 4cm", "int stringLength = 5;", "C" ],
	[ "Group two test ", "10", "2", "4", "C", "2" ],
	[ "Two test", "10", "2", "4", "C", "2" ],
	[ "Two Test", "10", "2", "4", "C", "2" ],
	[ "Three", "10", "2", "4", "C" , "3"],
	[ "Three", "10", "2", "4", "C" , "3"],
	[ "Three", "10", "2", "4", "C" , "3"],
	[ "What is 8 / 2?", "10", "2", "4", "C" ],
	[ "What is 8 / 2?", "10", "2", "4", "C" ],
	[ "What is 8 / 2?", "10", "2", "4", "C" ],
	[ "What is 8 / 2?", "10", "2", "4", "C" ],
	[ "What is 8 / 2?", "10", "2", "4", "C" ],
	[ "What is 8 / 2?", "10", "2", "4", "C" ],
	[ "What is 8 / 2?", "10", "2", "4", "C" ],
	[ "What is 8 / 2?", "10", "2", "4", "C" ],
	[ "What is 8 / 2?", "10", "2", "4", "C" ],
];
function _(x){
	return document.getElementById(x);
}
function renderQuestion(){
	test = _("test");
	if(pos >= questions.length){
		test.innerHTML = "<h2>You got "+correct+" of "+questions.length+" questions correct. Intro - "+introTotal+"</h2>";
		_("test_status").innerHTML = "Test Completed";
		pos = 0;
		correct = 0;
		introTotal = 0;
		
		return false;
	}
	_("test_status").innerHTML = "Question "+(pos+1)+" of "+questions.length;
	question = questions[pos][0];
	chA = questions[pos][1];
	chB = questions[pos][2];
	chC = questions[pos][3];
	test.innerHTML = "<h3>"+question+"</h3>";
	test.innerHTML += "<input type='radio' name='choices' value='A'> "+chA+"<br>";
	test.innerHTML += "<input type='radio' name='choices' value='B'> "+chB+"<br>";
	test.innerHTML += "<input type='radio' name='choices' value='C'> "+chC+"<br><br>";
	test.innerHTML += "<button onclick='checkAnswer()'>Submit Answer</button>";
}
function checkAnswer(){
	choices = document.getElementsByName("choices");
	for(var i=0; i<choices.length; i++){
		if(choices[i].checked){
			choice = choices[i].value;
		}
	}
	if (choice == questions[pos][4]){
		correct++;
				
	
		
	}
	
	pos++;
	
	renderQuestion();
}
window.addEventListener("load", renderQuestion, false);

</script>
</head>
<body>
<h2 id="test_status"></h2>
<div id="test"></div>
</body>
</html>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</body>
</html>

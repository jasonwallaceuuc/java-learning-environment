<html>
<head>
<title>JIntroduction to Java</title>
<link rel="stylesheet" href="css/otherstyle.css" />
<style>p.indent{ padding-bottom: 0.75cm }</style>
</head>
<body>
<?php include '/phpfunctions/indexl.html';?>



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

 <div class="container">
        <h2>Software Development and Computer Programming</h2>
		<p>Learning computer programming can be a daunting task, especially for most of the students on this course as they more than likely do not have any previous experience in programming
		This website will help to make the task a little less daunting.</p>
<p>Computers really arn't that scary and have four <strong>basic commands</strong> that a computer perform are:</p>
<ul>
	<li>Input (recieving data)) </li>
	<li>Output- Displaying Results</li>
	<li>Storage</li>
	<li>Performance of arithmetic and logical operations</li>
</ul>
<center><img src="images/compro1.jpg" style="width:390px;height:270px;"></center>
<p class="indent"></p><h2>Why Study Computer Programming</h2>

<center> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Video</button></center>

  <!-- Modal -->






<p class="indent"></p>
<h2>Introduction to Java</h2>
<p>Like any programming language, the Java language has its own structure, syntax rules,
                and programming paradigm. The Java language's programming paradigm is based on the
                concept of Object Orientated Programming (OOP), which the language's features support.</p><p>The Java language is a C-language derivative, so its syntax rules look much like C's.
                For example, code blocks are modularized into methods and delimited by braces
                    (<code>{</code> and <code>}</code>), and variables are declared before they are
                used. </p>
          <div class="clear"></div>
        </div>







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
          <h4 class="modal-title">Practice Test</h4>
        </div>
        <div class="modal-body">

<style>
div#test{ border:#000 1px solid; padding:10px 40px 40px 40px; }
</style>
<script>
var pos = 0, test, passMark = 10, introTotal =0, variableTotal, dataInputTotal, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
    [ "A Computer Program is a sequence of statements intended to accomplish a task", "True", "False", "Cannot Say", "A", "1" ],
	[ "Programming is a process of planning and creating a program", "True", "False", "Cannot Say", "A", "1" ],
	[ "Java was initially developed by who?", "Intel", "Microsoft", "Sun Microsystems", "C", "1" ],
	[ "Java is currently on version ___", "9", "2", "8", "C", "1" ],
	[ "The output of the Java compiler is known as ____", "bytecode", "variables", "binary", "A" ],
	[ "Java is not platform independant", "True", "False", "Cannot say", "B", "2" ],
	[ "In Java each statement is terminated by a __", "Fullstop - .", "Comma - ,", "Semi-colon - ;", "C", "2" ],
	[ "Syntax Errors are known as ___", "Compile Time Error", "Java Grammer Error", "Run time Error", "A", "2" ],
	[ "Eclipse and IntelliJ are known as what?", "Java Development Kits", "Integrated Development Enviornment", "Java Compilers", "B" , "3"],
	[ "Java has a case sensitive syntax?", "True", "False", "Cannot Say", "A", "1" ],

];
function _(x){
	return document.getElementById(x);
}
function renderQuestion(){
	test = _("test");
	if((pos >= questions.length) && (correct >= passMark)){
		test.innerHTML = "<h2>Well done. You got "+correct+" of "+questions.length+" questions correct. You can now move onto learning about Java Variables</h2>";
		_("test_status").innerHTML = "Test Completed";
		pos = 0;
		correct = 0;
		introTotal = 0;
		
		return false;
	}else {
		test.innerHTML = "<h2>You got "+correct+" of "+questions.length+" questions correct. Please try reading over this resource before continuing \n https://www.ibm.com/developerworks\n/java/tutorials/j-introtojava1/</h2>";
		
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






        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
  <p class="indent"></p>
    
	<div>
<center><button type="button" class="btn btn-default" onclick="location.href='variables.php';">Variables</button></center></div>
  <p class="indent"></p>
    <p class="indent"></p>
</body>
</html>


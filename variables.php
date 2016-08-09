<html>
<head>
<style>p.indent{ padding-bottom: 1.3cm }</style>

</head>
<body>
<?php include ('/phpfunctions/indexl.html');//include page layout
require('/phpfunctions/db.php');//connect to the database
include("/phpfunctions/auth.php"); //auth user
include("/phpfunctions/selectSim.php"); //auth user

?>




<script>
var pos = 0, test, passMark = 10, introTotal =0, variableTotal, dataInputTotal, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
    [ "In Java, all variables must be declared before they can be used", "True", "False", "Cannot Say", "A", "1" ],
	[ "String is an example of a primative data type", "True", "False", "Cannot Say", "B", "1" ],
	[ "When storing information we need to provide a name known as___", "Integer Identifier", "Variable", "Variable Identifier", "C", "1" ],
	[ "When naming a variable it must begin with a capital letter", "True", "False", "Does not matter", "A", "1" ],
	[ "Reserved words, such as boolean, can be used to name a variable", "True", "False", "Cannot say", "B" ],
	[ "What would be a suitable identifier for the name of this course", "int CourseNAME = 'Professional Software Development'", "String courseName = "Professional Software Development"", "string COURSENAME = software", "B", "2" ],
	[ "In Java you can concatenate a String and a variable by using the ___ sign", "Fullstop - .", "Comma - ,", "Plus sign - ;", "C", "2" ],
	[ "Java follows the normal mathematical order of precedence", "True", "False", "Cannot say", "A", "2" ],

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
		test.innerHTML = "<h2>You got "+correct+" of "+questions.length+" questions correct. Please try again</h2>";
		
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

  <!-- Bottom Well-->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         <center>Variable Simulation</center>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
	  Try practicing the following code in the text field provided:
	  <?php echo $row['sim']; ?>
	  
	  <p class="indent"></p>

	  
      <center><p><textarea name="item3" cols="50" rows="10"></textarea></p></center>
      </div>
    </div>
  </div>
  
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
        <h2>Java Syntax and Variables</h2>
		<p>Java provides the facility for storing data in the memory of the computer</p>
<p>A variety of different types of data may be stored</p>
<ul>
	<li>Positive and negative whole numbers are known as integers(-2, 3, -9, 100) </li>
	<li>Positive and negative decimal numbers are known as real numbers(-0.1, 3.2, -116.67)</li>
	<li>Letters, numerals and other symbols are known as characters ('A', 'a' 'E' '#')</li>
	<li>A series of characters gathered together are known as Strings("Hello World", "234fgt", "This is 1 string")</li>
</ul>
<p><strong>Except for Strings</strong> all of the above list all of the data types mentioned are known as primative data types and are the most common data types you will encounter on the course</p>
<p>To learn more about the primative data types you will encounter with Java <a href="http://docs.oracle.com/javase/tutorial/java/nutsandbolts/datatypes.html" target="_blank">follow the link</a></p>




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
    
<center> <input id ="1" type="button" onclick="location.href='variables.php';" value="Next Topic: Variables" /></center>
  <p class="indent"></p>
<center> <input type="button" onclick="location.href='intro.php';" value="Previous: Intro to Java" /></center>
  <p class="indent"></p>  <p class="indent"></p>
  


</body>
</html>
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
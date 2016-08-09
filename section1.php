<?php
require('/phpfunctions/db.php'); //requires db info
include("/phpfunctions/auth.php"); //include user auth
include("/sitelayouts/newlayout.html") //include layout
?>


<div class="jumbotron text-center" id="topContentDiv">
  <!-- JavaScript That makes use of Cookies to store users last visit and display -->
<script type = "text/javascript">
var days = 730; // days until cookie expires = 2 years.
var lastvisit=new Object();
var firstvisitmsg="<center>Welcome <?php echo $_SESSION['username']; ?> This is your first visit to this page.</center>";
lastvisit.subsequentvisitmsg="<center>Welcome <?php echo $_SESSION['username']; ?> Your last visit was on <b>[displaydate]</b></center>";

lastvisit.getCookie=function(Name){
var re=new RegExp(Name+"=[^;]+", "i");
if (document.cookie.match(re))
return document.cookie.match(re)[0].split("=")[1];
return'';
}

lastvisit.setCookie=function(name, value, days){
var expireDate = new Date();

var expstring=expireDate.setDate(expireDate.getDate()+parseInt(days));
document.cookie = name+"="+value+"; expires="+expireDate.toGMTString()+"; path=/";
}

lastvisit.showmessage = function() {
var wh = new Date();
if (lastvisit.getCookie("visitc") == "") {
lastvisit.setCookie("visitc", wh, days);
document.write(firstvisitmsg);
}

else {
var lv = lastvisit.getCookie("visitc");
var lvp = Date.parse(lv);
var now = new Date();
now.setTime(lvp);
var day = new Array("Sun", "Mon", "Tues", "Wed", "Thur", "Fri", "Sat");
var month = new Array ("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
var dd = now.getDate();
var dy = now.getDay();
dy = day[dy];
var mn = now.getMonth();
mn = month[mn];
yy = now.getFullYear();
var hh = now.getHours();
var ampm = "AM";
if (hh >= 12) {ampm = "PM"}
if (hh >12){hh = hh - 12};
if (hh == 0) {hh = 12}
if (hh < 10) {hh = "0" + hh};
var mins = now.getMinutes();
if (mins < 10) {mins = "0"+ mins}
var secs = now.getSeconds();
if (secs < 10) {secs = "0" + secs}
var dispDate = dy + ", " + mn + " " + dd + ", " + yy + " " + hh + ":" + mins + ":" + secs + " " + ampm
document.write(lastvisit.subsequentvisitmsg.replace("\[displaydate\]", dispDate))
}

lastvisit.setCookie("visitc", wh, days);

}

lastvisit.showmessage();

</script>
<h3><strong>Java Revision Tip</strong><h3>
<?php include("/phpfunctions/tipfunction.php"); //include user auth ?>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Section 1</h2><br>
      <h4>Welcome to the first section of the Java Syntax Learning resource</h4><br>
      <p>There are three modules under this section.

	  <li>The first is Programming which gives an overview of Software Development and Programming</li>
	  <li>The second is Introduction to Java which gives a quick intoduction and overview of the history of the Java programming language </li>
	  <li>The third module is on the Syntax of Java and how variables work</li>


	  <p class="indent"></p>
	  <p class="indent"></p>
	  <p>Work your way through each of the modules and try the practice test before attempting the module test.</p>
	  <h1> Once you have sucessfully passed the test you can move onto Section 2</h1>
    </div>
    <div class="col-sm-4">
     <span class="glyphicon glyphicon-question-sign logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-unchecked logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Software Development and Computer Programming</h2>
		<p>Learning computer programming can be a daunting task espcially for students starting MSc Professional Software Development as most of you
		will not have any experience in computing and programming. This topic will help introduce, to you, the basic concepts of programming.</p>
<p>Computers have four <strong>basic functions</strong></p>
<ul>
	<li>Input (recieving data)) </li>
	<li>Output- Displaying Results</li>
	<li>Storage</li>
	<li>Performance of arithmetic and logical operations</li>
</ul>
<img src="images/compro1.jpg" style="width:390px;height:270px;">
<p class="indent"></p><h2>Why Study Computer Programming</h2>
<p>Click on the Button below to watch a short video on Computer Programming</p>



    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid">
  <h2>The Java Programming Language</h2>
   <h2>History of Java</h2>
   <p>James Gosling, Mike Sheridan, and Patrick Naughton initiated the Java language project in June 1991. Java was originally designed for interactive
   television, but it was too advanced for the digital cable television industry at the time.
   The language was initially called Oak after an oak tree that stood outside Gosling's office. Later the project went by the name Green and was finally
   renamed Java, from Java coffee. Gosling designed Java with a C/C++-style syntax that system and application programmers would find familiar.</p>
   <h4><b>Please read the following link to find out more about the history of the Java Programming Language: </b><a href="https://www.santarosa.edu/~dpearson/mirrored_pages/httppapa.det.uvigo.es/Java_History.pdf">History of Java PDF</a></h4>


   <h2>Introduction to Java</h2>
   <p> Java is a simple and yet powerful Object Orientated programming language and in many respects
is simular to the C++ programming language. Java is compiled into <b>platform indepdendent byte code</b> by what is known
as the <b>Java Virtual Machine</b> or JVM for short. Java was designed with the concept of <b>'write once and run everywhere'</b> and the JVM allows for this.
The JVM is the environment in which Java programs execute. It is a piece software that is implemented on top the hardware and operating system of a computer.
When the source code <b>(known as '.java files')</b> are compiled, it is translated into byte code and then placed into (.class) files. The JVM executes these bytecodes.
So Java byte codes can be thought of as the machine language of the JVM. The JVM can either interpret the bytecode one instruction at a time or the bytecode can be compiled further for the real microprocessor using what is called a just-in-time compiler. The JVM must be implemented on a particular platform before compiled programs can run on that platform.</p>






</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid bg-grey">
  <div class="col-sm-12">
     <span class="glyphicon glyphicon-question-sign logo"></span>
	 <h2>Basic Java Syntax</h2>
<p>When we consider a Java program it can be defined as a collection of objects that communicate via invoking each other's methods. Let us now briefly look into what do class, object, methods and instance variables mean.</p>
<ul class="list">
<li><p><b>Object -</b> Objects have states and behaviours. Example: A dog has states - colour, name, breed as well as behaviours -wagging, barking, eating. An object is an instance of a class. </p></li>
<li><p><b>Class -</b> A class can be defined as a template/ blue print that describes the behaviours/states that object of its type support.</p></li>
<li><p><b>Methods -</b> A method is basically a behaviour. A class can contain many methods. It is in methods where the logics are written, data is manipulated and all the actions are executed.</p></li>
<li><p><b>Instance Variables -</b> Each object has its unique set of instance variables. An object's state is created by the values assigned to these instance variables.</p></li>
</ul>
<h2>First Java Program:</h2>
<p>Let us look at a simple code that would print the words <i>Hello World</i>.</p>
<pre class="prettyprint notranslate tryit">
public class MyFirstJavaProgram {

   /* This is my first java program.
    * This will print 'Hello World' as the output
    */

    public static void main(String []args) {
       System.out.println("Hello World"); // prints Hello World
    }
}
</pre>
	 <h2>Java Variables</h2>
		<p>Java provides the facility for storing data in the memory of the computer</p>
<p>A variable provides us with named storage that our programs can manipulate. Each variable in Java has a specific type, which determines the size and layout of the variable's memory; the range of values that can be stored within that memory; and the set of operations that can be applied to the variable.

You must declare all variables before they can be used. The basic form of a variable declaration is shown here:</p>
<ul>
	<li>Positive and negative whole numbers are known as integers(-2, 3, -9, 100) </li>
	<li>Positive and negative decimal numbers are known as real numbers(-0.1, 3.2, -116.67)</li>
	<li>Letters, numerals and other symbols are known as characters ('A', 'a' 'E' '#')</li>
	<li>A series of characters gathered together are known as Strings("Hello World", "234fgt", "This is 1 string")</li>
</ul>
<p><strong>Except for Strings</strong> all of the above list all of the data types mentioned are known as primative data types and are the most common data types you will encounter on the course</p>
<p>To learn more about the primative data types you will encounter with Java <a href="http://docs.oracle.com/javase/tutorial/java/nutsandbolts/datatypes.html" target="_blank">follow the link</a></p>

    </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
 <div class="col-sm-4">
     <span class="glyphicon glyphicon-question-sign logo"></span>
    </div>
    <h2>Practice Test</h2>
    <h4>You can now test your learning in a short practice test. You do not have to pass the practice test to move onto the module test
	however it is important to follow the feedback advice at the end of the practice test</h4>
	<h4>There are 30 questions in total. Good Luck!</h4>
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







      </div>

    </div>
  </div>

</div>
  </div>

</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
<center><strong><h1>Module Test</h1></strong></center>
  <center><div class="col-sm-4">
     <span class="glyphicon glyphicon-question-sign logo"></span>
	 <div class="container">
	 <h2>You have now finished all of the learning included in Section 1</h2>
	 <h4>All scores are recorded with a pass mark of 50%</h4>
  <h4>Click to start Module Test</h4>
  <a href="test1.php" class="btn btn-info" role="button">Module Test</a></center>

</div>
    </div>
</div>

<div>

</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>For support please contact Wallace-J15@email.ulster.ac.uk</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>

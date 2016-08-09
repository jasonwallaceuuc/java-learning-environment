<!DOCTYPE html>
<html lang="en">
<head>
    <title>JavaSyntaxResource</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheer" href="layout.css"
</head>
<body>

    <div id="wrapper">
      <nav class="navbar navbar-inverse">
          <div class="container-fluid">

              <!--Code for allowing the navigation bar along the top of the site
              to form into a menu button whenever the site is made smaller or on
              a mobile device
              -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#mainNavBar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                  <a href="#" class=navbar-brand"></a>
                  </div>
              <div class="collapse navbar-collapse" id="mainNavBar">
              <ul class="nav navbar-nav">
                  <li><a href="dashboard.php">Dashboard</a></li>
                  <li><a href="profile.php">My Profile</a></li>
				  <li><a href="upload.php">Upload Java File</a></li>
				  <li><a href="logout.php">Logout</a></li>

                  <!--Code for the dropdown menu-->
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                          Admin Panel<span class="carot"></span></a>
                      <ul class="dropdown-menu">
						  <li><a href="viewuploadedfiles.php">View Uploaded Files</a></li>
						  <li><a href="addQuestions.php">Add Test Questions</a></li> 
						  <li><a href="addAnswer.php">Add Test Answers</a></li> 						  
                      </ul>
                  </li>
              </ul>
            </div>
          </div>
      </nav>

      <!-- Sidebar -->
      <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
              <li><a href="intro.php">1: Intro to Java</a></li>
              <li><a href="variables.php">2: Variables</a></li>
              <li><a href="datainput.php">3: Data Input</a></li>
			  <li><a href="testone.php">Test 1</a></li>
              <li><a href="selif.php">4: Selection- IF</a></li>
              <li><a href="ifelse.php">5: Selection- IF-Else</a></li>
              <li><a href="switch.php">6: Selection- Switch</a></li>
			  <li><a href="datainput.php">Test 2</a></li>
              <li><a href="for.php">7: Repetition- For</a></li>
              <li><a href="dowhile.php">8: Repetition- Do-While</a></li>
              <li><a href="while.php">9: Repetition- While </a></li>
			  <li><a href="datainput.php">Test 3</a></li>
              <li><a href="methods.php">10: Methods</a></li>
			  <li><a href="oop.php">11: Object Orientated Programming</a></li>
			  <li><a href="datainput.php">Test 4</a></li>
			  
          </ul>
      </div>
	  
	  <div class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
    <span class="navbar-text">
      Something useful
    </span>
  </div>
</div>

        <!-- Page content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#" class="btn btn-success" id="menu-toggle">Toggle Topics</a>
						<div><p class="indent"></p></div>
                        

    <!-- Menu toggle script -->
    <script>
        $("#menu-toggle").click( function (e){
            e.preventDefault();
            $("#wrapper").toggleClass("menuDisplayed");
        });
    </script>

</body>
</html>

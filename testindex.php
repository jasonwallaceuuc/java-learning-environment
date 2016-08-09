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
				  <li><a href="logout.php">Logout</a></li>

                  <!--Code for the dropdown menu-->
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                          Upload Work<span class="carot"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="upload.php">Upload Files</a></li>
						  <li><a href="viewuploadedfiles.php">View Uploaded Files</a></li>
						  <li><a href="addQuestions.php">Add Test Questions</a></li> 						  
                      </ul>
                  </li>
              </ul>
            </div>
          </div>
      </nav>
	  
	  
						</body>
</html>

<?php
	
	
	//include ('auth.php')
	session_start(); //need to manually start session as auth.php will not work 
    
	
	// If the form is submitted then add username and password to global variable
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
		
		//stripslashes and real_escape_string for both the username and password to help prevent sql injection attacks
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
		
	//Checking is user existing in the database or not. If they are not redirect to login page
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
	}?>
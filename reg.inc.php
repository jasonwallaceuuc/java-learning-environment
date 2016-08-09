<?php
	require('/phpfunctions/db.php');
    // If the form is submitted then insert the following values into the users table
	// Helps protect from SQL injection through removing escape characters and slashes
	// MD5 Hash algorithm to encrypt password for the user
    if (isset($_POST['username'])){
        $username = $_POST['username']; //username
		$email = $_POST['email']; //email
        $password = $_POST['password']; //password
		$b_no = $_POST['b_no']; //student reg number
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$b_no = stripslashes($b_no);
		$b_no = mysql_real_escape_string($b_no);
		$email = stripslashes($email);
		$email = mysql_real_escape_string($email);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date, b_no, user_level, account_status) VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '$b_no', '2', 'activated')";
        $result = mysql_query($query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }
?>
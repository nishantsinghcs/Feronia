<?php
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server

	
	//Function to sanitize values received from the form. Prevents SQL injection
	
	
	//Sanitize the POST values
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	//Input Validations
	if($email == '') {
		$errmsg_arr[] = 'email ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location:login.php?email or password missing");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM admin WHERE username='$email' AND password='$password' ";
	$result=mysql_query($qry);



	
	//Check whether the query was successful or not
	if($result) { 
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			
			session_regenerate_id();
			$cipltech_customer = mysql_fetch_assoc($result);
			$_SESSION['SESS_FIRST_NAME'] = $cipltech_customer['name'];
			$_SESSION['SESS_U_ID'] = $cipltech_customer['id'];
			
			session_write_close();
			header("location:index.php?LoggedIn");
			

			
			
		}else {
			//Login failed
			header("location:login.php?wrong email or password");
			//echo "wrong email or password";
			exit();
		}
	}else {
		die("Query failed");
	}
?>
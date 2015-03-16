<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_U_ID']);
	header('location:login.php?logout')
?>


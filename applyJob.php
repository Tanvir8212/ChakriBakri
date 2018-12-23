<?php
	
	
	session_start();
	error_reporting(0);


	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true'){
		echo 'Applied successfully...';
		include("jobSearch.php");
	}
	else{
		echo 'Please login first';

		include("login.php");
	}

?>
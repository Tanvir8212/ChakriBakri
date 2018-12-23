<?php

session_start();
error_reporting(0);

include('includes/dbh.php');
	
	$comapnyID ="";
	$locationID ="";
	$jobType ="";
	$comapnyName ="";
	$confirm ="";
	
	
	$query = "select * from jobDB.company where uID='".$_SESSION["loggedIn"]."';";

	$result = mysqli_query($conn,$query);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck>0){
					while($row=mysqli_fetch_assoc($result)){
						$comapnyID =$row['companyID'];
						$locationID =$row['LocationID'];
						$jobType =$row['type'];
						$comapnyName =$row['Name'];
						$confirm =$row['Confirm'];
					}
				}
	else{
		echo "<h1> No UID found in SESSION... Are you logged in ? If you, the something went very wrong...</h1>";
	}

	$jobName = $_POST['jobName'];
	$education = $_POST['education'];
	$jobDescription = $_POST['jobDescription'];
	$Keywords = $_POST['Keywords'];
	$Salary = $_POST['Salary'];
	$expire = $_POST['expire'];

	if(isset($_POST['negotiable'])){
		$Salary = "Negotiable";
	}
	
	

	if($_POST['jobName']==null || $_POST['education']==null || $_POST['jobDescription']==null || $_POST['Keywords']==null || $_POST['Salary']==null || $_POST['expire']==null  ){
	echo '<h3 align="center">Fill the form properly...</h3>';
	include("companyHome.php");
	}

	else if($confirm=="0"){
		echo '<h3 align="center">You can not offer job yet.. No admin have yet confrim you.. Admin will contact with you soon</h3>';
		include("companyHome.php");
	}

	else{
		
		$ExpireDate =  date('Y/m/d', strtotime('+$expire months'));

		$query1 = "INSERT INTO `job` (`jobID`, `companyID`, `Name`, `Education`, `Description`, `LocationID`, `keywords`, `Applicants`, `ExpireDate`, `jobtype`, `Salary`) VALUES (NULL, '".$comapnyID."', '".$jobName."', '".$education."', '".$jobDescription."', '".$locationID."', '".$Keywords."', NULL, '".$ExpireDate."', '".$jobType."', '".$Salary."');";

		if(mysqli_query($conn,$query1)){
			echo '<h3 align="center">Successfully offered...</h3>';
		}
		else{
			echo '<h1>something went wrong</h1>'.mysqli_error($conn);
		}

		include("companyHome.php");
	}


?>
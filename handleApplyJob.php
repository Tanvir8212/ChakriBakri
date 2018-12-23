<?php

session_start();
error_reporting(0);
include ('includes/dbh.php');

$flag = 0;


if($_SESSION["loggedIn"]=="false"){
	echo '<h3>Please login first..</h3>';
}

else{
	
	//INSERT INTO `applydetails` (`applicantID`, `jobID`, `seen`, `applyDate`) VALUES ('Mahmud8212', '1', '0', '2018-07-29');

	$query1 = "select * from jobDB.applydetails where applicantID = '".$_SESSION['loggedIn']."' AND jobID= '".$_POST['jobID']."';";
				$result1 = mysqli_query($conn,$query1);
				$resultCheck1 = mysqli_num_rows($result1);

				if($resultCheck1>0){
					while($row1=mysqli_fetch_assoc($result1)){
						$flag = 1;
					}
				}

	if($flag == 0){
		$query = "INSERT INTO `applydetails` (`applicantID`, `jobID`, `seen`, `applyDate`) VALUES ('".$_SESSION['loggedIn']."', '".$_POST['jobID']."', '0', '".date("Y-m-d") ."');";
		$result = mysqli_query($conn,$query);
		$resultCheck =mysqli_num_rows($result);

		echo '<h1>Applied successfully..</h1>';
	}
	else{
		echo "
		<script type='text/javascript'>
	
		alert ('You already have applied for this job..');

		</script>


		";
	}			

	

				


}
include("showJobDetails.php");

?>
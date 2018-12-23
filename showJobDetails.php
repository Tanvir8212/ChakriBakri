<!DOCTYPE html>
<html>
<head>
	<title>Job Details</title>

	<style type="text/css">
		
		table{
			width: 100%;
			text-align: center;
			background-color: #ACFCFE;
			border-radius: 20px;
			margin-top: 30px;
		}

	</style>
</head>
<body>



	<?php

	session_start();
	error_reporting(0);
	
	include("includes/dbh.php");


	if($_SESSION["loggedIn"]=="false"){

		include 'publicHomeTopMenu.php';
		
	}
	else{
		include 'userHomeTopMenu.php';
	}

	$query = "select * from jobDB.job where jobID =".$_POST['jobID'].";";

						$result = mysqli_query($conn,$query);
						$resultCheck = mysqli_num_rows($result);
						

						if($resultCheck>0){
							while($row=mysqli_fetch_assoc($result)){
						echo '<form action="handleApplyJob.php" method="POST"><table >';
						echo '<tr><td>';

						echo '<input type="hidden" name="jobID" value="'.$row['jobID'].'">';

						echo '<h2> '.$row['Name'].' </h2>';

						$query1 = "select * from jobDB.company where companyID =".$row['companyID'].";";

						$result1 = mysqli_query($conn,$query1);
						$resultCheck1 = mysqli_num_rows($result1);
						

						if($resultCheck1>0){
							$row1=mysqli_fetch_assoc($result1);

								echo '<strong> '.$row1['Name'].' </strong><br>';
						}

						$query2 = "select * from jobDB.location where locationID =".$row['LocationID'].";";

						$result2 = mysqli_query($conn,$query2);
						$resultCheck2 = mysqli_num_rows($result2);
						

						if($resultCheck2>0){
							$row2=mysqli_fetch_assoc($result2);
								echo '<img src="location.PNG" alt="Location">';
								echo ''.$row2['City'].' <br><br>';
						}

						echo '<hr></td></tr>';

						echo '<tr style="text-align: left;"><td>';

						echo '<ul>';
						echo '<li><h3>Keywords</h3></li>';
						echo $row['keywords'];


						echo '<li><h3>Education</h3></li>';
						echo $row['Education'];

						echo '<li><h3>Job Description</h3></li>';
						echo $row['Description'];

						echo '<li><h3>Deadline</h3></li>';
						echo $row['ExpireDate'];

						echo '<li><h3>Salary</h3></li>';
						echo $row['Salary'];

						echo '<li><h3>Location</h3></li>';

						$query2 = "select * from jobDB.location where locationID =".$row['LocationID'].";";

						$result2 = mysqli_query($conn,$query2);
						$resultCheck2 = mysqli_num_rows($result2);

						if($resultCheck2>0){
							$row2=mysqli_fetch_assoc($result2);
								echo $row2['details'].' <br><br>';
						}

						


						echo '</ul></td></tr>';
						echo '<tr style="text-align: center;"><td><input type="submit" value="APPLY" class="btn btn-primary" ><br><br>';
						echo '</form></tr></td></table>';


							}
								
						}

	?>

</body>
</html>
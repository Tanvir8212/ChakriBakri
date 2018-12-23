
<!DOCTYPE html>
<html>
<head>
	<title></title>


	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

	<div class="last" align="center">
		
		<h2><u>Applicants</u></h2>

		<table border="0" class="table">

			<tr>
						<th><u>Job Name</u></th>
						<th><u>Applicants CVs</u></th>
			</tr>


			<?php

			include('includes/dbh.php');
			session_start();

			$companyID ="";
			$jobID ="";
			$jobName ="";

			$query = "select * from jobDB.Company where uID='".$_SESSION["loggedIn"]."';";

			$result = mysqli_query($conn,$query);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck>0){
					while($row=mysqli_fetch_assoc($result)){
						$companyID =$row['companyID'];
					}
				}

			$query1 = "select * from jobDB.job where companyID='".$companyID."';";

			$result1 = mysqli_query($conn,$query1);
			$resultCheck1 = mysqli_num_rows($result1);

			if($resultCheck1>0){
					while($row=mysqli_fetch_assoc($result1)){
						$jobID =$row['jobID'];						
						$jobName =$row['Name'];	

						echo '<tr>';
						echo '<td><strong>'.$jobName.'</strong></td>';

						$query2 = "select * from jobDB.applydetails where jobID='".$jobID."';";
						$result2 = mysqli_query($conn,$query2);
						$resultCheck2 = mysqli_num_rows($result2);

						$applicantID="";
						echo '<td>';
						if($resultCheck2>0){
							while($row=mysqli_fetch_assoc($result2)){
								$applicantID =$row['applicantID'];	
								echo '<a href="viewProfile1.php?applicantID='.$applicantID.'">'.$applicantID.'</a>';
								echo '   ';
							}
						}
						echo '</td>';

						echo '</tr>';
					}
				}




			?>
		</table>	

		

	</div>

</body>
</html>


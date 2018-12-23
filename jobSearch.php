<!DOCTYPE html>
<html>
<head>
	<title>Job Search</title>

	<style type="text/css">
		
		table{
			width: 100%;
			text-align: center;
			background-color: #ACFCFE;
			border-radius: 20px;
			margin-top: 30px;
		}
		

	</style>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>

<?php

	session_start();
	error_reporting(0);

	if($_SESSION["loggedIn"]=="false"){
		
		include 'publicHomeTopMenu.php';
		
	}
	else{
		include 'userHomeTopMenu.php';
	}

	include("includes/dbh.php");

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$Keyword = $_POST['Keyword'];
	$Category = $_POST['Category'];
	$Location = $_POST['Location'];

	$arr;
	$i=0;

	if($Keyword==null && $Category==null && $Location==null ){
		$query = "select * from jobDB.job;";
	}

	else if($Keyword!=null && $Category!=null && $Location!=null ){
		$query = "select * from jobDB.job where jobType like '%".$Category."%' AND keywords like '%".$Keyword."%' AND LocationID In (select LocationID from jobDB.location where Area='".$Location.
			"' OR City ='".$Location."');";
	}

	else if($Keyword!=null && $Category!=null && $Location==null){
		$query = "select * from jobDB.job where jobType like '%".$Category."%' AND keywords like '%".$Keyword."%' ;";
	}

	else if($Keyword!=null && $Category==null && $Location!=null){
		$query = "select * from jobDB.job where keywords like '%".$Keyword."%' AND LocationID In (select LocationID from jobDB.location where Area='".$Location.
			"' OR City ='".$Location."');";
	}

	else if($Keyword!=null && $Category==null && $Location==null){
		$query = "select * from jobDB.job where keywords like '%".$Keyword."%';";
	}

	else if($Keyword==null && $Category!=null && $Location!=null ){
		$query = "select * from jobDB.job where jobType like '%".$Category."%' AND LocationID In (select LocationID from jobDB.location where Area='".$Location.
			"' OR City ='".$Location."');";
	}

	else if($Keyword==null && $Category!=null && $Location==null ){
		$query = "select * from jobDB.job where jobType like '%".$Category."%' ;";
	}

	else if($Keyword==null && $Category==null && $Location!=null ){
		$query = "select * from jobDB.job where LocationID In (select LocationID from jobDB.location where Area='".$Location.
			"' OR City ='".$Location."');";
	}

				$result = mysqli_query($conn,$query);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck>0){
					

					while($row=mysqli_fetch_assoc($result)){
						echo '<table class="table">';
						echo '<tr><td>';
						echo '<form action="showJobDetails.php" method="POST">';

						echo '<input type="hidden" name="jobID" value="'.$row['jobID'].'">';

						echo '<hr><h2> '.$row['Name'].' </h2>';

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

						

						echo '<input type="submit" name="See Details" value="See Details">';

						echo '</form><br>';

						echo '</td></tr>';	

						echo '</table>';

					}
				}

				

	}

	else if($_SERVER['REQUEST_METHOD'] === 'GET'){
		$Category9 = $_GET['Category'];

		$query9 = "select * from jobDB.job where jobType like '%".$Category9."%' ;";

		$result9 = mysqli_query($conn,$query9);
				$resultCheck9 = mysqli_num_rows($result9);

				if($resultCheck9>0){
					

					while($row=mysqli_fetch_assoc($result9)){
						echo '<table >';
						echo '<tr><td>';
						echo '<form action="showJobDetails.php" method="POST">';

						echo '<input type="hidden" name="jobID" value="'.$row['jobID'].'">';

						echo '<hr><h2> '.$row['Name'].' </h2>';

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

						

						echo '<input type="submit" name="See Details" value="See Details">';

						echo '</form><br>';

						echo '</td></tr>';	

						echo '</table>';

					}
				}

	}
	
	

	?>

</body>
</html>
<?php

session_start();
if($_SESSION["loggedInType"]=="Admin"){

?>

<!DOCTYPE html>
<html>
<head>
	<title>Chakri Bakri</title>

	<style type="text/css">

		body{
			
		}
		
		
		table{
			border-radius: 25px;
		    background: #B2ECF5;
		    padding: 20px; 
		    width: 60%;
		    
		}
		
	</style>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body align="center">

	
	<div>
		<h2>:::Company Request:::</h2>

		<?php

			$companyID = "";
			$companyName ="";
			$referanceName = "";
			$referancePhone ="";
			$referanceDetails ="";

				include('includes/dbh.php');
				$query = "select * from jobDB.company where Confirm=0;";

				$result = mysqli_query($conn,$query);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck>0){
					while($row=mysqli_fetch_assoc($result)){
						$companyID = $row['companyID'];
						$companyName =$row['Name'];
						$referanceName = $row['ContactPersonName'];
						$referancePhone =$row['ContactPersonPhone'];
						$referanceDetails =$row['ContactPersonDetails'];

						echo '<h3>'.$companyName.'</h3>';
						echo 'Contact: '.$referanceName.'<br>';
						echo 'Phone: '.$referancePhone.'<br>';
						echo 'Details: '.$referanceDetails.'<br>';

						echo '<a href="handleAdminApprove.php?companyID='.$companyID.'">APPROVE</a>';
						echo '<hr>';
					}
				}

		?>


		
	</div>
	




			
	

</body>
</html>

<?php  

}
else{
	echo '<h1>Invalid Request....</h1>';
}

?>

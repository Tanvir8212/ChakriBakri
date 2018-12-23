
<?php
session_start();
	if($_SESSION["loggedInType"]=="User"){



	include('includes/dbh.php');

	
	error_reporting(0);

	$cvID ="";
	$fullName ="";

	$query = "select * from jobDB.JobSeeker where uID='".$_SESSION["loggedIn"]."';";


			$result = mysqli_query($conn,$query);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck>0){
					while($row=mysqli_fetch_assoc($result)){
						$cvID =$row['cvID'];
					}
				}
	$query1 = "select * from jobDB.cv where cvID='".$cvID."';";

			$result1 = mysqli_query($conn,$query1);
			$resultCheck1 = mysqli_num_rows($result1);

			if($resultCheck1>0){
					while($row=mysqli_fetch_assoc($result1)){
						$fullName =$row['Full Name'];
					}
				}

	if($fullName==""){

		echo "
		<script type=\"text/javascript\">

		

		setInterval(function1,5000);

		function function1(){
			alert('Please build your cv first');
		}

		</script>


		";
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Chakri Bakri</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

	<style type="text/css">
		
		.topMenu{
			height: 300px;
			width: 100%;
			overflow: hidden;
			border-radius: 20px;
			background-image: url("banner.jpg");
		}

		
		.topButton{
			height: 50px;
			width:  100px;
			border-radius: 20px;
			background-color: #8BE5F9;
		}

		.middle{
			height: 600px;
			width: 100%;
			overflow: hidden;
			border-radius: 20px;
			background-image: url("job.png");
			margin-top: 20px;

		}
		body{
			margin-left: 10%;
			margin-right: 10%;
		}

		
	</style>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body>
	<div class="container">

		<nav class="navbar navbar-default">

			<nav class="navbar navbar-header">
				<nav class="navbar-brand">
					<a href="userHome.php">CHAKRI BAKRI</a>
				</nav>
				
			</nav>

			<nav class="nav navbar-nav navbar-right">
				<ul class="nav navbar-nav navbar-right">
				
				<li>
					<form action="buildMyCv.php" style="  margin-right: 20px; margin-top: 10px;" >
					<input type="submit" name="buildMyCv" value="Build My CV" class="btn btn-primary">
					</form>	
				</li>

				<li>
					<form action="userHome.php" style="  margin-right: 20px; margin-top: 10px;" >
					<input type="submit" name="Home" value="Go to Home" class="btn btn-primary">
					</form>
				</li>

				<li>
					<form action="viewProfile.php" style=" margin-right: 20px; margin-top: 10px;" >
					<input type="submit" name="viewProfile" value="View My CV" class="btn btn-primary">
					</form>
				</li>

				<li>
					<form action="editProfile.php" style="margin-right: 20px;  margin-top: 10px;" >
					<input type="submit" name="editProfile" value="Edit My CV" class="btn btn-primary">
					</form>
				</li>

				<li>
					<form action="handleLogout.php" style=" margin-right: 40px;  margin-top: 10px; " >
					<input type="submit" name="logout" value="Logout" class="btn btn-primary">
					</form>
				</li>
				
				
				

				
				

				
				

				
				

				</ul>
			</nav>

		</nav>


		

		

		

		

		

		


	<div class="topMenu">

		
	<?php
	include('commonHome.php');

	}

	else{
		echo '<h1> Invalid request... </h1>';
	}

?>	
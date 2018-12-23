 <?php

session_start();
error_reporting(0);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Chakri Bakri</title>

	<style type="text/css">

		body{
			background-color: #ACD0FE;
			padding-left: 10%;
			padding-right: 10%;

		}
		
		.topButton{
			height: 50px;
			width:  200px;
			border-radius: 20px;
			background-color: #8BE5F9;
		}

		.middle{
			height: 700px;
			width: 100%;
			overflow: hidden;
			border-radius: 20px;
			background-image: url("companyImage.jpg");
			margin-top: 20px;

		}
		.last{
			height: 400px;
			width: 100%;
			overflow: hidden;
			border-radius: 20px;
			background-image: url("companyLast.jpg");
			margin-top: 20px;

		}
		table{
			border-radius: 25px;
		    background: #B2ECF5;
		    padding: 20px; 
		    width: 60%;
		    
		}

		.newButton{
			background-color: #98B7F9;
			background: #98B7F9; 

		}

		iframe{
			border-radius: 2px;

		}
		
		
	</style>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body>

	<nav class="navbar navbar-default">

	<nav class="navbar-header">
		<a class="navbar-brand" href="companyHome.php">Chakri Bakri</a>
	</nav>
  	
  	
  	
  	<nav class="nav navbar-nav navbar-right">
  		<ul class="nav navbar-nav navbar-right">

  			<li>
  				<form action="viewCompanyProfile.php" style="float: right; margin-top: 10px; margin-right: 10px;" >
					<input type="submit" name="View Company Profile" value="View Company Profile" class="btn btn-primary">
				</form>
  			</li>

  			<li>
  				<form action="editCompanyProfile.php" style="float: right;  margin-top: 10px; margin-right: 10px;" >
					<input type="submit" name="Edit Company Profile" value="Edit Company Profile" class="btn btn-primary">
				</form>
  			</li>
  			
  			<li>				
  				<form action="handleLogout.php" style="float: right;  margin-top: 10px; margin-right: 40px;" >
					<input type="submit" name="Logout" value="Logout" class="btn btn-primary">
				</form>
  			</li>

  		</ul>
  		
  	</nav>


	</nav>

	<div class="container" >

		<div class="row row-eq-height" >
			<div class="col-lg-3" >

				<form action="#">
					<input type="submit" name="OfferJob" value="Offer Job" class="btn btn-success btn-block" style="margin-top: 100%;" id="offerJob">
				</form>

				<form action="#">
					<input type="submit" name="OfferJob" value="See Applicants" class="btn btn-success btn-block " style="margin-top: 30px;" id="applicant">
				</form>
				
				
			</div>

			<div class="col-lg-9" >

				<div>

				<iframe src="jobOffer.php" style=" height: 600px; width: 100%; display: none; " id="iframe1" ></iframe>

				<iframe src="applicants.php" style=" height: 600px; width: 100%; display: none;" id="iframe2" ></iframe>
					
				</div>

				
			</div>
			
		</div>
		

	</div>

</body>
</html>

<script type="text/javascript">
	
	document.getElementById("offerJob").addEventListener("click",function(){
		document.getElementById("iframe1").style.display = "block";
		document.getElementById("iframe2").style.display = "none";
		
	})

	document.getElementById("applicant").addEventListener("click",function(){
		document.getElementById("iframe1").style.display = "none";
		document.getElementById("iframe2").style.display = "block";

	})

</script>
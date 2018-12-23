<!DOCTYPE html>
<html>
<head>
	<title>Chakri Bakri</title>

	

	<style type="text/css">

		body{
			background-color: #F1E6C9;
		}
		
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

		.container{
			padding-left: 10px;
			padding-right: 10px;
		}

		
		
	</style>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<div class="container" >
	
	<nav class="navbar navbar-default">

	<div class="navbar-header">
		<a class="navbar-brand" href="home.php">Chakri Bakri</a>
	</div>
  	
  	
  	
  	<nav class="nav navbar-nav navbar-right">
  		<ul class="nav navbar-nav navbar-right">
  			
  			<li>				
  				<a href="#" id="SignUp">SignUp<i class="fa fa-user-plus"></i></a>
  			</li>

  			<li>
  				<a href="#" style="margin-right: 20px;" id="login">Login<i class="fa fa-user"></i></a>
  			</li>

  		</ul>
  		
  	</nav>


	</nav>

	<div class="container" id="iframeBody" style=" padding-left: 20%; padding-top: 10%; position: absolute;">
		
	

	<iframe src="login.php" id="iframe1" style="width: 500px; height: 370px; border: 0px; border-radius: 10px; display: none;"></iframe>

	<iframe src="SignUp.php" id="iframe2" style="width: 500px; height: 620px; border: 0px; border-radius: 10px; display: none;"></iframe>

	</div>
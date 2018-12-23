<!DOCTYPE html>
<html>
<head>
	<title>Chakri Bakri | Sign Up</title>

	<style type="text/css">
		
		table{
			border-radius: 25px;
		    background: #B2ECF5;
		    padding: 20px; 
		    
		}

	</style>

	<link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>

<body>

	<div class="container">
		

	
			
		<h3 style="text-align: center; margin-top: 5px;">USER SIGNUP</h3>	
			
		<form action="handleSignUp.php" method="POST">
		
			<div class="form-group">
			<label>User Name:	</label> 
			<input placeholder="User name" type="text" name="userName" class="form-control"  ></input> 
			</div>	

			<div class="form-group">
			<label>Email:	</label>	
			<input type="email" placeholder="Email"  name="email" class="form-control" ></input>	
			</div>	

			<div class="form-group">
			<label >Password:	</label>
			<input type="Password" placeholder="Password" name="password" class="form-control" ></input>
			</div>
		
			<div class="form-group">
			<label>Confirm Password:	</label>
			<input type="Password" placeholder="Confirm Password" class="form-control" name="confirm_password" ></input>
			</div>
		 	
		 	<div class="form-group">
		 			<label>User type: </label>
					<select name="userType" class="form-control">
						
						<option value="JobSeeker">Sign up as job seeker</option>
						<option value="Admin">Sign up as admin</option>

					</select>
			</div>
			
			<div class="form-group" style="text-align: center;">
			<input type="submit" name="submit" value="Sign UP"  class="btn btn-success">
			</div>
		
	</form>

	<div class="form-group">		
		<base target="_parent">
				<form action="companySignup.php" >
					<label style="margin-top: 20px;">Want to sign up as company ?</label>
					<input type="submit" name="" value="Company Signup" class="btn btn-secondary btn-sm" style="margin-left: 20px;" > 
				</form>
				
	</div>	

	</div>



</body>
</html>
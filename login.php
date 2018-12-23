
<!DOCTYPE html>
<html>
<head>
	<title>Chakri Bakri | Login</title>

	<style type="text/css">
		

	</style>

	<link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>

<body>


<div class="container" >
	
	<form action="handleLogin.php" method="POST" onsubmit="return validateForm()" >	
		<base target="_parent">
	
			<div class="form-group ">
			<label style="margin-top: 15px;">User Name:	</label> 
			<input placeholder="User name" type="text" name="userName" id="userName" class="form-control" ></input> 
			<p id="userNameWarning" style="color:red; text-decoration: bold;"></p>
			</div>
			
			<div class="form-group ">
			<label >Password:	</label>	
			<input type="Password" placeholder="Password" name="password" id="password" class="form-control"></input>
			<p id="PasswordWarning" style="color:red; text-decoration: bold;"></p>
			</div>

			<div class="form-group ">
				<select name="loginType" multiple class="form-control">
					
					<option value="1" selected="selected">Login as job seeker</option>
					<option value="2">Login as company</option>
					<option value="3">Login as admin</option>

				</select>
			</div>

			<div class="form-group " style="text-align:center;">

				<input type="submit" name="submit" value="Login" id="submit" class="btn btn-success" >
			</div>

		
		
		
	</form>

</div>

</body>
</html>


<script type="text/javascript">
	
	function validateForm(){
		document.getElementById("userNameWarning").innerHTML="";
		document.getElementById("PasswordWarning").innerHTML="";


		if(document.getElementById("userName").value.trim() === ""){
			document.getElementById("userNameWarning").innerHTML="*User Name can not be empty...";			
			return false;
		} 

		if(document.getElementById("password").value.trim() === ""){
			document.getElementById("PasswordWarning").innerHTML="*Password can not be empty...";
			
			return false;
		} 
		if(document.getElementById("password").value.length <3 ){
			document.getElementById("PasswordWarning").innerHTML="*Password must be greater than 3 letter...";
			
			return false;
		} 

		return true;

		
	}



</script>



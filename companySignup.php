<?php 

session_start();

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Comany Profile</title>
		
		<style>
		body{
			padding-left: 20%;
			padding-right: 20%;
		}
		</style>
		
		
	</head>
	
	<body >
	
	<h1 align="center" style="color:DarkBlue;">Comany | SignUp</h1>
	<hr>
	
	<form action="handleCompanySignup.php" method="POST">

	<h3 style="color:DarkBlue; background-color: #F0F0F0"><u>Account Information</u></h3> </td>
		
	<table border="0" >
	
	<tr>
		<td width="300" height="50"><label>User Name:	</label> </td>
		<td ><input placeholder="User name" type="text" name="userName" style="width:400px" ></input> </td>
	</tr>

	<tr>
		<td width="300" height="50"><label>Password:	</label> </td>
		<td ><input placeholder="Password" type="text" name="password" style="width:400px" ></input> </td>
	</tr>

	<tr>
		<td width="300" height="50"><label>Confirm Password:	</label> </td>
		<td ><input placeholder="Confirm Password" type="text" name="confirmPassword" style="width:400px" ></input> </td>
	</tr>
	
	
	
	</table>
	
	<h3 style="color:DarkBlue; background-color: #F0F0F0"><u>Company Details</u></h3> </td>
	
	
	
	<table border="0" >

		<tr>
			<td height="40" width="300"><label>Company Name:	</label></td>
			<td><input type="text" placeholder="Name"  name="companyName" style="width:400px" value="<?php echo $_SESSION["companyName"] ?>"></input></td>
		</tr>

		<tr>
			<td height="40"><label>Company Type:	</label></td>
			<td>

				<?php

				include('includes/dbh.php');

				$query = "select * from jobType;";
				$result = mysqli_query($conn,$query);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck>0){
					while($row=mysqli_fetch_assoc($result)){
						//$_SESSION["jobType"] = $row['type'];
						//echo '<input type="checkbox" name="companyType">'.fgets($file);
						echo '<input type="radio" name="companyType[]" id="companyType"  value="'.$row['type'].'">'.$row['type']. "  ";
					}
				}

				?>

				
				
			</td>
		</tr>

	
	
	<tr>
		<td height="40"><label>Phone:	</label></td>
		<td><input type="text" placeholder="Phone"  name="phone"style="width:400px" value="<?php echo $_SESSION["Mobile"] ?>"></input></td>
	</tr>
	
	
	
	<tr>
	
		<td height="60"><label>Address:	</label></td>
		
		
		
		<td><label>House:	</label>
		<input type="text" placeholder="House"  name="house"style="width:400px" value="<?php echo $_SESSION["road"] ?>"></input></td>
		
		
		
		<td><label>Road:	</label>
		<input type="text" placeholder="Road"  name="road"style="width:400px" value="<?php echo $_SESSION["road"] ?>"></input></td>
		
		
	
	</tr>
	
	
	<tr>
	
		<td height="40"><label>City:	</label></td>
			<td><select  name="city" style="width:400px">
					<option value="Dhaka">Dhaka</option>
					<option value="Khulna">Khulna</option>
					<option  value="Rajshahi">Rajshahi</option>
					<option value="Barisal">Barisal</option>
					<option value="Chittagong">Chittagong</option>
					<option value="Others">Others</option>
			</select></td>
			
	</tr>
	<tr>
			
		<td height="40"><label>Area:	</label></td>
			<td><select name="area" style="width:400px">
					<option value="Banani">Banani</option>
					<option value="Kuratoli">Kuratoli</option>
					<option value="Mirpur">Mirpur</option>
					<option value="Khigaon">Khigaon</option>
					<option value="Motijhil">Motijhil</option>
					<option value="Hatir">Hatir Jhil</option>
			</select></td>
		
	
	</tr>
	
	
	</table>
	
	<h3 style="color:DarkBlue;  background-color: #F0F0F0" height="70"><u>Contact Person</u></h3> </td>
	
	<table>
	<tr>
		<td width="250" height="40"><label>Contact Person's Name:	</label> </td>
		<td><input type="text" placeholder="Contact Person Name"  name="contactPersonName"style="width:400px" value="<?php echo $_SESSION["contactPersonName"] ?>"></input></td>
	</tr>
	
	<tr>
		<td width="300" height="40"><label>Contact Person's Designation:	</label> </td>
		<td><input type="text" name="Designation" width="250" height="250px" style="width:400px" value="<?php echo $_SESSION["Designation"] ?>"></input></td>	
	</tr>
	<tr>
		<td width="300" height="40"><label>Contact Person's Mobile:  </label> </td>
		<td><input type="text" name="Mobile" width="250" height="250px" style="width:400px" value="<?php echo $_SESSION["Mobile"] ?>"></input></td>	
	</tr>
	
	<tr>
		<td width="300" height="40"><label>Contact Person's Email :	</label> </td>
		<td><input type="Email" name="CPEmail" width="250" height="250px" style="width:400px" value="<?php echo $_SESSION["CPEmail"] ?>"></input></td>	
	</tr>

	<tr>
		
		<td colspan="2">
			<h4>*** We will contact with you after a successful sign up...</h4>

		</td>

	</tr>
	
	
	</table>
	<br><br><br>



	<input type="submit" value="Request" style="margin-left:500px"></input>
	
	
	
	</form>
	</body>
</html>
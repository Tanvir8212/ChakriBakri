<?php
	session_start();
	error_reporting(0);

	$_SESSION['name1'] = "Tanvir Mahmud Khan"; 
	$_SESSION['email1'] = "sajid8212@gmail.com"; 
	$_SESSION['phone1'] = "01554035483"; 
	$_SESSION['location1'] = "Rupnagar R/A, Mirpur-2"; 


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Profile</title>
		
		<style>
		body{
			padding-left: 20%;
			padding-right: 20%;
		}
		</style>
		
	</head>
	
	<body >
	
	<h1 align="center" style="color:DarkBlue;">Build Profile</h1>
	<hr>
	
	<form action="handleEditProfile1.php" method="POST">
		<input type="hidden" name="cvID" value="<?php echo $cvID ?>">

	<h3 style="color:DarkBlue; background-color: #F0F0F0"><u>Personal Information</u></h3> </td>
		
	<table border="0" >
	
	<tr>
		<td width="300" height="50"><label>Name:	</label> </td>
		<td ><input placeholder="Full name" type="text" name="name" style="width:400px" value="<?php echo $_SESSION['name1'] ?>"></input> </td>
	</tr>
	
	<tr>
		<td height="40"><label>Email:	</label>	</td>
		<td><input type="email" placeholder="Email"  name="email"style="width:400px" value="<?php echo $_SESSION['email1'] ?>"></input>	</td>
	</tr>
	

	
	
	
	<tr>
		<td height="40"><label>Phone:	</label></td>
		<td><input type="text" placeholder="Phone"  name="phone"style="width:400px" value="<?php echo $_SESSION['phone1'] ?>"></input></td>
	</tr>
	
	
	
	<tr>
	
		<td height="60"><label>Address:	</label></td>
		
		
		
		<td>
		<input type="text" placeholder="location"  name="location"style="width:400px" value="<?php echo $_SESSION['location1'] ?>"></input></td>

	</tr>

	</table>
	
	<h3 style="color:DarkBlue; background-color: #F0F0F0"><u>Academic Information</u></h3> </td>
	
	
	
	<table border="0" >
	
	<tr>
		<td height="50"> <h4>School Secondary Certificate</h4> </td>
	</tr>
	
	<tr>
		<td width="250" height="40"><label>Name of institution:	</label> </td>
		<td width="100"><input placeholder="Name of institution" type="text" name="ssc_institution_name" style="width:400px" value="St Joseph Higher Secondary School"></input> </td>
	</tr>
	
	<tr>
		<td width="250" height="40"><label>Department:	</label> </td>
		<td><input type="text" name="sscDep" value="Science"></td>
	</tr>
	
	<tr>
		<td width="250" height="40"><label>Grade point average:	</label> </td>
		<td width="100"><input placeholder="GPA" type="text" name="ssc_gpa" style="width:400px" value="5"></input> </td>
	</tr>
	
	<tr>
		<td width="300" height="50"> <h4>Higher School Secondary Certificate</h4> </td>
	</tr>
	
	<tr>
		<td width="250" height="40"><label>Name of institution:	</label> </td>
		<td width="100"><input placeholder="Name of institution" type="text" name="hsc_institution_name" style="width:400px" value="St Joseph Higher Secondary School"></input> </td>
	</tr>
	
	<tr>
		<td width="250" height="40"><label>Department:	</label> </td>
		<td><input type="text" name="hscDep" value="Science"></td>
	</tr>
	
	<tr>
		<td width="250" height="40"><label>Grade point average:	</label> </td>
		<td width="100"><input placeholder="GPA" type="text" name="hsc_gpa"style="width:400px"  value="5"></input> </td>
	</tr>
	
	<tr>
		<td  height="50"> <h4>Undergraduation</h4> </td>
	</tr>
	
	<tr>
		<td width="250" height="40"><label>Name of institution:	</label> </td>
		<td width="100"><input placeholder="Name of institution" type="text" name="under_institution_name" style="width:400px"  value="American International University- Bangladesh"></input> </td>
	</tr>
	
	<tr>
		<td width="250" height="30"><label>Degree:	</label> </td>
		<td><input type="text" name="underDegree" value="BSc in Computer Science"></td>
	</tr>
	
	<tr>
		<td width="250" height="40"><label>CGPA:	</label> </td>
		<td width="100"><input placeholder="CGPA" type="text" name="under_cgpa" style="width:400px"  value="3.69"></input> </td>
	</tr>
	
	<tr>
		<td width="250" height="40"><label>Credits:	</label> </td>
		<td width="100"><input placeholder="Credits" type="text" name="under_credits"style="width:400px"  value="120" ></input> </td>
	</tr>
	
	<tr>
		<td  height="50"> <h4>Post Graduation</h4> </td>
	</tr>
	
	<tr>
		<td width="250" height="40"><label>Name of institution:	</label> </td>
		<td width="100"><input placeholder="Name of institution" type="text" name="post_institution_name" style="width:400px"  value="American International University- Bangladesh"></input> </td>
	</tr>
	
	<tr>
		<td width="250" height="40"><label>Degree:	</label> </td>
		<td><input type="text" name="postDegree" value="MSc in CS"></td>
	</tr>

	<tr>
		<td width="250" height="40"><label>CGPA:	</label> </td>
		<td width="100"><input placeholder="CGPA" type="text" name="post_cgpa" style="width:400px" value="3.8"></input> </td>
	</tr>
	
	
	</table>
	
	<h3 style="color:DarkBlue;  background-color: #F0F0F0" height="70"><u>Expertises</u></h3> </td>
	
	<table>
	<tr>
		<td width="250" height="40"><label>Computer Expertise:	</label> </td>
		<td><input type="text" name="computerExpertise" value="php, asp.net"></input>
		</td>
	</tr>
	
	<tr>
		<td width="300" height="40"><label>Onthers (if needed):	</label> </td>
		<td><input type="text" name="others" width="250" height="250px" style="width:400px" value=""></input></td>	
	</tr>
	
	
	</table>
	<br><br><br>

	<input type="submit" value="Confirm" style="margin-left:500px"></input>
	
	
	
	</form>
	</body>
</html>
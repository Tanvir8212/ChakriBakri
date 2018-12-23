<!DOCTYPE html>
<html>
	<head>
		<title>My CV</title>
	</head>
	<body style="font-size:120%;">

		<?php

			include('includes/dbh.php');
			session_start();

			$cvID ="";
			$fullName ="";
			$location ="";
			$phone ="";
			$locationId ="";
			$sscInstitute ="";
			$sscDep ="";
			$sscGpa ="";
			$sscYear ="";
			$hscInstitute ="";
			$hscDep ="";
			$hscGpa ="";
			$hscYear ="";
			$underInstitute ="";
			$underDegree ="";
			$underCgpa ="";
			$underYear ="";
			$underOutOfCgpa ="";
			$postInstitute ="";
			$postDegree ="";
			$postCgpa ="";
			$postYear ="";
			$postOutOfCgpa ="";
			$computerExpertise ="";
			$details ="";
			$referencePersonName ="";
			$referencePersonPhone ="";
			$referencePersonDetails ="";
			$email ="";

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
						$location =$row['Location'];						
						$phone =$row['Phone'];						
						$locationId =$row['LocationID'];						
						$sscInstitute =$row['sscInstitute'];						
						$sscDep =$row['sscDepartment'];						
						$sscGpa =$row['sscGPA'];						
						$sscYear =$row['sscYear'];						
						$hscInstitute =$row['hscInstitute'];						
						$hscDep =$row['hscDepartment'];						
						$hscGpa =$row['hscGPA'];						
						$hscYear =$row['hscYear'];						
						$underInstitute =$row['underInstitute'];						
						$underDegree =$row['underDegree'];						
						$underCgpa =$row['underCGPA'];						
						$underYear =$row['underOutOfCGPA'];						
						$underOutOfCgpa =$row['underYear'];						
						$postInstitute =$row['postInstitute'];						
						$postDegree =$row['postDegree'];						
						$postCgpa =$row['postCGPA'];						
						$postYear =$row['postOutOfCGPA'];						
						$postOutOfCgpa =$row['postYear'];						
						$computerExpertise =$row['computerExpertise'];						
						$details =$row['details'];						
						$referencePersonName =$row['refrencePersonaName'];						
						$referencePersonPhone =$row['refrencePersonaPhone'];						
						$referencePersonDetails =$row['refrencePersonaDetails'];
						$email =$row['Email'];

					}
				}

				if(isset($_GET)){
			$cvID ="";
			$fullName ="";
			$location ="";
			$phone ="";
			$locationId ="";
			$sscInstitute ="";
			$sscDep ="";
			$sscGpa ="";
			$sscYear ="";
			$hscInstitute ="";
			$hscDep ="";
			$hscGpa ="";
			$hscYear ="";
			$underInstitute ="";
			$underDegree ="";
			$underCgpa ="";
			$underYear ="";
			$underOutOfCgpa ="";
			$postInstitute ="";
			$postDegree ="";
			$postCgpa ="";
			$postYear ="";
			$postOutOfCgpa ="";
			$computerExpertise ="";
			$details ="";
			$referencePersonName ="";
			$referencePersonPhone ="";
			$referencePersonDetails ="";
			$email ="";

			$query = "select * from jobDB.JobSeeker where uID='".$_GET["applicantID"]."';";


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
						$location =$row['Location'];						
						$phone =$row['Phone'];						
						$locationId =$row['LocationID'];						
						$sscInstitute =$row['sscInstitute'];						
						$sscDep =$row['sscDepartment'];						
						$sscGpa =$row['sscGPA'];						
						$sscYear =$row['sscYear'];						
						$hscInstitute =$row['hscInstitute'];						
						$hscDep =$row['hscDepartment'];						
						$hscGpa =$row['hscGPA'];						
						$hscYear =$row['hscYear'];						
						$underInstitute =$row['underInstitute'];						
						$underDegree =$row['underDegree'];						
						$underCgpa =$row['underCGPA'];						
						$underYear =$row['underOutOfCGPA'];						
						$underOutOfCgpa =$row['underYear'];						
						$postInstitute =$row['postInstitute'];						
						$postDegree =$row['postDegree'];						
						$postCgpa =$row['postCGPA'];						
						$postYear =$row['postOutOfCGPA'];						
						$postOutOfCgpa =$row['postYear'];						
						$computerExpertise =$row['computerExpertise'];						
						$details =$row['details'];						
						$referencePersonName =$row['refrencePersonaName'];						
						$referencePersonPhone =$row['refrencePersonaPhone'];						
						$referencePersonDetails =$row['refrencePersonaDetails'];
						$email =$row['Email'];

					}
				}



			

		}

		echo '<h2 align="center">'.$fullName.'</h2>';

		echo '<p align="center">Student, '.$underInstitute;
			echo '<br/>Phone: '. $phone;
			echo '<br>Email: '. $email;




		echo '</p>';
		echo '<hr>';

		echo '<h3 style="color:DarkBlue; background-color: #F0F0F0">Personal Profile</h3>';
		echo 'Name: '.$fullName. '<br/>';
		echo 'Date of Birth : 09 September 1996<br/>';
		
		echo 'Location: '.$location.'<br/>';
		

		echo '<br/>';

		echo '<h3  style="color:DarkBlue; background-color: #F0F0F0">Academic Profile</h3>';
		echo '<table border="1">';
			echo '<tr height="50" align="center">';
				echo '<th width="450">Degree</th>';
				echo '<th width="450">Institute</th>';
				echo '<th  width="200">Result</th>';
				echo '<th  width="300">Department</th>';
			echo '</tr>';
			echo '<tr height="50" width="100" align="center">';
				echo '<td>Secondary School Certificate (SSC)</td>';
				echo '<td>'.$sscInstitute. '</td>';
				echo '<td> '.$sscGpa. '<sup>out of 5.00</sup></td>';
				echo '<td>'.$sscDep.'</td>';

			echo '</tr>';
			echo '<tr height="50" width="100" align="center">';
				echo '<td>Higher Secondary Certificate (HSC)</td>';
				echo '<td>'.$hscInstitute. '</td>';
				echo '<td> '.$hscGpa. '<sup>out of 5.00</sup></td>';
				echo '<td>'.$hscDep.'</td>';

			echo '</tr>';
			echo '<tr height="50" width="100" align="center">';
				echo '<td>'.$underDegree. '</td>';
				echo '<td>'.$underInstitute. '</td>';
				echo '<td> '.$underCgpa. '<sup>out of 4.00</sup></td>';
				echo '<td>'.$underDegree. '</td>';

			echo '</tr>';

		echo '</table>';
		echo '<br/>';


		echo '<h3 style="color:DarkBlue; background-color: #F0F0F0">Computer Expertise</h3>';
		echo '<ul>';
			echo '<li>'.$computerExpertise.'</li>';
			
		echo '</ul>';

		echo '<h3 style="color:DarkBlue; background-color: #F0F0F0">Others:</h3>';
		echo '<ul>';
			echo '<li>'.$details.'</li>';
		echo '</ul>';

		echo '<h3 style="color:DarkBlue; background-color: #F0F0F0">Reference:</h3>';
		echo '<ul>';
			echo '<li>'.$referencePersonName.'</li>';
			echo 'Details: '.$referencePersonDetails.'<br>';
			echo 'Phone: '.$referencePersonPhone.'<br>';
		echo '</ul>';

		

		echo '<br>';
		echo '<hr>';

		echo '<p align = "right">Tanvir Mahmud Khan </p>';

		?>


	</body>
</html>
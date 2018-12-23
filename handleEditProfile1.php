<?php

error_reporting(0);
session_start();

			$Name = $_POST['name'];
			$email = $_POST['email'];
			
			$phone = $_POST['phone'];
			$location = $_POST['location'];			
			$ssc_institution_name = $_POST['ssc_institution_name'];
			$ssc_department = $_POST['sscDep'];
			$ssc_gpa = $_POST['ssc_gpa'];
			$hsc_institution_name = $_POST['hsc_institution_name'];
			$hsc_department = $_POST['hscDep'];
			$hsc_gpa = $_POST['hsc_gpa'];
			$under_institution_name = $_POST['under_institution_name'];
			$under_degree = $_POST['underDegree'];
			$under_cgpa = $_POST['under_cgpa'];
			$post_institution_name = $_POST['post_institution_name'];
			$post_degree = $_POST['postDegree'];			
			$post_cgpa = $_POST['post_cgpa'];
			$computer_expertise = $_POST['computerExpertise'];
			$others = $_POST['others'];

			$i = strlen($email);


			if($Name==null || $email==null ||  $phone==null ||  $location==null ||  $ssc_institution_name==null ||  $ssc_department==null ||  $ssc_gpa==null ||  $hsc_institution_name==null ||  $hsc_department==null ||  $hsc_gpa==null ||  $under_institution_name==null ||  $under_degree==null ||  $under_cgpa==null ){
					echo "***Fill the form properly...";
					include("editProfile.php");
			}


 			else if($email[$i-1]!='m' || $email[$i-2]!='o' || $email[$i-3]!='c' ||  $email[$i-4]!='.' ){
					echo '<h3 align="center">Email must be in correct form...</h3>';
					
			}

			else{
				include('includes/dbh.php');

				$query = "INSERT INTO `cv` (`cvID`, `Full Name`, `Location`, `Phone`, `Email`, `LocationID`, `sscInstitute`, `sscDepartment`, `sscGPA`, `sscYear`, `hscInstitute`, `hscDepartment`, `hscGPA`, `hscYear`, `underInstitute`, `underDegree`, `underCGPA`, `underOutOfCGPA`, `underYear`, `postInstitute`, `postDegree`, `postCGPA`, `postOutOfCGPA`, `postYear`, `computerExpertise`, `details`, `refrencePersonaName`, `refrencePersonaPhone`, `refrencePersonaDetails`) VALUES (NULL, '".$Name."', '".$location."', '".$phone."', '".$email."', '1', '".$ssc_institution_name."', '".$hsc_department."', '".$ssc_gpa."', '2013', '".$hsc_institution_name."', '".$hsc_department."', '".$hsc_gpa."', '2015', '".$under_institution_name."', '".$under_degree."', '".$under_cgpa."', '4', '2019', '".$post_institution_name."', '".$post_degree."', '".$post_cgpa."', '4', '2023', '".$computer_expertise."', '".$others."', 'Saifuddin Saif', '01554035483', 'Teacher, AIUB');";
				mysqli_query($conn,$query);

				$cvID ="";

				$query1 = "select * from cv;";

				$result1 = mysqli_query($conn,$query1);
				$resultCheck1 = mysqli_num_rows($result1);

				if($resultCheck1>0){
					while($row=mysqli_fetch_assoc($result1)){
						$cvID =$row['cvID'];
					}
				}

				$query2 = "insert into jobSeeker (uId,cvId) value ('".$_SESSION["loggedIn"]."',".$cvID.");";
				mysqli_query($conn,$query2);


				echo "<h3>Successfully inserted...</h3>";
				header("Location: userHome.php");
			}

				

?>
<?php

session_start();

include('includes/dbh.php');

$flag=0;

if($_POST['userName']==null || $_POST['password']==null){
	echo '<h3 align="center">Username or password can not be empty...</h3>';
	$flag=1;
}

else {
	$check =0;
	$query = "select * from jobDB.user;";

	if($_POST['loginType']==1){
		//header("Location: userHome.php");
		$query = "select * from jobDB.user where type='JobSeeker';";
	}
 	else if($_POST['loginType']==2){
		//header("location: companyHome.php");
		$query = "select * from jobDB.user where type='Company';";	
	}
	else if($_POST['loginType']==3){
		//header("location: adminHome.php");	
		$query = "select * from jobDB.user where type='Admin';";
	}

				$result = mysqli_query($conn,$query);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck>0){
					while($row=mysqli_fetch_assoc($result)){
						if($row['uID']==$_POST['userName']){
							if($row['password']==$_POST['password']){
								$_SESSION["loggedIn"] = $_POST['userName'];
								if($_POST['loginType']==1){
									$_SESSION["loggedInType"]="User";

									header("Location: userHome.php");
								}
 								else if($_POST['loginType']==2){
 									$_SESSION["loggedInType"]="Company";
									header("location: companyHome.php");	
								}
								else if($_POST['loginType']==3){
									$_SESSION["loggedInType"]="Admin";
									header("location: adminHome.php");	
								}
								
							}
							else{
								echo 'Only the password is wrong...';
								$check =1;
							}
						}
						else if($row['password']==$_POST['password']){
							echo 'Wrong userName... Maybe the password is correct...';
							$check =1;
						}
						
					}
				}
				if($check==0){
					echo 'Both user name & password is wrong...';
				}


}
 
?>
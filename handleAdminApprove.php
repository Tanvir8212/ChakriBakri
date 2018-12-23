
<?php

	include('includes/dbh.php');
	$query = "UPDATE `company` SET `Confirm` = '1' WHERE `company`.`companyID` = ".$_GET['companyID'].";";
	mysqli_query($conn,$query);

	header("Location: adminHome.php");


?>
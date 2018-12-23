
<div align="center">

				<form action="jobSearch.php" method="POST">
		<input type="text" name="Keyword" placeholder="Keyword" class="topButton"  style=" text-align: center; height: 30px; margin-top: 250px; width:200px;  margin-right: 30px; ">
		<input type="text" name="Category" placeholder="Category" class="topButton" style=" text-align: center; height: 30px; margin-top: 250px; width:200px;  margin-right: 30px; ">
		<input type="text" name="Location" placeholder="Location" class="topButton" style=" text-align: center; height: 30px; margin-top: 250px; width:200px;  margin-right: 30px;">
		<input type="submit" name="Search" value="Search for job" class="topButton" style=" text-align: center; height: 30px; margin-top: 250px; width:150px;">
				</form>

			</div>
		
	</div>

	<div class="middle">

		<div style="float: left;">
			<p><h2>Search by Category</h2></p>

			<?php

			session_start();
			
			include('includes/dbh.php');

			$query = "select * from jobType;";
				$result = mysqli_query($conn,$query);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck>0){
					while($row=mysqli_fetch_assoc($result)){
						$_SESSION["jobType"] = $row['type'];
						echo '<a href="jobSearch.php?Category='.$row['type'].'">'.$row['type']. "<br />";
					}
				}

			?>

			
		</div>

		<div style="float: right;">
			<p><h2>Search by Industry</h2></p>

			<?php
				$file = fopen("CategoryIndustry.txt","r");

			while(! feof($file))
			  {
			  echo '<a href="">'.fgets($file). "<br />";
			  }

			fclose($file);
			?>
			
		</div>

	</div>

	</div>

	</div>

</body>
</html>


<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>

	<div class="imgsize7">
		<h3>Customer Details</h3>

			<div>

					<form action="" method="POST">
					<label>
						<input type="text" name="search"  placeholder="Customer email" id="name">
					</label><br><br>

					<input type="submit" name="submit" value="search" class="btn"> <br>
					
					</form>

		 	</div>
	
			<?php 
					include 'config.php';
					if(isset($_POST["submit"])){

					$sql = mysqli_query($conn, " SELECT * FROM `patient` WHERE email = '" . $_POST["search"]."' ") or die ('query failed');					
					$count = mysqli_num_rows($sql);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Name</th>
								<th>Age</th>
								<th>Contact</th>
								<th>Blood Group</th>
								<th>Email</th>
							</tr>";
						while($row=mysqli_fetch_array($sql)){
								echo "<tr>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['age']."</td>";
								
								echo "<td>".$row['phone']."</td>";
								
								echo "<td>".$row['bloodgrp']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}
				}	

			?>
			</div>
	

	
 <?php include ("footer.php"); ?>




</body>
</html>
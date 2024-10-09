<?php include('header.php'); ?>

<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<div class="imgsize6">
		<div class="center">
		<h3>My Appoinment</h3>
	</div>
				<?php 
                   include 'config.php';

                    $sql =mysqli_query($conn, " SELECT * FROM `booking` WHERE userid = '" . $_POST["userid"]."' ") or die('query failed');
                    $count = mysqli_num_rows($sql);

                        if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Patient Name</th>
								<th>Contact</th>
								<th>E-mail</th>
								<th>Date</th>
								<th>Time</th>
							</tr>";
						while($row=mysqli_fetch_array($sql)){
								echo "<tr>";
								echo "<td>".$row['pname']."</td>";
								echo "<td>".$row['phone']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['date']."</td>";
								echo "<td>".$row['time']."</td>";
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

			?>
		<div class="center">
	<a class="a" href="appointment_d.php">Search Again</a>
		</div>
	</div>

 <?php include('footer.php'); ?>

</body>
</html>

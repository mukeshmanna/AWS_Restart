<?php include('header.php'); ?>

<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<div class="imgsize6">
<div class="center">
    <h3>Search Result</h3>
</div>
<?php 
        include 'config.php';

					$sql =mysqli_query($conn, " SELECT * FROM `doctor` WHERE specialist = '" . $_POST["specialist"]."' ") or die('query failed');
					$count = mysqli_num_rows($sql);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Name</th>
								<th>Address</th>
								<th>Mobile</th>
								<th>Email</th>
								<th>Specialization</th>
								<th>Fees</th>
								<th>Book Appointment</th>
								
							</tr>";
						while($row=mysqli_fetch_array($sql)){
								echo "<tr>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['address']."</td>";
								
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['email']."</td>";

								echo "<td>".$row['specialist']."</td>";
								echo "<td>".$row['fees']."</td>";
						?>
							<td><a href="booking.php?doc_id=<?php echo $row['doc_id'] ?>">Book</a></td>;
						<?php 		
									
								echo "</tr>";
						}
						echo "</table>";
					} 
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
		<div class="center">
	<a class="a" href="doctor.php">Search Again</a>
		</div>
	</div>
 <?php include('footer.php'); ?>

</body>
</html>

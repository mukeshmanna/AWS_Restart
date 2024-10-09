
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

                    $sql =mysqli_query($conn, " SELECT * FROM `booking` WHERE email = '" . $_POST["email"]."' ") or die('query failed');
                    $count = mysqli_num_rows($sql);

                        if($count>=1){
							
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Disease Type</th>
								<th>Doctor</th>
								<th>Appoinment Date</th>
								<th>Time</th>
								<th>Action</th>
							</tr>";
						while($row=mysqli_fetch_array($sql)){
								echo "<tr>";
								echo "<td>".$row['specialist']."</td>";
								echo "<td>".$row['dname']."</td>";
								echo "<td>".$row['date']."</td>";
								echo "<td>".$row['time']."</td>";
						?>
								<td><a href="cancel.php?date=<?php echo $row['date'] ?>" onclick="return confirm('Are your sure you want to Cancel?');">Cancel</a></td>;
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
                            <a class="a" href="appointment_p.php">Search Again</a>
				</div>
				</div>
 <?php include('footer.php'); ?>

</body>
</html>
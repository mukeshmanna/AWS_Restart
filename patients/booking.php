<?php include('header.php'); ?>

<?php if(!isset($_SESSION)){

	}  
?>

<?php 
	$doc_id = isset($_GET['doc_id'])?$_GET['doc_id']:"";
	
 ?>

					<?php 
					include 'config.php';
					

							$sql=mysqli_query($conn, "SELECT * FROM `doctor` WHERE doc_id = $doc_id ") or die('query failed');

							if ($sql->num_rows > 0) {
							    while($row  = $sql->fetch_assoc()) {
							        $doc_id   = $row["doc_id"];
							        $name 	= $row["name"];
							        $specialist = $row["specialist"];
							        $contact = $row["contact"];
							        $fees = $row["fees"];
									$userid = $row["user_id"];
							    }
							}
							
							$conn->close();

					?>
		
		<h3>Book Appoinment</h3>
			<div class="imgsize5">
			<div class="form">
				<form action="" method="POST">
					

					<label><br>
						Dr. Name: <br> <input type="text" name="dname" value="<?php echo $name; ?>" id="name">
					</label><br><br>

 					<label>
						Contact:<br> <input type="text" name="dcontact" value="<?php echo $contact; ?>" id="name">
					</label><br><br>
 					
					<label>
						Category:<br> <input type="text" name="specialist" value="<?php echo $specialist; ?>" id="name">
					</label><br><br>

					<label>
						Amount: <br><input type="text" name="fees" value="<?php echo $fees; ?>"id="name" >
					</label><br><br>
					<label>
						Full Name:<br> <input type="text" name="pname" value="" id="name">
					</label><br><br>

 					<label>
						 Phone No:<br> <input type="text" name="phone" value="" id="name">
					</label><br><br>
					<label>
						 E-mail:<br> <input type="email" name="email" value="" id="name">
					</label><br><br>
					<label>
						 Date:<br> <input type="date" name="dates" value="" id="name" min="<?php echo date('Y-m-d'); ?>" required>
					</label><br><br>
					<label>
						 Time:<br> <select name="time" required id="name">
										<option value="">-select-</option>
										<option value="10.00am">10.00 AM</option>
										<option value="11.00am">11.00 AM</option>
										<option value="01.00pm">01.00 PM</option>
										<option value="02.00pm">02.00 PM</option>
										<option value="03.00pm">03.00 PM</option>
										<option value="04.00pm">04.00 PM</option>
									</select>
					</label><br><br>
					<label>
						 Payment:<br> <select name="payment" required id="name">
										<option value="">-select-</option>
										<option value="Gpay">Gpay</option>
										<option value="Paytm">Paytm</option>
										<option value="Cash">Cash</option>
									</select>
					</label><br><br>
					<label>
						  <input type="hidden" name="userid" value="<?php echo $userid; ?>">
					</label><br><br>
					
					<input type="submit" name="submit" class="btn" value="confirm">
					<a href="doctor.php"><button name="" type="" class="btn">Cancel</button></a>
				</form>
                <br>

			</div>
			</div>
	

		<?php

			include 'config.php';
			if(isset($_POST['submit'])){

				$sql = mysqli_query($conn, " INSERT INTO `booking` (dname,userid,dcontact,specialist,fees,pname,phone,email,date,time,payment)
				VALUES ('" . $_POST["dname"] . "','" . $_POST["userid"] . "','" . $_POST["dcontact"] . "','" . $_POST["specialist"] . "', '" . $_POST["fees"] . "','" . $_POST["pname"] . "','". $_POST["phone"] . "','". $_POST["email"] . "','". $_POST["dates"] . "','". $_POST["time"] . "','". $_POST["payment"] . "' )") or die('query failed');

				if ($sql === TRUE) {
				echo "<script>alert('Your booking has been accepted!')</script>";
									} 
				elseif ($sql === TRUE) {
					 echo "<script>alert('There was an Error')<script>";
					}
					$conn->close();
						}
					?>
					
 <?php include('footer.php'); ?>
 </div>
</body>
</html>

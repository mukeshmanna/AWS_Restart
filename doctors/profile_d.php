<?php include('header.php'); ?>


<?php 

include 'config.php';

if(!isset($_SESSION))
	session_start();
	$user_id = $_SESSION['user_id'];
	?>
				<?php 
							include 'config.php';
							$sql= mysqli_query($conn, "SELECT * FROM `doctor` where user_id = '$user_id' ") or die('query failed');
							$row=mysqli_num_rows($sql);
							
							$data=mysqli_fetch_array($sql);
							$name=$data[1];
							$address=$data[2];
							$contact=$data[3];
							$email=$data[4];
							$userid=$data[7];
							$specialist=$data[5];
							$fees=$data[6];
							$pic = $data[9];

							mysqli_close($conn);
				?>

		
			<div class="imgsize4">
			<h3>My Details</h3>
    <div class="form">
				<form action="" method="POST" class="">
					<br>
					<img src="../img/<?php echo @$pic; ?>" style="width:165px;height:115px;" id="name"/>
					<label><br>
						 <input type="file" name="pic" value="<?php {echo @$pic;} ?>" id="name">
					</label><br><br><br>

					<label>
						Name:<br><input type="text" name="name" value="<?php echo $name; ?>" required id="name">
					</label><br><br>

 					<label>
						Address:<br> <input type="text" name="address" value="<?php echo $address; ?>"  required id="name">
					</label><br><br>

					
					<label>
						Contact:<br><input type="text" name="contact" value="<?php echo $contact; ?>"  required="required" id="name" />
					</label><br><br>
 					<label>
						Email:<br><input type="email" name="email" value="<?php echo $email; ?>"  required id="name">
					</label><br><br>
					<label>
						Userid:<br> <input type="text" name="userid" value="<?php echo $userid; ?>"  disabled id="name">
					</label><br><br>
					<label>
						specialization: <br><input type="email" name="email" value="<?php echo $specialist; ?>"  disabled id="name">
					</label><br><br>

					<label>
						Fees:<br><input type="text" name="fee" value="<?php echo $fees; ?>"  disabled id="name">
					</label><br><br>
					<label>
					<input type="submit" name="submit" class="btn" value="Update">
			</form> <br><br>
	</div>

				<?php

						include 'config.php';
						if(isset($_POST['submit'])){
						
							$sql= mysqli_query($conn, "UPDATE `doctor` SET name='" .$_POST["name"]. "' ,address='" .$_POST["address"]."' , contact='" .$_POST["contact"]. "',email='" .$_POST["email"]. "' ,pic='" .$_POST["pic"]. "' WHERE user_id='" . $_SESSION["user_id"] . "'") or die ('query failed');
		
							if ( $sql) {
						    echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?>

<?php 
include ("footer.php");
?>
</div>
</body>
</html>


<?php include('header.php'); ?>


<?php 

include 'config.php';

if(!isset($_SESSION))
	session_start();
	$user_id = $_SESSION['user_id'];
	
?>
<?php

    $sql=mysqli_query($conn, "SELECT * FROM `patient` WHERE patient_id = '$user_id'") or die('query failed');
		
        $row=mysqli_num_rows($sql);
		$data=mysqli_fetch_array($sql);
		$name = $data[1];
		$age = $data[2];
		$contact = $data[3];
		$bgroup = $data[4];
        $email = $data[5];   

    mysqli_close($conn);
?>

	<div class="imgsize1">
    <div class="form">
         <form action="" method="POST">
            <br>
               <h3>Details</h3>
               <label>Full Name:</label><br>
               <input type="text" name="name"  id="name" value="<?php echo $name; ?>"><br><br>
               <label>Age:</label><br>
               <input type="text" name="age"  id="name" value="<?php echo $age; ?>"><br><br>
               <label>Phone No:</label><br>
               <input type="text" name="phone"  id="name" value="<?php echo $contact; ?>"><br><br>
               <label>Blood Group:<br>
               <input type="text" name="bgroup" id="name" value="<?php echo $bgroup; ?>" disabled><br><br>
               <label>Email:</label><br>
               <input type="email" name="email" id="name" value="<?php echo $email; ?>"><br><br>
               <input type="submit" name="submit" class="btn" value="Update">
         </form>
      </div>
	  <?php include('footer.php'); ?>
	</div>

<?php
	include 'config.php';
		if(isset($_POST['submit'])){
							
			$sql=mysqli_query($conn, "UPDATE `patient` SET name='" .$_POST["name"]. "' , age='" .$_POST["age"]."' , phone='" .$_POST["phone"]. "', email='".$_POST["email"]."' WHERE patient_id='" .$user_id. "'") or die('query failed');
		
							if ($sql) {
						    echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
									}
					?> 
</body>
</html>

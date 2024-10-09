<?php include('header.php'); ?>
<?php

if(!isset($_SESSION)){
    $date = isset($_GET['date'])?$_GET['date']:"";
}
	

	

include 'config.php';

if(isset($_GET['date'])) {

		$sql = mysqli_query($conn, " DELETE FROM `booking` WHERE date = '$date' ") or die ('query failed');

        if ($sql === true) {
                echo "<script>alert('Your booking has been Canceled!')</script>";
            } else {
                echo "<script>alert('There was an Error')</script>";
            }
        }
    
?> 
		<div class="center">
                            <a class="a" href="appointment_p.php">Go back</a>
				</div>			
   <?php include('footer.php'); ?>

</body>
</html>

<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>

	<div>
		<h3>View Here</h3>

		 <div>
					<form action="d_appointment_search.php" method="POST">

			<label>
				<input type="text" name="userid" id="name" placeholder="USER ID">			
					</label>
					<input type="submit" name="submit" class="btn" value="Search">
					<br>
					</form>	
		 	</div>
	</div>
 <?php include('footer.php'); ?>

</body>
</html>
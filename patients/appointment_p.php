<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>

	<div>
		<h3>View Here</h3>

		 <div>
					<form action="appointment_search.php" method="POST">

			<label>
				<input type="email" name="email" id="name" placeholder="EMAIL">			
					</label>
					<input type="submit" name="submit" class="btn" value="Search">
					<br>
					</form>	
		 	</div>
	</div>
 <?php include('footer.php'); ?>
</body>
</html>
<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>

	<div>
		<h3>Search Here</h3>

		 <div>
					<form action="search_result.php" method="POST">

			<label>
				Category:<select name="specialist" type="text" id="name">
								<option>-Select-</option>
								<option>General</option>
								<option>Cardiologist</option>
								<option>Bone</option>
								<option>Neurologist</option>
								<option>Gynecologist</option>
								<option>Plastic Surgery</option>
								</select><br>
					</label>
					<input type="submit" name="submit" class="btn" value="Search">
					<br>
					</form>		
		 	</div>
	</div>
 <?php include('footer.php'); ?>

</body>
</html>
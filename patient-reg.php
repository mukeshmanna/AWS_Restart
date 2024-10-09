<?php include('header.php'); ?>

<?php
include 'config.php';
$message = [];
if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $age = mysqli_real_escape_string($conn, $_POST['age']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $bgroup = mysqli_real_escape_string($conn, $_POST['bgroup']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['password'])   ;
   $cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);

   $select = mysqli_query($conn, "SELECT * FROM `patient` WHERE email = '$email'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      if(mysqli_query($conn, "INSERT INTO `patient`(name, age, phone, bloodgrp, email, password) VALUES('$name', '$age', '$phone', '$bgroup', '$email', '$pass')") or die('query failed')){
      echo "<script> alert('registered Sucessfully!!!') </script>";
      header('location:patientlog.php');
      exit;
      } 
   }

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/styles.css">
	<title>Patient regiter page</title>
    </head>
<body background="">
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
<div class="imgsize1">
    <div class="form">
         <form action="" method="POST">
            <br>
               <h3>Register Now</h3>
               <label>Full Name:</label><br>
               <input type="text" name="name"  id="name"><br><br>
               <label>Age:</label><br>
               <input type="text" name="age"  id="name"><br><br>
               <label>Phone No:</label><br>
               <input type="text" name="phone"  id="name"><br><br>
               <label>Blood Group:<br>
               <select name="bgroup" required id="name">
            <option value="">-select-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            </select><br><br>
               <label>Email:</label><br>
               <input type="email" name="email" id="name"><br><br>
               <label>Password:</label><br>
               <input type="password" name="password"  id="name"><br><br>
               <label>Comfirm Password:</label><br>
               <input type="password" name="cpassword" id="name">
               <br><br>
               <input type="submit" name="submit" class="btn" value="register">
               <p>Already a member?<a class="link" href="patientlog.php">&ensp;Login now</a></p>
         </form>
      </div>

<?php include('footer.php'); ?>
</div>
</body>
</html>
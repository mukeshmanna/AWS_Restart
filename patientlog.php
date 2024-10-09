<?php include('header.php'); ?>

<?php
include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);

   $select = mysqli_query($conn, "SELECT * FROM `patient` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['patient_id'];
      $_SESSION['email'] = $row['email'];
      header('location:patients/patient_page.php');
   }else{
      $message[] = 'incorrect password or email!';
   }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/styles.css">
	<title>Patient login page</title>
    </head>
<body>
    
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
<div class="imgsize2">
    <div class="form">
    <br>
        <form action="" method="POST">
        <h3>login now</h3>
        <label>Email:</label><br>
        <input type="email" name="email" id="name"><br><br>
        <label>Password</label><br>
        <input type="password" name="password" id="name"><br><br>
        <input type="submit" name="submit" class="btn" value="login now">
        <p>Not yet a member?<a class="link" href="patient-reg.php">&ensp;Register now</a></p>
        </form>
    </div>
<div>
<?php include('footer.php'); ?>
</body>
</html>
<?php include('header.php'); ?>

<?php
include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $user = mysqli_real_escape_string($conn, $_POST['user']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);

   $select = mysqli_query($conn, "SELECT * FROM `doctor` WHERE user_id = '$user' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['user_id'];
      header('location:doctors/doctor_page.php');
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
	<title>Doctor login page</title>
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
        <label>User ID:</label><br>
        <input type="text" name="user" id="name"><br><br>
        <label>Password</label><br>
        <input type="password" name="password" id="name"><br><br>
        <input type="submit" name="submit" class="btn" value="login now">
        </form>
    </div>
<div>
<?php include('footer.php'); ?>
</body>
</html>
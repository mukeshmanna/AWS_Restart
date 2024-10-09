<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
$email = $_SESSION['email'];

if(!isset($user_id)){
   header('location:../patientlog.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:../patientlog.php');
};
?>
<?php include('header.php'); ?>
<!DOCTYPE html>
<html>
   <head>
   <link rel="stylesheet" href="../css/styles.css">
</head>
    <body>
         <?php
            $select_user = mysqli_query($conn, "SELECT * FROM `patient` WHERE patient_id = '$user_id'") or die('query failed');
            if(mysqli_num_rows($select_user) > 0){
               $fetch_user = mysqli_fetch_assoc($select_user);
            };
         ?>
   <session class="imgsize3">
         <center>
         <p>Welcome to MUNA'S Healthcare
            <br><span><?php echo $fetch_user['name']; ?></span></p>
         <a class="a" href="patient_page.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Are your sure you want to logout?');" class="">Logout</a>
         </center>
   </session>
   <?php include('footer.php'); ?>
    </body>
    </html>
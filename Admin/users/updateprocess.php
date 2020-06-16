<?php
      session_start();
  
   require('../../dbconnection/conn.php');

   if(isset($_POST['userType']) and isset($_POST['username'])){
   $username = $_POST['username'];
   $type = $_POST['userType'];
    

   $sql = " UPDATE `users` SET `userType`='$type' WHERE `username`='$username'";

    if(mysqli_query($con,$sql)){
       echo "success";
    }
    else{
        echo "failed";
    }
  //  header("Location: main.php");
}
header("Location: manageusers.php");
?>
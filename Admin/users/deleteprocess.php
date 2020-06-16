<?php
      session_start();
  
   require('../../dbconnection/conn.php');

   if(isset($_POST['username']) ){
   
    $username = $_POST['username'];
  

   $sql = "DELETE FROM `users` WHERE `username` = '$username'";

    if(mysqli_query($con,$sql)){
       echo "success";
    }
    else{
        echo "failed";
    }
  //  header("Location: main.php");
}
header("Location: deluser.php");
?>
<?php
      session_start();
  
   require('../dbconnection/conn.php');

   if(isset($_POST['name']) and isset($_POST['message'])){
   $name = $_POST['name'];
    $comment = $_POST['message'];
    $date = $_SESSION['date'];
    echo $date;
    $sql = "INSERT INTO `forum_chat`(`name`, `comment`, `date`) VALUES ('$name','$comment','$date')";

    if(mysqli_query($con,$sql)){
       echo "error";
    }
    header("Location: main.php");
}
header("Location: main.php");
?>
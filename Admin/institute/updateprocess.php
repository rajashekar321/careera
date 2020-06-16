<?php
      session_start();
  
   require('../../dbconnection/conn.php');

   if(isset($_POST['name']) and isset($_POST['website'])){
   
    $name = $_POST['name'];
     $id = $_POST['id'];
    $location = $_POST['location'];
    $desc = $_POST['description'];
    $phone = $_POST['phone'];
    $web = $_POST['website'];


    
   $sql = "  UPDATE `institute` SET `name`= '$name',`description`='$desc',`location`='$location',`phone number`='$phone',`website`='$web' WHERE `id`='$id'
   ";

    if(mysqli_query($con,$sql)){
       echo "success";
    }
    else{
        echo "failed";
    }
  //  header("Location: main.php");
}
header("Location: addinsti.php");
?>
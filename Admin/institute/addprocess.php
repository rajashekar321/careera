<?php
      session_start();
  
   require('../../dbconnection/conn.php');

   if(isset($_POST['name']) and isset($_POST['website'])){
   
    $name = $_POST['name'];
    $location = $_POST['location'];
    $desc = $_POST['description'];
    $phone = $_POST['phone'];
    $web = $_POST['website'];

    
   $sql = " INSERT INTO `institute`( `name`, `description`, `location`, `phone number`, `website`) VALUES ('$name','$desc','$location','$phone','$web')";

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
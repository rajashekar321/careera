<?php
      session_start();
  
   require('../../dbconnection/conn.php');

   if(isset($_POST['id']) ){
   
    $id = $_POST['id'];
  

   $sql = "DELETE FROM `university_programs` WHERE `id` = '$id'";

    if(mysqli_query($con,$sql)){
       echo "success";
    }
    else{
        echo "failed";
    }
  //  header("Location: main.php");
}
header("Location: delprog.php");
?>
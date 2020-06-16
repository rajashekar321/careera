<?php
      session_start();
  
   require('../../dbconnection/conn.php');

   if(isset($_POST['key']) and isset($_POST['subject1'])){
   
    $keyword = $_POST['key'];
    $resp1 = $_POST['subject1'];
    $resp2 = $_POST['subject2'];
    $resp3 = $_POST['subject3'];

    
   $sql = " INSERT INTO `alevel_combinations`( `keyword`, `subject1`, `subject2`, `subject3`) VALUES ('$keyword','$resp1','$resp2','$resp3')";

    if(mysqli_query($con,$sql)){
       echo "success";
    }
    else{
        echo "failed";
    }
  //  header("Location: main.php");
}
header("Location: addcombi.php");
?>
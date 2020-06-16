<?php
      session_start();
  
   require('../../dbconnection/conn.php');

   if(isset($_POST['key']) and isset($_POST['subject1'])){
   
    $id = $_POST['id'];
    $keyword = $_POST['key'];
    $resp1 = $_POST['subject1'];
    $resp2 = $_POST['subject2'];
    $resp3 = $_POST['subject3'];

   $sql = " UPDATE `alevel_combinations` SET `keyword`= '$keyword',`subject1`= '$resp1',`subject2`= '$resp2',`subject3`= '$resp3' WHERE `id`= '$id'
   ";

    if(mysqli_query($con,$sql)){
       echo "success";
    }
    else{
        echo "failed";
    }
  //  header("Location: main.php");
}
header("Location: updatecombi.php");
?>
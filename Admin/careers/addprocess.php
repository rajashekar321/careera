<?php
      session_start();
  
   require('../../dbconnection/conn.php');

   if(isset($_POST['name']) and isset($_POST['info'])){
   $name = $_POST['name'];
    $info = $_POST['info'];
    $keyword = $_POST['keyword'];
    $resp1 = $_POST['resp1'];
    $resp2 = $_POST['resp2'];
    $resp3 = $_POST['resp3'];
    $skill1 = $_POST['skill1'];
    $skill2 = $_POST['skill1'];
    $skill3 = $_POST['skill3'];
    
   $sql = " INSERT INTO `careers`( `keyword`, `name`, `info`, `Responasbility1`, `Responasbility2`, `Responasbility3`, `Skill1`, `Skill2`, `skill3`)
     VALUES ('$keyword','$name','$info','$resp1','$resp2','$resp3','$skill1','$skill2','$skill3')";

    if(mysqli_query($con,$sql)){
       echo "success";
    }
    else{
        echo "failed";
    }
  //  header("Location: main.php");
}
header("Location: addcareer.php");
?>
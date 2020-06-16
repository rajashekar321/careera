<?php
      session_start();
  
   require('../../dbconnection/conn.php');

   if(isset($_POST['id']) and isset($_POST['info'])){
   $name = $_POST['name'];
   $id = $_POST['id'];
    $info = $_POST['info'];
    $keyword = $_POST['key'];
    $resp1 = $_POST['resp1'];
    $resp2 = $_POST['resp2'];
    $resp3 = $_POST['resp3'];
    $skill1 = $_POST['skill1'];
    $skill2 = $_POST['skill1'];
    $skill3 = $_POST['skill3'];

 
    
   $sql = "    UPDATE `careers` SET `keyword`= '$keyword',`name`= '$name',`info`= '$info',`Responasbility1`= '$resp1',`Responasbility2`= '$resp2',
   `Responasbility3`= '$resp3',`Skill1`= '$skill1',`Skill2`='$skill2',`skill3`= '$skill3' WHERE `id`= '$id'";

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
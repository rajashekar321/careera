<?php
      session_start();
  
   require('../../dbconnection/conn.php');

   if(isset($_POST['keyword']) and isset($_POST['institute'])){
   
    $id = $_POST['id'];
    $name = $_POST['name'];
    $keyword = $_POST['keyword'];
    $req = $_POST['requirements'];
    $insti = $_POST['institute'];
    $career = $_POST['career_group'];
    $min = $_POST['miniq'];
    $max = $_POST['maxiq'];

 
   $sql = "UPDATE `university_programs` SET `keyword`='$keyword',`institute`='$insti',`name`='$name',`requirements`='$req',
   `minimum IQ Requirement`='$min',`maximum IQ Requirement`='$max',`career_group`='$career' WHERE `id`='$id'
";

    if(mysqli_query($con,$sql)){
       echo "success";
    }
    else{
        echo "failed";
    }
  //  header("Location: main.php");
}
header("Location: addprogram.php");
?>
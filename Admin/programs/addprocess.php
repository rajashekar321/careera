<?php
      session_start();
  
   require('../../dbconnection/conn.php');

   if(isset($_POST['keyword']) and isset($_POST['institute'])){
   
    $name = $_POST['name'];
    $keyword = $_POST['keyword'];
    $req = $_POST['requirements'];
    $insti = $_POST['institute'];
    $career = $_POST['career_group'];
    $min = $_POST['miniq'];
    $max = $_POST['maxiq'];

    
   $sql = " INSERT INTO `university_programs`( `keyword`, `institute`, `name`, `requirements`, `minimum IQ Requirement`, `maximum IQ Requirement`, `career_group`) VALUES ('$keyword','$insti','$name','$req','$min','$max','$career')";

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
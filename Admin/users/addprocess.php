<?php
      session_start();
  
   require('../../dbconnection/conn.php');

   if(isset($_POST['name']) and isset($_POST['username'])){
   $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $pass = md5($_POST['password']);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $type = $_POST['userType'];
    
  

    $sql = "INSERT INTO `users`(`Name`, `Surname`, `Email`, `Phone Number`, `username`, `Password`,`userType`)
    VALUES ('$name','$surname','$email','$phone','$username','$pass','$type')
";
   
   if(mysqli_query($con,$sql)){
       echo "success";
    }
    else{
        echo "failed";
    }
  //  header("Location: main.php");
}
header("Location: addusers.php");
?>
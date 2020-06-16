<?php
        session_start();
        $_SESSION['signup'] = null;
        $_SESSION['signup'] = false;
        
    require('../dbconnection/conn.php');
    
    if( isset($_POST['submit']) ){ 
       
    if(isset($_POST['Fname']) and isset($_POST['Username']) and isset($_POST['Password']) and isset($_POST['Lname'])) {
        $Fname = $_POST['Fname']; 
        $Lname = $_POST['Lname'];
        $Username = $_POST['Username'];
        $Phone = $_POST['Phone'];
        $Email = $_POST['E-mail'];
        $userTyp = 'general';
        $Password = md5($_POST['Password']);
       
    
    // echo $Phone.$Lname;

    $sql = "INSERT INTO `users`(`Name`, `Surname`, `Email`, `Phone Number`, `username`, `Password`) VALUES ('$Fname','$Lname','$Email',
    '$Phone','$Username','$Password') ";
   
   $results = mysqli_query($con, $sql);


  
   
    if($results){
        header("location:../iqTest/index.php");
       
    }else{
       echo mysqli_error($con)."<br />";
       $_SESSION['signup'] = "failed";
         header("location: signup.php");
      
    }
}
    }
?>
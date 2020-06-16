<?php
         session_start();
         $_SESSION['login'] = false; 
         $_SESSION['logon'] = null; 

         
     
    require('../dbconnection/conn.php');
 
    if( isset($_POST['submit']) ){   
       
       if(isset($_POST['name']) and isset($_POST['password'])){
       $Username = $_POST['name'];
       $Password = md5($_POST['password']);

      

       $sql = "SELECT * FROM `Users` WHERE `Username` = '$Username' and `Password` = '$Password'";
       if( $results = $con->query($sql) ){
        if($results->num_rows == 1){ 
            while($row = $results->fetch_assoc()){
            if($row['userType'] == "general") {
                $_SESSION['login'] = True;
                $_SESSION['username'] = $Username;
               
                header("location:../iqTest/IQ_test1.php");
            }
                elseif($row['userType'] == "admin"  ) {
                $_SESSION['login'] = True;
                 header("location:../Admin/index.php");
             }
        
           
        }
    }else{
        $_SESSION['logon'] = "failed";        
       echo' <script language="javascript">
         alert("Invalid Log In Information");
        javascript:history.go(-1)</script> ';
        
       
    }
} 

       }
    }
?>
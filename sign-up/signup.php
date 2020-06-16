<?php
      session_start();
      $_SESSION['load'] = false;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Career Guidance</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="../pics/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/creative.css">
      <!-- Icons font CSS-->
      <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../sign-up/css/main.css" rel="stylesheet" media="all">
    <link href="../css/main.css" rel="stylesheet" media="all">
    <style>
    body{
        background: -webkit-gradient(linear, left top, left bottom, from(rgba(11, 50, 55, 0.8)), to(rgba(70, 16, 89, 0.8))), url("../pics/study.jpg");
        background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url("../pics/study.jpg");
        background-position: scenter;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
}
  
    }
    </style>

    <script src="main.js"></script>
</head>
<body class ="masthead">
<!-- Navigation -->
<section class ="masthead col-md-12">
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">

      <a class="navbar-brand js-scroll-trigger text-primary"  href="../index.php"> &nbsp Vision CGS</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
  </nav>

    
        <div class="page-wrapper  p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title text-primary text-center">Enter Your Sign Up Information</h2>
                    
                    <form method="POST" action = "sign-up.php">
                        <div class="row row-space">
                            
                            <div class="col-md-6">
                                <div class="input-group">
                                        <label for="inputEmail" class="sr-only">First Name</label>
                                        <input type="text" id="inputEmail"  name = "Fname" class="form-controls col-md-12" placeholder="First Name" required autofocus>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                        <label for="inputEmail" class="sr-only">Last Name</label>
                                        <input type="text" id="inputEmail"  name = "Lname" class="form-controls col-md-12" placeholder="Last Name" required autofocus>
                                </div>
                            </div> 
                        
                        <div class="col-md-6">
                                <div class="input-group">
                                        <label for="inputEmail" class="sr-only">Username</label>
                                        <input type="text" id="inputEmail"  name = "Username" class="form-controls col-md-12" placeholder="Username" required autofocus>
                                </div>
                            </div>
                        
                        <div class="col-md-6">
                                <div class="input-group">
                                        <label for="inputEmail" class="sr-only">Password</label>
                                        <input type="Password" id="inputEmail"  name = "Password" class="form-controls col-md-12" placeholder="Password" required autofocus>
                                </div>
                            </div>
                        
                        <div class="col-md-6">
                                <div class="input-group">
                                        <label for="inputEmail" class="sr-only">E-mail</label>
                                        <input type="email" id="inputEmail"  name = "E-mail" class="form-controls col-md-12" placeholder="email@example.com" required autofocus>
                                </div>
                            </div>
                        
                       
                            
                            <div class="col-md-6">
                                    <div class="input-group">
                                            <label for="inputEmail" class="sr-only">Phone Number</label>
                                            <input type="tel" id="inputEmail"  name = "Phone" class="form-controls col-md-12" placeholder="Phone Number" required autofocus>
                                    </div>
                                </div>
                        
                      
                      
                        <div class="p-t-15 ">
                            <input class="btn align-middle  btn--radius-2 btn--blue"name = "submit" type="submit" value ="Sign Up"/>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

  <?php
 
    
 if( $_SESSION['load'] ==  True and $_SESSION['signup'] ==  "failed"){
   echo'<script>
    alert("Username Aleady Taken, Please pick another One");
   </script>';
 }

?>
  
<footer>
    <?php
        $_SESSION['load'] ==  True;
         include("../home/footer.php"); 
    ?>
</footer>
    
</body>

</html>
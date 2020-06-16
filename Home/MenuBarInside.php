<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- Plugin CSS -->
<!doctype html>
<html lang="en">
  <head>
    <title>Career Guidance</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../pics/icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="css/creative.css" rel="stylesheet">
    <style>
    div.nav-link:hover {
      background-color: #74ccda;
    }
    
    </style>
  </head>
<body>
<hr>


<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

<!-- Theme CSS - Includes Bootstrap -->
<link href="css/creative.css" rel="stylesheet">
<link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="css/creative.css" rel="stylesheet">
<?php

// if(  $_SESSION['login'] != True){
//   header("location:../index.php");
// }
  $home = 'Home';
  $cs = 'Counselling Session'; 
  $ge = 'Get Evaluation'; 
  $in = 'Institutes'; 
  $p = 'Professions'; 
  $f = 'Forum'; 

  if($_SERVER['PHP_SELF'] == '/index.php' ){
    $home = '<div style = "border-radius: 0px 8px 0px 8px;" class = "container bg-light">Home</div>';
  }
  elseif($_SERVER['PHP_SELF'] == '/counselingSession/main.php' or $_SERVER['PHP_SELF'] == '/counselingSession/combinations.php' ){
    $cs = '<div style = "border-radius: 0px 8px 0px 8px;" class = "container  bg-primary">Counselling Session</div>';
  }
  elseif($_SERVER['PHP_SELF'] == '/iqTest/result.php' or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test1.php'or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test2.php' or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test3.php' or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test4.php' or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test5.php' or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test6.php' or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test7.php' or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test8.php' or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test9.php' or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test10.php'  or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test11.php'  or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test11.php'  or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test12.php'  or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test13.php'  or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test14.php'  or $_SERVER['PHP_SELF'] == '/iqTest/IQ_test15.php'){
    $ge = '<div style = "border-radius: 0px 8px 0px 8px;" class = "container bg-light">Get Evaluation</div>';
  }
  elseif($_SERVER['PHP_SELF'] == '/Institutes/main.php' or $_SERVER['PHP_SELF'] == '/Institutes/instiDetails.php' or $_SERVER['PHP_SELF'] == '/counselingSession/programs.php'){
    $in = '<div style = "border-radius: 0px 8px 0px 8px;" class = "container bg-light">Institutes</div>';
  }
  elseif($_SERVER['PHP_SELF'] == '/Professions/main.php' or $_SERVER['PHP_SELF'] == '/Professions/career.php' or $_SERVER['PHP_SELF'] == '/Professions/requirements.php' or $_SERVER['PHP_SELF'] == '/counselingSession/career.php'){
    $p = '<div style = "border-radius: 0px 8px 0px 8px;" class = "container bg-light">Professions</div>';
  }
  elseif($_SERVER['PHP_SELF'] == '/forum/main.php' ){
    $f = '<div style = "border-radius: 0px 8px 0px 8px;" class = "container bg-light">Forum</div>';
  }

?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top  bg-white  id="mainNav">
    <div class="container">
	
      <a class="navbar-brand js-scroll-trigger" href="../index.php">  &nbsp Vision CGS</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link " href="../index.php"><?php echo $home;?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../counselingSession/main.php"><?php echo $cs;?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../iqTest/index.php"><?php echo $ge;?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../Institutes/main.php"><?php echo $in;?></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link " href="../Professions/main.php"><?php echo $p;?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../forum/main.php"><?php echo $f;?> </a>
          </li>
        
        </ul>
       
      </div>
    </div>
  </nav>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/creative.min.js"></script>


<?php
  session_start();
  $_SESSION['p5Visited'] = FALSE;

  
  include("../home/MenuBar.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Question 4</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="practice.css" />
        <script src="main.js"></script>

    </head>

   <body>
      <br /> <br />
      <div class="container">
          <div class="jumbotron">
          <h1 >This Test Measures your Inteligence Quotient (IQ)</h1>
  <p class="lead">Try your best,this test has 15 questions and it is fairly difficult.</p>
  <hr class="my-4">
  <p>Simply Click On Your Answer, Hit submit and Move To The Next Question.</p>
  <hr class="my-4">
 <!-- second change -->
<div class="card border-success mb-3" style="max-width: 40rem;">
  <div class="card-header">Question 4</div>
  <div class="card-body text-success">
    
               <fieldset class="btn-group-vertical">
                  <form method = "get" action = "IQ_test4.php" >
                   100,  95,  <b>?</b>,  79,  68,  <b>?</b>,  40,  23 <br /> <br />
                    What numbers should replace the question marks? <br /> <br />
                    <input type="radio" name="question4" value="answer1" checked="checked" /> <b>23 and 57</b> <br />
                    <input type="radio" name="question4" value="answer2"  /> <b>22 and 55</b> <br />
                    <input type="radio" name="question4" value="answer3"  /> <b>88 and 55</b> <br />
                    <input type="radio" name="question4" value="answer4"  /> <b>33 and 64</b> <br />
                    <input type="radio" name="question4" value="answer5"  /> <b>64 and 22</b> <br /> <br />
                    <input type = "submit" value = "submit" class="btn btn-outline-success btn-sm btn-block>
                  
                  <?php
                  $question4 = "answer1";
                  if(isset($_GET['question4']) != null && $_SESSION['p4Visited'] != 1) {

                   if($_GET['question4'] == "answer3"){
                      $_SESSION['mark'] = $_SESSION['mark'] + 1;

                    }
                    $_SESSION['p4Visited'] = TRUE;/*
                    echo $_GET['question4']. "</br >";
                    echo 'visited: '.$_SESSION['p4Visited']."</br >";
                      echo"Mark Total: ".$_SESSION['mark'];
            */        }


                  ?>
                </fieldset>

</div>
</div>
</div>
</div>
<?php
  include("footer.php");
?>
<hr />
<a href="IQ_test5.php"><button type="button" class="btn btn-outline-secondary">Next Question</button></a>
<!-- fifth change -->
</div>
</div>
          </div>
                  <?php
                  include("../home/footer.php");
                  ?>
</body>

</html>

<?php
      session_start();
    //   echo $_SESSION['mark'];
      $_SESSION['p3Visited'] = FALSE;
    //$_SESSION['visited'] = FALSE ;
    //echo 'Visited: '.$_SESSION['visited'];

    
    include("../Home/MenuBar.php");


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Question 2</title>
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
  <div class="card-header">Question 2</div>
  <div class="card-body text-success">
    

                <fieldset class="btn-group-vertical">
                  <form method = "get" action = "IQ_test2.php"   >
                   Which group of letters is the odd one out? <br />
                    <input type="radio" name="question2" value="answer1" checked="checked" /> <b>CEFH</b> &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp 
                    <input type="radio" name="question2" value="answer2"  /> <b>LNOQ</b> <br />
                    <input type="radio" name="question2" value="answer3"  /> <b>UWXZ</b>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                    <input type="radio" name="question2" value="answer4"  /> <b>PRSU</b> <br />
                    <input type="radio" name="question2" value="answer5"  /> <b>DFGI</b>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp 
                    <input type="radio" name="question2" value="answer6"  /> <b>HJKN</b> <br /> <br />
                    &nbsp    <input type = "submit" value = "submit" class="btn btn-outline-success btn-sm btn-block>
                  </form>
                  <?php
                  $question2 = "answer6";
                  define('visited',TRUE);
                  if(isset($_GET['question2']) != null && $_SESSION['p2Visited'] != 1){
                   if($_GET['question2'] == "answer6"){
                      $_SESSION['mark'] = $_SESSION['mark'] + 1;
                    }
                /*    echo $_GET['question2']. "</br >";
                    echo 'Mark Total: '.$_SESSION['mark'].'</br>';*/
                    $_SESSION['p2Visited'] = TRUE;
                    //echo 'visited: '.$_SESSION['p2Visited'];
                    }


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
<a href="IQ_test3.php"><button type="button" class="btn btn-outline-secondary">Next Question</button></a>
<!-- fifth change -->
</div>
                  </div> </div>
                  <?php
         include("../Home/footer.php");         
                  ?>

</body>

</html>
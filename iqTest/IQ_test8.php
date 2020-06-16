<?php
  session_start();
  $_SESSION['p9Visited'] = FALSE;

  include("../home/MenuBar.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Question 8</title>
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
  <div class="card-header">Question 8</div>
  <div class="card-body text-success">
    
               <fieldset class="btn-group-vertical">
                  <form method = "get" action = "IQ_test8.php" >

                    What letter is three to the right of the letter immediately to the <br />
          left of the letter which is four to the left of the letter G? <br /> <br />
                    <input type="radio" name="question8" value="answer1" checked="checked" /> <b>E</b> <br />
                    <input type="radio" name="question8" value="answer2"  /> <b>F</b> <br />
                    <input type="radio" name="question8" value="answer3"  /> <b>G</b> <br />
                    <input type="radio" name="question8" value="answer4"  /> <b>H</b> <br />
                    <input type="radio" name="question8" value="answer5"  /> <b>C</b> <br /> <br />
                    <input type = "submit" value = "submit" class="btn btn-outline-success btn-sm btn-block>
                  
                  </form>
                  <?php
                  $question8 = "answer1";
                  if(isset($_GET['question8']) != null && $_SESSION['p8Visited'] != 1){
                   if($_GET['question8'] == "answer1"){
                      $_SESSION['mark'] = $_SESSION['mark'] + 1;
                    }
                    $_SESSION['p8Visited'] = TRUE;
                /*    echo $_GET['question8']. "</br >";
                    echo 'visited: '.$_SESSION['p8Visited']."</br >";
                      echo"Mark Total: ".$_SESSION['mark'];
                  */    }


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
<a href="IQ_test9.php"><button type="button" class="btn btn-outline-secondary">Next Question</button></a>
<!-- fifth change -->
</div>
</div>
                  </div>
                  <?php
                  include("../home/footer.php");
                  ?>

</body>

</html>


<?php
  session_start();
    $_SESSION['p14Visited'] = FALSE;

    
    include("../home/MenuBar.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Question 13</title>
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
  <div class="card-header">Question 13</div>
  <div class="card-body text-success">
    
               <fieldset class="btn-group-vertical" >
                  <form method = "get" action = "IQ_test13.php" >
                  &nbsp &nbsp   <img class = "img-fluid" src = "pics/question13.png"/ alt = "image could not be loaded"> <br />
                 What number should replace the question mark? <br />

                <input type="radio" name="question13" value="answer1" checked="checked" /> <b>11</b> <br />
                <input type="radio" name="question13" value="answer2"  /> <b>540</b> <br />
                <input type="radio" name="question13" value="answer3"  /> <b>190</b> <br />
                <input type="radio" name="question13" value="answer4"  /> <b>477</b> <br /> <br />
                <input type = "submit" value = "submit" class="btn btn-outline-success btn-sm btn-block>
                  
                  </form>
                  <?php
                  $question13 = "answer2";
                  if(isset($_GET['question13']) != null && $_SESSION['p13Visited'] != 1){
                   if($_GET['question13'] == "answer2"){
                      $_SESSION['mark'] = $_SESSION['mark'] + 1;
                    }
                    $_SESSION['p13Visited'] = TRUE;
                  /*  echo $_GET['question11']. "</br >";
                    echo 'visited: '.$_SESSION['p11Visited']."</br >";
                      echo"Mark Total: ".$_SESSION['mark'];
                    */  }
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
<a href="IQ_test14.php"><button type="button" class="btn btn-outline-secondary">Next Question</button></a>
<!-- fifth change -->
</div>
</div>
                  </div>
                  <?php
                  include("../home/footer.php");
                  ?>

</body>

</html>

<?php
  session_start();
  $_SESSION['p4Visited'] = FALSE;
// echo $_SESSION['mark'];

include("../home/MenuBar.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Question 3</title>
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
        <div class="card border-success " >
        <div class="card-header">Question 3</div>
        <div class="card-body text-success">

           <fieldset class="btn-group-vertical">
   
               
                  <form method = "get" action = "IQ_test3.php" >
                    <img class = "img-fluid" src = "pics/question3.png"/ alt = "image could not be loaded"> <br />
                    Which figure should replace the question mark? <br />

                  &nbsp &nbsp &nbsp  <input type="radio" name="question3" value="answer1" checked="checked" /><img src = "pics/q3answer1.png"/ alt = "image could not be loaded"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    <input type="radio" name="question3" value="answer2"  /> <img src = "pics/q3answer2.png"/ alt = "image could not be loaded"><br />
                  &nbsp &nbsp &nbsp  <input type="radio" name="question3" value="answer3"  /> <img src = "pics/q3answer3.png"/ alt = "image could not be loaded"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    <input type="radio" name="question3" value="answer4"  /> <img src = "pics/q3answer4.png"/ alt = "image could not be loaded"> <br /> <br />
                    <input type = "submit" value = "submit" class="btn btn-outline-success btn-sm btn-block>
                  </form>
                  <?php
                  $question3 = "answer4";
                  if(isset($_GET['question3']) != null && $_SESSION['p3Visited'] != 1 ){
                   if($_GET['question3'] == "answer4"){
                      $_SESSION['mark'] = $_SESSION['mark'] + 1;

                    //  echo 'visited: '.$_SESSION['p3Visited'];
                    }
                    $_SESSION['p3Visited'] = TRUE;
                    //echo $_GET['question3']. "</br >";
                      // echo" Mark Total: ".$_SESSION['mark'];
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
<a href="IQ_test4.php"><button type="button" class="btn btn-outline-secondary">Next Question</button></a>
<!-- fifth change -->
</div>
                  </div>
                  </div>
                  <?php
                  include("../home/footer.php");
                  ?>
</body>

</html>

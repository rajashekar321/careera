<?php
  session_start();
  $_SESSION['mark'] = 0; //initiate mark variable to zero, so everytime the user restarts the test thier mark is reset
  $_SESSION['p2Visited'] = FALSE;//this variable is usd to check if page 2 has been visited yet,initialized to false
  $_SESSION['visited'] = FALSE ; //this variable is usd to check if the current page has been visited yet,initialized to false

//   echo 'Visited: '.$_SESSION['visited'];
//echo $_SESSION['mark'];


include("../Home/MenuBar.php");


// first change;



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Question 1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" type="text/css" media="screen" href="practice.css" /> -->
        <script src="main.js"></script>

    </head>

    <body>
      <br />
  
      <div class="container">
      <div class="jumbotron">
      <h1 >This Test Measures your Inteligence Quotient (IQ)</h1>
  <p class="lead">Try your best,this test has 15 questions and it is fairly difficult.</p>
  <hr class="my-4">
  <p>Simply Click On Your Answer, Hit submit and Move To The Next Question.</p>
  <hr class="my-4">
 <!-- second change -->
<div class="card border-success " >
  <div class="card-header">Question 1</div>
  <div class="card-body text-success">
    
               <fieldset class="btn-group-vertical" >
                 <!-- third change -->
                  <form method = "get" action = "IQ_test1.php" > 
               <br /><br />     What numbers should replace the question marks? <br />
                    <img class = "img-fluid" src = "pics/question1.png"/ alt = "image could not be loaded"> <br />
                    <input type="radio" name="question1" value="answer1"  /> 4 6 3 7 <br />
                    <input type="radio" name="question1" value="answer2"  /> 7 3 7 4 <br />
                   &nbsp <input type="radio" name="question1" value="answer3"  /> 13 6 2 8 <br />
                    <input type="radio" name="question1" value="answer4"  /> 1 7 6 1 <br /> <br />
                    <input type = "submit" value = "submit" class="btn btn-outline-success btn-sm btn-block>
                  
                    <!-- forth change -->
                    
                  </form> 
                  <?php
                  $question1 = "answer1"; // this  variable's value is set to the correct answer of the question
                  if(isset($_GET['question1']) != null && $_SESSION['visited'] != 1 ){ // condtion checks if the question was answered and the page has'nt been visited yet
                   if($_GET['question1'] == "answer1"){ //checks if the user's answer is the same as the correct answer
                      $_SESSION['mark'] = $_SESSION['mark'] + 1;//if it is correct increament the total mark by 1
                    }
            /*        echo $_GET['question1']. "</br >";
                       echo 'Mark Total: '.$_SESSION['mark'].'</br>';
                       //$_SESSION['visited'] = 1;
                       define('visited',TRUE);
                       echo 'visited: '.visited;
                    */}


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
<a href="IQ_test2.php"><button type="button" class="btn btn-outline-secondary">Next Question</button></a>
<!-- fifth change -->
</div>
         </div>
                  </div>
<?php
                  include("../Home/footer.php");
  ?>
                  </body>
              
              
               </html>
 
               

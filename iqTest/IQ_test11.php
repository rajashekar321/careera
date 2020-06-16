
<?php
  session_start();
    $_SESSION['p12Visited'] = FALSE;

    
    include("../home/MenuBar.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Question 11</title>
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
  <div class="card-header">Question 11</div>
  <div class="card-body text-success">
    
               <fieldset class="btn-group-vertical">
                  <form method = "get" action = "IQ_test11.php" >
                    <img class = "img-fluid" src = "pics/question11.png"/ alt = "image could not be loaded"> <br />
                 What comes next? <br />

                    <input type="radio" name="question11" value="answer1" checked="checked" /><img src = "pics/q11answer1.png"/ alt = "image could not be loaded"> &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp
                    <input type="radio" name="question11" value="answer2"  /> <img src = "pics/q11answer2.png"/ alt = "image could not be loaded"><br />
               &nbsp  &nbsp     <input type="radio" name="question11" value="answer3"  /> <img src = "pics/q11answer3.png"/ alt = "image could not be loaded"> &nbsp  &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp 
                    <input type="radio" name="question11" value="answer4"  /> <img src = "pics/q11answer4.png"/ alt = "image could not be loaded"> <br /> <br />
                    <input type = "submit" value = "submit" class="btn btn-outline-success btn-sm btn-block>
                  
                  </form>
                  <?php
                  $question11 = "answer1";
                  if(isset($_GET['question11']) != null && $_SESSION['p11Visited'] != 1){
                   if($_GET['question11'] == "answer1"){
                      $_SESSION['mark'] = $_SESSION['mark'] + 1;
                    }
                    $_SESSION['p11Visited'] = TRUE;
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
<a href="IQ_test12.php"><button type="button" class="btn btn-outline-secondary">Next Question</button></a>
<!-- fifth change -->
</div>
</div>
                  </div>
                  <?php
                  include("../home/footer.php");
                  ?>

</body>

</html>


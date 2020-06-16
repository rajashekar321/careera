
<?php
  session_start();
  // $_SESSION['error'] = false; 

  

  include("../home/MenuBar.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Question 15</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="practice.css" />
        <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
        <script src="main.js"></script>

    </head>

   <body>
    <div class="container">
      <div class="jumbotron">

          <h1 class="display-3">We are here to guide you!</h1>
  <p class="lead">These results are influenced by the focus and attention you invested in the test,<br>If you are not happy with the results please re-Take the test
  </p>
  <hr class="my-4">
 
 <div style = "border-radius: 5px;" > <img class = "img-fluid" src = "pics/results.png"/ height = "430px" width = "755px" alt = "image could not be loaded"> <br /></div> 
 <br />
 <br />
<?php
// $_SESSION['mark'] = $_SESSION['mark'] +9;
  $marks= $_SESSION['mark'] ;

  if($marks >13 ){
    $iqScore = "Above 145, you're concidered a genius, you can pick any course from any branch of science";
  }
    else if($marks >10 && $marks <14){
      $iqScore = "between <b class =' text-success'>130 and 145</b>,<br /> you're concidered very superior ";
    }
    else if($marks >7 && $marks <11){
      $iqScore = "between<b class =' text-success'> 115 and 130</b>,<br /> you're concidered superior ";
    }
      else if($marks >4 && $marks <8){
        $iqScore = " between<b class =' text-primary'> 85 and 115 </b>,<br /> you're concidered normal ";
      }
      else if($marks >1 && $marks <5){
        $iqScore = " between<b class =' text-warning'> 70 and 85</b>, <br />you're concidered dull ";
      }
      else if($marks >-1 && $marks <2){
        $iqScore = " below <b class ='text-danger'> 70 </b>,<br /> you're concidered to have a deficiency mentally";
      }
      
      echo '<p class="display-4">You got <b class =" text-success">'.$marks.'</b> out of 15</p>';
      echo ' <hr class="my-4">';
      echo '<p class="display-4">Your IQ is '.$iqScore.'</p>';


?>

<a href="IQ_test1.php"><button type="button" class="btn btn-outline-secondary">Retake Test</button></a>


<a href="subjectSelection.php"><button type="button" class="btn btn-outline-secondary">Continue</button></a><br />
<br/>

<a href="allprograms.php"><button type="button" class="btn btn-outline-secondary">View All Programs in my IQ Range</button></a>
<br /> <br />

<button type="button"  data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-outline-secondary">Get Our Recommendation</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" style = "opacity:0.95;" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">    
        <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Select Your Preferences</h5> <br />
      
  
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    
        </div>
        <div class="modal-body">
       <form class="login100-form validate-form p-b-33 p-t-5" action = "getRecommendation.php" method = "POST" >
        <div class="form-group ">
       <!--  <p>What is your Prefered Branch of science?</p>
          <select class = "col-md-7" name ="keyword">
              <option value="Technology">Technology</option>
              <option value="Science">Science</option>
              <option value="Engineering">Engineering</option>
              <option value="Mathematics">Mathematics</option>
              <option value="Agriculture">Agriculture</option>
              <option value="Health">Health</option>
          </select>
							-->
			
        <p>What is your Prefered Career Type?</p>
          <select class = "col-md-7" name = "career">
              <option value="Technology">Technology</option>
              <option value="bio_science">Biological Science</option>
              <option value="general_engineering"> General Engineering</option>
              <option value="specialist_engineering"> Specialist Engineering</option>
              <option value="Mathematics">Mathematics</option>
              <option value="physical_science">Physical Science</option>
              <option value="food_science">Food Science</option>
              <option value="Agriculture">Agriculture</option>
              <option value="general_health">General Health</option>
              <option value="specialist_health">Specialist Health</option>
          </select> 
   
        						</div> 
                   
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
     
        
          </div>  
        </div>
      </div>
     </div>
  </div>
<!-- fifth change -->
</div>
<?php
  include("../home/footer.php");
?>

</body>

</html>

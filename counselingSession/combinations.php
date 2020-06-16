<!doctype html>
<html lang="en">
  <head>
    <title>Career Guidance</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="../pics/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body  class="bg-white">
<?php
  include("../Home/MenuBarInside.php");
 

?>
    <div class="container">
    <div class="jumbotron">

        <?php







if( isset($_POST['submit']) ){

    echo'<h2>Select an A level Combination in your preffered Branch of Science</h2> <br /> <br />';

    // $interest = $_POST['submit'];
    $interest1 = null;
    $interest2 = null;
    $interest3 = null;

    if(isset($_POST['subject'][0])){
      $interest1 = $_POST['subject'][0];
    }
    else{
      $interest1 = null;
    }
    if(isset($_POST['subject'][1])){
      $interest2 = $_POST['subject'][1];
    }
    else{
      $interest2 = null;
    }
    if(isset($_POST['subject'][2])){
      $interest3 = $_POST['subject'][2];
    }
    else{
      $interest3 = null;
    }

 
    require('../dbconnection/conn.php');

    if( !$con ){
        die('couldnt connect');
    }

    
    
    $query = " SELECT * FROM `alevel_combinations` WHERE (`subject1` = '$interest1'
or `subject1` = '$interest2' or`subject1` = '$interest3') and (`subject2` = '$interest1'
or `subject2` = '$interest2' or`subject2` = '$interest3') and (`subject3` = '$interest1'
or `subject3` = '$interest2' or`subject3` = '$interest3')";
   

    if( $results = $con->query($query) ){
      if($results->num_rows > 0){  
      while($row = $results->fetch_assoc()){
         
        
                echo '<div class="card-deck">
                <div class="card" card card-1 col-md-6">
                <div class="card-body">
                  <h4 class="card-title"> <label class="text-secondary">Branch: </label><label class="text-success">'.$row['keyword'].'</label></h4>
                  <p class="card-text">'.$row['subject1'].'</p>
                  <p class="card-text">'.$row['subject2'].'</p>
                  <p class="card-text">'.$row['subject3'].'</p>
                  
                  

                  <form action="programs.php" method="post">
                  <div class="form-check form-check-inline">
                  <label class="form-check-label"  tabindex="0">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" style="display:none;" name="career" value='.$row['keyword'].'   checked="checked" autocomplete="off"> 
                  </label>
                </div>
                <div class="form-check form-check-inline">
                 
                </div>
                <div class="form-check form-check-inline">
                           </div>

                           
                  <button type="submit" class="btn btn-warning" name="mathP">University Programs</button>
                  </form>

                  </div>
              </div></div>';
            } 
          }
          else{
               echo '<br /> <br /><div class = "card container  bg-light">
               <br /> <br /> <h1 class = "text-danger">Error!!<br />Please enter a valid combination of 3 subjects</h1>
               <br /> 
               <a href ="main.php"><button type="button"   class="btn btn-outline-dark">&nbsp &nbsp Back &nbsp &nbsp</button></a>
               <br /><br />
               </div><br /> <br />';
             }
        }
   
  }
  else{
    header("Location: counselingSession/main.php");
  }



    ?>
      </div>
    </div>
    <?php
      include("../Home/footer.php");

    ?>
</body>
</html>

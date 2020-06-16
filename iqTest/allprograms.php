
<?php
  session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <?php
       include("../Home/MenuBar.php");
      
    ?>
    <title>Career Guidance</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="../pics/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootsrap.css">
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body >
    <div class="container">
    <div class="jumbotron">
          <h1 class=" text-dark">The following are the tertiary programs you can study.</h1> <br />
        
        <?php      
        
      if( 1 ){
      
          
       
        
      
        require('../dbconnection/conn.php');
        if( !$con ){
            die('couldnt connect');
        }
        $marks = $_SESSION['mark'] ;
       
        if($marks <14){
        $query = " SELECT * FROM `University_programs` WHERE `minimum IQ Requirement` <= $marks and
        `maximum IQ Requirement` >= '$marks'";
        }
        else{
          $query = " SELECT * FROM `University_programs`";
        }
        
        if( $results = $con->query($query) ){
            if($results->num_rows > 0){  
            while($row = $results->fetch_assoc()){
               
    
                    echo '<div class="card-deck">
                    <div class="card" style="width: 20rem;">
                    <div class="card-body">
                      <h5 class="card-title"> Program offered at '.$row['institute'].'</h5>
                      <h3 class="card-text text-success">'.$row['name'].'</h3>
                      <p class="card-text">'.$row['requirements'].'</p>
                   
    
                      <form action="../counselingSession/career.php" method="post">
                      <div class="form-check form-check-inline">
                      <label class="form-check-label"  tabindex="0">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" style="display:none;" name="info" value='.$row['career_group'].'   checked="checked" autocomplete="off"> 
                      </label>
                    </div>
                   
                      <button type="submit" name="submit"  class="btn btn-warning">Career Options</button>
                      </form>
                      </div>
                  </div></div>';
                }
               
        }
        else{
            echo '<br /> <br /><div class = "card container  bg-light">
            <br /> <br /> <h1 class = "text-danger">There are no program suggestions in your IQ range<br />Please retry the test or try other options</h1>
            <br /> 
            <a href ="result.php"><button type="button"   class="btn btn-outline-dark">&nbsp &nbsp Back &nbsp &nbsp</button></a>
            <br /><br />
            </div><br /> <br />';
          } 
        }
    }
       
        
      ?>
    </div>
        
    </div>
    <?php
      include("../Home/footer.php");
    ?>
</body>
</html>
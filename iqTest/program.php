
<?php
  session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Career Guidance</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="../pics/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootsrap.css">
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body class="bg-white">
<?php
    
include("../Home/MenuBar.php");

?>

<div class="container">
    <div class="jumbotron">

        <?php
      

echo'<hr class="my-4">';
echo '<h2>The following are the tertiary programs you can study.</h2>';

if( isset($_POST['mathP']) ){

    
    $interest1 = $_POST['career'];
   
    require('../dbconnection/conn.php');

    if( !$con ){
        die('couldnt connect');
    }

    $marks = $_SESSION['mark'] ;
   
    
    $query = " SELECT * FROM `University_programs` WHERE `minimum IQ Requirement` <= $marks and
    `maximum IQ Requirement` >= $marks and `keyword` = '$interest1'";
           
    
    if( $results = $con->query($query) ){
        if($results->num_rows > 0){  
        while($row = $results->fetch_assoc()){
            

                echo '<div class="card-deck">
                <div class="card" style="width: 20rem;">
                <div class="card-body">
                <h4 class="card-title  text-dark "> Program offered at '.$row['institute'].'</h4>
                <h2 class="card-text  text-success">'.$row['name'].'</h2>
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
        <br /> <br />
        </div><br /> <br />';
      } 
    }

    }else{

    }


        
        ?>

</div>
</div>
<?php
      include("../Home/footer.php");
  
?>
</body>
</html>
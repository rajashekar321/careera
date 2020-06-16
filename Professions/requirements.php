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
  <body  class="bg-white">
<?php
  include("../Home/MenuBarInside.php");

?>
  <div class="container">
    <div class="jumbotron">
      
  

        <?php




if( isset($_POST['require']) ){

   
echo'<h1 class="card-title  text-dark ">Job Descrpition</h1>';
echo'<hr class="my-4">'; 
// $interest = $_POST['submit'];

$interest = $_POST['submit'];
// echo $interest;

require('../dbconnection/conn.php');

if( !$con ){
    die('couldnt connect');
}


$query = "SELECT * FROM `careers` WHERE`id`= '$interest'";

if( $results = $con->query($query) ){
    while($row = $results->fetch_assoc()){
         
      echo '<div class="card-deck">
            <div class="card" card card-1 col-md-8">
            <div class="card-body">
              <h3 class="card-title  text-success ">'.$row['name'].'</h3>
              <p class="card-text">'.$row['info'].'</p><br />
              <h3 class="card-title text-success"> Job Responsabilities</h3>
              <p class="card-text">'.$row['Responasbility1'].'</p>
              <p class="card-text">'.$row['Responasbility2'].'</p>
              <p class="card-text">'.$row['Responasbility3'].'</p><br />
              <h3 class="card-title text-success"> Skills</h3>
              <p class="card-text">'.$row['Skill1'].'</p>
              <p class="card-text">'.$row['Skill2'].'</p>
              <p class="card-text">'.$row['skill3'].'</p>

              <form action="../counselingSession/programs.php" method="post">
              <div class="form-check form-check-inline">
              <label class="form-check-label"  tabindex="0">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" style="display:none;" name="career" value='.$row['keyword'].'   checked="checked" autocomplete="off"> 
              </label>
            </div>
            
         
              </form>

              </div>
          </div>
    
    </div>';
        } 
    }
else{
    echo 'couldnt make the query';
}
}


        
        ?>

</div>
</div>
</div>
<?php
  
include("../Home/footer.php");
?>
</body>
</html>
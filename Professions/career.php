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
<?php
    include("../Home/MenuBarInside.php");

?>
  <body  class=" bg-white">

  <div class="container ">
    <div class="jumbotron">

        <?php


//echo $_POST['proffesion'];
if( isset($_POST['proffesion'])){

    echo'<h2 class ="text-dark">Possible Career Options For You</h2> <br />'; 
         
        if ($_POST['proffesion'] == 'engineering'){
            $interest = 'general_engineering';
            $interest2 = 'specialist_engineering';
            $interest3 = ' ';

        }
        elseif ($_POST['proffesion'] == 'Health') {
            $interest = 'general_health';
            $interest2 = 'specialist_health';
            $interest3 = ' ';
            
        }
        elseif ($_POST['proffesion'] == 'science') {
            $interest = 'physical_science';
            $interest2 = 'bio_science';
            $interest3 = 'food_science';

        }
        else {
            $interest = $_POST['proffesion'];
            $interest2 = null;
            $interest3 = ' ';

        }
    
        require('../dbconnection/conn.php');

    if( !$con ){
        die('couldnt connect');
    }

    $query = "SELECT * FROM `careers` WHERE`keyword`= '$interest' or `keyword`= '$interest2'or `keyword`= '$interest3'";
    if( $results = $con->query($query) ){
        while($row = $results->fetch_assoc()){
           

                echo '<div class="card-deck">
                <div class="card" card card-1 col-md-6">
                <div class="card-body">
                  <h3 class="card-title text-success">'.$row['name'].'</h3>
                  <p class="card-text">'.$row['info'].'</p>
                  
                  

                  <form action="../Professions/requirements.php" method="post">
                  <div class="form-check form-check-inline">
                  <label class="form-check-label"  tabindex="0">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" style="display:none;" name="submit" value='.$row['id'].'   checked="checked" autocomplete="off"> 
                  </label>
                </div>
               
               
                  <button type="submit" name="require" value="mathematics" class="btn btn-warning">More Details</button>
                  </form>
                  </div>
              </div></div>';
            

        }
    }else{
        echo "we couldnt connect you to the database";
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
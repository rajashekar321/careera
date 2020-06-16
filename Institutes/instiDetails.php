<!doctype html>
<html lang="en">
  <head>
    <title>Career Guidance</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../css/bootsrap.css">
    <link rel="stylesheet" href="../css/main.css">
     </head>
<?php
include("../Home/menuBarInside.php");
?>


     <body>
    <div class="container">

<div class="jumbotron">
  <h1 >Are you looking for your University prospects?</h1>
  <p class="lead">Then you are at the right place.</p>
  <hr class="my-4">
  <p>We have gathered information of this Institute all in one place. Explore for more information.</p>
  <hr class="my-4">

         <?php





if( isset($_POST['university']) ){

$interest = $_POST['university'];


require('../dbconnection/conn.php');

if( !$con ){
    die('couldnt connect');
}


$query = "SELECT * FROM `institute` WHERE`name`= '$interest'";

if( $results = $con->query($query) ){
    while($row = $results->fetch_assoc()){
         
      echo '<div class="card-deck">
            <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h2 class="card-title  text-success ">'.$row['name'].'</h2>
             
              <h3 class="card-title text-dark">Institute Description </h3>
              <p class="card-text">'.$row['description'].'</p>
            <br />
              <h3 class="card-title text-dark"> More Information</h3>
              <p class="card-text"> Location : '.$row['location'].'</p>
              <p class="card-text"> Telephone: '.$row['phone number'].'</p>
              <p class="card-text">Website   : <a href = "https:'.$row['website'].'">'.$row['website'].'</a></p>
              </div>

            


              </div>
          </div> <br />
          <form action="../counselingSession/programs.php" method="post">
          <div class = "card">
       
  <button type="submit" name="university" value="'.$row['name'].'" class="btn btn-outline-success btn-lg btn-block">Programs Offered</button>
  </div>
  </form>
    </div>';
        } 
    }
    else{
        echo '<br /> <br /><div class = "card container  bg-light">
        <br /> <br /> <h1 class = "text-danger">Error!!<br />Could not run query</h1>
        <br /> 
        <a href ="main.php"><button type="button"   class="btn bg-primary">&nbsp &nbsp Back &nbsp &nbsp</button></a>
        <br />
        </div><br /> <br />';
      }
}
else{
    echo '<br /> <br /><div class = "card container  bg-light">
    <br /> <br /> <h1 class = "text-danger">Error!!<br />The requested information is not available</h1>
    <br /> 
    <a href ="main.php"><button type="button"   class="btn bg-primary">&nbsp &nbsp Back &nbsp &nbsp</button></a>
    <br />
    </div><br /> <br />';
  }



        
        ?>

</div>
    
</div>
<?php
include("../Home/footer.php");
?>
  </body>

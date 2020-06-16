<!doctype html>
<html lang="en">
  <head>
    <?php
       include("../Home/MenuBarinside.php");
      
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
        
      if( isset($_POST['mathP']) ){
      
          
        $interest = $_POST['career'];
        
      
        require('../dbconnection/conn.php');
    
        if( !$con ){
            die('couldnt connect');
        }
        
       
        
        $query = " SELECT * FROM `University_programs` WHERE (`keyword` = '$interest')";
               
        
        if( $results = $con->query($query) ){
            while($row = $results->fetch_assoc()){
                
    
                    echo '<div class="card-deck">
                    <div class="card card-1 ">
                    <div class="card-body">
                      <h4 class="card-title  text-dark "> Program offered at '.$row['institute'].'</h4>
                      <h2 class="card-text  text-success">'.$row['name'].'</h2>
                      <p class="card-text">'.$row['requirements'].'</p>
                 
    
                      <form action="career.php" method="post">
                      <div class="form-check form-check-inline">
                      <label class="form-check-label"  tabindex="0">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" style="display:none;" name="info" value='.$row['career_group'].'   checked="checked" autocomplete="off"> 
                      </label>
                    </div>
                   
                      <button type="submit" name="submit"  class="btn btn-warning">Career Options</button>
                      </form>
                    </div>
                  </div>
              </div>';
                } 
            
        }
      }
    
    
        if(isset($_POST['university'])){
    
         
         
      
          $con = mysqli_connect('localhost','nyasha','pajwjd','career_guidance');
      
          if( !$con ){
              die(  
                 '<br /> <br /><div class = "card container  bg-light">
                <br /> <br /> <h1 class = "text-danger">Error!!<br />Could not connect to database</h1>
                <br /> 
                <a href ="main.php"><button type="button"   class="btn bg-primary">&nbsp &nbsp Back &nbsp &nbsp</button></a>
                <br />
                </div><br /> <br />'
              );
          }
    
          $institute = $_POST['university'];
         
         
    
        $query = " SELECT * FROM `University_programs` WHERE (`institute` = '$institute')";
        if( $results = $con->query($query) ){
          while($row = $results->fetch_assoc()){
              
    
                  echo '
                 
                  <div class="card-deck">
                  <div class="card" style="width: 20rem;">
                  <div class="card-body">
                    <h4 class="card-title text-dark "> Program offered at '.$row['institute'].'</h4>
                    <h2 class="card-text  text-success">'.$row['name'].'</h2>
                    <p class="card-text">'.$row['requirements'].'</p>
                  
    
                    <form action="career.php" method="post">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label"  tabindex="0">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" style="display:none;" name="info" value='.$row['career_group'].'   checked="checked" autocomplete="off"> 
                    </label>
                  </div>
                 
                    <button type="submit" name="submit"  class="btn btn-warning">Career Options</button>
                    </form>
                    </div>
                </div>
              </div>
            ';
        
    
              } 
          
      }
      
            else{
              echo '<br /> <br /><div class = "card container  bg-light">
              <br /> <br /> <h1 class = "text-danger">Error!!<br />Could not extract the data</h1>
              <br /> 
              <a href ="main.php"><button type="button"   class="btn bg-primary">&nbsp &nbsp Back &nbsp &nbsp</button></a>
              <br />
              </div><br /> <br />';
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

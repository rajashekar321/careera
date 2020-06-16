
<?php
  session_start();
  include("../home/MenuBar.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Career Guidance Platform</title>
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
        <p class="lead text-secondary">Get results customized for you with the recommendation section.</p>
          <hr class="my-4">
          <p class="lead">
          <?php
          require('../dbconnection/conn.php');
            if(isset($_SESSION['username'])){
               $username = $_SESSION['username'];
               $sql = "SELECT * FROM `Users` WHERE `Username` = '$username'";
               if( $results = $con->query($sql) ){
                if($results->num_rows == 1){
                    while($row = $results->fetch_assoc()){ 
                        $email = $row['Email'];
                        $name = $row['Name'];

                    } 
                 }
               
               }
              
            }
            
            $marks =  $_SESSION['mark'];
           
            $career = $_POST['career'];
        
            

            $query = " SELECT * FROM `University_programs` WHERE `minimum IQ Requirement` <= $marks and
            `maximum IQ Requirement` >= $marks  and `career_group` = '$career'";
           
           if( $results = $con->query($query) ){
                if($results->num_rows > 0){
                $row = $results->fetch_assoc();
                      $program = $row['name'];

                    
                 }
               
               }
               $count = 0;
               $sqlz = "SELECT * FROM `careers` WHERE `keyword` = '$career'";
               if( $result = $con->query($sqlz) ){
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc() and $count < 3){ 
                        $job[$count] = $row['name'];
                        $count = $count + 1;
                    } 
                 }
               
               }
               if(isset($job[0]) and isset($job[1]) and isset($job[2]) and isset($program)){
              echo ' 
              <h2 class="card-title  text-success ">Our Recommendation </h2> 
                  <div class="card" card card-1 col-md-8">
                       <div class="card-body">
                      
                      Hie '.$name.', thank you for using this platform, don\'t forget to recommend it to your friends and family.
                       We have evaluated your prefferences and strengths and came to the conclusion that the <b>'.$program.'</b>
                        program would be great for you. If you concider pursuing this program, these career option would perfect for you:<br />
                     
                       <b>'.$job[0].'</b><br /> <b>'.$job[1].'</b><br /> <b>'.$job[2].'</b><br />
                </div>
            </div>
         </div>';}
         else{
          echo '<br /> <br /><div class = "card container  bg-light">
          <br /> <br /> <h1 class = "text-danger">There are no programs and careers that are in your IQ Range and in the Career type you chose.<br />Please retry the test or try other career type</h1>
          <br /> 
          <a href ="result.php"><button type="button"   class="btn btn-outline-dark">&nbsp &nbsp Back &nbsp &nbsp</button></a>
          <br /><br />
          </div><br /> <br />';
         }
                                  ?>           

            </p>  
</div>
<?php
  include("../home/footer.php");
?>

</body>

</html>

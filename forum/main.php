<?php
      session_start();
      $_SESSION['date'] = time();

?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Career Guidance Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="icon" href="../pics/icon.png">
    <script src="main.js"></script>
    <style>
        div.card{
            border:transparent;
        }
    </style>

       

         <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="../css/creative.css" rel="stylesheet" media="all">
</head>

  </head>
  <body>


    <?php
           
           include("../Home/MenuBarInside.php");
           require('../dbconnection/conn.php');

           echo'<hr class="my-4">';
       ?>


<div class="container ">

        <div class="jumbotron " >
  <h1 class="display-3 text-center">We are here to guide you!</h1>
  <p class=" text-center text-muted ">Please share your thoughts and experiences with friends and collegues<br>
  </p>
  <hr class="my-4">
           <div class = " card card-1 col-md-9 col-md-offset-1 col-md-pull-1  bg-white">
                    <?php
                          $query = " SELECT * FROM `forum_chat`ORDER BY id DESC  LIMIT 3";
                          
                         
                          
                              if( $results = $con->query($query) ){
                                if($results->num_rows > 0){
                                    while($row = $results->fetch_assoc()){
                                        $show_date = date(" d.m.Y",$row["date"]);
                                        echo'
                                        <h2 class = "text-bold text-primary text-uppercase">'.$row["name"].':</h2>
                <h3  class = "text-muted">'.$row["comment"].'</h3>
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp <small class= "text-success small">'.$show_date.' </small><hr class="my-4">    
                                        ';
                                    }
                                  } 
                               }
                                   
                                  
                    ?>

</div> 
            <div class = "card  jumbotron  col-md-6 col-md-offset-1 col-md-pull-1" >
            
            <form action="process.php" method = "post">
										<div class="form-group ">
											<input type="text"name = "name" class="form-control" placeholder="Name" maxlength = "19" required = "required">
										</div>
																			<div class="form-group">
											<textarea name="message" required = "required" maxlength = "695" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                                        </div>
                                      
										<div class="form-group">
											<input type="submit"  name = "submit" class="btn btn-primary btn-send-message" value="Send Message">
										</div>
                                    </form>   
                              </div>
        </div>
</div>
</div>

    

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
        
<?php
  include("../home/footer.php");
?>
</body>
</html>
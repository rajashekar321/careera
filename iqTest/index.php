<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Career Guidance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/creative.css" rel="stylesheet">
<link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="css/creative.css" rel="stylesheet"
    <link href="../sign-up/css/main.css" rel="stylesheet" media="all">
    <link href="../sign-up/css/signup.css" rel="stylesheet" media="all">
    
    <script src="main.js"></script>
</head>
        <body> 
            <?php
        include("../home/MenuBarInside.php");              
        ?>
        <div class = "container">
                <div class = "jumbotron">
                    <br /> <br /> <br />
                <h1 class="display-3">We are here to guide you!</h1>
  <p class="lead">
    To access the Get Evaluation section you need to create an account and log into the system.<br> You can also get our personlized reccomendation after finishing the IQ Test. 
  </p>

   <hr class="my-4">

                <div style = "border-radius:5px;" class = "card  jumbotron bg-white col-md-4 col-md-offset-1 col-md-pull-2" >
            
            <form action="../sign-in/signin.php" method = "post">
										<div class="form-group ">
											<input type="text"name = "name" class="form-control " autofocus placeholder="Username" maxlength = "19" required = "required">
										</div>
                                        <div class="form-group ">
											<input type="password" name = "password" class="form-control " placeholder="Password" maxlength = "19" required = "required">
										</div>
                                        <br>
										<div class="form-group">
											<input type="submit"  name = "submit" class="btn btn-md btn-primary btn-outline-info" value="Log In">
                                       
                                      
                                            <button class="btn btn-md btn-primary btn-outline-secondary " data-toggle="modal" data-target=".bd-example-modal-lg" >Sign Up </button>
                                        </div>
                                        
                                    </form>   
                              </div>
                <div>
        </div>
        <!-- Large modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="page-wrapper  p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title text-primary text-center">Enter Your Sign Up Information</h2> <br />  <hr class="my-4"> <br />
                    
                    <form method="POST" action = "../sign-up/sign-up.php">
                        <div class="row row-space">
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                        <label for="inputEmail" class="sr-only">First Name</label>
                                        <input type="text" id="inputEmail" autofocus  name = "Fname" class="form-control col-md-12" placeholder="First Name" required autofocus>
                            </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                        <label for="inputEmail" class="sr-only">Last Name</label>
                                        <input type="text" id="inputEmail"  name = "Lname" class="form-control col-md-12" placeholder="Last Name" required autofocus>
                                </div>
                            </div> 
                        
                        <div class="col-md-4">
                                <div class="form-group">
                                        <label for="inputEmail" class="sr-only">Username</label>
                                        <input type="text" id="inputEmail"  name = "Username" class="form-control col-md-12" placeholder="Username" required autofocus>
                                </div>
                            </div>
                        
                        <div class="col-md-4">
                                <div class="form-group">
                                        <label for="inputEmail" class="sr-only">Password</label>
                                        <input type="Password" id="inputEmail"  name = "Password" class="form-control col-md-12" placeholder="Password" required autofocus>
                                </div>
                            </div>
                        
                        <div class="col-md-4">
                                <div class="form-group">
                                        <label for="inputEmail" class="sr-only">E-mail</label>
                                        <input type="email" id="inputEmail"  name = "E-mail" class="form-control col-md-12" placeholder="email@example.com" required autofocus>
                                </div>
                            </div>
                        
                       
                            
                            <div class="col-md-4">
                                    <div class="form-group">
                                            <label for="inputEmail" class="sr-only">Phone Number</label>
                                            <input type="tel" id="inputEmail"  name = "Phone" class="form-control col-md-12" placeholder="Phone Number" required autofocus>
                                    </div>
                                </div>
                        
                      
                      &nbsp &nbsp &nbsp 
                        <div class="p-t-15 ">
                        
                            <input class="btn btn-md btn-success btn-outline-success" name = "submit" type="submit" value ="Save"/>
                            <button type="button" class="btn btn-md btn-danger btn-outline-danger" data-dismiss="modal">Close</button>
                        </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
  </div>
</div>
<?php
include('../Home/footer.php');
?>
        </body>
   
</html>

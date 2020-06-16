<?php

include("../Home/MenuBar.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Career Guidance</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>



<div class="container">

        <div class="jumbotron">
  <h1 class="display-3">We are here to guide you!</h1>
  <p class="lead">Please be advised that our platform is made to offer counsel and info on STEM(Science Technology Engineering Mathematics) only<br>
  </p>
  <hr class="my-4">
  <p>This counseling session was ideally set for students from O level going up till Tertiary level.</p>
  <hr class="my-4">
  <h3>choose three of your favourite STEM O level subjects:</h3> <br />

  <form action="combination.php" method="post">
  <div class="btn-group-vertical" >
  <label class="btn btn-info btn-sm col-form-label">
    <input type="checkbox" class="form-control" name='subject[]' value="mathematics"  autocomplete="off"> mathematics 
  </label>
  <label class="btn btn-info btn-sm col-form-label">
  <input type="checkbox" class="form-control"  name='subject[]' value="physics" autocomplete="off"> physics 
  </label>
  <label class="btn btn-info btn-sm col-form-label">
  <input type="checkbox" class="form-control" name='subject[]' value="chemistry" autocomplete="off"> chemistry
  </label>
  <label class="btn btn-info btn-sm col-form-label">
  <input type="checkbox" class="form-control" name='subject[]' value="biology" autocomplete="off"> biology 
  </label>
  <label class="btn btn-info btn-sm col-form-label">
  <input type="checkbox" class="form-control" name='subject[]' value="computer science" autocomplete="off"> computer science 
  </label>
  <label class="btn btn-info btn-sm col-form-label">
  <input type="checkbox" class="form-control" name='subject[]' value="technical graphics" autocomplete="off"> technical graphics 
  </label>
  <label class="btn btn-info btn-sm col-form-label">
  <input type="checkbox" class="form-control" name='subject[]' value="geography" autocomplete="off"> geography 
  </label>
  <label class="btn btn-info btn-sm col-form-label">
  <input type="checkbox" class="form-control" name='subject[]' value="food Science" autocomplete="off"> food Science 
  </label>
  <button type="submit" name='submit'  type="button" class="btn btn-outline-success btn-sm btn-block">submit</button>

</div>

<!-- <div class=" btn-groupform-check btn-group" data-toggle="buttons">
  <label class="form-check-label btn btn-info btn-sm col-form-label">
    <input class="form-check-input" type="checkbox" value="mathematics" name="subject[]" autocomplete="off" >
    mathematics
  </label>
  <div class="form-check btn-group" data-toggle="buttons">
  <label class="form-check-label btn btn-info btn-sm col-form-label">
    <input class="form-check-input" type="checkbox" value="physics" name="subject[]" autocomplete="off" >
    physics
  </label>
  <div class="form-check btn-group" data-toggle="buttons">
  <label class="form-check-label btn btn-info btn-sm col-form-label">
    <input class="form-check-input" type="checkbox" value="chemistry" name="subject[]" autocomplete="off" >
    chemistry
  </label>
  <div class="form-check btn-group" data-toggle="buttons">
  <label class="form-check-label btn btn-info btn-sm col-form-label">
    <input class="form-check-input" type="checkbox" value="biology" name="subject[]" autocomplete="off" >
    biology
  </label>
  <div class="form-check btn-group" data-toggle="buttons">
  <label class="form-check-label btn btn-info btn-sm col-form-label">
    <input class="form-check-input" type="checkbox" value="technical_graphics" name="subject[]" autocomplete="off" >
    technical graphics
  </label>
  <div class="form-check btn-group" data-toggle="buttons">
  <label class="form-check-label btn btn-info btn-sm col-form-label">
    <input class="form-check-input" type="checkbox" value="computer_science" name="subject[]" autocomplete="off" >
    computer science
  </label>
  <div class="form-check btn-group" data-toggle="buttons">
  <label class="form-check-label btn btn-info btn-sm col-form-label">
    <input class="form-check-input" type="checkbox" value="geography" name="subject[]" autocomplete="off" >
    geography
  </label>
</div>
<div class="form-check disabled">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" value="" disabled>
    Option two is disabled
  </label>
</div> -->


    </form>

  <!-- <form action="combinations.php" method="post">
        <button type="submit" name='math' value="mathematics" type="button" class="btn btn-outline-success btn-lg btn-block">mathematics</button>
    </form>
    <form action="combinations.php" method="post">
        <button type="submit" name='engine' value="engineering" type="button" class="btn btn-outline-danger btn-lg btn-block">engineering</button>
    </form>
    <form action="combinations.php" method="post">
        <button type="submit" name='tech' value="technology" type="button" class="btn btn-outline-warning btn-lg btn-block">technology.....</button>
    </form>
    <form action="combinations.php" method="post">
        <button type="submit" name='sci' value="science" type="button" class="btn btn-outline-info btn-lg btn-block">natural sciences</button>
    </form> -->
 
  
  
</div>     

 
   
</div>
</body>
</html>
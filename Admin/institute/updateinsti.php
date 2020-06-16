<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../pics/icon.png">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Vision CGS</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../../index.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="../index.php">
                  <span data-feather="home">Dashboard</span>
                 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                   
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php">
                  <span data-feather="users"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="users/user.php">
                  <span data-feather="bar-chart-2"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../myaccount.php">
                  <span data-feather="layers"></span>
                </a>
              </li>
            </ul>

           </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Update Institute</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
          <div class = "card  jumbotron  col-md-11 col-md-offset-1 col-md-pull-1" >
            
            <form action="updateprocess.php" method = "post">
            <div class="form-group ">
											<input type="number" name = "id" class="form-control" placeholder="Enter the record's ID" maxlength = "19" required = "required">
                    </div>
								
                    <div class="form-group ">
											<input type="text"name = "name" class="form-control" placeholder="Name" maxlength = "19" required = "required">
                    </div>
                    <div class="form-group">
											<textarea name="description" required = "required" maxlength = "695" id="message" cols="30" rows="5" class="form-control" placeholder="Description"></textarea>
                                        </div>
                 
                    <div class="form-group ">
											<input type="text"name = "location" class="form-control" placeholder="Location" maxlength = "19" required = "required">
                    </div>
                    <div class="form-group ">
											<input type="tel" name = "phone" class="form-control" placeholder="Phone Number" maxlength = "19" required = "required">
                    </div>
                    <div class="form-group ">
											<input type="text"name = "website" class="form-control" placeholder="Website Address" maxlength = "19" required = "required">
										</div>

										                  
										<div class="form-group">
											<input type="submit"  name = "submit" class="btn btn-primary btn-send-message" value="Submit">
										</div>
									</form>        </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.com/jquery.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../..//js/vendor/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>

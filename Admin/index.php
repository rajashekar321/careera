<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../pics/icon.png">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Vision CGS</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../index.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">
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
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  
                </a>
              </li>
            </ul>

           </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Tables</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            
             
            </div>
          </div>

<?php
     require('../dbconnection/conn.php');
     $sql = "SELECT * FROM `institute`";
     if( $results = $con->query($sql) ){
            $insti = $results->num_rows; 
     }
     $sql = "SELECT * FROM `alevel_combinations`";
     if( $results = $con->query($sql) ){
            $combi = $results->num_rows; 
     }
     
     $sql = "SELECT * FROM `careers`";
     if( $results = $con->query($sql) ){
            $career = $results->num_rows; 
     }

     $sql = "SELECT * FROM `university_programs`";
     if( $results = $con->query($sql) ){
            $prog = $results->num_rows; 
     }
     $sql = "SELECT * FROM `users`";
     if( $results = $con->query($sql) ){
            $users = $results->num_rows; 
     }

?>        

            <!-- Content Row -->
            <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-primary shadow h-100 py-2">
  <div class="card-header py-3 d-flex bg-white flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold bg-white text-primary">Combinations</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"><b class = "text-danger">*</b></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Options:</div>
                      <a class="dropdown-item" href="combinations/combinations.php">View Records</a>
                      <a class="dropdown-item" href="combinations/addcombi.php">Add Record</a>
                      <a class="dropdown-item" href="combinations/updatecombi.php">Update Record</a>
                      <a class="dropdown-item" href="combinations/delcombi.php">Delete Record</a>
                     
                    </div>
                  </div>
                </div>
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href = "combinations.php"></a></div>
          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $combi." "; ?>Records </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-calendar fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
  <div class="card-header py-3 d-flex bg-white flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold bg-white text-primary">Careers</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"><b class = "text-danger">*</b></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Options:</div>
                      <a class="dropdown-item" href="careers/careers.php">View Record</a>
                      <a class="dropdown-item" href="careers/addcareer.php">Add Record</a>
                      <a class="dropdown-item" href="careers/updatecareer.php">Update Record</a>
                      <a class="dropdown-item" href="careers/delcareer.php">Delete Record</a>
                      </div>
                  </div>
                </div>

    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href = "careers.php"></a></div>
          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $career." "; ?>Records</div>
        </div>
        <div class="col-auto">
          <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-info shadow h-100 py-2">
  <div class="card-header py-3 d-flex bg-white flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold bg-white text-primary">Programs</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"><b class = "text-danger">*</b></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Options:</div>
                      <a class="dropdown-item" href="programs/programs.php">View Record</a>
                      <a class="dropdown-item" href="programs/addprogram.php">Add Record</a>
                      <a class="dropdown-item" href="programs/updateprog.php">Update Record</a>
                      <a class="dropdown-item" href="programs/delprog.php">Delete Record</a>
                     </div>
                  </div>
                </div>

    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href = "programs.php"></a></div>
          <div class="row no-gutters align-items-center">
            <div class="col-auto">
              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $prog.' '; ?>Records</div>
            </div>
          
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-warning shadow h-100 py-2">
  <div class="card-header py-3 d-flex bg-white flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold bg-white text-primary">Institutes</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"><b class = "text-danger">*</b></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Options:</div>
                      <a class="dropdown-item" href="institute/institute.php">View Record</a>
                      <a class="dropdown-item" href="institute/addinsti.php">Add Record</a>
                      <a class="dropdown-item" href="institute/updateinsti.php">Update Record</a>
                      <a class="dropdown-item" href="institute/delinsti.php">Delete Record</a>
                     </div>
                  </div>
                </div>

    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"></div>
          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $insti." "; ?>Records</div>
        </div>
        <div class="col-auto">
          <i class="fas fa-comments fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-12 mb-4">
  <div class="card border-left-info shadow h-100 py-2">
  <div class="card-header py-3 d-flex bg-white flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold bg-white text-primary">Users</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"><b class = "text-danger">*</b></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Options:</div>
                      <a class="dropdown-item" href="users/viewusers.php">View Users</a>
                      <a class="dropdown-item" href="users/addusers.php">Add Users</a>
                      <a class="dropdown-item" href="users/manageusers.php">Manage Users</a>
                      <a class="dropdown-item" href="users/deluser.php">Delete Users</a>
                     </div>
                  </div>
                </div>

    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"></div>
          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $users." "; ?>Records</div>
        </div>
        <div class="col-auto">
          <i class="fas fa-comments fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

      
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.com/jquery.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

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

<?php
    session_name('ta_webasset');
    session_start();
    include 'connect.php';

    if(isset($_SESSION["username"]) || isset($_SESSION["password"])){
        header("location:");
    }else{
      if(isset($_POST['Login'])){
          $username = $_POST['username'];
          $password = $_POST['password'];

          $login = mysqli_query($connect,"SELECT * FROM USER WHERE USERNAME='$username' AND PASSWORD='$password'");
          $cek = mysqli_num_rows($login);

          if($cek > 0){
              while($data = mysqli_fetch_array($login)){
                $_SESSION['username'] = $username;
                $_SESSION['kd_bagian'] = $data['kd_bagian'];
                $_SESSION['name'] = $data['NAMA'];
                $_SESSION['bagian'] = $data['STATUS'];
                $_SESSION['status'] = "login";
              }
              header("location:../index.php?page=kib");
          }else{
              echo '<h1>GAGAL LOGIN</h1>';
          }
      }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logo_jabar.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ASIPAT DISPERKIM 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/fontawesome-v5.7.1.css">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="" style="background-color:#F96332;">
  <div class="wrapper" data-color="orange">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
              <!-- <div style="padding: 5px; background-color:white; border-radius:10px;"><img src="../assets/img/Logo-Asipat-Disperkim.png" height="40dpi"></div> -->
              <div style="padding: 5px; ">
                <h3 style="font-weight: bold; color: white; margin-bottom:0px;">SELAMAT DATANG DI</h3>
              </div>
              <div style="padding: 5px; background-color:white; border-radius:10px;">
                <img src="../assets/img/Logo-Asipat-Disperkim.png" height="40dpi">
              </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <!-- <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div> -->
        </div>
      </nav>
      <div class="container-fluid h-100" >
        <div class="row h-100 justify-content-center align-items-center" style="background-image: url('../assets/img/bg-login.png'); background-size: contain; background-repeat: no-repeat;">
          <div class="col-md-7 pl-5">
            <!-- <img class="ml-5 ml-3" src="../assets/img/login-text.png" alt=""> -->
            <img class="ml-5 ml-3" src="../assets/img/dashboard-content.png" alt="" style="height: 400dpi;">
          </div>
          <div class="col-md-5">
              <div class="row h-100">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                      <div class="card shadow-lg d-flex align-items-center my-auto" style="border-radius:50px;">
                          <div class="card-header">
                              <p class="h3 text-center py-5">Login</p>
                          </div>
                          <div class="card-body">
                            <form class="col-md-12" method="post" action="login.php">
                              <div class="form-group">
                                  <span>Username :</span><br>
                                  <input class="form-control" type="username" onkeyup="isi_otomatis()" name="username">
                              </div>
                              <div class="form-group">
                                  <span>Password :</span><br>
                                  <input class="form-control" type="password" onkeyup="isi_otomatis()" name="password">
                              </div>
                              <div class="text-center py-4 mt-3">
                                  <button class="btn btn-primary" style="border-radius:20px;" type="submit" name="Login">Login</button>
                              </div>
                            </form>                            
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3"></div>                  
              </div>
          </div>
        </div>
      </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Chart JS -->
  <!-- <script src="../assets/js/plugins/chartjs.min.js"></script> -->
  <!--  Notifications Plugin    -->
  <!-- <script src="assets/js/plugins/bootstrap-notify.js"></script> -->
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <!-- <script src="assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script> -->
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <!-- <script src="assets/demo/demo.js"></script> -->
  <!-- <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script> -->
</body>

</html>
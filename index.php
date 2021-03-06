<?php
include "link/connect.php";
session_name('ta_webasset');
session_start();
if (!isset($_SESSION["username"])) {
  header("Location:link/login.php");
}

if (!isset($_GET['page'])) {
  header('location:index.php?page=home');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ASIPAT DISPERKIM
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="assets/css/fontawesome-v5.7.1.css">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="assets/css/buttons.dataTables.css">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <link href="assets/css/custom.css" rel="stylesheet" />

  <!-- Important JS File -->
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script type="text/javascript" charset="utf8" src="assets/js/plugins/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="assets/js/plugins/dataTables.buttons.js"></script>
  <script type="text/javascript" charset="utf8" src="assets/js/plugins/buttons.html5.js"></script>
  <script type="text/javascript" charset="utf8" src="assets/js/plugins/buttons.print.js"></script>
  <script type="text/javascript" charset="utf8" src="assets/js/plugins/pdfmake.js"></script>
  <script type="text/javascript" charset="utf8" src="assets/js/plugins/vfs_fonts.js"></script>
</head>

<body class="">
  <div class="wrapper ">
    <?php include 'link/sidebar.php'; ?>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <div class="btn btn-outline-light text-right dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="float-left">
                    <p>Hello,<span style="font-size:15pt;"> <?php echo $_SESSION["name"]; ?></span></p><br>
                    <p>Bagian :<span style="font-size:12pt;"> <?php echo $_SESSION["bagian"] ?></span></p>
                  </div>
                  <div class="float-left ml-3"><i class="fas fa-user fa-4x"></i></div>
                </div>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="link/logout-action.php">
                    <i class="now-ui-icons media-1_button-power"></i>
                    <p>
                      <span class="d-md-block">Logout</span>
                    </p>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <?php
      switch ($_GET['page']) {
        case "home":
          include('link/_dashboard.php');
          break;

        case "kib":
          include('link/kib/_kib.php');
          break;
        case "insert-kib-a":
          include('link/kib/_kib-a-input.php');
          break;
        case "edit-kib-a":
          include('link/kib/_kib-a-edit.php');
          break;
        case "delete-kib-a":
          include('link/crud.php?process=delete_kib_a');
          break;
        case "insert-kib-b":
          include('link/kib/_kib-b-input.php');
          break;
        case "edit-kib-b":
          include('link/kib/_kib-b-edit.php');
          break;
        case "delete-kib-b":
          include('link/crud.php?process=delete_kib_b');
          break;

        case "bi":
          include('link/_main-bi.php');
          break;
        case "bi-input":
          include('link/_bi-input.php');
          break;
        case "bi-edit":
          include('link/_bi-edit.php');
          break;
        case "bi-delete":
          include('link/crud.php?process=delete_bi');
          break;

        case "kir":
          include('link/kir/_kir.php');
          break;
        case "insert-kir":
          include('link/kir/_kir-input.php');
          break;
        case "edit-kir":
          include('link/kir/_kir-edit.php');
          break;
        case "delete-kir":
          include('link/crud.php?process=delete_kir');
          break;

        case "mb":
          include('link/mb/_mb.php');
          break;
        case "insert-lmb":
          include('link/mb/_mb-lmb-input.php');
          break;
        case "edit-lmb":
          include('link/mb/_mb-lmb-edit.php');
          break;
        case "insert-dmb":
          include('link/mb/_mb-dmb-input.php');
          break;
        case "edit-dmb":
          include('link/mb/_mb_dmb_edit.php');
          break;

        case "usulan-penghapusan":
          include('link/_usulan-penghapusan.php');
          break;
        case "usulan-penghapusan-input":
          include('link/_usulan-penghapusan-input.php');
          break;
        case "usulan-penghapusan-edit":
          include('link/_usulan-penghapusan-edit.php');
          break;
        case "usulan-penghapusan-delete":
          include('link/crud.php?process=delete_usulan');
          break;

        case "bmd-gunausaha":
          include('link/_bmd-gunausaha.php');
          break;
        case "bmd-gunausaha-input":
          include('link/_bmd-gunausaha-input.php');
          break;
        case "bmd-gunausaha-edit":
          include('link/_bmd-gunausaha-edit.php');
          break;
        case "bmd-gunausaha-delete":
          include('link/crud.php?process=delete_bmd');
          break;

        case "dkpbmd":
          include('link/_dkpbmd.php');
          break;
        case "dkpbmd-input":
          include('link/_dkpbmd-input.php');
          break;
        case "dkpbmd-edit":
          include('link/_dkpbmd-edit.php');
          break;

        case "jadwal-pemeliharaan":
          include('link/_jadwal-pemeliharaan.php');
          break;
        case "jadwal-pemeliharaan-input":
          include('link/_jadwal-pemeliharaan-input.php');
          break;
        case "jadwal-pemeliharaan-edit":
          include('link/_jadwal-pemeliharaan-edit.php');
          break;

        case "kartu-pemeliharaan":
          include('link/_kartu-pemeliharaan.php');
          break;
        case "kartu-pemeliharaan-input":
          include('link/_kartu-pemeliharaan-input.php');
          break;
        case "kartu-pemeliharaan-edit":
          include('link/_kartu-pemeliharaan-edit.php');
          break;
      }
      ?>
      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="#">
                  Dinas Perumahan dan Pemukiman Jawa Barat
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="#" target="_blank">JTK Team</a>.
          </div>
        </div>
      </footer>
    </div>
    <!-- The Modal -->
    <div id="modalImageZoom" class="modal">

      <!-- The Close Button -->
      <span class="close">&times;</span>

      <!-- Modal Content (The Image) -->
      <img class="modal-content" id="img01">

      <!-- Modal Caption (Image Text) -->
      <div id="caption"></div>
    </div>
  </div>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>

  <script>
    function zoomImage(clicked_id){
      // console.log("in");
      // Get the modal
      var modal = document.getElementById("modalImageZoom");

      // Get the image and insert it inside the modal - use its "alt" text as a caption
      var img = document.getElementById(clicked_id);
      var modalImg = document.getElementById("img01");
      var captionText = document.getElementById("caption");
      // img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = img.src;
        captionText.innerHTML = img.alt;
      // }

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      } 
    }
  </script>
</body>

</html>
<?php
mysqli_close($connect);
?>
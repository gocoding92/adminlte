<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DIAGNOSA PENYAKIT</title>

  <!--link-rel-->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <?php include 'config/koneksi/koneksi.php' ?>

  <?php
  if (!empty($_POST)) {
    $gejala = $_POST['id_gejala'];

    $property_types = array();
    for ($i = 0; $i < count($gejala); $i++) {

      $sql = "SELECT id_penyakit, id_jenis_tanaman, gejala FROM tbl_gejala WHERE id_gejala='$gejala[$i]' AND delete_at = '0' ";
      $query = mysqli_query($db, $sql);

      while ($data = mysqli_fetch_array($query)) {
        $sql = "SELECT id_jenis_penyakit, code_penyakit, jenis_penyakit FROM tbl_jenis_penyakit WHERE id_jenis_penyakit=" . $data['id_penyakit'] . " AND delete_at = '0' ";
        $query_penyakit = mysqli_query($db, $sql);

        while ($data_penyakit = mysqli_fetch_array($query_penyakit)) {
          // var_dump($data_penyakit);
        }
      }
    }
  }
  ?>

</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light" style="background-color: red;">
      <div class="container">
        <a href="index.php" class="navbar-brand">
          <img src="https://w7.pngwing.com/pngs/737/338/png-transparent-building-office-building-building-logo-office.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php" class="nav-link" style="color: #fff;">
                <i class="fa fa-home"></i>
                Home
              </a>
            </li>
            <li class="nav-item">
              <a href="diagnosa.php" class="nav-link" style="color: #fff;">
                <i class="fa fa-edit"></i>
                Diagnosa Penyakit
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> <i class="fa fa-list-alt"></i>&nbsp; <b>Dashboard</b></h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="card" style="border: 1px solid #c3c3c3;">
                <div class="card-body">
                  <h2><b>Tanaman cabai</b></h2>
                  <h6> Tanaman cabai adalah termasuk suku terung-terungan. Tanaman cabai berbentuk perdu,dan tergolong tanaman semusim. Tanaman cabai dapat hidup di tanah berpasir, tanah liat, atau tanah liat berpasir. Pupuk kandang dan pupuk kompos merupakan bahan organik yang disukai oleh tanaman cabai. Tanaman cabai juga membutuhkan sinar matahari yang cukup, karena selain digunakan untuk fotosintesis juga berfungsi untuk membantu dalam menekan hama. Kandungan zat gizi pada cabai antara lain kalori, protein, lemak, kalsium, fosfor, zat besi, vitamin A, vitamin B, dan vitamin C. </h6>
                  <h4><b>Bagian Tanaman Cabai</b></h4>
                  <h6>Bagian-bagian tanaman cabai Bagian tubuh tanaman cabai terdiri atas batang, daun, dan buah. Berikut penjelasannya: Batang cabai Batang tanaman cabai berdiri tegak. Tingginya kira-kira 50-90 cm. Batang cabai sering diberi ajir untuk membantu menahan buah cabai yang terlalu banyak. Hal itu berguna menyangga batang tanaman cabai agar tetap dapat berdiri tegak. Daun cabai Daun cabai berbentuk lonjong dan bagian ujungnya meruncing. Panjangnya kira-kira 6-10 cm, dan lebarnya kira-kira 1,5-10 cm. Cabai rawit bentuk daunnya agak bulat dan bagian ujungnya runcing. Buah cabai Bentuk buah cabai umumnya memanjang berkisaran 1-10 cm. Buah cabai yang masih muda warnanya hijau dan setelah tua warnanya merah kecoklatan atau merah menyala. Buah cabai rasanya pedas. Sebelum membentuk buah, tanaman cabai akan berbunga terlebih dahulu.</h6>
                  <h4><b>Berikut Nama Penyakit Tanaman cabai : </b>
                    <h6>
                      1. Penyakit Layu Fusarium (Fusarium oxysporum f. sp. Melongenae Schlecht) </br>
                      2. Layu Bakteri (Ralstonia (Pseudomonas solanacearum E.F.Sm)</br>
                      3 Bercak Daun Cercospora (Cercospora capsici Heald et Wolf)</br>
                      4 Antraknosa/Penyakit Patek (Colletotrichum capsici (Syd.) Bult. Et. Bisby)</br>
                      5. Busuk Buah (Fruit rot)</br>
                      6. Virus Mosaik </br>
                      7. Virus Kuning </br>
                      8. Virus Kerupuk </br>
                      9. Tungau Kuning (Polyphagotarsonemus latus Banks)</br>
                      10. Trips (Thrips parvispinus Karny)</br>
                      11. Kutu Daun Persik (Myzus persicae Sulz.)</br>
                      12. Kutu Kebul (Bemisia tabaci)</br>
                      13. Ulat Grayak (Spodoptera litura F.)</br>
                      14. Ulat Buah (Helicoverpa armigera Hubner)</br>
                      15. Lalat Buah (Bactrocera sp)</br>
                    </h4>
                  </h6>
                  <p> <img src="dist/img/2.jpg" alt=""></p>
                  <p> <img src="dist/img/d1.jpg"> </p>
                  <p> <img src="dist/img/img_d.jpg" alt=""></p>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; Nauval Banyu Arrachman</strong>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- // script-->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

</body>

</html>
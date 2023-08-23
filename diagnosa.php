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

<body class="hold-transition layout-top-nav" style="background: url(dist/img/Login.jpg); background-repeat: no-repeat; background-size: cover;">
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
              <h1 class="m-0"> <i class="fa fa-list-alt"></i>&nbsp; <b>Diagnosa Penyakit</b></h1>
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

                <form action="#" method="post">
                  <?php
                  $sqlTanaman = "SELECT * FROM tbl_jenis_tanaman where delete_at='0'";
                  $queryTanaman = mysqli_query($db, $sqlTanaman);

                  ?>

                  <div class="card-body">
                    <?php while ($dataTanaman = mysqli_fetch_array($queryTanaman)) : ?>

                      <h5 class="mb-3 mt-3" style="font-weight: bold; font-size: 20px;"><i class="fa fa-award"></i> <?php echo $dataTanaman['jenis_tanaman'] ?></h5>

                      <?php
                      $sqlGejala = "SELECT * FROM tbl_gejala where delete_at='0' AND id_jenis_tanaman=" . $dataTanaman['id_jenis_tanaman'] . " ";
                      $queryGejala = mysqli_query($db, $sqlGejala);
                      ?>
                      <?php while ($dataGejala = mysqli_fetch_array($queryGejala)) : ?>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="id_gejala[]" value="<?php echo $dataGejala['id_gejala'] ?>">
                          <label class="form-check-label"><?php echo $dataGejala['gejala'] ?></label>
                        </div>
                      <?php endwhile; ?>
                    <?php endwhile; ?>

                    <br />

                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i>&nbsp; Cek Penyakit</button>

                  </div>


                </form>


                <div class="card-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th colspan="3">
                          <center> HASIL DIAGNOSA </center>
                        </th>
                      </tr>
                      <tr>
                        <th>Code Penyakit</th>
                        <th>Nama Penyakit</th>
                        <th>Detail</th>
                      </tr>
                      <?php
                      if (!empty($_POST)) {
                        $gejala = $_POST['id_gejala'];

                        $property_penyakit = array();
                        for ($i = 0; $i < count($gejala); $i++) {

                          $sql = "SELECT id_penyakit, id_gejala, id_jenis_tanaman, gejala FROM tbl_gejala WHERE id_gejala='$gejala[$i]' AND delete_at = '0' ";
                          $query = mysqli_query($db, $sql);

                          while ($data = mysqli_fetch_array($query)) {
                            $sql = "SELECT id_jenis_penyakit, code_penyakit, jenis_penyakit FROM tbl_jenis_penyakit WHERE id_jenis_penyakit=" . $data['id_penyakit'] . " AND delete_at = '0' ";
                            $query_penyakit = mysqli_query($db, $sql);

                            while ($data_penyakit = mysqli_fetch_assoc($query_penyakit)) {
                              array_push($property_penyakit, $data_penyakit);
                            }
                          }
                        }

                        $result_data = array();
                        foreach ($property_penyakit as $key => $value) {
                          if (!in_array($value, $result_data))
                            $result_data[$key] = $value;
                        }

                        foreach ($result_data as $key => $value) {
                          echo "
                                                            <tr>
                                                                <td>" . $value['code_penyakit'] . "</td>
                                                                <td>" . $value['jenis_penyakit'] . "</td>
                                                                <td><a href=diagnosa-detail.php?id_jenis_penyakit=" . $value['id_jenis_penyakit'] . "><i class='fa fa-search'></i></a></td>
                                                            </tr>
                                                        ";
                        }
                      }
                      ?>
                    </thead>
                  </table>
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
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

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
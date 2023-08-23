<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DETAIL DIAGNOSA PENYAKIT </title>

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

    if (!empty($_GET)) {
        $id_jenis_penyakit = $_GET['id_jenis_penyakit'];

        $sql = "
                SELECT * FROM tbl_diagnosa AS a  
                LEFT JOIN tbl_jenis_penyakit AS b ON a.id_jenis_penyakit = b.id_jenis_penyakit
                
                WHERE a.id_jenis_penyakit='$id_jenis_penyakit' AND a.delete_at = '0'  
                ";
        $query = mysqli_query($db, $sql);
        $data_penyakit_row = mysqli_fetch_array($query);
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
                                Aplikasi Sistem Pakar Tanaman Cabai
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
                        <div class="col-sm-12">
                            <h1 class="m-0">
                                <i class="fa fa-list"></i>&nbsp; <b>Detail Diagnosa</b>
                            </h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Code Penyakit</label>
                                    <input type="text" class="form-control" name="jenis_penyakit" value="<?php echo $data_penyakit_row['code_penyakit'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Jenis Penyakit</label>
                                    <input type="text" class="form-control" name="jenis_penyakit" value="<?php echo $data_penyakit_row['jenis_penyakit'] ?>" readonly>
                                </div>
                            </div>

                            <!-- <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Jenis Tanaman</label>
                                    <input type="text" class="form-control" name="id_jenis_tanaman" value="<?php // echo $data_penyakit_row['aa'] 
                                                                                                            ?>" readonly>
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Gejala</label>


                                    <?php
                                    if (!empty($_GET)) {
                                        $id_jenis_penyakit = $_GET['id_jenis_penyakit'];

                                        $sql = "SELECT * FROM tbl_diagnosa WHERE id_jenis_penyakit='$id_jenis_penyakit' AND delete_at = '0'  ";
                                        $query = mysqli_query($db, $sql);

                                        while ($data_penyakit = mysqli_fetch_array($query)) {
                                            $sql_gejala = "SELECT * FROM tbl_gejala WHERE id_penyakit=" . $data_penyakit["id_jenis_penyakit"] . " AND delete_at = '0'  ";
                                            $query_gejala = mysqli_query($db, $sql_gejala);

                                            while ($data_gejala = mysqli_fetch_array($query_gejala)) {
                                                echo '<input class="form-control" readonly value="' . $data_gejala['gejala'] . '" style="margin-bottom: 10px;">';
                                            }
                                        }
                                    }

                                    ?>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Kultur Teknis</label>
                                    <textarea class="form-control" rows="6" readonly><?php echo $data_penyakit_row['kultur_teknis'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Fisik Mekanis</label>
                                    <textarea class="form-control" rows="6" readonly><?php echo $data_penyakit_row['fisik_mekanis'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Kimiawi</label>
                                    <textarea class="form-control" rows="6" readonly><?php echo $data_penyakit_row['kimiawi'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Hayati</label>
                                    <textarea class="form-control" rows="6" readonly><?php echo $data_penyakit_row['hayati'] ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
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
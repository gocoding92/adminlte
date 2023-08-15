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
    <?php include '../templates/link-rel.php'; ?>

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
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="../../index3.html" class="navbar-brand">
                    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminLTE 3</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index3.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="#" class="dropdown-item">Some action </a></li>
                                <li><a href="#" class="dropdown-item">Some other action</a></li>

                                <li class="dropdown-divider"></li>

                                <!-- Level two dropdown-->
                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                        <li>
                                            <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                                        </li>

                                        <!-- Level three dropdown-->
                                        <li class="dropdown-submenu">
                                            <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                                            <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                            </ul>
                                        </li>
                                        <!-- End Level three -->

                                        <li><a href="#" class="dropdown-item">level 2</a></li>
                                        <li><a href="#" class="dropdown-item">level 2</a></li>
                                    </ul>
                                </li>
                                <!-- End Level two -->
                            </ul>
                        </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-0 ml-md-3">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
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
                            <h1 class="m-0"> Top Navigation <small>Example 3.0</small></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                                <li class="breadcrumb-item active">Top Navigation</li>
                            </ol>
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
                            <div class="card">

                                <form action="" method="post">
                                    <?php
                                    $sqlTanaman = "SELECT * FROM tbl_jenis_tanaman where delete_at='0'";
                                    $queryTanaman = mysqli_query($db, $sqlTanaman);

                                    ?>

                                    <div class="card-body">
                                        <?php while ($dataTanaman = mysqli_fetch_array($queryTanaman)) : ?>

                                            <h5 class="mb-3 mt-3"><?php echo $dataTanaman['jenis_tanaman'] ?></h5>

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
                                                                <td><a href='..\diagnosa\index.php?id=.'><i class='fa fa-search'></i></a></td>
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
    <?php include '../templates/script.php'; ?>

</body>

</html>
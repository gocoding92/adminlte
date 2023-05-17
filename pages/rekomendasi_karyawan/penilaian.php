
<html>
    <head>
        <meta charset="TTF-8"> 
        <title>Rekomendasi Karyawan</title>

        <!--link-rel-->
        <?php include '../templates/link-rel.php'; ?>

    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

             <!-- // header -->
            <?php include '../templates/header.php'; ?>
            <!-- // side menu -->
            <?php include '../templates/menu.php'; ?>
       
            <!-- // content -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card my-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="card-title">Data Alternatif</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="alternatif.php?rekomendasi_karyawan=<?php echo (!empty($_GET['rekomendasi_karyawan'])) ? $_GET['rekomendasi_karyawan'] : null ; ?>" class="btn btn-sm btn-primary float-right ml-3">
                                            <i class="fa fa-plus"></i>&nbsp; Tambah Alternatif
                                        </a>
                                        <a href="dokumentasi_penilaian.php" class="btn btn-sm btn-primary float-right">
                                            <i class="fa fa-plus"></i>&nbsp; Dokumentasi Penilaian
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Nama Karyawan</th>
                                            <th colspan="6" style="text-align:center">Penilaian Karyawan Berdasarkan Kriteria</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align:center">Keterlambatan</th>
                                            <th style="text-align:center">Jam Kerja</th>
                                            <th style="text-align:center">Over Time</th>
                                            <th style="text-align:center">Teguran</th>
                                            <th style="text-align:center">Lama Bekerja</th>
                                            <th style="text-align:center">Absensi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 0;
                                        $sql ="SELECT * FROM tbl_alternatif AS a INNER JOIN tbl_karyawan AS b ON a.id_karyawan = b.id_karyawan where a.id_rekomendasi_karyawan='".$_GET['rekomendasi_karyawan']."'";
                                        $query = mysqli_query($db, $sql);

                                        while ($users = mysqli_fetch_array($query)){
                                    
                                    ?>

                                        <tr>
                                            <td><?php echo $no=$no+1; ?></td>
                                            <td><?php echo $users['nama_lengkap']; ?></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->


                    <div class="row">
                        <div class="col-12">
                            <div class="card my-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="card-title">Bobot Kepentingan</h3>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <a href="penilaian.php" class="btn btn-sm btn-primary float-right ml-3">
                                            <i class="fa fa-plus"></i>&nbsp; Tambah Alternatif
                                        </a>
                                        <a href="penilaian.php" class="btn btn-sm btn-primary float-right">
                                            <i class="fa fa-plus"></i>&nbsp; Dokumentasi Penilaian
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="6" style="text-align:center">Penilaian Kriteria</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align:center">Keterlambatan (C1)</th>
                                            <th style="text-align:center">Jam Kerja (C2)</th>
                                            <th style="text-align:center">Over Time (C3)</th>
                                            <th style="text-align:center">Teguran (C4)</th>
                                            <th style="text-align:center">Lama Bekerja (C5)</th>
                                            <th style="text-align:center">Absensi (C6)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select name="" class="form-control">
                                                    <option value="">Pilih Bobot</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" class="form-control">
                                                    <option value="">Pilih Bobot</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" class="form-control">
                                                    <option value="">Pilih Bobot</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" class="form-control">
                                                    <option value="">Pilih Bobot</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" class="form-control">
                                                    <option value="">Pilih Bobot</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" class="form-control">
                                                    <option value="">Pilih Bobot</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr />
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block">  <i class="fa fa-save"></i>&nbsp; SUMBIT PENILAIAN KARYAWAN</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>

            <!--footer-->
            <?php include '../templates/footer.php' ?>
            <!-- // script-->
            <?php include '../templates/script.php'; ?>

        </div>
    </body>
</html>
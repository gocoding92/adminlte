
<html>
    <head>
        <meta charset="TTF-8"> 
        <title>Dokumentasi Penilaian</title>

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
                                        <h3 class="card-title">Dokumentasi Penilaian Kriteria</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <a href="penilaian.php" class="btn btn-sm btn-primary float-right ml-3">
                                            <i class="fa fa-plus"></i>&nbsp; Tambah Alternatif
                                        </a>
                                        <a href="dokumentasi_penilaian.php" class="btn btn-sm btn-primary float-right">
                                            <i class="fa fa-plus"></i>&nbsp; Dokumentasi Penilaian
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">1. Nilai Bobot Keterlambatan (C1)</label>
                                        <table class="table table-bordered table-hover">
                                           <thead>
                                            <tr>
                                                <th>Keterlambatan</th>
                                                <th>Keterangan</th>
                                                <th>Nilai Bobot</th>
                                            </tr>
                                           </thead>
                                           <tbody>
                                            <tr>
                                                <td>0 - 10</td>
                                                <td>Tidak Bagus (E)</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>11 - 20</td>
                                                <td>Kurang (D)</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>21 - 30</td>
                                                <td>Biasa (C)</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>31 - 40</td>
                                                <td>Bagus (B)</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>>= 40</td>
                                                <td>Bagus Sekali (A)</td>
                                                <td>5</td>
                                            </tr>
                                           </tbody>
                                        </table>

                                    </div>
                                    <div class="col-md-6">
                                        <label for="">2. Nilai Bobot Jam Kerja (C2)</label>
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Jumlah Jam Kerja (/Tahun)</th>
                                                <th>Keterangan</th>
                                                <th>Nilai Bobot</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>2351 Jam <=</td>
                                                <td>Tidak Bagus (E)</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>2350 - 2399 Jam <=</td>
                                                <td>kurang (D)</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>2400 - 2449 Jam <=</td>
                                                <td>Biasa (C)</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>2450 - 2495 Jam <=</td>
                                                <td>Bagus (B)</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>>=2496 Jam</td>
                                                <td>Bagus Sekali (A)</td>
                                                <td>5</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">3. Nialai Bobot Over Time (C3)</label>
                                        <table class="table table-bordered table-hover">
                                           <thead>
                                            <tr>
                                                <th>Over Time</th>
                                                <th>Keterangan</th>
                                                <th>Nilai Bobot</th>
                                            </tr>
                                           </thead>
                                           <tbody>
                                            <tr>
                                                <td>78 Jam <=</td>
                                                <td>Tidak Bagus (E)</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>78 - 755 Jam</td>
                                                <td>Kurang (D)</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>156 - 311</td>
                                                <td>Biasa (C)</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>312 - 623</td>
                                                <td>Bagus (B)</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>>=624 Jam</td>
                                                <td>Bagus Sekali (A)</td>
                                                <td>5</td>
                                            </tr>
                                           </tbody>
                                        </table>

                                    </div>
                                    <div class="col-md-6">
                                        <label for="">4. Nilai Bobot Teguran (C4)</label>
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Jumlah Teguran</th>
                                                <th>Keterangan</th>
                                                <th>Nilai Bobot</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>0</td>
                                                <td>Tidak Bagus (E)</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Kurang (D)</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Biasa (C)</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Bagus (B)</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Bagus Sekali (A)</td>
                                                <td>5</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">5. Nilai Bobot Lama Bekerja (C5)</label>
                                        <table class="table table-bordered table-hover">
                                           <thead>
                                            <tr>
                                                <th>Lama Bekerja</th>
                                                <th>Keterangan</th>
                                                <th>Nilai Bobot</th>
                                            </tr>
                                           </thead>
                                           <tbody>
                                           <tr>
                                                <td>1 Tahun <=</td>
                                                <td>Tidak Bagus (E)</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>2 - 4 Tahun</td>
                                                <td>Kurang (D)</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>5 - 9 Tahun</td>
                                                <td>Biasa (C)</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>10 - 14 Tahun</td>
                                                <td>Bagus (B)</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>>=15 Tahun</td>
                                                <td>Bagus Sekali (A)</td>
                                                <td>5</td>
                                            </tr>
                                           </tbody>
                                        </table>

                                    </div>
                                    <div class="col-md-6">
                                        <label for="">6. Nilai Bobot Absensi (C6)</label>
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Absensi</th>
                                                <th>Keterangan</th>
                                                <th>Nilai Bobot</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>0</td>
                                                <td>Tidak Bagus (E)</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1 - 3</td>
                                                <td>Kurang (D)</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>4 - 6</td>
                                                <td>Biasa (C)</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>7 - 9</td>
                                                <td>Bagus (B)</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>>=10</td>
                                                <td>Bagus Sekali (A)</td>
                                                <td>5</td>
                                            </tr>
                                            </tbody>
                                        </table>
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

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

                            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                <li class="nav-item">
                                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Nilai Alternatif</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Nilai Bobot</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="custom-content-below-tabContent">
                                
                                <div class="tab-pane fade active show" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                                    
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">1. Nilai Alternatif Berdasarkan Kriteria Keterlambatan (C1)</label>
                                        <table class="table table-bordered table-hover">
                                           <thead>
                                            <tr>
                                                <th>Keterlambatan</th>
                                                <th>Nilai</th>
                                                <th>Keterangan</th>
                                            </tr>
                                           </thead>
                                           <tbody>
                                            <tr>
                                                <td>0 - 10</td>
                                                <td>1</td>
                                                <td>Bagus Sekali (A)</td>
                                            </tr>
                                            <tr>
                                                <td>11 - 20</td>
                                                <td>2</td>
                                                <td>Bagus (B)</td>
                                            </tr>
                                            <tr>
                                                <td>21 - 30</td>
                                                <td>3</td>
                                                <td>Cukup (C)</td>
                                            </tr>
                                            <tr>
                                                <td>31 - 40</td>
                                                <td>4</td>
                                                <td>Kurang (D)</td>
                                            </tr>
                                            <tr>
                                                <td>>= 41</td>
                                                <td>5</td>
                                                <td>Tidak Bagus (E)</td>
                                            </tr>
                                           </tbody>
                                        </table>

                                    </div>
                                    <div class="col-md-6">
                                        <label for="">2. Nilai Alternatif Berdasarkan Kriteria Jam Kerja (C2)</label>
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Jumlah Jam Kerja (/Tahun)</th>
                                                <th>Nilai</th>
                                                <th>Keterangan</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>100 Jam <=</td>
                                                <td>1</td>
                                                <td>Tidak Bagus (E)</td>
                                            </tr>
                                            <tr>
                                                <td>101 - 200 Jam <=</td>
                                                <td>2</td>
                                                <td>kurang (D)</td>
                                            </tr>
                                            <tr>
                                                <td>201 - 300 Jam <=</td>
                                                <td>3</td>
                                                <td>Cukup (C)</td>
                                            </tr>
                                            <tr>
                                                <td>301 - 400 Jam <=</td>
                                                <td>4</td>
                                                <td>Bagus (B)</td>
                                            </tr>
                                            <tr>
                                                <td>>=401 Jam</td>
                                                <td>5</td>
                                                <td>Bagus Sekali (A)</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">3. Nilai Alternatif Berdasarkan Kriteria Bobot Over Time (C3)</label>
                                        <table class="table table-bordered table-hover">
                                           <thead>
                                            <tr>
                                                <th>Over Time</th>
                                                <th>Nilai</th>
                                                <th>Keterangan</th>
                                            </tr>
                                           </thead>
                                           <tbody>
                                            <tr>
                                                <td>1 - 5 Jam</td>
                                                <td>1</td>
                                                <td>Tidak Bagus (E)</td>
                                            </tr>
                                            <tr>
                                                <td>6 - 10 Jam</td>
                                                <td>2</td>
                                                <td>Kurang (D)</td>
                                            </tr>
                                            <tr>
                                                <td>11 - 15 Jam</td>
                                                <td>3</td>
                                                <td>Cukup (C)</td>
                                            </tr>
                                            <tr>
                                                <td>21 - 25 Jam</td>
                                                <td>4</td>
                                                <td>Bagus (B)</td>
                                            </tr>
                                            <tr>
                                                <td>>=26 Jam</td>
                                                <td>5</td>
                                                <td>Bagus Sekali (A)</td>
                                            </tr>
                                           </tbody>
                                        </table>

                                    </div>
                                    <div class="col-md-6">
                                        <label for="">4. Nilai Alternatif Berdasarkan Kriteria Teguran (C4)</label>
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Jumlah Teguran</th>
                                                <th>Nilai</th>
                                                <th>Keterangan</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>0 - 5</td>
                                                <td>1</td>
                                                <td>Sangat Baik (A)</td>
                                            </tr>
                                            <tr>
                                                <td>5 - 10</td>
                                                <td>2</td>
                                                <td>Baik (B)</td>
                                            </tr>
                                            <tr>
                                                <td>10 - 15</td>
                                                <td>3</td>
                                                <td>Cukup (C)</td>
                                            </tr>
                                            <tr>
                                                <td>15 - 20</td>
                                                <td>4</td>
                                                <td>Kurang (D)</td>
                                            </tr>
                                            <tr>
                                                <td>>=21</td>
                                                <td>5</td>
                                                <td>Tidak Bagus (E)</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">5. Nilai Alternatif Berdasarkan Kriteria Lama Bekerja (C5)</label>
                                        <table class="table table-bordered table-hover">
                                           <thead>
                                            <tr>
                                                <th>Lama Bekerja</th>
                                                <th>Nilai</th>
                                                <th>Keterangan</th>
                                            </tr>
                                           </thead>
                                           <tbody>
                                           <tr>
                                                <td>1 Tahun <=</td>
                                                <td>1</td>
                                                <td>Tidak Bagus (E)</td>
                                            </tr>
                                            <tr>
                                                <td>2 - 4 Tahun</td>
                                                <td>2</td>
                                                <td>Kurang (D)</td>
                                            </tr>
                                            <tr>
                                                <td>5 - 9 Tahun</td>
                                                <td>3</td>
                                                <td>Cukup(C)</td>
                                            </tr>
                                            <tr>
                                                <td>10 - 14 Tahun</td>
                                                <td>4</td>
                                                <td>Bagus (B)</td>
                                            </tr>
                                            <tr>
                                                <td>>=15 Tahun</td>
                                                <td>5</td>
                                                <td>Bagus Sekali (A)</td>
                                            </tr>
                                           </tbody>
                                        </table>

                                    </div>
                                    <div class="col-md-6">
                                        <label for="">6. Nilai Alternatif Berdasarkan Kriteria Absensi (C6)</label>
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Absensi</th>
                                                <th>Nilai</th>
                                                <th>Keterangan</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>0</td>
                                                <td>1</td>
                                                <td>Bagus Sekali (A)</td>
                                            </tr>
                                            <tr>
                                                <td>1 - 3</td>
                                                <td>2</td>
                                                <td>Bagus (B)</td>
                                            </tr>
                                            <tr>
                                                <td>4 - 6</td>
                                                <td>3</td>
                                                <td>Cukup (C)</td>
                                            </tr>
                                            <tr>
                                                <td>7 - 9</td>
                                                <td>4</td>
                                                <td>Kurang (D)</td>
                                            </tr>
                                            <tr>
                                                <td>>=10</td>
                                                <td>5</td>
                                                <td>Tidak Bagus (E)</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                </div>
                            
                                <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                                
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
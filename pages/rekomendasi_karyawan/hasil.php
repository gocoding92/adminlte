
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

            <!-- struktur data detail data -->
            <?php
                $rekomendasi_karyawan = $_GET['rekomendasi_karyawan'];

                // Metode SAW

                // Mengeluarkan Nilai Alternatif
                $sql ="SELECT * FROM tbl_nilai_alternatif where id_rekomendasi_karyawan='$rekomendasi_karyawan'";
                $query = mysqli_query($db, $sql);

                $data_nilai_alternatif = mysqli_fetch_array($query);

                // mengeluarkan Nilai Bobot
                $sql ="SELECT * FROM tbl_nilai_bobot where id_rekomendasi_karyawan='$rekomendasi_karyawan'";
                $query = mysqli_query($db, $sql);

                $data_nilai_bobot = mysqli_fetch_array($query);

                // Mengeluarkan Nilai Normalisasi
                $sql ="SELECT * FROM tbl_nilai_normalisasi where id_rekomendasi_karyawan='$rekomendasi_karyawan'";
                $query = mysqli_query($db, $sql);

                $data_nilai_normalisasi = mysqli_fetch_array($query);

                // Mengeluarkan Nilai Perangkiangan
                $sql ="SELECT * FROM tbl_nilai_perangkingan where id_rekomendasi_karyawan='$rekomendasi_karyawan'";
                $query = mysqli_query($db, $sql);

                $data_nilai_perangkingan = mysqli_fetch_array($query);

                // Metode WP

                // Mengeluarkan Nilai W (Normalisasi Bobot)
                $sql ="SELECT * FROM tbl_normalisasi_bobot where id_rekomendasi_karyawan='$rekomendasi_karyawan'";
                $query = mysqli_query($db, $sql);

                $data_normalisasi_bobot = mysqli_fetch_array($query);

                // Mengeluarkan Nilai Vektor S
                $sql ="SELECT * FROM tbl_vektor_s where id_rekomendasi_karyawan='$rekomendasi_karyawan'";
                $query = mysqli_query($db, $sql);

                $data_vektor_s = mysqli_fetch_array($query);

                // Mengeluarkan Nilai Vektor V
                $sql ="SELECT * FROM tbl_vektor_v where id_rekomendasi_karyawan='$rekomendasi_karyawan'";
                $query = mysqli_query($db, $sql);

                $data_vektor_v = mysqli_fetch_array($query);

                $nilai_max_saw = max(
                                        $data_nilai_perangkingan['a1'], 
                                        $data_nilai_perangkingan['a2'],
                                        $data_nilai_perangkingan['a3'],
                                        $data_nilai_perangkingan['a4'],
                                        $data_nilai_perangkingan['a5']
                                    );
                
                $nilai_max_wp = max(
                                        $data_vektor_v['v1'],
                                        $data_vektor_v['v2'],
                                        $data_vektor_v['v3'],
                                        $data_vektor_v['v4'],
                                        $data_vektor_v['v5']
                                    );
            ?>
       
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
                                        <h3 class="card-title">Hasil Penilaian SAW & WP</h3>
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

                            <?php 
                                //include "hasil/saw.php";

                                include "hasil/wp.php";
                            ?>

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
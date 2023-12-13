
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


                // Mengeluarkan Nilai Vektor V
                $sql ="
                        SELECT * FROM tbl_alternatif as a 
                        INNER JOIN tbl_karyawan as b
                        ON a.id_karyawan = b.id_karyawan

                        where a.id_rekomendasi_karyawan='$rekomendasi_karyawan'";
                $query_perangkingan = mysqli_query($db, $sql);

                // Mengeluarkan Nilai Vektor V
                $sql ="SELECT * FROM tbl_vektor_v where id_rekomendasi_karyawan='$rekomendasi_karyawan'";
                $query_hasil = mysqli_query($db, $sql);
                $data_vektor_v = mysqli_fetch_array($query_hasil);

                while ($row = mysqli_fetch_array($query_perangkingan)) { 
                    $rows[] = $row; 
                    $rows_wp[] = $row; 
               } 

               // Desc SAW
               $data_hasil_perangkingan = array();
               for($i=0;$i<count($rows);$i++) { 
                    $rows[0]['nilai_vektor_saw'] = $data_nilai_perangkingan['a1'];
                    $rows[1]['nilai_vektor_saw'] = $data_nilai_perangkingan['a2'];
                    $rows[2]['nilai_vektor_saw'] = $data_nilai_perangkingan['a3'];
                    $rows[3]['nilai_vektor_saw'] = $data_nilai_perangkingan['a4'];
                    $rows[4]['nilai_vektor_saw'] = $data_nilai_perangkingan['a5'];

                    $rows_perengkingan[] = $rows; 

                    array_push($data_hasil_perangkingan, $rows);
               }

               $hasil_perangkingan = $data_hasil_perangkingan[0];

                foreach ($hasil_perangkingan as $key => $row) {
                    $row_data_perengkingan[$key] = $row['nilai_vektor_saw'];
                }
                
                // sort desc bedasarkan nilai vektor
                array_multisort($row_data_perengkingan, SORT_DESC, $hasil_perangkingan);

                // Desc WP
               $data_hasil_perangkingan_wp = array();
               for($i=0;$i<count($rows_wp);$i++) { 
                    $rows_wp[0]['nilai_vektor_wp'] = $data_vektor_v['v1'];
                    $rows_wp[1]['nilai_vektor_wp'] = $data_vektor_v['v2'];
                    $rows_wp[2]['nilai_vektor_wp'] = $data_vektor_v['v3'];
                    $rows_wp[3]['nilai_vektor_wp'] = $data_vektor_v['v4'];
                    $rows_wp[4]['nilai_vektor_wp'] = $data_vektor_v['v5'];

                    $rows_perengkingan[] = $rows_wp; 

                    array_push($data_hasil_perangkingan_wp, $rows_wp);
               }

               $hasil_perangkingan_wp = $data_hasil_perangkingan_wp[0];

               foreach ($hasil_perangkingan_wp as $key => $row) {
                $row_data_perengkingan_wp[$key] = $row['nilai_vektor_wp'];
            }

            array_multisort($row_data_perengkingan_wp, SORT_DESC, $hasil_perangkingan_wp);

            //    echo "<pre>";
            //    var_dump($hasil_perangkingan_wp);
            //    exit;

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
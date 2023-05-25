<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {

    echo "<pre>";
    
    $id_rekomendasi_karyawan  = (!empty($_GET['rekomendasi_karyawan'])) ? $_GET['rekomendasi_karyawan'] : '';

    // 1. normalisasi bobot
    $bobot1 = $_POST['bobot1'];
    $bobot2 = $_POST['bobot2'];
    $bobot3 = $_POST['bobot3'];
    $bobot4 = $_POST['bobot4'];
    $bobot5 = $_POST['bobot5'];
    $bobot6 = $_POST['bobot6'];

    $jumlah_bobot = $bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5 + $bobot6;

    $w1 = round($bobot1 / $jumlah_bobot, 3);
    $w2 = round($bobot2 / $jumlah_bobot, 3);
    $w3 = round($bobot3 / $jumlah_bobot, 3);
    $w4 = round($bobot4 / $jumlah_bobot, 3);
    $w5 = round($bobot5 / $jumlah_bobot, 3);
    $w6 = round($bobot6 / $jumlah_bobot, 3);

    $w_struktur = array($w1, $w2, $w3, $w4, $w5, $w6);

    $jumlah_w = $w1 + $w2 + $w3 + $w4 + $w5 + $w6;

    // batas normalisasi bobot ------------------------------------------------

    // menentukan nilai vektor s
    $c1 = $_POST['keterlambatan'];
    $c2 = $_POST['jam_kerja'];
    $c3 = $_POST['overtime'];
    $c4 = $_POST['teguran'];
    $c5 = $_POST['lama_bekerja'];
    $c6 = $_POST['absensi'];
    
    // menentukan vektor s
    $s_1_1 = $c1[0] - $w1;
    $s_1_2 = $c2[0] - $w2;
    $s_1_3 = $c3[0] - $w3;
    $s_1_4 = $c4[0] - $w4;
    $s_1_5 = $c5[0] - $w5;
    $s_1_6 = $c6[0] - $w6;

    $s_2_1 = $c1[1] - $w1;
    $s_2_2 = $c2[1] - $w2;
    $s_2_3 = $c3[1] - $w3;
    $s_2_4 = $c4[1] - $w4;
    $s_2_5 = $c5[1] - $w5;
    $s_2_6 = $c6[1] - $w6;

    $s_3_1 = $c1[2] - $w1;
    $s_3_2 = $c2[2] - $w2;
    $s_3_3 = $c3[2] - $w3;
    $s_3_4 = $c4[2] - $w4;
    $s_3_5 = $c5[2] - $w5;
    $s_3_6 = $c6[2] - $w6;

    $s_4_1 = $c1[3] - $w1;
    $s_4_2 = $c2[3] - $w2;
    $s_4_3 = $c3[3] - $w3;
    $s_4_4 = $c4[3] - $w4;
    $s_4_5 = $c5[3] - $w5;
    $s_4_6 = $c6[3] - $w6;

    $s_5_1 = $c1[4] - $w1;
    $s_5_2 = $c2[4] - $w2;
    $s_5_3 = $c3[4] - $w3;
    $s_5_4 = $c4[4] - $w4;
    $s_5_5 = $c5[4] - $w5;
    $s_5_6 = $c6[4] - $w6;

    // $s_2_1 = $c1[1] - $w1;
    // $s_2_2 = $c2[1] - $w2;
    // $s_2_3 = $c3[1] - $w3;
    // $s_2_4 = $c4[1] - $w4;
    // $s_2_5 = $c5[1] - $w5;
    // $s_2_6 = $c6[1] - $w6;

    $s1 = round($s_1_1 * $s_1_2 * $s_1_3 * $s_1_4 * $s_1_5 * $s_1_6, 3);
    $s2 = round($s_2_1 * $s_2_2 * $s_2_3 * $s_2_4 * $s_2_5 * $s_2_6, 3);
    $s3 = round($s_3_1 * $s_3_2 * $s_3_3 * $s_3_4 * $s_3_5 * $s_3_6, 3);
    $s4 = round($s_4_1 * $s_4_2 * $s_4_3 * $s_4_4 * $s_4_5 * $s_4_6, 3);
    $s5 = round($s_5_1 * $s_5_2 * $s_5_3 * $s_5_4 * $s_5_5 * $s_5_6, 3);


    
    // $w_struktur = array($w1, $w2, $w3, $w4, $w5, $w6);

    // $jumlah_w = $w1 + $w2 + $w3 + $w4 + $w5 + $w6;



    // Menghitung Vektor V

    $v = $s1 + $s2 + $s3 + $s4 + $s5; 

    $v1 = round($s1 / $v, 3);
    $v2 = round($s2 / $v, 3);
    $v3 = round($s3 / $v, 3);
    $v4 = round($s4 / $v, 3);
    $v5 = round($s5 / $v, 3);
    // $w2 = round($bobot2 / $jumlah_bobot, 3);
    // $w3 = round($bobot3 / $jumlah_bobot, 3);
    // $w4 = round($bobot4 / $jumlah_bobot, 3);
    // $w5 = round($bobot5 / $jumlah_bobot, 3);
    // $w6 = round($bobot6 / $jumlah_bobot, 3);

    

    var_dump($v1);
    var_dump($v2);
    var_dump($v3);
    var_dump($v4);
    var_dump($v5);
    // var_dump($s2);
    // var_dump($s3);
    // var_dump($s4);
    // var_dump($s5);



    // var_dump($s_5_2);
    // var_dump($s_5_3);
    // var_dump($s_5_4);
    // var_dump($s_5_5);
    // var_dump($s_5_6);
    // var_dump($_POST);


    exit;
    
}else{
    header('Location: ../index.php');
}

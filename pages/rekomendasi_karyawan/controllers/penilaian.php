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

    $c1_data = array();
    for ($i=0; $i < count($c1); $i++) { 
        array_push($c1_data, $c1[$i] - $w1);
    }   

    $c2_data = array();
    for ($i=0; $i < count($c2); $i++) { 
        array_push($c2_data, $c2[$i] - $w2);
    }

    $c3_data = array();
    for ($i=0; $i < count($c3); $i++) { 
        array_push($c3_data, $c3[$i] - $w3);
    }

    $c4_data = array();
    for ($i=0; $i < count($c4); $i++) { 
        array_push($c4_data, $c4[$i] - $w4);
    }

    $c5_data = array();
    for ($i=0; $i < count($c5); $i++) { 
        array_push($c5_data, $c5[$i] - $w5);
    }

    $c6_data = array();
    for ($i=0; $i < count($c6); $i++) { 
        array_push($c6_data, $c6[$i] - $w6);
    }

    $struktur_data_kriteria = array();
    array_push($struktur_data_kriteria, $c1_data, $c2_data, $c3_data, $c4_data, $c5_data, $c6_data);

    for ($i=0; $i < count($struktur_data_kriteria); $i++) { 
        for ($v=0; $v < count($struktur_data_kriteria[$i]); $v++) { 
            var_dump($struktur_data_kriteria[$i][$v]);
        }
    }


    exit;
    
}else{
    header('Location: ../index.php');
}
